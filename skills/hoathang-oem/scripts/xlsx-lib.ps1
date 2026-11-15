# Ham doc toan bo sheet cua file .xlsx thanh danh sach dong (moi dong la hashtable cot -> gia tri)
Add-Type -AssemblyName System.IO.Compression.FileSystem
function Read-Xlsx([string]$Path) {
    $zip = [System.IO.Compression.ZipFile]::OpenRead((Resolve-Path $Path))
    $readXml = {
        param($name)
        $e = $zip.Entries | Where-Object { $_.FullName -eq $name }
        if (-not $e) { return $null }
        $r = New-Object System.IO.StreamReader($e.Open(), [Text.Encoding]::UTF8)
        $t = $r.ReadToEnd(); $r.Close(); [xml]$t
    }
    $shared = @()
    $ss = & $readXml "xl/sharedStrings.xml"
    if ($ss) { foreach ($si in $ss.sst.si) { $shared += $si.InnerText } }
    $wb = & $readXml "xl/workbook.xml"
    $rels = & $readXml "xl/_rels/workbook.xml.rels"
    $result = [ordered]@{}
    foreach ($s in $wb.workbook.sheets.sheet) {
        $rid = $s.GetAttribute("id", "http://schemas.openxmlformats.org/officeDocument/2006/relationships")
        $target = ($rels.Relationships.Relationship | Where-Object { $_.Id -eq $rid }).Target -replace '^/xl/', '' -replace '^/', ''
        $sheet = & $readXml ("xl/" + $target)
        $rows = New-Object System.Collections.ArrayList
        foreach ($row in $sheet.worksheet.sheetData.row) {
            $h = @{}
            foreach ($c in $row.c) {
                $col = $c.r -replace '\d', ''
                $v = $c.v
                if ($c.t -eq "s") { $v = $shared[[int]$v] } elseif ($c.t -eq "inlineStr") { $v = $c.is.InnerText }
                $h[$col] = "$v"
            }
            [void]$rows.Add($h)
        }
        $result[$s.name] = $rows
    }
    $zip.Dispose()
    return $result
}

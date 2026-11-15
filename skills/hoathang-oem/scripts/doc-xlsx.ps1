# Doc file .xlsx (khong can Excel/Python): in ten sheet, so dong va N dong dau
param([string]$Path, [int]$MaxRows = 15, [string]$Filter = "")

Add-Type -AssemblyName System.IO.Compression.FileSystem
$zip = [System.IO.Compression.ZipFile]::OpenRead($Path)
function Read-Entry($name) {
    $e = $zip.Entries | Where-Object { $_.FullName -eq $name }
    if (-not $e) { return $null }
    $r = New-Object System.IO.StreamReader($e.Open(), [Text.Encoding]::UTF8)
    $t = $r.ReadToEnd(); $r.Close(); return [xml]$t
}

# Bang chuoi dung chung
$shared = @()
$ss = Read-Entry "xl/sharedStrings.xml"
if ($ss) { foreach ($si in $ss.sst.si) { $shared += $si.InnerText } }

# Danh sach sheet -> file
$wb = Read-Entry "xl/workbook.xml"
$rels = Read-Entry "xl/_rels/workbook.xml.rels"
foreach ($s in $wb.workbook.sheets.sheet) {
    $rid = $s.GetAttribute("id", "http://schemas.openxmlformats.org/officeDocument/2006/relationships")
    $target = ($rels.Relationships.Relationship | Where-Object { $_.Id -eq $rid }).Target
    $target = $target -replace '^/xl/', '' -replace '^/', ''
    $sheet = Read-Entry ("xl/" + $target)
    $rows = @($sheet.worksheet.sheetData.row)
    "=== SHEET: $($s.name) | so dong: $($rows.Count) ==="
    $n = 0
    foreach ($row in $rows) {
        $vals = foreach ($c in $row.c) {
            $v = $c.v
            if ($c.t -eq "s") { $v = $shared[[int]$v] }
            elseif ($c.t -eq "inlineStr") { $v = $c.is.InnerText }
            "$($c.r)=$v"
        }
        $line = $vals -join " | "
        if ($Filter -and $line -notmatch $Filter) { continue }
        $line
        $n++
        if ($n -ge $MaxRows) { "..."; break }
    }
}
$zip.Dispose()

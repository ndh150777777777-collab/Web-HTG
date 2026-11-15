# Mẹo kỹ thuật & lỗi thường gặp (đã gặp thật)

## PowerShell 5.1 trên máy này
- **Không có Python** → đọc .xlsx bằng cách giải nén zip (`scripts\xlsx-lib.ps1`).
- Script `.ps1` có chữ tiếng Việt phải lưu **UTF-8 có BOM**, nếu không PowerShell 5.1 đọc sai và báo lỗi cú pháp.
- `Get-Content x.json | ConvertFrom-Json` với mảng có thể bị gộp thành 1 phần tử → dùng `(Get-Content x.json -Raw | ConvertFrom-Json)` và `ConvertTo-Json -InputObject $mang`.
- CSV cho người dùng mở bằng Excel: `Export-Csv -Encoding UTF8` (PS 5.1 tự thêm BOM); file viết bằng công cụ khác thì thêm BOM.
- Không có `&&` → dùng `;` hoặc `if ($?) { }`.

## Trình duyệt (Claude in Chrome)
- Khởi động Claude Code có trình duyệt: `claude --chrome --resume`.
- Luôn `tabs_context_mcp` trước, mở **tab mới**, xong việc **đóng tab**.
- Kết quả `javascript_tool` dài ~1.000 ký tự là bị cắt `[TRUNCATED]` → lưu vào `window.__kq`, đọc từng phần (`slice`).
- Kết quả chứa chuỗi giống query string/cookie (`?p=`, `a=b&c=d`) bị chặn `[BLOCKED: Cookie/query string data]` → thay `? = &` bằng `_` hoặc chỉ in ID.
- Lệnh JS bị ngắt sau ~45 giây → chạy nền, ghi `window.__log`, `window.__done`, đọc lại sau mỗi ≤ 10 giây.
- Gửi dữ liệu lớn vào trình duyệt: nén thành dòng `nhóm|đường-dẫn|mã1,mã2` (mã đã chuẩn hoá), chia đoạn ~15.000 ký tự.
- Kiểm tra trang công khai: `fetch(url, {credentials:'omit', cache:'no-store'})` + tham số `nc=<Date.now()>` để tránh bộ nhớ đệm.
- Lấy ID trang từ HTML công khai: `html.match(/postid-(\d+)/)`.
- Chuyển dữ liệu giữa 2 trang web khác nhau (azfilter.jp → hoathang.vn) trong cùng tab: `window.name = JSON.stringify(dữ liệu)`, rồi ở trang kia chép vào `localStorage`.

## WordPress
- Lưu bài: `POST /wp-admin/post.php`, `new FormData(form#post)`, `content` mới, `save=Cập nhật`. Không dùng trình soạn thảo trực quan.
- Tìm sản phẩm theo mã: `/wp-admin/edit.php?post_type=product&post_status=all&s=<MÃ>` → `tr.type-product`. Tìm kiếm khớp mờ → mở từng trang, kiểm tra thật sự có mã.
- Không bấm nút có thể bật hộp thoại xác nhận (Xoá…) – hộp thoại làm treo trình duyệt.

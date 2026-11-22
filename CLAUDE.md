# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Thư mục này là gì
`plugin-hoathang/` vừa là **plugin Claude Code `hoathang`**, vừa là **kho GitHub `Web-HTG`** (https://github.com/ndh150777777777-collab/Web-HTG, Private, nhánh `main`). Nó gói kiến thức, quy trình, script và nhật ký tiến độ của dự án website hoathang.vn.

- **Sổ tay chính của dự án là `../CLAUDE.md`** (thư mục cha `du-an-thu-nghiem`). Quy tắc làm việc (tiếng Việt, hỏi trước khi sửa/xoá, chạy khô trước khi sửa hàng loạt, không bịa mã OEM…), tiến độ mục 6 và luật OEM (`../.claude/rules/oem-rules.md`) đều nằm ở đó. Claude Code tự nạp file cha khi mở ở thư mục này – **không chép lại quy tắc vào đây**.
- **`tien-do/CLAUDE.md` chỉ là bản sao** của `../CLAUDE.md` để nhóm xem trên GitHub. Không sửa trực tiếp bản sao – sửa `../CLAUDE.md` rồi chép đè sang.

## Không có build / lint / test
Không có code để build hay chạy test. Việc trên website làm bằng JavaScript chạy trong tab Chrome đã đăng nhập wp-admin (Claude in Chrome) – cách làm ở `../CLAUDE.md` mục 3.

Lệnh dùng trong kho này:
```bash
# Đọc file Excel (PowerShell 5.1; dùng chung thư viện xlsx-lib.ps1 cùng thư mục)
powershell -File skills/hoathang-oem/scripts/doc-xlsx.ps1 -Path <file.xlsx> [-MaxRows 15] [-Filter <chữ>]

# Thử plugin trong 1 phiên (thêm --chrome để điều khiển trình duyệt)
claude --plugin-dir "C:\Users\Admin\du-an-thu-nghiem\plugin-hoathang" --chrome
```
Hai script `.js` trong `skills/hoathang-oem/scripts/` không chạy bằng Node – dán vào `javascript_tool` trong tab hoathang.vn:
- `luu-noi-dung.js` – mẫu lưu nội dung sản phẩm an toàn (so nội dung cũ, POST form `post.php`, đọc lại kiểm tra).
- `kiem-tra-ma.js` – kiểm tra mã trên trang (chỉ đọc).

## Cấu trúc plugin
- `.claude-plugin/plugin.json` (tên `hoathang`) + `marketplace.json` (marketplace `hoathang-local`, `source: "./"`). Cài: `/plugin marketplace add ndh150777777777-collab/Web-HTG` → `/plugin install hoathang@hoathang-local`.
- `skills/<tên>/SKILL.md` – có frontmatter `name` + `description` (Claude dựa vào `description` để tự gọi skill, nên giữ mô tả rõ khi nào dùng). Kiến thức chi tiết để trong file phụ cùng thư mục (VD `hoathang-oem/meo-ky-thuat.md`, `du-lieu-da-lam.md`).
- `commands/*.md` – lệnh tắt `/hoathang:<tên file>`; frontmatter `description`, `argument-hint`, dùng `$ARGUMENTS`. Lệnh thường chỉ dẫn sang skill tương ứng.
- `TIEN-DO.md` – nhật ký cho cả nhóm: bảng tổng quan + "Nhật ký thao tác trên website", **mục mới thêm lên đầu**.
- `tien-do/` – bản sao `CLAUDE.md`, `tien-do-oem.md`, `oem-rules.md` và vài CSV kết quả SEO.

## Quy trình đẩy tiến độ (đã được cho phép sẵn)
Sau mỗi việc xong (theo `commands/day-tien-do.md`):
1. Cập nhật `../CLAUDE.md` (mục 6 + dòng "Cập nhật lần cuối") và `../du-lieu-oem/tien-do-oem.md` nếu cần.
2. Thêm mục lên đầu nhật ký `TIEN-DO.md`, sửa "Cập nhật lần cuối".
3. Chép đè `../CLAUDE.md` → `tien-do/CLAUDE.md`, `../du-lieu-oem/tien-do-oem.md` → `tien-do/tien-do-oem.md`.
4. Quét không có mật khẩu/token, commit lời nhắn tiếng Việt `Tiến độ dd/mm/yyyy: …`, push `main`.

Hook `SessionEnd` của dự án cha (`../.claude/hooks/day-tien-do-github.sh`) tự commit + push phần còn sót khi đóng phiên – chỉ là dự phòng.

## Lưu ý khi sửa file trong kho
- Lưu mọi file **UTF-8** (không UTF-16) để tiếng Việt không bị lỗi.
- `.gitignore` chặn `.env*`, `*.pem`, `*.key`, `*.log`, `*.tmp`. Không đưa thông tin đăng nhập vào kho.
- Một số skill còn ghi thông tin cũ (VD `hoathang-tong-quan` ghi "không có Python" – máy đã cài Python 3.14 từ 17/11/2026; `du-lieu-da-lam.md` là bản tóm tắt 15/11/2026). Khi thấy lệch với `../CLAUDE.md` thì lấy `../CLAUDE.md` làm chuẩn và hỏi người dùng trước khi sửa skill.

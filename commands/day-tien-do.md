---
description: Ghi tiến độ công việc vừa làm trên web vào TIEN-DO.md và đẩy lên GitHub (kho Web-HTG) cho cả nhóm xem
argument-hint: "[mô tả ngắn việc vừa làm – có thể để trống]"
---

Làm theo `CLAUDE.md` mục 1.6 (đã được người dùng cho phép sẵn – không cần hỏi lại).

Việc vừa làm (nếu có): $ARGUMENTS

1. Cập nhật `du-lieu-oem/tien-do-oem.md` nếu chưa ghi. **Tiến độ không ghi vào `CLAUDE.md`** (người dùng quyết 22/11/2026) – `CLAUDE.md` chỉ sửa khi có quy tắc / cách làm mới.
2. Trong kho plugin `C:\Users\admin\du-an-thu-nghiem\plugin-hoathang`:
   - Thêm mục mới **lên đầu** phần "Nhật ký thao tác trên website" của `TIEN-DO.md`: ngày – làm gì – trang (tên + ID) – kết quả kiểm tra – còn lại gì. Cập nhật bảng tổng quan, phần "Trạng thái chi tiết các dự án" (6.1 → 6.8), "Cập nhật lần cuối".
   - Chép đè `du-lieu-oem/tien-do-oem.md` sang `tien-do/tien-do-oem.md` và `CLAUDE.md` sang `tien-do/CLAUDE.md` (nếu CLAUDE.md có đổi).
   - Nếu có thay đổi về quy trình/kiến thức: cập nhật skill tương ứng (VD `skills/hoathang-oem/du-lieu-da-lam.md`).
3. Quét nhanh để chắc **không có mật khẩu / token / thông tin đăng nhập** trong file sắp đẩy.
4. `git add -A`, commit với lời nhắn tiếng Việt dạng `Tiến độ dd/mm/yyyy: <tóm tắt>`, rồi `git push`.
5. Kiểm tra `origin/main` trùng bản trên máy, báo lại người dùng bằng tiếng Việt (đã đẩy gì, link kho).

---
description: Ghi tiến độ công việc vừa làm trên web vào TIEN-DO.md và đẩy lên GitHub (kho Web-HTG) cho cả nhóm xem
argument-hint: "[mô tả ngắn việc vừa làm – có thể để trống]"
---

Dùng skill `hoathang-tong-quan` (quy tắc 10).

Việc vừa làm (nếu có): $ARGUMENTS

1. Cập nhật tiến độ trong dự án `C:\Users\admin\du-an-thu-nghiem` (`CLAUDE.md` mục 6, `du-lieu-oem/tien-do-oem.md`) nếu chưa ghi.
2. Trong kho plugin `C:\Users\admin\du-an-thu-nghiem\plugin-hoathang`:
   - Thêm mục mới **lên đầu** phần "Nhật ký thao tác trên website" của `TIEN-DO.md`: ngày – làm gì – trang (tên + ID) – kết quả kiểm tra – còn lại gì. Cập nhật bảng tổng quan, "Cập nhật lần cuối".
   - Chép đè `du-lieu-oem/tien-do-oem.md` sang `tien-do/tien-do-oem.md`.
   - Nếu có thay đổi về quy trình/kiến thức: cập nhật skill tương ứng (VD `skills/hoathang-oem/du-lieu-da-lam.md`).
3. Quét nhanh để chắc **không có mật khẩu / token / thông tin đăng nhập** trong file sắp đẩy.
4. `git add -A`, commit với lời nhắn tiếng Việt dạng `Tiến độ dd/mm/yyyy: <tóm tắt>`, rồi `git push`.
5. Kiểm tra `origin/main` trùng bản trên máy, báo lại người dùng bằng tiếng Việt (đã đẩy gì, link kho).

---
description: Bắt đầu / làm tiếp việc cập nhật mã OEM cho một nhóm hàng (VD /hoathang:cap-nhat-oem lọc gió điều hòa)
argument-hint: "[nhóm hàng hoặc tên file Excel]"
---

Dùng skill `hoathang-oem` và `hoathang-tong-quan`.

Nhóm hàng / file cần làm: **$ARGUMENTS** (nếu trống: đọc tiến độ và hỏi người dùng muốn làm nhóm nào).

Làm đúng quy trình trong skill `hoathang-oem`:
1. Đọc `du-lieu-oem/tien-do-oem.md` – không làm lại phần đã xong.
2. Chọn đúng nguồn tra: má phanh / guốc phanh → sbparts.jp/catalogue; các loại lọc → azfilter.jp/catalogue.
3. Đọc file Excel bằng script PowerShell trong skill (máy không có Python).
4. **Kiểm tra trang web thật trước** (chỉ đọc), rồi chạy khô: lập CSV có BOM, báo số trang / số mã, **chờ người dùng duyệt**.
5. Khi được duyệt và người dùng đã tự đăng nhập wp-admin trên Chrome: sửa theo cách an toàn (POST form, không TinyMCE), kiểm tra lại sau khi lưu.
6. Trang chưa có Bảng mã OEM: hỏi người dùng trước khi tạo (tiêu đề bảng chỉ ghi "Bảng mã OEM").
7. Ghi tiến độ, báo kết quả bằng tiếng Việt, báo tiến độ mỗi ~5 phút nếu chạy lâu.

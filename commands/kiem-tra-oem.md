---
description: Kiểm tra (chỉ đọc) các trang sản phẩm trên hoathang.vn đã có đủ mã OEM như trong file Excel chưa
argument-hint: "[nhóm hàng: má phanh | guốc phanh | lọc dầu | lọc gió | lọc nhiên liệu | tất cả]"
---

Dùng skill `hoathang-oem`.

Phạm vi kiểm tra: **$ARGUMENTS** (trống = tất cả các nhóm có file dữ liệu).

1. Gom danh sách trang + mã cần có từ các file trong `du-lieu-oem/` (xem `du-lieu-da-lam.md` của skill).
2. Mở hoathang.vn trong tab Chrome mới, nạp `scripts/kiem-tra-ma.js`, kiểm tra từng trang (CHỈ ĐỌC).
3. Mã báo thiếu: thử lại dạng có tiền tố (`window.__withPrefix`) vì file cũ tách sai tiền tố.
4. Báo kết quả tiếng Việt theo nhóm (số trang đủ / thiếu), lưu danh sách thiếu ra CSV (UTF-8 có BOM) trong `du-lieu-oem/`, ghi tiến độ.
5. **Không sửa** trang nào trong lệnh này; hỏi người dùng nếu muốn bổ sung.

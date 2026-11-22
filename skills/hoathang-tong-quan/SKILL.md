---
name: hoathang-tong-quan
description: Dùng ĐẦU MỖI PHIÊN hoặc khi làm bất kỳ việc gì cho website hoathang.vn (công ty phụ tùng ô tô Hoà Thắng). Chỉ đường tới quy tắc làm việc, danh sách dự án 6.1 → 6.8, skill dùng cho từng dự án và nơi lưu tiến độ.
---

# Tổng quan dự án hoathang.vn

> **Quy tắc làm việc, công nghệ, mục tiêu, thông tin đã chốt** nằm ở `CLAUDE.md` (thư mục `C:\Users\Admin\du-an-thu-nghiem`) – mục 1 → 6. **Luật mã OEM** ở `.claude/rules/oem-rules.md`. Skill này **không chép lại** các quy tắc đó (gọn 22/11/2026) – khi lệch nhau, lấy `CLAUDE.md` làm chuẩn.

## Đầu mỗi phiên
1. Đọc `plugin-hoathang/TIEN-DO.md`: bảng tổng quan + phần **"Trạng thái chi tiết các dự án"** (6.1 → 6.8) – nơi duy nhất ghi tiến độ.
2. Đọc `du-lieu-oem/tien-do-oem.md` (nhật ký chi tiết dự án OEM).
3. Làm tiếp, không làm lại từ đầu. Xem tóm tắt nhanh: `/hoathang:tien-do`.
4. Xong mỗi việc: ghi tiến độ và đẩy GitHub theo `CLAUDE.md` mục 1.6 (`/hoathang:day-tien-do`).

## Danh sách dự án (số mục theo `TIEN-DO.md`; tất cả SẼ TIẾP TỤC)
| # | Dự án | Skill dùng | Quy tắc trong `CLAUDE.md` |
|---|---|---|---|
| 6.1 | Sửa SEO trang/bài Rank Math (mức đạt ~86) | `hoathang-seo-noi-dung` | 6.1 |
| 6.2 | Viết lại SEO trang AFT-U520 (lọc dầu hộp số AT Territory 1.5 2021+, OEM 516013A) – https://hoathang.vn/san-pham/loc-dau-hop-so-at-dung-cho-xe-territory-1-5/ | `hoathang-seo-noi-dung` | 6.1 |
| 6.3 | Thêm "Bảng mã OEM" vào trang sản phẩm | `hoathang-oem` | 6.2 |
| 6.4 | Cập nhật mã OEM mới nhất | `hoathang-oem` | 6.2 |
| 6.5 | 8 hạng mục sửa nội dung | `hoathang-seo-noi-dung` | 6.3 |
| 6.6 | Ô tìm kiếm tra được mã OEM gõ liền không gạch | `hoathang-tim-ma-oem` | 6.4 |
| 6.7 | Thêm sản phẩm mới | `hoathang-seo-noi-dung` (quy trình B) | 6.5 |
| 6.8 | Làm gợi ý ô tìm kiếm nhanh hơn (gác lại) | – | 6.4 |

> Lưu ý: số mục 6.x trong `CLAUDE.md` (quy tắc) **khác** số mục 6.x trong `TIEN-DO.md` (tiến độ) – xem cột cuối để đối chiếu.

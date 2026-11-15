---
name: hoathang-tong-quan
description: Dùng ĐẦU MỖI PHIÊN hoặc khi làm bất kỳ việc gì cho website hoathang.vn (công ty phụ tùng ô tô Hoà Thắng). Chứa quy tắc làm việc bắt buộc, thông tin đã chốt, công nghệ, mục tiêu, danh sách dự án và nơi lưu tiến độ.
---

# Tổng quan dự án hoathang.vn

## Người dùng và công ty
- Website công ty phụ tùng ô tô **Hoà Thắng** (Hoà Thắng Group – Auto Parts): https://hoathang.vn
- Người dùng là **nhân viên làm web, mới bắt đầu, không phải lập trình viên**.
- Thư mục dự án trên máy: `C:\Users\Admin\du-an-thu-nghiem` (Windows 10, PowerShell 5.1, **không có Python**).

## Quy tắc bắt buộc (luôn tuân thủ)
1. **Luôn trả lời bằng tiếng Việt**, dễ hiểu, chia **từng bước có đánh số**; giải thích thuật ngữ ngay lần đầu dùng; nói rõ làm để làm gì, kết quả mong đợi; chỉ rõ đường dẫn menu WordPress khi người dùng tự thao tác.
2. **Code sạch**: gọn, tên rõ nghĩa, **chú thích tiếng Việt**; ưu tiên tính năng có sẵn của WordPress / Flatsome (UX Blocks) / Rank Math; sau khi đưa code phải nói code làm gì và dán vào đâu.
3. **Luôn hỏi trước khi sửa hoặc xoá** bất kỳ tệp, trang, bài viết nào. **Tuyệt đối không xoá** khi chưa được cho phép.
4. **Trước khi sửa hàng loạt**: chạy khô, báo **số trang / số mã** + danh sách, chờ duyệt.
5. **Bản viết lại SEO phải đưa người dùng duyệt** trước khi áp dụng.
6. **Không ghi mật khẩu / thông tin đăng nhập** vào bất kỳ file nào. Người dùng **tự đăng nhập** wp-admin trên Chrome.
7. Việc dài: **báo tiến độ khoảng mỗi 5 phút**.
8. Mọi dự án **SẼ TIẾP TỤC** ở phiên sau: đầu phiên đọc tiến độ, làm tiếp, không làm lại từ đầu; xong việc thì **cập nhật tiến độ**.
9. **Luôn kiểm tra trang web thật trước khi sửa** – file đối chiếu cũ có thể đã lỗi thời (bài học 15/11/2026: 57 trang guốc phanh tưởng thiếu mã nhưng thực ra đã đủ).
10. **Sau MỖI lần thao tác trên website** (thêm/sửa mã, tạo bảng, sửa SEO, sửa nội dung… – kể cả kiểm tra chỉ đọc có kết quả mới): **ghi tiến độ và đẩy lên GitHub ngay** (người dùng yêu cầu 15/11/2026, đã cho phép sẵn – không cần hỏi lại). Làm theo lệnh `/hoathang:day-tien-do`: thêm mục mới lên đầu nhật ký `TIEN-DO.md`, chép `du-lieu-oem/tien-do-oem.md` sang `tien-do/`, commit tiếng Việt, push lên kho **https://github.com/ndh150777777777-collab/Web-HTG** (Private, nhánh `main`, thư mục `C:\Users\admin\du-an-thu-nghiem\plugin-hoathang`). Không đẩy mật khẩu/token.

## Công nghệ
- **WordPress** + **WooCommerce** (sản phẩm là post type `product`, đường dẫn `/san-pham/<slug>/`).
- Theme **Flatsome** (có UX Blocks). Plugin SEO **Rank Math SEO**.
- Trình soạn thảo cổ điển: nội dung bài nằm ở `#content` trong trang sửa `/wp-admin/post.php?post=<ID>&action=edit`.

## Mục tiêu dự án
1. Sửa SEO các trang/bài **dưới 85 điểm Rank Math**, lọc ra các mã/trang dưới 85 điểm.
2. Cập nhật **mã OEM mới nhất** phục vụ bán hàng.
3. Hiển thị **đủ chi tiết** để khách tra tìm mặt hàng dễ.
4. **Thêm sản phẩm mới** theo bài mẫu đã có trên web.

## Thông tin đã chốt (không tự đổi)
- **Ngày thành lập công ty: 04/04/2024** (theo giấy ĐKKD; thay cho 23/01/2024).
- Địa chỉ cũ **"Q. Hai Bà Trưng"** phải thay bằng địa chỉ hiện tại; chưa có thì **hỏi người dùng**.
- Người dùng **cần cung cấp thêm**: địa chỉ hiện tại, số hotline, giờ làm việc đúng.

## Nơi lưu tiến độ (đọc đầu phiên)
- `CLAUDE.md` mục **5. Tiến độ các dự án** (5.1 → 5.5).
- `du-lieu-oem\tien-do-oem.md`: nhật ký chi tiết dự án OEM.
- Xem tóm tắt bằng lệnh `/hoathang:tien-do`.

## Danh sách dự án (tất cả: SẼ TIẾP TỤC)
| # | Dự án | Skill dùng |
|---|---|---|
| 5.1 | Sửa SEO trang/bài dưới 85 điểm | `hoathang-seo-noi-dung` |
| 5.2 | Viết lại SEO trang AFT-U520 (lọc dầu hộp số AT Territory 1.5 2021+, Asahi, OEM 516013A) – https://hoathang.vn/san-pham/loc-dau-hop-so-at-dung-cho-xe-territory-1-5/ | `hoathang-seo-noi-dung` |
| 5.3 | Thêm "Bảng mã OEM" vào trang sản phẩm | `hoathang-oem` |
| 5.4 | Cập nhật mã OEM mới nhất | `hoathang-oem` |
| 5.5 | 8 hạng mục sửa nội dung | `hoathang-seo-noi-dung` |

## File khác trong dự án
- `index.html` – trang web HTML đầu tiên của người dùng (học tập), `mo-trang-web.bat` mở nó.
- `cap-nhat-oem.bat` – lệnh tắt mở Claude Code làm tiếp dự án OEM.
- Thư mục `css/`, `js/`, `images/` – để dành cho trang học tập.
- Đề xuất còn treo: tách CSS của `index.html` ra `css/style.css` (chờ người dùng đồng ý).

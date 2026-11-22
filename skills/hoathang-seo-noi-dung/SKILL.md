---
name: hoathang-seo-noi-dung
description: Dùng khi sửa SEO (Rank Math) cho trang/bài hoathang.vn, viết lại SEO trang sản phẩm (VD AFT-U520), thêm/cập nhật trang sản phẩm phụ tùng theo bài mẫu (mẫu lọc gió điều hòa ID 8584), hoặc làm danh sách 8 hạng mục sửa nội dung (nhãn BÁN CHẠY NHẤT, hotline 24/7, ngày thành lập, Automechanika 2022, điểm 4.8/5, utm_source=chatgpt.com, trang thiếu giá, địa chỉ Q. Hai Bà Trưng).
---

# SEO & nội dung – hoathang.vn

> Quy tắc chung (tiếng Việt, từng bước, hỏi trước khi sửa, bản SEO phải được duyệt, không bịa dữ liệu) ở `CLAUDE.md` mục 1. Quy tắc riêng từng việc ở `CLAUDE.md` **6.1** (SEO Rank Math), **6.3** (sửa nội dung), **6.5** (thêm sản phẩm mới). Skill này chỉ giữ trình tự các bước – khi lệch nhau, lấy `CLAUDE.md` làm chuẩn. Tiến độ xem `TIEN-DO.md` (mục 6.1, 6.2, 6.5, 6.7).

## Quy trình A: Sửa SEO một trang (mức đạt ~86 điểm Rank Math – `CLAUDE.md` 6.1)
1. Mở trang sửa, đọc điểm Rank Math đúng cách (chờ ≥ 6 giây cho Content AI tải – xem `CLAUDE.md` 6.1). Lập danh sách trang/mã dưới mức đạt.
2. **Không đổi từ khoá chính riêng từng trang** để lấy điểm (bài học 17/11/2026: mất điểm mật độ từ khoá, người dùng đã quyết dừng). Muốn lên điểm thì **sửa nội dung**: mục lục, ảnh/video, độ dài bài, tiêu đề SEO, mô tả meta, đoạn mở đầu, các thẻ heading.
3. **Đưa bản nháp cho người dùng duyệt** trước khi áp dụng.
4. Lưu nội dung theo `CLAUDE.md` mục 3 (không dùng TinyMCE); lưu từ khoá + điểm qua REST `updateMeta`.
5. Sau khi sửa: chấm lại điểm (so điểm công bằng như `CLAUDE.md` 6.1), báo kết quả.

## Quy trình B: Thêm / cập nhật trang sản phẩm (`CLAUDE.md` 6.5)
1. **Tra azfilter (lọc) / sbparts (phanh) trước** để xác nhận xe lắp được; nguồn không ghi xe đó → dừng lại hỏi người dùng.
2. Thu thập: tên sản phẩm, mã Asahi, mã OEM, hãng, dòng xe + đời xe, kích thước. Thiếu thì ghi `[CẦN BỔ SUNG]` trong bản nháp, không tự điền.
3. Chọn mẫu theo loại hàng (chi tiết tên, slug, các mục, từ khoá Rank Math ở `CLAUDE.md` 6.5):
   - Lọc gió điều hòa → chép bố cục **trang ID 8584**; slug không có năm; từ khoá chỉ `Lọc gió điều hòa`.
   - Lọc gió động cơ → bố cục 8584 đổi sang lọc gió động cơ (mẫu Seltos ID 8595).
   - Lọc nhiên liệu → slug giữ năm; từ khoá `Lọc nhiên liệu,<Xe>`.
   - Cùng mã Asahi, khác dòng xe → chép nguyên trang đã có, chỉ thay dòng xe/năm/động cơ.
4. Thêm **Bảng mã OEM** (bảng nhỏ + bảng 8 cột, mã gốc đứng đầu) – quy tắc ở `.claude/rules/oem-rules.md` mục 4, HTML mẫu ở skill `hoathang-oem` mục 4.
5. **Giá để trống**; ảnh người dùng tự chèn. Tạo trang dạng **bản nháp** để người dùng xem rồi tự xuất bản.
6. Xong: đặt Rank Math, điền ô ẩn `oem_khong_gach` (skill `hoathang-tim-ma-oem`); sau khi xuất bản thử ô tìm kiếm.

## Danh sách 8 hạng mục sửa nội dung (`CLAUDE.md` 6.3; xong ghi "ĐÃ XONG" trong `TIEN-DO.md` mục 6.5)
1. Nhãn "BÁN CHẠY NHẤT"
2. Giờ hotline 24/7
3. Ngày thành lập → **04/04/2024** (đã chốt)
4. Bài Automechanika 2022
5. Điểm tự chấm 4.8/5
6. Đuôi `utm_source=chatgpt.com` trong liên kết
7. Trang thiếu giá bán
8. Địa chỉ cũ "Q. Hai Bà Trưng" → địa chỉ hiện tại (hỏi người dùng)

Trước khi sửa mỗi hạng mục: tìm và đếm số trang bị ảnh hưởng, báo người dùng, chờ duyệt. Link partsouq.com trong mô tả sản phẩm **giữ nguyên**.

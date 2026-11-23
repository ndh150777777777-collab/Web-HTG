# Tiến độ công việc web hoathang.vn

> File này được **cập nhật và đẩy lên GitHub sau mỗi lần thao tác trên website**, để mọi người trong nhóm biết đã làm gì, làm tới đâu.
> Nhật ký chi tiết dự án mã OEM: [`tien-do/tien-do-oem.md`](tien-do/tien-do-oem.md).

**Cập nhật lần cuối:** 23/11/2026

## Tổng quan các dự án
| # | Dự án | Trạng thái | Ghi chú |
|---|---|---|---|
| 6.1 | Sửa SEO trang/bài dưới 85 điểm Rank Math | ⏸ Dừng đổi từ khoá | 17/11: đổi từ khoá chỉ làm giảm điểm → dừng; đã khôi phục từ khoá cũ 104 trang (giữ 5 trang bằng điểm). Hướng tiếp: sửa nội dung để tăng điểm |
| 6.2 | Viết lại SEO trang AFT-U520 (lọc dầu hộp số AT Territory 1.5) | ⏳ Chưa bắt đầu | |
| 6.3 | Thêm "Bảng mã OEM" vào trang sản phẩm | 🔄 Đang làm | 15/11: 6 trang; 16/11: thêm 12 trang. Còn 55 trang chưa có bảng (ít/không có dữ liệu) |
| 6.4 | Cập nhật mã OEM mới nhất | 🔄 Đang làm | 20/11: tra lại TOÀN BỘ 1.498 SP, thêm 11 mã vào 11 trang (SE003122 cho AB-K1157, PN1322/E cho Camry 4657) |
| 6.5 | 8 hạng mục sửa nội dung | ⏳ Chưa bắt đầu | |
| 6.6 | Ô tìm kiếm tra được mã OEM gõ liền không gạch | ✅ Xong phần tìm kiếm | Còn treo: 61 SP mã lỗi Excel |
| 6.7 | Thêm sản phẩm mới | ✅ Xong 16 trang | Đã xuất bản 16 trang (8577–8617); làm tiếp khi người dùng gửi sản phẩm mới |
| 6.8 | Làm gợi ý tìm kiếm nhanh hơn | 🔄 Đang làm | 23/11: đo lần đầu 3,1–6,7 s, lần lặp 0,3 s, WordPress rỗng 0,25 s → chậm do câu lệnh tìm kiếm; đã cho phép cài plugin – chờ người dùng chọn cách |

## Mã OEM theo nhóm hàng
| Đợt | Nhóm hàng | Nguồn tra | Trạng thái |
|---|---|---|---|
| 1 | Má phanh | sbparts.jp | ✅ Xong – kiểm tra lại 17/11: 418 trang, thêm 27 mã vào 9 trang; 2257 Sorento sau nghi bảng sai |
| 2 | Lọc dầu | azfilter.jp | ✅ Xong – kiểm tra lại 17/11: 164 trang, thêm 3 mã vào 3 trang; lọc dầu hộp số (208 trang) chưa kiểm |
| 3 | Lọc nhiên liệu | azfilter.jp | ✅ Xong – kiểm tra lại 17/11: 162 trang (cả lọc xăng) đủ mã; 81 trang lọc xăng Azumi mô tả ghi nhầm "lọc dầu hộp số" – chờ quyết |
| 4 | Lọc gió động cơ | azfilter.jp | ✅ Xong – kiểm tra lại 17/11: 187 trang, 184 đủ, 3 nguồn không có dữ liệu |
| 5 | Lọc gió điều hòa | azfilter.jp | ✅ Xong – kiểm tra lại 17/11: 221 trang, thêm 27 mã vào 5 trang; 11 trang nguồn không có dữ liệu |
| 6 | Guốc phanh | sbparts.jp | ✅ Xong – 57/57 trang đủ 106 mã |
| – | Lọc dầu hộp số | azfilter.jp | ✅ Kiểm tra lần đầu 17/11: 208 trang, thêm 4 mã vào 4 trang; 4 trang nguồn không có dữ liệu |

## Việc còn treo / chờ quyết định
- **61 sản phẩm có mã OEM lỗi Excel** (hiện dạng `4,05E+09`) – cần lấy lại mã đúng. VD ID: 5883, 5877, 5658, 5655, 4657, 4396, 4395, 4394.
- **55 sản phẩm còn chưa có bảng OEM** – tra lại 16/11 (cả mã Asahi lẫn mã OEM): **không có mã mới** → người dùng quyết **để nguyên**, chỉ làm lại khi có nguồn mã mới. Kết quả: `du-lieu-oem/Tra_lai_55_trang_chua_co_bang_16-11-2026.csv`.
- Khi thêm sản phẩm mới / sửa bảng OEM: phải **điền lại ô ẩn `oem_khong_gach`** (skill `hoathang-tim-ma-oem`).
- Lọc gió điều hòa: dò 75 mã trong `Book1.xlsx` trên web để kiểm tra.
- Guốc phanh: AS-J1265 (Xpander EPB), AS-J9012 (Celerio) chưa có trang; AS-C554, AS-K2286 không có trên sbparts; mã 18268, 18488 nghi là đĩa phanh.
- Má phanh sau VFe34 (ID 4554): **bỏ qua** theo quyết định người dùng – dữ liệu nghi sai.
- Má phanh: một số trang có dòng mã nghi sai (MG5 AB-C202, Sprinter, Peugeot 3008 AB-E602, RX330/Highlander AB-J1005, Z8/Rexton/Santafe Gold AB-C864, Z8 AB-C865).

## Trạng thái chi tiết các dự án
> Chuyển nguyên văn từ mục 6 của `CLAUDE.md` ngày 22/11/2026 (người dùng yêu cầu: tiến độ ghi ở đây, CLAUDE.md chỉ giữ quy tắc). Từ nay cập nhật trạng thái từng dự án **tại đây**.


### 6.1. Sửa SEO các trang/bài trên web
- Lọc trang/bài có điểm Rank Math dưới 85, sửa SEO trực tiếp trên website. Người dùng 16/11/2026 nâng mục tiêu: **trang dưới 87 → lên 90**.
- **16/11/2026:** quét xong – 604 SP dưới 87 + 218 trang chưa đặt từ khoá (`du-lieu-seo/SEO_duoi_87_diem_16-11-2026.csv`). Nguyên nhân: từ khoá chính chung chung, trùng nhiều trang. **Điểm trong danh sách là điểm cũ** – Rank Math hiện tại chấm thêm Content AI (0/5) nên trang ghi 90 chấm lại chỉ 86; mẫu bài hiện tại tối đa ~86 (mất TOC, ảnh/video, độ dài, Content AI). Đã đổi từ khoá trang 8387 → 'lọc xăng dùng cho xe Innova' (điểm thật 86).
- **Cách đọc/lưu điểm:** trong trang sửa, `wp.data.select('rank-math').getAnalysisScore()` và `rankMathEditor.resultManager.getResults()` (chờ ≥6 giây cho Content AI tải, nếu không điểm sẽ cao giả); lưu từ khoá + điểm bằng REST `/wp-json/rankmath/v1/updateMeta` (không cần lưu nội dung qua TinyMCE).
- **16/11/2026 (tối) – phương án A (người dùng chọn):** lấy ~86 làm mức đạt; đặt từ khoá chính riêng (tên SP trước dấu phẩy/năm, VD 'Lọc nhiên liệu dùng cho xe D-MAX', giữ từ khoá phụ) cho **613 SP đã duyệt** (chỉ sản phẩm). Chỉ lưu khi điểm mới ≥ điểm cũ (chấm cả 2 trong iframe trang sửa). **17/11: tạm dừng ở 214/613** theo yêu cầu người dùng: 101 tăng điểm, 7 bằng, 106 giữ nguyên, 0 lỗi. Làm tiếp: đọc `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_17-11-2026.csv`, chạy các dòng 'Chưa làm' (399 SP). Mẹo: chạy 2 trang song song; không chờ `onload` của iframe (tài nguyên phụ treo) mà chờ `rankMathEditor` sẵn sàng; tiến độ còn lưu trong localStorage `seo_job_16_11` / `seo_dry_16_11` của tab wp-admin. Để riêng: 183 SP ít nội dung (<300 chữ, cần viết bài), 26 trang/bài (cần người dùng chọn từ khoá) – xem `SEO_tu_khoa_moi_chay_kho_16-11-2026.csv`.
- **17/11/2026 (chiều) – PHÁT HIỆN LỖI ĐO:** lần chạy trước chấm từ khoá cũ lúc trang vừa tải (bị trừ 5 điểm Content AI) còn từ khoá mới sau khi phân tích lại (không bị trừ) → từ khoá mới được cộng oan 5 điểm. Đo lại: 8384 báo 80→85 thực tế 85=85; 6459 báo 81→84 thực tế 86→84; 6486 báo 84→87 thực tế 89→87. Ước tính ~96/108 trang đã lưu thật ra giảm ~2 điểm. **Cách đo đúng:** đặt từ khoá bằng `wp.data.dispatch('rank-math').updateKeywords(kw)` rồi `rankMathEditor.refresh('keyword')` 2 lần (chờ 3,5 giây + 3 giây) cho CẢ từ khoá cũ và mới, rồi mới so. Lưu ý: từ khoá có năm dạng `2019-2022` bị Rank Math không nhận trong tiêu đề → điểm ~34.
- **Người dùng quyết 17/11:** (1) chấm lại công bằng 108 trang đã lưu (chỉ đọc) → xuất CSV trang bị giảm → duyệt → đặt lại từ khoá cũ (từ khoá cũ còn trong localStorage `seo_job_16_11`, trường `oldkw`); (2) chạy tiếp SP còn lại bằng cách đo mới, chỉ lưu khi bằng/cao hơn. **Tạm dừng theo yêu cầu người dùng:** chạy mới 24 SP (1 lưu bằng điểm – 5926, 2 đã có sẵn, 21 giữ nguyên vì thấp hơn); chấm lại mới 2/108 (6385 bằng, 6459 giảm), kết quả trong localStorage `seo_recheck_17_11`. File: `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_lan2_17-11-2026.csv` (còn 375 dòng "Chưa làm").
- **17/11/2026 (tối) – KẾT THÚC đổi từ khoá:** chấm lại công bằng 60 trang đã lưu → 55 giảm (~2 điểm), 5 bằng, 0 tăng; chạy mới 24 SP → 0 tăng. **Người dùng quyết: đổi từ khoá chỉ làm giảm điểm → DỪNG, KHÔNG chạy 375 SP còn lại; khôi phục từ khoá cũ.** Đã khôi phục **104 trang** (55 giảm + 49 chưa chấm) bằng REST updateMeta (từ khoá cũ + điểm cũ), đọc lại 104/104 OK. Giữ từ khoá mới 5 trang bằng điểm: 5926, 6385, 6481, 6857, 8384. File: `du-lieu-seo/SEO_khoi_phuc_tu_khoa_ket_qua_17-11-2026.csv`. **Bài học:** đổi từ khoá chính riêng không tăng điểm Rank Math (mất điểm mật độ từ khoá); muốn lên điểm phải sửa nội dung (mục lục, ảnh/video, độ dài bài).
- **Trạng thái:** việc đổi từ khoá ĐÃ DỪNG. Hướng tiếp (chờ người dùng chọn): thêm mục lục / ảnh / viết dài hơn cho 183 SP ít nội dung, 26 trang/bài cần chọn từ khoá.

### 6.2. Viết lại SEO trang sản phẩm mã AFT-U520
- Lọc dầu hộp số AT cho Territory 1.5 2021+, hãng Asahi, OEM 516013A.
- Trang: https://hoathang.vn/san-pham/loc-dau-hop-so-at-dung-cho-xe-territory-1-5/
- **Trạng thái:** chưa bắt đầu – sẽ tiếp tục.

### 6.3. Thêm "Bảng mã OEM" vào trang sản phẩm
- Luật tạo bảng (mẫu ID 3679, tiêu đề, 8 cột, vị trí, chỉ tạo khi đồng ý): xem `.claude/rules/oem-rules.md` mục 4.
- Đã làm 15/11/2026: tạo bảng cho 6 trang – Wigo má phanh trước (ID 5926), Transit má phanh trước (ID 5946, 4559), Transit má phanh sau (ID 5950, 5942), Wigo lọc gió động cơ (ID 7900).
- **16/11/2026:** quét 1.482 SP → **67 trang chưa có bảng**. Đã tạo bảng cho **12 trang có thêm mã mới** (ID 3439, 7953, 7785, 6750, 6649, 6565, 6244, 6112, 5989, 4382, 3821, 2658) – đưa hết mã, trang trống thì thêm vào cuối. Còn 55 trang ít/không có dữ liệu: `du-lieu-oem/Trang_chua_co_bang_OEM_16-11-2026.csv`.
- **16/11/2026 (sau):** tra lại 55 trang bằng cả mã Asahi lẫn mã OEM trên trang → **không có mã mới** (23 trang nguồn chỉ có 1 mã, 14 trang bài đã có bảng mã chéo khác, 18 trang nguồn không có dữ liệu). Kết quả: `du-lieu-oem/Tra_lai_55_trang_chua_co_bang_16-11-2026.csv`.
- **Người dùng quyết 16/11/2026: ĐỂ NGUYÊN 55 trang, không tạo bảng 1 mã.** Chỉ làm lại khi có nguồn mã mới (file nhà cung cấp hoặc azfilter/sbparts có thêm dữ liệu).
- **Trạng thái:** sẽ tiếp tục khi có nguồn mã mới.

### 6.4. Cập nhật mã OEM mới nhất lên các trang sản phẩm
- Từ file Excel mã OEM, tra mã OEM theo nhóm hàng. Luật tra mã (nguồn theo nhóm hàng, chỉ cập nhật mã có trang): xem `.claude/rules/oem-rules.md` mục 2.
- **Các đợt:**
  | Đợt | Nhóm hàng | Trạng thái |
  |---|---|---|
  | 1 | Má phanh | ✅ Xong – kiểm tra lại 17/11: 418 trang, thêm 27 mã vào 9 trang (3122, 2221, 2218, 2216, 2214, 1914, 2215, 2207, 1992), ô ẩn OK; 2257 Sorento sau đã sửa 17/11 (thêm 40 mã, sửa nhãn SSANGYONG). File `du-lieu-oem/Dot1_ma_phanh_kiem_tra_lai_chay_kho_17-11-2026.csv` |
  | 2 | Lọc dầu | ✅ Xong – kiểm tra lại 17/11: 164 trang, thêm 3 mã vào 3 trang (6039, 7429, 7436), ô ẩn OK; 208 trang lọc dầu hộp số chưa kiểm |
  | 3 | Lọc nhiên liệu | ✅ Xong – kiểm tra lại 17/11: 162 trang (gồm lọc xăng) đủ mã. **Đã sửa 17/11:** 81 trang lọc xăng Azumi (ID 3083–3251) mô tả ghi nhầm "lọc dầu hộp số" → thay bằng nội dung đúng loại hàng (cách A). 7797 Xpander (mã AFF-J5015/PE01-13-ZE0 là lọc xăng Mazda) – người dùng quyết ĐỂ NGUYÊN 17/11, chỉ làm lại khi có mã đúng. File `du-lieu-oem/Dot3_loc_nhien_lieu_kiem_tra_lai_17-11-2026.csv` |
  | 4 | Lọc gió động cơ | ✅ Xong – kiểm tra lại 17/11: 187 trang, 184 đủ mã, 3 trang azfilter không có dữ liệu (6880, 6288, 6244) |
  | 5 | Lọc gió điều hòa | ✅ Xong – kiểm tra lại 17/11: 221 trang, thêm 27 mã vào 5 trang (6704, 6703, 6705, 6699, 6111), ô ẩn OK; 11 trang azfilter không có dữ liệu. File `du-lieu-oem/Dot5_loc_gio_dieu_hoa_kiem_tra_lai_chay_kho_17-11-2026.csv` |
  | 6 | Guốc phanh | ✅ Xong – 57/57 trang đủ 106 mã |
  | – | Lọc dầu hộp số | ✅ Kiểm tra lần đầu 17/11: 208 trang, thêm 4 mã vào 4 trang (3305, 2592, 2596, 2435), ô ẩn OK; 4 trang azfilter không có dữ liệu. File `du-lieu-oem/Loc_dau_hop_so_kiem_tra_OEM_chay_kho_17-11-2026.csv` |
  | 7 | *(chưa chọn nhóm hàng)* | Chưa làm |
- **15/11/2026:** kiểm tra lại 429 trang → 421 đủ, 8 thiếu → sửa 7 trang (Escape 2001-2008 ID 3429 thêm 30 mã + 6 trang tạo bảng ở mục 6.3), **bỏ qua VFe34 (ID 4554)** theo quyết định người dùng (dữ liệu nghi sai).
- **16/11/2026 – kiểm tra TOÀN BỘ 1.482 SP:** thêm 408 mã vào 131 trang (điền lại ô ẩn xong). **Nhóm B 22 trang** bảng lệch hẳn với nguồn (nghi ghi mã sản phẩm khác) – chờ người dùng xem. File: `du-lieu-oem/Kiem_tra_toan_bo_OEM_16-11-2026_chay_kho.csv`.
- **16/11/2026 – so sánh 22 trang nhóm B** (`du-lieu-oem/Nhom_B_so_sanh_16-11-2026.csv`): **14 trang loại 1** bảng đúng sản phẩm Asahi (khớp mã gốc khác cùng mã Asahi, chỉ thiếu mã của mã gốc ghi trên trang); **4 trang loại 2** nghi chép nhầm bảng (1916 Morning má phanh trước mang bảng má phanh sau Sportage ID 2271; 6095/6098/6099 mang bảng lọc gió điều hoà Sedona AFC-K324); **4 trang loại 3** (6225 Lux SA cần người xem; 3378–3380 nguồn chỉ có mã bộ kit _K1/_K2 → bỏ qua). **Đã thay bảng 4 trang loại 2** (người dùng duyệt 16/11): 1916 → 25 mã má phanh trước theo sbparts; 6095/6098/6099 → 7 mã theo azfilter (mã gốc trang đứng đầu). Kiểm tra OK, đã điền lại ô ẩn; gõ `581011YA10` ra trang Morning. **Đã thêm 669 mã vào 14 trang loại 1** (người dùng duyệt 16/11; 4335–4339 mỗi trang +106 mã; 2215/2207 bảng 11 cột có cột trống xen giữa – đã dựng dòng mới đúng mẫu). Kiểm tra 14/14 OK, ô ẩn 14/14; gõ `26669013` ra Aveo/Cruze/Fadil. Còn: 7 ô lỗi Excel (4394, 4391, 4335–4339), 6225 Lux SA.
- **20/11/2026 – tra lại TOÀN BỘ 1.498 SP với azfilter/sbparts** (người dùng yêu cầu "cập nhật các mã mới"): 1.430 trang đủ mã, 54 nguồn không có dữ liệu. Người dùng duyệt → **thêm 11 mã vào 11 trang**: SOUEAST SE003122 cho 10 trang AB-K1157 (2271, 2270, 2269, 2268, 2267, 2266, 2265, 2264, 2263, 1927) + NiBK PN1322/E cho 4657 Camry. Lưu đúng, web hiện mã, ô ẩn OK, tìm kiếm OK. Bỏ qua 4554, 6225 (treo cũ), 3820 (mã kit `_JT`). File `du-lieu-oem/Ma_OEM_moi_azfilter_sbparts_chay_kho_20-11-2026.csv`. **Cách tra lại nhanh:** lấy mã gốc từ tiêu đề / dòng "Mã OEM" bảng thông số / ô đầu Bảng mã OEM; chuyển dữ liệu giữa tab bằng `BroadcastChannel` (localStorage tab wp-admin gần đầy).
- **Còn treo:** guốc phanh AS-J1265 (Xpander EPB), AS-J9012 (Celerio) chưa có trang; AS-C554, AS-K2286 không có trên sbparts; mã 18268, 18488 nghi là đĩa phanh; vài trang má phanh có dòng mã nghi sai (xem `du-lieu-oem/tien-do-oem.md`).
- **Trạng thái:** sẽ tiếp tục.

### 6.5. Danh sách 8 hạng mục sửa nội dung
Làm lần lượt; xong mục nào ghi **"ĐÃ XONG"** cạnh mục đó.
1. Nhãn "BÁN CHẠY NHẤT"
2. Giờ hotline 24/7
3. Ngày thành lập (đã chốt 04/04/2024)
4. Bài Automechanika 2022
5. Điểm tự chấm 4.8/5 – **ĐÃ XONG 16/11/2026** (không còn 4.8/5; xoá dữ liệu bình chọn kk Star Ratings của bài Giới thiệu ID 712 – đang hiện 4.6/5 (9 bình chọn) – và SP MG ZS ID 3553 (khai báo sao gửi Google); 2 trang này cũng đặt "tắt" chấm sao. Giao diện Flatsome tự gọi khung sao nên công tắc "tắt" không ẩn được – giờ hiện khung trống "Rate this post")
6. Đuôi `utm_source=chatgpt.com` trong liên kết – **ĐÃ XONG 16/11/2026** (xoá 3.105 link trên 1.155 sản phẩm: 1.740 trong mô tả + 1.365 trong mô tả ngắn; quét lại còn 0; trang/bài/menu không bị dính)
7. Trang thiếu giá bán
8. Địa chỉ cũ "Q. Hai Bà Trưng"

- **Trạng thái:** đang làm – xong mục 5, 6 (16/11/2026). Đã ẩn dòng `[rt_reading_time] phút đọc` (shortcode hỏng do theme in ra ở đầu cả 8 bài viết) bằng CSS thêm vào cuối *Giao diện → Tuỳ biến → CSS bổ sung* (`#readTime, span:has(> #readTime) { display: none !important; }`) – 16/11/2026; muốn hiện lại thì xoá 2 dòng đó. 971 link partsouq.com trong mô tả SP: **người dùng quyết giữ nguyên, không làm**.

### 6.6. Ô tìm kiếm tra được mã OEM gõ liền không gạch (làm 16/11/2026)
- **Vấn đề:** khách gửi mã `0446548210` (không gạch) nhưng bảng OEM ghi `04465-48210` → ô tìm kiếm không ra. **Người dùng KHÔNG muốn thêm mã không gạch vào bảng OEM.**
- **Ô tìm kiếm thật của web là plugin Ivory Search** (form ID **2644**, gợi ý khi gõ bằng AJAX) – KHÔNG phải tìm kiếm mặc định của WordPress/Flatsome. Khi kiểm tra phải gõ vào ô trên trang chủ (hoặc gọi AJAX của Ivory Search); thử bằng `?s=...&post_type=product` hay `flatsome_ajax_search_products` sẽ cho kết quả sai.
- **Đã làm (cách không cần cài plugin):**
  1. Tạo nhóm trường ACF PRO **"Mã OEM không gạch (ẩn, dùng cho tìm kiếm)"** (ID 8571), trường văn bản tên **`oem_khong_gach`**, gắn vào sản phẩm, bật "Hiển thị trong REST API".
  2. Điền trường này cho **1.482/1.482 sản phẩm** qua REST API: lấy mọi ô mã OEM trong các bảng + mã sản phẩm trong tên, bỏ dấu `- . /` và khoảng trắng, viết hoa, cách nhau bằng dấu cách. Chạy 2 lượt (lượt 2 bổ sung 736 sản phẩm còn thiếu mã Asahi dạng AFC-J108, AN-965K). Không đổi nội dung bài / bảng OEM / SEO.
  3. Trong Ivory Search → form 2644 → Includes → **Custom Fields**: chọn `oem_khong_gach`, lưu.
- **Kết quả:** gõ `0446548210` ra Má phanh Sienna 2011-2020 và Highlander 2005-2019 (Asahi AB-J1324); gõ `04465-48210` vẫn ra như cũ.
- **Việc phải làm khi có thay đổi:** thêm sản phẩm mới hoặc sửa/thêm mã trong bảng OEM → **chạy lại bước điền ô ẩn** cho các sản phẩm đó (web không có đoạn code tự chạy). Quy trình + đoạn JS: skill `hoathang-tim-ma-oem`.
- **Hạn chế của web (đã gặp):** **không cài được plugin** (`plugin-install.php` báo "không được phép truy cập") và **không sửa được file theme** (`theme-editor.php` 403) – nghi do Hide My WP / cấu hình web; trang đăng nhập không phải `/wp-login.php` (đường dẫn riêng). Muốn dùng Code Snippets phải nhờ người dùng bỏ chặn tạm thời.
- **Phát hiện còn treo (chờ người dùng quyết):**
  - **61 sản phẩm có mã OEM lỗi Excel** trong bảng OEM, hiện dạng `4,05E+09`, `4,68E+07` (mất số khi nhập từ Excel). Chưa sửa; mã đúng phải lấy lại từ file Excel gốc hoặc azfilter.jp / sbparts.jp. Ví dụ ID: 5883, 5877, 5658, 5655, 4657, 4396, 4395, 4394.
  - ~~130 sản phẩm không có bảng OEM~~ → kiểm tra 16/11: thực tế 67, đã tạo 12 (xem 6.3). Đã điền lại ô ẩn cho 12 trang đó (16/11, 12/12 đúng).
- **Trạng thái:** ✅ Xong phần tìm kiếm; sẽ tiếp tục xử lý 2 việc treo ở trên.

### 6.7. Thêm sản phẩm mới
- **MẪU SEO CHUẨN LỌC GIÓ ĐIỀU HÒA = trang ID 8584** (Transit AFC-U201) – người dùng tự sửa và chốt 19/11/2026 ("đây là cách viết seo chuẩn của lọc gió điều hòa"). Trang mới: đọc `content.raw`/`excerpt.raw` của 8584, giữ nguyên bố cục, chỉ thay mã Asahi / OEM / hãng / dòng xe / năm / kích thước / 2 bảng mã.
  - Tên SP: `Lọc gió điều hòa dùng cho xe <Xe> <năm> | Asahi <mã> | <OEM>`; **slug KHÔNG có năm** (`loc-gio-dieu-hoa-dung-cho-xe-<xe>`).
  - Mẫu giảm lặp từ khoá: phụ đề h2 cỡ 75% "Lọc Gió Điều Hòa-Lọc bụi bẩn…"; "2. Lọc gió là gì?…"; "3./7. … Lọc Gió Điều Hòa Asahi <mã>"; **"8. Hướng dẫn thay thế và bảo dưỡng"** (không thêm loại hàng); mục 5 **"5. Bảng mã OEM"** (bảng nhỏ + "Bảng mã OEM" 8 cột, mã gốc đứng đầu).
  - Cuối bài: Hotline/Zalo, Website, **link partsouq** (`https://partsouq.com/`). Giá để trống; ảnh người dùng tự chèn, đặt làm Ảnh sản phẩm khi được đồng ý.
  - Rank Math: **từ khoá chỉ để `Lọc gió điều hòa`** (người dùng chốt 20/11/2026: "áp dụng hết" – không thêm tên xe/mã; **chỉ cho trang mới, KHÔNG đổi các trang lọc gió điều hòa cũ** – người dùng quyết 20/11) + mô tả meta. Xong phải điền ô ẩn `oem_khong_gach` và thử ô tìm kiếm.
  - **Luôn tra azfilter trước:** mã OEM người dùng đưa có thể lệch dòng xe (19/11: 1748 479 ghi Triton → thực tế Ford Transit; không phải D-MAX) → hỏi lại.
  - 8584 có 3 chỗ cụt chữ người dùng chọn giữ nguyên ("khi chọn cho Transit", "là l dùng để đối chiếu", "6. Dấu hiệu cần kiểm tra hoặc") – khi chép sang trang mới thì hỏi.
- **19/11/2026:** thêm **Lọc gió điều hòa Mazda 3 2014-2019 | Asahi AFC-J001 | KD45-61-J6X (ID 8577)** – đã xuất bản, Bảng mã OEM 12 mã theo azfilter (KD45-61-J6X ↔ AZUMI AC25001), ô ẩn OK, gõ `KD4561J6X` ra trang, ảnh đại diện 8578 đã đặt. Slug đã sửa thành `loc-gio-dieu-hoa-dung-cho-xe-mazda-3` (19/11, người dùng duyệt).
- **19/11/2026:** thêm **Lọc gió điều hòa Transit 2014-2021 | Asahi AFC-U201 | 1748 479 (ID 8584)** – đã xuất bản, `/san-pham/loc-gio-dieu-hoa-dung-cho-xe-transit/`, Bảng mã OEM 42 mã theo azfilter (1748 479 ↔ AZUMI AC22201C, khớp trang AFC-U201C ID 6043), ảnh đại diện 8578 (người dùng xác nhận dùng chung ảnh với Mazda 3), ô ẩn 42 mã, gõ `1748479` ra trang.
- **19/11/2026 – ✅ HOÀN THÀNH (người dùng tự chèn ảnh và xuất bản; kiểm tra lại: cả 2 đã publish, có ảnh đại diện, ô ẩn đủ mã):**
  - **ID 8585** Lọc gió điều hòa Mazda 3 1.5 2.0 2019-2025 | Asahi AFC-J504 | BDGF-61-J6X (người dùng ghi nhầm U504; bản than AFC-J504C là ID 6337). Chép y 8584, giữ 3 chỗ cụt chữ. Bảng mã OEM 4 mã Mazda theo azfilter (↔ AZUMI AC25004, 207×200×49/25 mm). Slug `…-mazda-3-1-5-2-0`.
  - **ID 8595** Lọc gió động cơ Seltos 1.4 2020- | Asahi AFA-K1010 | 28113-A0200 (người dùng ghi nhầm AFC). **Lọc gió động cơ: người dùng chọn bố cục 8584 đổi nội dung sang lọc gió động cơ, viết đủ câu**, filter-sys 81. 2 mã theo azfilter (↔ AZUMI A11010, 267×146×55 mm). Slug `loc-gio-dong-co-dung-cho-xe-seltos-1-4`.
  - Ô ẩn + Rank Math 2 trang đã xong. Slug 8577 người dùng chưa trả lời → giữ nguyên.
- **19/11/2026 – ✅ HOÀN THÀNH (người dùng tự chèn ảnh + xuất bản):** **ID 8600** Lọc gió điều hòa Xpander 2019- | Asahi AFC-J3005 | 7850A002. Cùng OEM với AFC-J304 (ID 6191) – người dùng xác nhận là mã Asahi khác, tạo trang riêng. Chép y 8584 (giữ cụt chữ), 16 mã theo azfilter (↔ AZUMI AC23304, 180×178×18 mm), slug `loc-gio-dieu-hoa-dung-cho-xe-xpander`. Rank Math + ô ẩn OK.
- **19/11/2026 – ✅ HOÀN THÀNH (người dùng tự chèn ảnh + xuất bản):** **ID 8604** Lọc gió điều hòa VF3 | Asahi AFC-V331 | BIN 34036070 (bản than AFC-V331C là ID 6089). **azfilter không có dữ liệu** → người dùng chọn bỏ kích thước, không ghi năm, giữ cụt chữ; chỉ bảng nhỏ (1 mã, không tạo bảng 8 cột). Slug `loc-gio-dieu-hoa-dung-cho-xe-vf3`. Rank Math + ô ẩn OK.
- **19/11/2026 – đã xử lý 2 việc treo:** đổi slug 8577 → `loc-gio-dieu-hoa-dung-cho-xe-mazda-3` (link cũ tự chuyển hướng); sửa kích thước trang than AFC-J504C (ID 6337) 203×200×40/22 → **207×200×49/25 mm** theo azfilter AC25004C (6 chỗ, phần khác giữ nguyên).
- **19/11/2026:** thêm **ID 8608** Lọc gió động cơ Creta 1.6 2015-2018 | Asahi AFA-K1010 | 28113-A0200 – azfilter A11010 xác nhận Creta 07.15–06.18 1.6L D4FB. Người dùng yêu cầu **chép nguyên trang Seltos 8595, chỉ đổi dòng xe/năm** (cùng ảnh 8598). Slug `loc-gio-dong-co-dung-cho-xe-creta-1-6`, Rank Math + ô ẩn OK. ✅ **Đã xuất bản** (người dùng), gõ `28113A0200` ra trang Creta + Seltos.
- **19/11/2026:** thêm **ID 8609** Lọc gió điều hòa CX-30 2.0 2021-2025 | Asahi AFC-J504 | BDGF-61-J6X – azfilter AC25004 xác nhận CX-30 2.0L. **Chép nguyên trang Mazda 3 (8585), chỉ đổi dòng xe/năm** (ảnh chung 8586). Slug `loc-gio-dieu-hoa-dung-cho-xe-cx-30-2-0`, Rank Math + ô ẩn OK. ✅ **Đã xuất bản** (người dùng), gõ `BDGF61J6X` ra trang.
- **19/11/2026:** thêm **ID 8610** Lọc gió điều hòa Mazda 6 2014-2023 và **ID 8611** CX-5 2013-2023 | Asahi AFC-J001 | KD45-61-J6X – azfilter AC25001 xác nhận. Chép nguyên trang Mazda 3 (8577), ảnh chung 8593. Rank Math + ô ẩn OK. ✅ **Đã xuất bản** (người dùng), gõ `KD4561J6X` ra cả 2 trang.
- **20/11/2026 – người dùng xác nhận "lắp được" → đã làm:** **ID 8612** Triton 2014-2025, **8613** D-Max MU-X 1.9 2019-, **8614** BT-50 1.9 2019-2025, **8615** Navara 2015-2023, **8616** Outlander 2012-2025, **8617** Lancer 2007-2015 – chép nguyên 8584, chỉ đổi xe/năm; giữ Bảng mã OEM U201 + câu catalogue Transit/Nissan; ảnh chung 8590; ô ẩn OK; **từ khoá Rank Math chỉ "Lọc gió điều hòa"** (người dùng yêu cầu 20/11). ✅ **Đã xuất bản** (người dùng), gõ `1748479` ra cả 6 trang + Transit.
- (Trước đó) **20/11/2026 – đã hỏi:** yêu cầu làm AFC-U201 cho 6 xe (Triton 14-25, D-Max/MU-X 1.9 2019+, BT-50 1.9 19-25, Navara 15-23, Outlander 12-25, Lancer 07-15). azfilter AC22201 + vỏ hộp chỉ ghi Transit + Nissan → KHÔNG khớp. Trên web 5 xe đó dùng AFC-J507C (7803A004, 216×200×30), Navara dùng AFC-J212C. Đã đưa hướng A (không làm / làm J507) – B (ghi "lắp tương đương theo kích thước") – C (U201 cho xe Nissan trên vỏ hộp). Người dùng sẽ hỏi lại nguồn rồi quyết. Chưa tạo trang.
- **22/11/2026:** thêm **ID 8620** Lọc nhiên liệu Ranger 2005-2010 | Asahi AFF-U1158 | 1770A172 – người dùng chọn OEM chính 1770A172 (cùng trang Triton 8347; Pajero Sport 8342 dùng 1770A053). azfilter FC21158 xác nhận Ford Ranger 2.5/3.0 Diesel (WL-T, WLAA, MD30DITC) 2002–2011. Chép nguyên 8347, đổi xe/năm/động cơ, viết lại 3 câu Mitsubishi, sửa alt ảnh; slug `loc-nhien-lieu-ranger-2005-2010` (có năm như các trang lọc nhiên liệu cũ); ảnh chung 8345; Rank Math `Lọc nhiên liệu,Ranger`; ô ẩn OK. ✅ **Đã xuất bản** (người dùng), gõ `1770A172` / `AFFU1158` / `WE0113ZA5A` ra trang.
- **Cách làm "cùng mã Asahi, khác dòng xe" (người dùng chốt 19/11):** chép nguyên trang đã có, chỉ thay dòng xe/năm, dùng chung ảnh; vẫn tra azfilter xác nhận xe trước.
- **Trạng thái:** ✅ Xong cả 10 trang 8577, 8584, 8585, 8595, 8600, 8604, 8608, 8609, 8610, 8611 + 6 trang U201 8612–8617 (tất cả đã xuất bản, có ảnh) – tiếp tục khi người dùng gửi sản phẩm mới.

### 6.8. Làm gợi ý ô tìm kiếm nhanh hơn (20/11/2026) – 🔄 ĐANG LÀM (23/11: web đã cài được plugin)
- **Đo 23/11 (chỉ đọc):** lần đầu gõ 3,1–6,7 s; gõ lại cùng chữ 0,27–0,35 s; admin-ajax rỗng 0,25 s → chậm do câu lệnh tìm kiếm, không phải do WordPress. Mục tiêu người dùng: ~0,3 s. Các cách: (1) thu hẹp form 2644 chỉ Product; (2) FiboSearch Pro; (3) danh sách SP tìm trong trình duyệt (WPCode).
- **Người dùng hỏi:** muốn tra kiểu gợi ý như sbparts/azfilter, cả chữ lẫn số (VD "má phanh vios" phải gợi ý AB-J822).
- **Kiểm tra (chỉ đọc):** Ivory Search form 2644 đã ra đúng cả chữ lẫn mã, gõ thiếu / đảo thứ tự / không dấu / có-không gạch đều ra (kể cả khách chưa đăng nhập). Gõ thừa/sai ký tự không ra (sbparts cũng không). **Vấn đề thật: gợi ý chậm ~3,5–5 giây.**
- **Nguyên nhân:** form 2644 Includes đang tìm cả Post, Page, Attachment (thư viện ảnh/tệp, có tích images/videos/audios/text/pdfs/docs), Featured item, và tìm trong tên + nội dung + mô tả ngắn + `oem_khong_gach`.
- **Đề xuất chờ duyệt:** Bước 1 – chỉ để Product (giữ cách tìm khác); Bước 2 (tuỳ chọn) – bỏ tìm nội dung bài, bổ sung mã có gạch vào ô ẩn. Ghi cấu hình cũ trước khi sửa, đo lại tốc độ và thử lại các mẫu.
- **Trạng thái:** người dùng **gác lại để hỏi ý kiến** – chưa sửa gì. Làm tiếp khi người dùng đồng ý.

---

## Nhật ký thao tác trên website
### 23/11/2026 – Đo tốc độ ô tìm kiếm Ivory Search (chỉ đọc, không sửa gì) – ✅ XONG
- Đo trên trang chủ, vai trò khách chưa đăng nhập, form 2644 (`is_ajax_load_posts`).
- Gõ thật: `0446548210` → 4,0 giây; `má phanh vios` → 4,8 giây (gần hết là chờ máy chủ, tải về chỉ ~1 KB).
- Gửi thẳng lần đầu: `AB-J822` 6,7 s; `j822` 3,1 s; `0446548210` 3,7 s; `loc gio dieu hoa` 5,1 s. **Gõ lại đúng chữ đó lần 2: 0,27–0,35 s** (máy chủ đã nhớ kết quả).
- Mốc so sánh: yêu cầu admin-ajax rỗng (WordPress khởi động) ~0,25 s; trang chủ ~0,5 s; REST `/wp-json/` ~1,6–2 s.
- **Kết luận:** WordPress/hosting không chậm; chậm là do **câu lệnh tìm kiếm** của form 2644 (tìm cả Post/Page/Attachment + nội dung bài + ô ẩn). Cách 1 (thu hẹp phạm vi tìm) có thể giảm nhiều – chờ người dùng chọn cách.

### 22/11/2026 – Bỏ phần trùng giữa CLAUDE.md và 4 skill (người dùng đồng ý) – ✅ XONG
- Quy tắc từ nay chỉ ghi ở `CLAUDE.md` + `.claude/rules/oem-rules.md`; skill chỉ giữ quy trình chi tiết và code, chỗ trùng thay bằng dòng "xem CLAUDE.md mục …".
- `hoathang-tong-quan`: rút gọn còn phần chỉ đường đầu phiên + bảng dự án 6.1 → 6.8 (thêm 6.6, 6.7, 6.8 và cột đối chiếu số mục CLAUDE.md ↔ TIEN-DO.md). Bỏ quy tắc / công nghệ / mục tiêu / thông tin đã chốt (đã có trong CLAUDE.md), bỏ đề xuất cũ "tách CSS" (đã làm 16/11).
- `hoathang-oem`: bỏ bảng nguồn tra và quy tắc Bảng mã OEM bị trùng với oem-rules (giữ HTML mẫu); sửa "máy không có Python"; số cột bảng sửa thành 2/4/8/11 (+ bảng 5 cột Escape ID 3429); thêm bước điền ô ẩn `oem_khong_gach` sau khi sửa mã.
- `hoathang-seo-noi-dung`: mức đạt 85 → ~86; bỏ bước "đổi từ khoá riêng từng trang" (bài học 17/11); quy trình B theo CLAUDE.md 6.5 (mẫu ID 8584, giá để trống, bản nháp); bỏ dòng tiến độ cũ "chưa bắt đầu".
- `hoathang-tim-ma-oem`: bỏ phần Bối cảnh / Quy tắc trùng; bỏ số cũ "~130 SP không có bảng" → trỏ về "Việc còn treo" ở file này. Đoạn code Bước 1-3 giữ nguyên.
- Sửa chỗ trỏ theo: lệnh `day-tien-do` (trỏ CLAUDE.md 1.6 thay vì "tong-quan quy tắc 10"), `README.md`, bảng skill trong `CLAUDE.md` mục 3.
- Bảng tổng quan thêm dòng 6.7 (trước bị thiếu).
- Chưa kiểm tra: skill `hoathang-sua-web-them-san-pham` (đồng bộ từ claude.ai, không có trong thư mục dự án).

### 22/11/2026 – Tách tiến độ khỏi CLAUDE.md (người dùng yêu cầu) – ✅ XONG
- `CLAUDE.md` chỉ giữ nội dung công việc: bỏ dòng "Cập nhật lần cuối"; mục 6 viết lại thành "Quy tắc theo từng việc" (SEO Rank Math, mã OEM, sửa nội dung, ô tìm kiếm, thêm SP mới); sửa mục 1.5, 1.6, 7.
- Mục 6 cũ (tiến độ 6.1 → 6.8) chuyển **nguyên văn** sang phần "Trạng thái chi tiết các dự án" của file này.
- Sửa chỗ trỏ "CLAUDE.md mục 6" trong lệnh tắt `tien-do`, `day-tien-do`, skill `hoathang-oem`, `hoathang-seo-noi-dung`, `hoathang-tim-ma-oem`, `hoathang-tong-quan`, `plugin-hoathang/CLAUDE.md` và bộ nhớ Claude.

### 22/11/2026 – Sửa thông tin cũ trong 3 file (người dùng đồng ý) – ✅ XONG
- Skill `hoathang-tong-quan`: "không có Python" → Python 3.14 + openpyxl (cài 17/11).
- `README.md`: thêm skill `hoathang-tim-ma-oem` và lệnh `/hoathang:day-tien-do` vào sơ đồ.
- `CLAUDE.md` (dự án): rút gọn dòng "Cập nhật lần cuối" chỉ còn việc mới nhất; lịch sử xem mục 6 và TIEN-DO.md.

### 22/11/2026 – Tạo `CLAUDE.md` cho kho plugin (lệnh /init) – ✅ XONG
- File mới `CLAUDE.md` ở gốc kho: giải thích kho = plugin + GitHub, sổ tay chính là `../CLAUDE.md`, `tien-do/CLAUDE.md` chỉ là bản sao, lệnh đọc Excel / thử plugin, cấu trúc skill/lệnh tắt, quy trình đẩy tiến độ.

### 22/11/2026 – Thêm SP mới: Lọc nhiên liệu Ranger 2005-2010 | Asahi AFF-U1158 | 1770A172 (ID 8620) – ✅ ĐÃ XUẤT BẢN
- Chép nguyên trang Triton/L200 ID 8347 (cùng mã 1770A172), chỉ đổi dòng xe/năm/động cơ; viết lại 3 câu riêng Mitsubishi cho Ranger; sửa alt ảnh (ghi nhầm PAJERO SPORT). Người dùng chọn OEM chính 1770A172 và duyệt bản nháp.
- azfilter FC21158 (↔ 1770A053) xác nhận Ford Ranger 06.02–10.07 và 02.06–12.11, 2.5/3.0 Diesel (WL-T, WLAA, MD30DITC).
- Slug `loc-nhien-lieu-ranger-2005-2010`, danh mục 111, ảnh chung 8345, Bảng mã OEM giữ nguyên của 8347, Rank Math từ khoá `Lọc nhiên liệu,Ranger`, ô ẩn 42 mã. Kiểm tra: nội dung/mô tả ngắn/tên lưu đúng, loại SP simple.
- ✅ Người dùng đã xuất bản 22/11. Ô tìm kiếm: gõ `1770A172`, `AFFU1158`, `WE0113ZA5A` đều ra trang Ranger.

### 20/11/2026 – Cập nhật mã OEM mới: tra lại TOÀN BỘ 1.498 SP với azfilter/sbparts – ✅ XONG
- Chạy khô (chỉ đọc): azfilter 990 trang lọc → 959 đủ, 29 nguồn không có dữ liệu, 2 lệch (6225 Lux SA – treo cũ; 3820 Matiz – mã bộ kit `_JT` → bỏ qua). sbparts 508 trang má/guốc phanh → 471 đủ, 25 không có dữ liệu, 12 thiếu.
- Người dùng duyệt "thêm hết" → **đã thêm 11 mã vào 11 trang**: SOUEAST SE003122 (AB-K1157) cho 2271, 2270, 2269, 2268, 2267, 2266, 2265, 2264, 2263, 1927; NiBK PN1322/E cho 4657 Camry 1998-2002. Mỗi trang thêm 1 dòng 8 ô cuối Bảng mã OEM.
- Kiểm tra: lưu đúng 11/11, mô tả ngắn giữ nguyên, web hiện mã 11/11, ô ẩn `oem_khong_gach` 11/11; gõ `SE003122` ra các trang AB-K1157, `PN1322E` ra Camry. VFe34 (4554) vẫn bỏ qua.
- File: `du-lieu-oem/Ma_OEM_moi_azfilter_sbparts_chay_kho_20-11-2026.csv`.

### 20/11/2026 – Kiểm tra ô tìm kiếm (gợi ý chậm) – ⏸ GÁC LẠI, người dùng cần hỏi ý kiến
- Chỉ đọc, KHÔNG sửa gì trên web. Ivory Search (form 2644) tìm được cả chữ lẫn mã: "má phanh vios", "vios má phanh", "ma phanh vios", "AB-J822", "abj822", "j822", "0446548210", "04465 48210"… đều ra (cả khách chưa đăng nhập). Gõ thừa/sai ký tự (`0446548210X`) không ra – sbparts/azfilter cũng không ra.
- Nguyên nhân người dùng thấy "không gợi ý": **gợi ý mất ~3,5–5 giây**. Form 2644 đang tìm cả Post, Page, **Attachment** (ảnh/video/PDF), Featured item + nội dung bài dài.
- Đề xuất (chờ quyết): Bước 1 – Includes chỉ để Product (giữ tên, mô tả ngắn, nội dung, `oem_khong_gach`); Bước 2 (tuỳ chọn) – bỏ tìm nội dung, bổ sung mã có gạch vào ô ẩn. Ghi lại cấu hình cũ trước khi sửa.
- Tham khảo: sbparts bỏ gạch/cách, khớp đầu mã; azfilter gợi ý từ 5 ký tự, dòng "Mã || Hãng || Loại". Menu "Check mã" trên web đang là link `#`.

### 20/11/2026 – Quy tắc mới: từ khoá Rank Math trang lọc gió điều hòa chỉ để "Lọc gió điều hòa" + 6 trang U201 đã xuất bản
- Người dùng: "áp dụng hết". Kiểm tra 8 trang mới làm trước: 8577, 8584, 8585, 8600, 8604 đã đúng sẵn; đổi 3 trang 8609 (CX-30), 8610 (Mazda 6), 8611 (CX-5) → đọc lại 3/3 OK.
- 6 trang AFC-U201 8612–8617: người dùng đã xuất bản, kiểm tra 6/6 publish + ảnh 8590; gõ `1748479` ra Lancer, Outlander, Navara, BT-50, D-Max MU-X, Triton, Transit (+ bản than).
- Các trang lọc gió điều hòa cũ (~221 trang): **người dùng quyết KHÔNG đổi** (20/11).

### 20/11/2026 – Đổi từ khoá Rank Math 6 trang AFC-U201 (8612–8617) thành chỉ "Lọc gió điều hòa"
- Theo yêu cầu người dùng ("Rank math hãy để lọc gió điều hoà thôi"). Lưu bằng REST updateMeta, đọc lại 6/6 = "Lọc gió điều hòa". Mô tả meta giữ nguyên.

### 20/11/2026 – Thêm 6 SP AFC-U201 (1748 479) – BẢN NHÁP, chờ người dùng xuất bản
- Người dùng xác nhận: "nó lắp được vào những dòng xe đó" (dù azfilter + vỏ hộp chỉ ghi Transit + Nissan) → làm 6 trang.
- ID 8612 Triton 2014-2025 · 8613 D-Max MU-X 1.9 2019- · 8614 BT-50 1.9 2019-2025 · 8615 Navara 2015-2023 · 8616 Outlander 2012-2025 · 8617 Lancer 2007-2015. Slug `loc-gio-dieu-hoa-dung-cho-xe-<xe>` (không năm).
- Chép nguyên trang Transit (ID 8584): chỉ đổi tên xe/năm (cả bảng thông số, "Ứng dụng cho …"). GIỮ đúng sự thật: Bảng mã OEM 42 mã của U201, câu "mã OEM chính của Ford", câu "catalogue ghi nhận nhóm mã này cho Ford Transit và một số dòng xe Nissan, Geely, Jetour", kích thước 215×200×30. Giữ 3 chỗ cụt chữ như các trang chép trước. Ảnh chung 8590.
- Rank Math: từ khoá `Lọc gió điều hòa,<Xe>,AFC-U201` + mô tả meta theo mẫu 8584. Ô ẩn chép từ 8584. Kiểm tra 6/6: nội dung + mô tả ngắn lưu = bản nháp.
- Còn lại: người dùng xuất bản → thử ô tìm kiếm.

### 20/11/2026 – AFC-U201 cho 6 dòng xe (Triton, D-Max/MU-X 1.9, BT-50 1.9, Navara, Outlander, Lancer) – ⏸ TẠM DỪNG, chờ người dùng hỏi lại
- azfilter AC22201 (= AFC-U201, 1748 479, 215×200×30 mm) chỉ ghi Ford Transit + các xe Nissan/Infiniti/Geely/Jetour/Chery – KHÔNG có 6 xe trên. Vỏ hộp (người dùng xem) cũng chỉ ghi Transit + Nissan.
- Trên web, 5 xe (D-Max 6151, MU-X 6155, BT-50 6156, Outlander 6158, Lancer 6157) dùng AFC-J507C (AZUMI AC23507, 7803A004, 216×200×30); Navara NP300 6100 dùng AFC-J212C (AC22012, 216×200×32); Triton chỉ có 2010-2015 AFC-J3503.
- Đưa 3 hướng: A không làm / làm AFC-J507 bản thường; B làm U201 ghi "lắp tương đương theo kích thước"; C làm U201 cho xe Nissan trên vỏ hộp. Người dùng: "để tôi hỏi lại sau". CHƯA tạo trang nào.

### 19/11/2026 – Thêm 2 SP mới AFC-J001: Mazda 6 2014-2023 (ID 8610) và CX-5 2013-2023 (ID 8611) – ✅ HOÀN THÀNH (người dùng xuất bản; kiểm tra 20/11: publish 2/2, ảnh 8593, gõ `KD4561J6X` / `AFC-J001` ra cả 6 trang J001/J001C)
- azfilter AC25001 (= AFC-J001): CX-5 09.11 → nay, Mazda 6 08.12 → nay → khớp.
- Chép nguyên trang Mazda 3 2014-2019 (ID 8577), chỉ đổi dòng xe/năm (Mazda 3 → Mazda 6 / CX-5; 2014–2019 → 2014–2023 / 2013–2023). Giữ câu "nhóm mã này cho Mazda 3 / Axela, Mazda 6 / Atenza và CX-5". Ảnh chung 8593, danh mục 111. Slug `loc-gio-dieu-hoa-dung-cho-xe-mazda-6`, `…-cx-5`.
- Rank Math: từ khoá `Lọc gió điều hòa,<Xe>,AFC-J001` + mô tả meta (kèm 233×209×31 mm). Ô ẩn chép từ 8577 (13 mã). Nội dung + mô tả ngắn lưu = bản nháp (2/2).

### 19/11/2026 – Thêm SP mới: Lọc gió điều hòa dùng cho xe CX-30 2.0 2021-2025 | Asahi AFC-J504 | BDGF-61-J6X (ID 8609) – ✅ HOÀN THÀNH (người dùng xuất bản; kiểm tra: publish, ảnh 8586, gõ `BDGF61J6X` / `AFC-J504` ra trang CX-30 + Mazda 3 + 2 bản than)
- azfilter AC25004 (= AFC-J504): Mazda CX-30 03.19~, máy 2.0L PE-VPS → khớp. Mã chéo giống trang Mazda 3 (8585): BDGF-61-J6X, B0J8-V9-030, BDGG-61-J6X-9A, BDTS-61-J6X.
- Theo yêu cầu người dùng: chép nguyên trang Mazda 3 (ID 8585), chỉ đổi dòng xe/năm (Mazda 3 1.5 2.0 → CX-30 2.0, 2019–2025 → 2021–2025, "Ứng dụng cho Mazda 3" → "Ứng dụng cho CX-30"). Giữ câu "nhóm mã này cho Mazda 3, CX-30, CX-5 và CX-50". Ảnh chung 8586, danh mục 111, slug `loc-gio-dieu-hoa-dung-cho-xe-cx-30-2-0`.
- Rank Math: từ khoá `Lọc gió điều hòa,CX-30,AFC-J504` + mô tả meta. Ô ẩn chép từ 8585 (5 mã). Nội dung + mô tả ngắn lưu = bản nháp.

### 19/11/2026 – Thêm SP mới: Lọc gió động cơ dùng cho xe Creta 1.6 2015-2018 | Asahi AFA-K1010 | 28113-A0200 (ID 8608) – ✅ HOÀN THÀNH (người dùng xuất bản; kiểm tra: publish, ảnh 8598, gõ `28113A0200` / `28113-A0200` ra Creta + Seltos)
- azfilter A11010: Hyundai Creta 07.15–06.18 PA016, máy 1.6L D4FB → khớp. Mã chéo 28113-A0200, 28113-A5800 (giống trang Seltos 8595).
- Theo yêu cầu người dùng: chép nguyên trang Seltos 1.4 (ID 8595), chỉ đổi dòng xe/năm (Seltos 1.4 → Creta 1.6, 2020 trở đi → 2015-2018). Ảnh đại diện dùng chung 8598, danh mục 111. Slug `loc-gio-dong-co-dung-cho-xe-creta-1-6`.
- Rank Math: từ khoá `Lọc gió động cơ,Creta 1.6,AFA-K1010` + mô tả meta. Ô ẩn: `AFAK1010 28113A0200 28113A5800`.
- Kiểm tra: nội dung + mô tả ngắn lưu = bản nháp (WordPress chỉ bỏ dấu `;` cuối 1 thuộc tính style), không còn "Seltos 1.4".

### 19/11/2026 – Xử lý 2 việc treo (người dùng duyệt "làm cả 2 việc đi")
- **Đổi slug trang 8577** (Mazda 3 2014-2019 AFC-J001): `loc-gio-dieu-hoa-dung-cho-xe-mazda` → **`loc-gio-dieu-hoa-dung-cho-xe-mazda-3`** (REST, chỉ đổi slug). Kiểm tra: nội dung/tiêu đề/ảnh/trạng thái giữ nguyên; link cũ tự chuyển hướng sang link mới (200).
- **Sửa kích thước trang 6337** (than hoạt tính Mazda 3 2020-2025 AFC-J504C) theo azfilter AC25004C (207×200×49/25 mm): thay "203"→"207" (3 chỗ) và "40/22"→"49/25" (3 chỗ) trong mô tả; mô tả ngắn và phần khác giữ nguyên, nội dung lưu = bản cũ + 6 chỗ sửa; trang công khai không còn "203". Mô tả meta Rank Math trống – không có số cần sửa.

### 19/11/2026 – Thêm SP mới: Lọc gió điều hòa dùng cho xe VF3 | Asahi AFC-V331 | BIN 34036070 (ID 8604) – ✅ HOÀN THÀNH (người dùng tự chèn ảnh + xuất bản; kiểm tra: publish, ảnh đại diện 8607, ô ẩn đủ mã)
- Web đã có bản than **AFC-V331C** VF3 (ID 6089) cùng OEM. **azfilter KHÔNG có dữ liệu** BIN 34036070 → không có mã chéo, không có kích thước.
- Người dùng chọn: **bỏ phần kích thước**, **không ghi năm**, giữ 3 chỗ cụt chữ. Chỉ 1 mã OEM → không tạo bảng 8 cột (luật), chỉ bảng nhỏ ASAHI / VINFAST.
- Slug `loc-gio-dieu-hoa-dung-cho-xe-vf3`. Rank Math + ô ẩn `AFCV331 BIN34036070` OK, nội dung lưu khớp bản duyệt.

### 19/11/2026 – Thêm SP mới: Lọc gió điều hòa Xpander 2019- | Asahi AFC-J3005 | 7850A002 (ID 8600) – ✅ HOÀN THÀNH (người dùng tự chèn ảnh + xuất bản; kiểm tra: publish, ảnh đại diện 8603)
- Web đã có **AFC-J304** Xpander 2018-2025 (ID 6191) cùng OEM 7850A002 → người dùng xác nhận **AFC-J3005 là mã Asahi khác, tạo trang riêng**.
- azfilter: 7850A002 ↔ AZUMI AC23304, 180×178×18 mm, 16 mã (Mitsubishi, Citroen, Hyundai/Kia, Nissan, Peugeot) – khớp bảng trang 6191.
- Chép y mẫu 8584 (giữ 3 chỗ cụt chữ), lọc thường, gợi ý bản than AFC-J304C (ID 6222). Slug `loc-gio-dieu-hoa-dung-cho-xe-xpander`. Rank Math + ô ẩn (16 mã) OK, nội dung lưu khớp bản duyệt.

### 19/11/2026 – Thêm 2 sản phẩm mới – ✅ HOÀN THÀNH
- **Người dùng tự chèn ảnh, hoàn thiện và xuất bản cả 2 trang.** Kiểm tra lại: 8585 và 8595 đều `publish`, có ảnh đại diện (8586, 8598) và ảnh trong bài; mọi mã trong bảng OEM đều có trong ô ẩn `oem_khong_gach`.
- **ID 8585 – Lọc gió điều hòa dùng cho xe Mazda 3 1.5 2.0 2019-2025 | Asahi AFC-J504 | BDGF-61-J6X**
  - Người dùng ghi "AFC-U504" → web đã có bản than AFC-J504C (ID 6337) cùng OEM → người dùng xác nhận mã đúng **AFC-J504**.
  - azfilter: BDGF-61-J6X ↔ AZUMI AC25004, 207×200×49/25 mm, 4 mã Mazda (BDGF-61-J6X, B0J8-V9-030, BDGG-61-J6X-9A, BDTS-61-J6X); ứng dụng Mazda 3, CX-30, CX-5, CX-50.
  - Chép y mẫu 8584 (giữ 3 chỗ cụt chữ theo người dùng chọn). Slug `loc-gio-dieu-hoa-dung-cho-xe-mazda-3-1-5-2-0`. Rank Math + ô ẩn OK, nội dung lưu khớp bản duyệt.
  - Lưu ý: trang 6337 (AFC-J504C) ghi 203×200×40/22 mm – khác azfilter, chưa sửa.
- **ID 8595 – Lọc gió động cơ dùng cho xe Seltos 1.4 2020- | Asahi AFA-K1010 | 28113-A0200**
  - Người dùng ghi "AFC-K1010" rồi sửa lại **AFA-K1010** (28113 là lọc gió động cơ).
  - azfilter: 28113-A0200 ↔ AZUMI A11010, 267×146×55 mm, 2 mã (28113-A0200, 28113-A5800); ứng dụng Kia Seltos, K3/Cerato/Forte, Cee'd, Hyundai Creta, Elantra/Avante, i30.
  - Người dùng chọn: **bố cục 8584 đổi sang lọc gió động cơ**, viết đủ câu (không cụt chữ), năm để mở "2020-". Slug `loc-gio-dong-co-dung-cho-xe-seltos-1-4`, filter-sys 81. Rank Math + ô ẩn OK.

### 19/11/2026 – Thêm sản phẩm mới: Lọc gió điều hòa Transit 2014-2021 | Asahi AFC-U201 | 1748 479 (ID 8584) – mẫu SEO chuẩn lọc gió điều hòa
- Người dùng gửi "AFC-U201 cho Triton 14-25, OEM 1748 479" → azfilter: 1748 479 (FORD) ↔ AZUMI AC22201C, ứng dụng Ford Transit / Nissan / Geely / Jetour – không có Triton, cũng không có D-MAX/MU-X (D-MAX dùng AFC-J507C). Người dùng chọn làm trang **Transit 2014-2021**.
- Dựng nội dung từ trang mẫu 8577; Bảng mã OEM 8 cột 42 mã lấy thẳng từ azfilter (khớp 42/42 với trang AFC-U201C ID 6043). Tạo Bản nháp, Rank Math `Lọc gió điều hòa,Transit,AFC-U201` + mô tả meta, ô ẩn 42 mã.
- Người dùng tự sửa giảm lặp từ khoá rồi **chốt trang này làm mẫu SEO chuẩn lọc gió điều hòa** (CLAUDE.md 6.7). 3 chỗ cụt chữ ("khi chọn cho Transit", "là l dùng…", "6. Dấu hiệu cần kiểm tra hoặc") người dùng chọn giữ nguyên.
- Xuất bản 19/11: `/san-pham/loc-gio-dieu-hoa-dung-cho-xe-transit/`, ảnh đại diện 8578 (dùng chung với Mazda 3, người dùng xác nhận). Nội dung sau xuất bản = bản người dùng sửa. Gõ `1748479` ở ô tìm kiếm → trang mới hiện đầu tiên.
- Còn: trang 8577 slug thành `loc-gio-dieu-hoa-dung-cho-xe-mazda` (mất số 3) – chờ người dùng trả lời.

### 19/11/2026 – Thêm sản phẩm mới: Lọc gió điều hòa Mazda 3 2014-2019 | Asahi AFC-J001 | KD45-61-J6X (ID 8577)
- Kiểm tra trước: web chưa có AFC-J001 (chỉ có bản than hoạt tính AFC-J001C: ID 6300 Mazda 3, 6301 CX-5, 6305 Mazda 6). azfilter.jp: AFC-J001 không có dữ liệu; KD45-61-J6X → AZUMI AC25001 (catalogue/285174), 12 mã chéo, kích thước 233×209×31 mm.
- Viết bản nháp theo mẫu 6300 (bản nháp: `du-lieu-seo/Ban_nhap_SP_AFC-J001_Mazda3_19-11-2026.html`), người dùng duyệt → tạo SP ở Bản nháp: danh mục Asahi (111), nhóm lọc (82), giá để trống; Bảng mã OEM 8 cột 12 mã (4 dòng × 8 ô); Rank Math từ khoá `Lọc gió điều hòa,Mazda 3,AFC-J001` + mô tả meta; ô ẩn `oem_khong_gach` 13 mã.
- Người dùng tự sửa: slug bỏ năm (`/san-pham/loc-gio-dieu-hoa-dung-cho-xe-mazda-3/`), mục 5 → "5. Bảng mã OEM", mục 8 thêm "lọc gió điều hòa", thêm link partsouq cuối bài, chèn ảnh (ID 8578) đầu bài → đã ghi nhớ làm mẫu cho trang SP mới (CLAUDE.md mục 6.7).
- Xuất bản 19/11: nội dung sau xuất bản = nội dung người dùng sửa; gõ `KD4561J6X` vào ô tìm kiếm trang chủ → trang mới hiện đầu tiên.
- Còn lại: chưa đặt **Ảnh sản phẩm** (ảnh đại diện) → danh sách/tìm kiếm chưa có hình nhỏ; ảnh trong bài chưa có chữ thay thế (alt).

### 17/11/2026 (khuya) – Cài Python cho máy làm việc
- Cài **Python 3.14.10** (bộ cài chính thức python.org, chữ ký số hợp lệ) cho tài khoản Admin, thêm vào PATH; cài thư viện `openpyxl` 3.1.5.
- Mục đích: làm công cụ ra **đơn bán hàng / báo giá** (50–60 đơn/ngày) từ file Excel.
- Còn lại: chờ người dùng gửi mẫu đơn, mẫu báo giá, bảng giá và thông tin công ty.

### 17/11/2026 (khuya) – Sửa trang 2257 Sorento sau; 7797 Xpander chờ người dùng
- 2257: tra lại sbparts → không phải bảng nhầm, chỉ thiếu mã; thêm 40 mã, sửa nhãn 48413380A0 HYUNDAI→SSANGYONG. Kiểm tra OK, ô ẩn OK.
- 7797 Lọc xăng Xpander: AFF-J5015 / PE01-13-ZE0 là lọc xăng Mazda (trùng 7796, 7793) – người dùng quyết để nguyên (17/11).

<!-- Mỗi lần thao tác trên web: thêm 1 mục MỚI NHẤT LÊN ĐẦU. Ghi: ngày – làm gì – trang (ID) – kết quả kiểm tra – còn lại gì. -->
### 17/11/2026 (khuya) – OEM lọc dầu hộp số: kiểm tra lần đầu 208 trang
- Tra azfilter: 200 đủ, 4 trang thiếu 1 mã, 4 trang nguồn không có dữ liệu (8526, 3751, 3746, 3715). Mô tả đúng loại hàng.
- Người dùng duyệt → đã thêm: 3305 Swift (+SUZUKI 26445-79C10-000); 2592 LC100, 2596 Fortuner, 2435 Prado 150 (+GM 97207143).
- Kiểm tra: lưu đúng 4/4, web hiện mã, bảng đúng số ô; ô ẩn 4/4.
- File: `du-lieu-oem/Loc_dau_hop_so_kiem_tra_OEM_chay_kho_17-11-2026.csv`.

### 17/11/2026 (khuya) – Sửa mô tả 81 trang lọc xăng/lọc nhiên liệu ghi nhầm "lọc dầu hộp số"
- Người dùng duyệt cách A, xem 2 trang mẫu (3083, 3163) rồi cho làm tiếp.
- Thay khối cuối bài bằng nội dung đúng loại hàng: 48 lọc xăng, 33 lọc nhiên liệu (ID 3083–3251).
- Kiểm tra: lưu đúng 81/81, phần trên/mô tả ngắn/tiêu đề giữ nguyên; trang công khai không còn "dầu hộp số".
- File: `du-lieu-oem/Trang_loc_xang_mo_ta_ghi_nham_loc_dau_hop_so_17-11-2026.csv`. Còn: 7797 Xpander bảng mã Mazda, 2257 Sorento sau.

### 17/11/2026 (khuya) – OEM Đợt 5 lọc gió điều hoà: kiểm tra lại lần đầu 221 trang
- Chạy khô: 205 đủ, 5 trang thiếu 27 mã, 11 trang azfilter không có dữ liệu (VinFast, Lux, Peugeot).
- Người dùng duyệt → đã thêm: 6704 Orlando, 6703 Spark (+2 mã BYD); 6705 Cruze, 6699 Fadil (+11 mã BYD/Dongfeng/Opel); 6111 Innova (+TOYOTA 87139-YZZ78).
- Kiểm tra: lưu đúng 5/5, web hiện đủ, bảng đúng số ô; điền lại ô ẩn 5/5.
- File: `du-lieu-oem/Dot5_loc_gio_dieu_hoa_kiem_tra_lai_chay_kho_17-11-2026.csv`. Đã kiểm tra lại xong 5 đợt; guốc phanh (đợt 6) đã kiểm 15/11.

### 17/11/2026 (khuya) – OEM Đợt 4 lọc gió động cơ: kiểm tra lại 187 trang (chỉ đọc)
- Tra azfilter: 184/184 đủ mã, không cần thêm; 3 trang nguồn không có dữ liệu (6880, 6288, 6244). Mô tả không ghi nhầm loại hàng.
- File: `du-lieu-oem/Dot4_loc_gio_kiem_tra_lai_17-11-2026.csv`. Tiếp theo: Đợt 5 lọc gió điều hoà.

### 17/11/2026 (khuya) – OEM Đợt 3 lọc nhiên liệu: kiểm tra lại 162 trang (chỉ đọc)
- Tra azfilter: 161/161 đủ mã, không cần thêm; 7789 K3/Cerato azfilter không có dữ liệu.
- Phát hiện (chưa sửa, chờ người dùng): 81 trang lọc xăng Azumi (ID 3083–3251) mô tả ghi nhầm "Bộ lọc dầu hộp số tự động AZUMI…"; 7797 Lọc xăng Xpander có bảng mã Mazda PE01-13-ZE0.
- File: `du-lieu-oem/Dot3_loc_nhien_lieu_kiem_tra_lai_17-11-2026.csv`.

### 17/11/2026 (khuya) – OEM Đợt 2 lọc dầu: kiểm tra lại 164 trang
- Chạy khô: 161 đủ, 3 trang thiếu 1 mã. Người dùng duyệt → đã thêm: 6039 Peugeot 3008 (+PEUGEOT 92365780), 7429 Peugeot 2008 và 7436 Traveller (+FIAT 5984044).
- Kiểm tra: lưu đúng 3/3, web hiện mã, bảng đúng số ô; điền lại ô ẩn 3/3.
- File: `du-lieu-oem/Dot2_loc_dau_kiem_tra_lai_chay_kho_17-11-2026.csv`. Còn: 208 trang lọc dầu hộp số chưa kiểm; vài ô mã lạ dạng `41500 0000` nghi hỏng.

### 17/11/2026 (khuya) – OEM: kiểm tra lại theo thứ tự đợt – Đợt 1 má phanh
- Chạy khô (chỉ đọc) 418 trang má phanh, tra sbparts.jp bằng mã OEM gốc trên trang: 383 đủ, 9 trang thiếu 27 mã (nhóm A), 1 trang nghi bảng sai (2257 Sorento sau), 4554 VFe34 bỏ qua, 24 trang sbparts không có dữ liệu.
- Người dùng duyệt → **đã thêm 27 mã vào 9 trang**: 3122, 2221, 2218, 2216, 2214, 1914 (+KASHIYAMA D11268, D11283); 2215, 2207 (+7 mã, bảng 11 cột); 1992 (+KASHIYAMA D-11280).
- Kiểm tra: nội dung lưu đúng 9/9, trang công khai đủ mã, mọi dòng bảng đúng số ô; điền lại ô ẩn `oem_khong_gach` 9/9.
- File: `du-lieu-oem/Dot1_ma_phanh_kiem_tra_lai_chay_kho_17-11-2026.csv`.
- Còn lại: 2257 Sorento sau chờ người dùng xem; tiếp theo Đợt 2 lọc dầu.

### 17/11/2026 (tối) – Dừng đổi từ khoá SEO, khôi phục từ khoá cũ 104 trang- Chấm lại công bằng 60/109 trang đã lưu: 55 giảm (~2 điểm), 5 bằng, 0 tăng. Chạy mới 24 SP: 0 tăng.- Người dùng quyết dừng hẳn (không chạy 375 SP còn lại) và khôi phục. Đã đặt lại từ khoá cũ + điểm cũ cho 104 trang (55 giảm + 49 chưa chấm), đọc lại 104/104 đúng.- Giữ từ khoá mới: 5926, 6385, 6481, 6857, 8384 (bằng điểm). Không đổi nội dung bài.- File: `du-lieu-seo/SEO_khoi_phuc_tu_khoa_ket_qua_17-11-2026.csv`.



### 17/11/2026 – Đổi từ khoá SEO (tiếp) – phát hiện lỗi đo, TẠM DỪNG
- Lần chạy 16–17/11 so điểm không công bằng: từ khoá cũ chấm lúc trang vừa tải (bị trừ 5 điểm Content AI), từ khoá mới chấm sau khi phân tích lại → mới được cộng oan 5. Đo lại 8384 (80→85 thực 85=85), 6459 (81→84 thực 86→84), 6486 (84→87 thực 89→87).
- Người dùng chọn: chấm lại công bằng 108 trang đã lưu → CSV → duyệt → khôi phục từ khoá cũ trang bị giảm; chạy tiếp SP còn lại bằng cách đo mới.
- Đã chạy 24 SP bằng cách mới: 1 lưu (5926, bằng điểm), 2 có sẵn, 21 giữ nguyên. Chấm lại 2/108 (6385 bằng, 6459 giảm). Tạm dừng theo yêu cầu người dùng.
- File: `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_lan2_17-11-2026.csv` (còn 375 SP). Còn lại: chấm lại 106 trang, duyệt khôi phục, chạy 375 SP.
### 17/11/2026 – Xoá 6 sub-agent (theo yêu cầu người dùng)
- Xoá thư mục `.claude/agents/` (oem-checker, oem-updater, seo-auditor, seo-writer, product-prep, product-uploader) – trở về cách làm như lúc đầu (Claude tự làm theo skill + quy tắc, không qua trợ lý con).
- Bỏ các dòng nhắc sub-agent trong `CLAUDE.md` (mục 1.7, 3, 7) và `.claude/rules/oem-rules.md`. Quy tắc chạy khô → người dùng duyệt → mới sửa web vẫn giữ nguyên.
- Không đụng tới website.
### 17/11/2026 – Đổi từ khoá SEO sản phẩm (tiếp) – TẠM DỪNG ở 214/613
- Chạy tiếp từ 105 → **214/613** SP (cùng cách đã duyệt: chỉ lưu khi điểm mới ≥ cũ, chỉ đổi từ khoá + điểm). Tổng: **101 tăng điểm**, 7 điểm bằng, 106 giữ nguyên, 0 lỗi. Người dùng bảo tạm dừng.
- Kết quả từng trang: `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_17-11-2026.csv` (399 dòng "Chưa làm").
- Bài học kỹ thuật: (1) trang sửa có tài nguyên phụ bị treo → KHÔNG chờ sự kiện `onload` của iframe, chờ `rankMathEditor` + `wp.data.select('rank-math')` sẵn sàng; (2) iframe cùng tên miền dùng chung sức xử lý của tab → chạy **2 trang song song** là tốt nhất (4 trang chậm hơn, 3 trang làm tab đơ); (3) máy khoá màn hình làm Chrome chạy chậm/dừng.
- Còn lại: 399 SP chưa làm; 183 SP ít nội dung cần viết bài; 26 trang/bài chọn từ khoá riêng.

### 16/11/2026 (tối) – Đổi từ khoá chính riêng cho sản phẩm (SEO 6.1, phương án A) – TẠM DỪNG
- Người dùng chọn **phương án A**: lấy ~86 điểm làm mức đạt, đặt từ khoá chính riêng cho từng SP; **duyệt 613 SP** nhóm 1 ("chỉ làm những sản phẩm"). Chạy khô: `du-lieu-seo/SEO_tu_khoa_moi_chay_kho_16-11-2026.csv` (613 đổi từ khoá; 183 SP ít nội dung <300 chữ – cần viết bài; 26 trang/bài – để riêng).
- Từ khoá mới = tên SP phần trước dấu phẩy/năm, VD "Lọc nhiên liệu dùng cho xe D-MAX"; giữ từ khoá phụ cũ.
- Cách làm: mở ngầm trang sửa (iframe), chấm Rank Math với từ khoá cũ rồi mới (chờ mục Content AI tải), **chỉ lưu khi điểm mới ≥ điểm cũ**, lưu từ khoá + điểm qua REST `rankmath/v1/updateMeta`; không đụng nội dung.
- **Người dùng bảo dừng, để lúc khác làm** → dừng ở **105/613**: 45 đã lưu tăng điểm, 6 đã lưu điểm bằng, 54 giữ nguyên (từ khoá mới thấp hơn – thường do đường dẫn/alt ảnh không chứa từ khoá, mật độ thấp), 0 lỗi. Kết quả từng trang: `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_16-11-2026.csv` (cột Kết quả "Chưa làm" = 508 trang còn lại).
- Lưu ý: khi lưu, điểm trong danh sách đổi từ điểm cũ (85–86, chấm bằng bản Rank Math cũ) sang điểm thật hiện tại (thường ~80–85).
- Còn lại: 508 SP chưa làm; 183 SP ít nội dung cần viết bài; 26 trang/bài chọn từ khoá riêng.

### 16/11/2026 – Kiểm tra SEO Rank Math toàn web + làm thử 1 trang
- Quét điểm Rank Math 1.482 SP + 18 trang + 8 bài (chỉ đọc): **604 SP dưới 87 điểm** (308 trang 85, 264 trang 86, 18 trang 80–84, 14 trang 53–57), **218 chưa đặt từ khoá** (192 SP, 18 trang, 8 bài). File: `du-lieu-seo/SEO_duoi_87_diem_16-11-2026.csv`.
- Nguyên nhân chính: từ khoá chính quá chung ("má phanh trước" 156 trang, "lọc gió động cơ" 111…) → trùng giữa các trang.
- **Phát hiện quan trọng:** điểm trong danh sách là điểm lưu lần cuối (phiên bản Rank Math cũ). Mở lại trình soạn thảo, Rank Math hiện tại chấm thêm mục Content AI (0/5) → trang đang ghi 90 (VD 8367) chấm lại thực tế chỉ 86. Mẫu bài hiện tại tối đa ~86: luôn mất TOC 2, ảnh/video 4, độ dài 4, Content AI 5.
- Làm thử (người dùng duyệt): **ID 8387** Lọc xăng Innova – đổi từ khoá chính "Lọc xăng" → "lọc xăng dùng cho xe Innova" (giữ từ khoá phụ) qua REST `rankmath/v1/updateMeta`; nội dung không đổi (đã so khớp). Điểm thật 86 (đã ghi đúng 86; lúc đầu lỡ ghi 90 do Content AI chưa tải – đã sửa).
- Chưa làm: ID 8308 Elantra (thêm link hoathang.vn) – tạm dừng vì không đạt 90 được. ID 7813 Vios: trang chỉ có bảng OEM, cần viết bài.
- Còn lại: chờ người dùng chọn hướng (chấp nhận mức 86 / thêm ảnh / Content AI).

### 16/11/2026 – Tách luật mã OEM ra file riêng `.claude/rules/oem-rules.md`
- Tạo `.claude/rules/oem-rules.md` (Claude tự đọc đầu mỗi phiên): dữ liệu mã OEM, nguồn tra sbparts/azfilter, trước khi sửa web, Bảng mã OEM (mẫu ID 3679, 2/4/8/11 cột), ô ẩn `oem_khong_gach`.
- `CLAUDE.md`: bỏ các dòng luật OEM ở mục 1.7, 3, 6.3, 6.4, thay bằng dòng trỏ tới file mới; phần tiến độ giữ nguyên. Bản sao ở `tien-do/oem-rules.md`.
- Không thao tác trên website.

### 16/11/2026 – Tra lại 55 trang chưa có Bảng mã OEM (chỉ đọc)
- **Làm gì:** đọc nội dung 55 trang (REST, chỉ đọc); tra lại azfilter.jp / sbparts.jp bằng **cả mã Asahi và mã OEM ghi trên trang** (lần trước chỉ tra mã Asahi).
- **Kết quả:** không có mã mới nào. 23 trang: azfilter chỉ có đúng 1 mã OEM của trang; 14 trang: bài đã có bảng mã chéo khác (tạo thêm sẽ trùng); 18 trang: nguồn không có dữ liệu (5 trang lọc xăng 7789, 7806, 7808, 7809, 7810 không có bảng nào). Đối chứng: sbparts vẫn tra được mã 04465-48210 bình thường.
- **Không sửa website.** File: `du-lieu-oem/Tra_lai_55_trang_chua_co_bang_16-11-2026.csv` (cột Đề xuất / Duyệt).
- **Người dùng quyết:** để nguyên 55 trang, không tạo bảng 1 mã. Chỉ làm lại khi có nguồn mã mới.

### 16/11/2026 – Bổ sung quy tắc từ ghi chú Zalo vào CLAUDE.md
- **Làm gì:** thêm "Mục tiêu ưu tiên" (OEM/thông số/SEO chính xác tuyệt đối) ở đầu phần 1; mục 1.7 thêm **Copy-First** (không ghi đè file dữ liệu gốc, lưu ra file mới) và **mã OEM giữ dạng chữ** (giữ số 0 đầu, không thành `4,05E+09`). Người dùng chọn 3 ý này; không thêm `/clear` và "báo cáo bằng bảng Markdown".
- **Không đụng website.**

### 16/11/2026 – Thêm "Quy tắc dữ liệu" vào sổ tay (CLAUDE.md mục 1.7)
- **Làm gì:** gộp quy tắc chuẩn hoá dữ liệu vào `CLAUDE.md` mục 1.7: không bịa dữ liệu; ô thiếu trong CSV để trống, trong bản nháp ghi `[CẦN BỔ SUNG]`, không đưa `N/A` lên web; file kết quả xuất CSV dấu phẩy, UTF-8 có BOM, có cột Duyệt/Kết quả; không lưu lại CSV mã OEM bằng Excel (tránh lỗi `4,05E+09`). Mục 3 trỏ về 1.7.
- **Sửa file dữ liệu:** thêm BOM UTF-8 cho `du-lieu-oem/Nhom_B_so_sanh_16-11-2026.csv` và `Nhom_B_loai1_chay_kho_16-11-2026.csv` (nội dung không đổi, +3 byte) – trước đó Excel mở dễ lỗi tiếng Việt.
- **Không đụng website.**

### 16/11/2026 – Bổ sung sổ tay CLAUDE.md (/init)
- Thêm dòng mở đầu chuẩn của Claude Code; mục 3 thêm **6 Sub-agent** và **"Cách AI thao tác trên web"** (lưu bài bằng form#post, ô excerpt, REST/ACF, CSS bổ sung, bảng OEM 2/4/8/11 cột, giới hạn công cụ, cách tra sbparts/azfilter, đọc Excel).
- Mục 7 thêm các file CSV, thư mục `tien-do/`, `.claude/agents/`; đổi thứ tự 6.5 trước 6.6; sửa 1.5 trỏ đúng mục 6.
- Không xoá nội dung cũ. Không thao tác web.

### 16/11/2026 – Ẩn dòng "[rt_reading_time] phút đọc" ở đầu bài viết
- Dòng này do theme in ra ở đầu **cả 8 bài viết** (không nằm trong nội dung bài); không có plugin đếm thời gian đọc, không sửa được file theme (403).
- Đã thêm vào **cuối** *Giao diện → Tuỳ biến → CSS bổ sung* (giữ nguyên CSS cũ): `#readTime, span:has(> #readTime) { display: none !important; }`. Muốn hiện lại thì xoá 2 dòng đó.
- Kiểm tra trang Giới thiệu (ID 712): không còn chữ "[rt_reading_time] phút đọc".
- 971 link sang partsouq.com trong mô tả SP: người dùng quyết **không làm**.

### 16/11/2026 – 8 hạng mục: xoá điểm tự chấm + đuôi utm_source=chatgpt.com
- **Mục 6 – đuôi link:** xoá `?utm_source=chatgpt.com` ở **3.105 link / 1.155 sản phẩm** (1.740 trong mô tả, 1.365 trong mô tả ngắn). Chỉ cắt đuôi, chữ giữ nguyên. Kiểm tra từng SP: nội dung sau = nội dung trước bỏ đuôi, trạng thái giữ nguyên; 1.155/1.155 OK, 0 lỗi; quét lại SP + trang + bài: còn 0.
- **Mục 5 – điểm tự chấm:** web không còn "4.8/5". Xoá dữ liệu bình chọn kk Star Ratings (người dùng chọn, không lấy lại được) ở bài Giới thiệu ID 712 (đang hiện 4.6/5 – 9 bình chọn) và SP MG ZS ID 3553 (khai báo sao 5/5 gửi Google). Giờ trang Giới thiệu hiện khung trống "Rate this post"; MG ZS hết khai báo sao. Nội dung 2 trang không đổi.
- Phát hiện thêm (chờ người dùng): `[rt_reading_time] phút đọc` hiện nguyên chữ trên trang Giới thiệu; 971 link trong mô tả SP trỏ sang partsouq.com.

### 16/11/2026 – Thêm 669 mã OEM cho 14 trang nhóm B loại 1
- Trang: 6705, 6699 (+19 mã/trang), 6384 (+12), 4394 (+4), 4391 (+8), 4335–4339 (+106 mã/trang), 3128 (+5), 2215, 2207 (+29 mã/trang), 1221 (+14). Nguồn azfilter (lọc) / sbparts (phanh), theo mã gốc ghi trên từng trang. Không xoá mã cũ.
- Sự cố đã xử lý: 2215, 2207 có bảng 11 cột (cột trống xen giữa) – lần lưu đầu dòng mới có 12 ô, đã dựng lại đúng mẫu và lưu lại ngay.
- Kiểm tra 14/14: nội dung lưu đúng, phần ngoài bảng không đổi, mọi dòng đúng số ô, trang công khai đủ mã. Ô ẩn 14/14; gõ `26669013` ra Aveo/Cruze/Fadil.
- Còn lại: 7 ô lỗi Excel (4394, 4391, 4335–4339), 6225 Lux SA.

### 16/11/2026 – Thay bảng OEM sai cho 4 trang nhóm B (loại 2)
- **1916** Má phanh trước Morning 2011-2017 (AB-K2326): bỏ bảng 88 mã má phanh sau (giống trang Sportage 2271), thay **25 mã** má phanh trước theo sbparts, mã gốc 58101-1YA00 đứng đầu.
- **6095, 6098, 6099** Lọc gió điều hoà than hoạt tính AFC-K009C: bỏ bảng 6 mã Sedona AFC-K324, thay **7 mã** theo azfilter (mã gốc của từng trang đứng đầu).
- Kiểm tra 4/4: nội dung lưu đúng, phần ngoài bảng không đổi, trang công khai có mã mới và hết mã cũ. Điền lại ô ẩn 4/4; gõ `581011YA10` ở ô tìm kiếm trang chủ ra trang Morning.
- Còn lại: loại 1 (14 trang thiếu mã), 7 ô lỗi Excel, 6225 Lux SA.

### 16/11/2026 – So sánh 22 trang nhóm B (chỉ đọc, chưa sửa web)
- File: `du-lieu-oem/Nhom_B_so_sanh_16-11-2026.csv` (chưa đưa lên kho vì nằm ngoài plugin; tóm tắt ở `tien-do/tien-do-oem.md`).
- **Loại 1 – 14 trang bảng đúng sản phẩm Asahi:** 6705, 6699, 6384, 4394, 4391, 4335–4339, 3128, 2215, 2207, 1221. Bảng khớp 90–100% với một mã gốc khác của cùng mã Asahi; chỉ thiếu mã của mã gốc ghi trên trang.
- **Loại 2 – 4 trang nghi chép nhầm bảng:** 1916 (Morning má phanh trước) mang bảng má phanh sau Sportage (ID 2271); 6095, 6098, 6099 (AFC-K009C) mang bảng lọc gió điều hoà Sedona AFC-K324.
- **Loại 3:** 6225 (Lux SA) cần người biết hàng xem; 3378–3380 nguồn chỉ có mã bộ kit `_K1/_K2` → bỏ qua.
- Còn lại: chờ người dùng duyệt cách xử lý.

### 16/11/2026 – Quy tắc mới: luôn cập nhật CLAUDE.md và đẩy lên GitHub
- Người dùng yêu cầu: sau mỗi việc **luôn cập nhật `CLAUDE.md`** và tải lên GitHub.
- Đã sửa: `CLAUDE.md` mục 1.6 (thêm bước cập nhật CLAUDE.md), lệnh `/hoathang:day-tien-do`, hook `SessionEnd` (tự chép `CLAUDE.md` vào kho khi đóng phiên).
- Từ nay bản sao sổ tay nằm ở [`tien-do/CLAUDE.md`](tien-do/CLAUDE.md) – cả nhóm xem được trên GitHub.
- Không thao tác trên website.

### 16/11/2026
- **Kiểm tra lại toàn bộ mã OEM trên web và cập nhật** (người dùng duyệt):
  - Quét 1.482 SP; lấy mã gốc từng trang, tra 623 mã trên azfilter.jp + 430 mã trên sbparts.jp, so với mọi ô bảng trên trang.
  - Kết quả chạy khô: 1.165 trang đủ; **A** 137 trang thiếu ít/khớp ≥50% (419 mã); **B** 22 trang lệch hẳn (nghi bảng ghi mã sản phẩm khác, 727 mã) – không sửa; 60 trang nguồn không có dữ liệu; 97 trang không ghi mã gốc. File: `du-lieu-oem/Kiem_tra_toan_bo_OEM_16-11-2026_chay_kho.csv` (có cột Kết quả).
  - Đã sửa: **131 trang, thêm 408 mã** vào bảng OEM có sẵn (thêm dòng cuối bảng, giữ đúng số cột kể cả bảng 11 cột có cột trống). Trang mẫu ID 1914 duyệt qua ảnh chụp. Kiểm tra 131/131: phần ngoài bảng không đổi, lưu đúng, trang công khai hiện đủ mã.
  - Bỏ qua: 2 trang đã có sẵn mã (6039, 3305); 4 trang chỉ thiếu mã dạng bộ kit `_JTK`/`+A017` (2967-2969, 3809); VFe34 (4554).
  - Điền lại ô ẩn `oem_khong_gach` cho 131 trang (131/131). Gõ `87139YZZ78` ra 16 SP lọc gió điều hoà Toyota.
  - Còn lại: nhóm B 22 trang (VD lọc dầu Kia/Hyundai 4335-4339, má phanh trước Morning 1916, i30/Elantra 2207/2215) chờ người dùng xem; 61 SP mã lỗi Excel.
- **Tạo 6 Sub-agent** trong `.claude/agents/` của thư mục dự án (không đụng website): `oem-checker` (chỉ đọc) → `oem-updater`; `seo-auditor` (chỉ đọc) → `seo-writer` (mặc định chỉ soạn nháp, áp dụng khi người dùng đã duyệt); `product-prep` (chỉ tạo nháp trong `du-lieu-sp-moi/nhap/`) → `product-uploader`. Các agent sửa web đều yêu cầu bảng/nháp đã được người dùng duyệt, người dùng tự đăng nhập, không dùng TinyMCE, kết quả ngắn gọn.
- **Điền lại ô ẩn tìm kiếm `oem_khong_gach`** cho 12 trang vừa tạo bảng (người dùng duyệt): 12/12 ghi thành công, đọc lại khớp 12/12. Kiểm tra: gõ `43022SZAA00` vào ô tìm kiếm trang chủ → ra Má phanh sau Mux 2014-2020 (cùng Odyssey, Trailblazer – AB-J1281).
- **Tạo "Bảng mã OEM" cho 12 trang chưa có bảng** (người dùng duyệt phạm vi + trang mẫu ID 3439):
  - Lọc toàn bộ 1.482 sản phẩm: **67 trang chưa có bảng có cột "Hãng"/"Chủ sở hữu"** (con số 130 trước đây đếm khác). Tra mã gốc của từng trang trên azfilter.jp (lọc) và sbparts.jp (má/guốc phanh).
  - Người dùng chọn: chỉ làm **12 trang có thêm mã mới**; đưa **hết** mã vào bảng; trang trống thì thêm bảng vào cuối.
  - Đã tạo bảng (8 cột, tiêu đề "Bảng mã OEM", mã gốc của trang đứng đầu): Má phanh sau Mux (3439) 21 mã · Lọc gió ĐH Captiva (7953) 10 · Lọc xăng Morning (7785, trang trống) 5 · Lọc gió ĐH Soluto (6750) 13 · Guốc phanh Celerio (6649) 6 · Guốc phanh Xpander (6565) 2 · Lọc gió LUX A (6244) 2 · Lọc gió ĐH Territory (6112) 2 · Lọc gió ĐH Vios (5989, trang trống) 68 · Lọc dầu Fortuner (4382) 98 · Lọc dầu hộp số Altis (3821) 3 · Guốc phanh Matiz (2658) 10.
  - Vị trí: sau bảng mã nhỏ có sẵn (mục OEM / "Mã thay thế tương đương"), nếu không có thì sau bảng thông số; ra ngoài khung div bao bảng cũ.
  - Kiểm tra: 12/12 trang nội dung lưu = nội dung cũ + khối bảng; trang công khai hiện đủ mã; chụp màn hình trang Mux hiển thị tốt.
  - Ghi chú dữ liệu: Mux (3439) sbparts ghi chung khuôn với má phanh Honda/Acura, SANGSIN SP1461 (bảng cũ ghi SP1281). Trang 5989, 7785 không có bài viết (chỉ có bảng).
  - Còn lại: 55 trang chưa có bảng (14 trang mã đã có ở bảng khác, 23 trang chỉ 1 mã, 18 trang không tra được) → `du-lieu-oem/Trang_chua_co_bang_OEM_16-11-2026.csv` (ô ẩn tìm kiếm đã điền lại).
- **Ô tìm kiếm tra được mã OEM gõ liền không gạch** (làm trong phiên Claude khác, ghi lại theo sổ tay mục 6.6): khách gõ `0446548210` không ra vì bảng ghi `04465-48210`; không thêm mã không gạch vào bảng.
  - Tạo nhóm trường ACF PRO "Mã OEM không gạch (ẩn, dùng cho tìm kiếm)" (ID 8571), trường `oem_khong_gach`, bật REST API.
  - Điền trường cho **1.482/1.482 sản phẩm** qua REST API (2 lượt; lượt 2 bổ sung 736 SP thiếu mã Asahi). Không đổi nội dung bài, bảng OEM, SEO.
  - Ivory Search (form 2644) → Includes → Custom Fields: chọn `oem_khong_gach`.
  - Kiểm tra: gõ `0446548210` ra Má phanh Sienna 2011-2020 và Highlander 2005-2019 (AB-J1324); gõ có gạch vẫn ra như cũ.
  - Phát hiện: web chặn cài plugin và sửa file theme (nghi Hide My WP).
  - Thêm skill mới `hoathang-tim-ma-oem` (quy trình điền lại ô ẩn).
  - Còn treo: 61 SP mã OEM lỗi Excel, 130 SP chưa có bảng OEM.
- **Kiểm tra lại (chỉ đọc, trang công khai) 7 trang sửa ngày 15/11:** 6 trang tạo Bảng mã OEM (ID 5926, 5946, 4559, 5950, 5942, 7900) đều có đúng 1 tiêu đề "Bảng mã OEM", bảng 8 cột, đủ mã (Wigo 18 mã; Transit, lọc gió Wigo đủ như đã ghi). Trang Escape (ID 3429): 30/30 mã hiện trên web. Không sửa gì trên website.
- **Tách CSS của trang học tập `index.html`** ra file `css/style.css` (không đụng website): `index.html` từ 157 dòng còn 60 dòng, thay khối `<style>` bằng 1 dòng `<link>`; đã so khớp CSS và phần HTML còn lại trùng 100% với bản cũ.
- **Cập nhật sổ tay `CLAUDE.md`** (không đụng website): chuyển sang UTF-8 (trước đây UTF-16 làm Claude đọc sai tiếng Việt); sửa bảng skill theo plugin; bổ sung quy định Bảng mã OEM, kết quả kiểm tra 15/11, quy tắc "kiểm tra web thật trước khi sửa", mục Công cụ & môi trường, danh sách file dự án; tách quy định đẩy GitHub thành mục 1.6. Mục tiến độ đổi số từ 5.x → **6.x** (đã sửa các chỗ tham chiếu trong plugin và `cap-nhat-oem.bat`).
- Xác nhận hook kết thúc phiên hoạt động: lần lưu tự động `29a8633` (15/11/2026 22:41).

### 15/11/2026
- **Thiết lập tự động cập nhật tiến độ:** sau mỗi công việc hoàn thành và trước khi kết thúc cuộc trò chuyện, tiến độ được ghi vào file này và đẩy lên GitHub. Thêm lưới an toàn: khi phiên Claude Code đóng, máy tự lưu + đẩy các thay đổi còn sót.
- **Tạo plugin `hoathang`** và đưa lên kho GitHub `Web-HTG` (Private): 3 skill, 4 lệnh tắt, script dùng lại, file tiến độ này.
- **Đổi tiêu đề bảng** "Bảng mã OEM của …" → **"Bảng mã OEM"** trên 6 trang: ID 5926, 5946, 4559, 5950, 5942, 7900. Kiểm tra: chỉ dòng tiêu đề thay đổi.
- **Tạo Bảng mã OEM mới** (4 cặp cột Hãng | OEM) cho 6 trang chưa có bảng:
  - Má phanh trước Wigo 2023-2024 (ID 5926) – 18 mã
  - Má phanh trước Transit 2024-2025 (ID 5946, 4559) – FORD P2W9-2K021-BA, NiBK PN51047
  - Má phanh sau Transit 2024-2025 (ID 5950) – FORD P2W9-2M008-BA, NiBK PN51048
  - Má phanh sau Transit 2024-2025 (ID 5942) – FORD P2W9-2M008-AA, FORD (JMC) 202410054AABBXX, NiBK PN51046
  - Lọc gió động cơ Wigo 2023-2025 (ID 7900) – TOYOTA 17801-BZ180, DAIHATSU 17801-BZ180-001
- **Thêm 30 mã OEM** vào bảng có sẵn của má phanh trước Escape 2001-2008 (ID 3429).
- **Kiểm tra lại (chỉ đọc)** 429 trang má phanh / lọc dầu / lọc gió / lọc nhiên liệu: 421 đủ mã, 8 thiếu → đã xử lý 7, bỏ qua 1 (VFe34).
- **Kiểm tra đợt 6 guốc phanh (chỉ đọc):** 57/57 trang đã đủ 106 mã từ trước.

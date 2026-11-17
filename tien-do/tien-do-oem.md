# Tiến độ cập nhật mã OEM – hoathang.vn

> Tệp này lưu **toàn bộ dữ liệu đã làm** của dự án cập nhật mã OEM,
> để mỗi lần mở lệnh tắt `cap-nhat-oem.bat`, AI đọc lại và **làm tiếp, không làm lại từ đầu**.

## 1. Cách làm (đã chốt)
- Nguồn: file Excel mã OEM (đặt file vào thư mục `du-lieu-oem/`).
- Nơi tra mã OEM theo nhóm hàng:
  | Nhóm hàng | Trang tra mã OEM |
  |---|---|
  | Má phanh | **sbparts.jp/catalogue** |
  | Guốc phanh | **sbparts.jp/catalogue** |
  | Lọc dầu | **azfilter.jp/catalogue** |
  | Lọc nhiên liệu | **azfilter.jp/catalogue** |
  | Lọc gió động cơ | **azfilter.jp/catalogue** |
  | Lọc gió điều hòa | **azfilter.jp/catalogue** |
- **Chỉ cập nhật mã đã có trang trên hoathang.vn**; mã không có trang thì bỏ qua.
- Trước khi sửa hàng loạt: chạy khô, báo số trang / số mã sẽ đổi, chờ người dùng duyệt.

## 2. Các đợt đã làm
| Đợt | Nhóm hàng | Trạng thái |
|---|---|---|
| 1 | Má phanh | Đã làm |
| 2 | Lọc dầu | Đã làm |
| 3 | Lọc nhiên liệu | Đã làm |
| 4 | Lọc gió | Đã làm |
| 5 | Lọc gió điều hòa | Đã làm |
| 6 | Guốc phanh (tra trên sbparts.jp/catalogue) | **ĐÃ XONG** – kiểm tra web 15/11/2026: 57/57 trang đủ mã |
| 7 | *(nhóm tiếp theo – chưa chọn)* | Chưa làm |

## 3. Dữ liệu chi tiết từ đoạn chat trên Claude AI
<!-- Dán vào đây nội dung đã làm trong đoạn chat dự án hoathang trên claude.ai:
     danh sách mã đã cập nhật, trang đã sửa, mã bị bỏ qua, ghi chú... -->

*(Chưa có — người dùng dán dữ liệu vào đây.)*

## 4. Nhật ký các phiên
<!-- Mỗi phiên làm xong, AI ghi thêm 1 dòng: ngày – đã làm gì – còn lại gì -->
$L
$L
$L
- 15/11/2026 – Tạo tệp tiến độ và lệnh tắt `cap-nhat-oem.bat`.
- 15/11/2026 – **Đợt 6 guốc phanh – chạy khô xong, người dùng đã duyệt.**
  - Nguồn: `Downloads\má phanh + guốc phanh asahi.xlsx` (55 mã guốc phanh) + `Doi_chieu_OEM_hoathang_tong_hop.xlsx` (đối chiếu sbparts ngày 13/11/2026).
  - Kết quả 55 mã: 18 đủ; 33 thiếu OEM; 2 web chưa có trang → bỏ qua (AS-J1265 Xpander, AS-J9012 Celerio); 2 không có trên sbparts (AS-C554 MG5 Taxi, AS-K2286 Stargazer).
  - Cần sửa: **57 trang, 106 mã** → danh sách `du-lieu-oem\Dot6_guoc_phanh_chay_kho.csv` (cột "Đã sửa trên web" để đánh dấu).
  - Cần xem lại: mã 18268, 18488 trong file guốc phanh nhưng sbparts ra đĩa phanh.
  - Cách sửa: điều khiển Chrome (người dùng tự đăng nhập WordPress), sửa 1 trang mẫu cho duyệt trước rồi mới làm tiếp.
  - ~~Còn lại: sửa 57 trang trên web.~~ → **Cập nhật cùng ngày:** người dùng báo "có rồi mà". Kiểm tra web thật: 5/5 trang mẫu (Navara NP300, Everest, Carry Pro, Mazda 323, Hi-Lander – dòng 1, 2, 4, 30, 57 trong CSV) **đã có đủ mã**. Kết luận: file đối chiếu 13/11 đã cũ, đợt 6 có lẽ đã được làm trong đoạn chat claude.ai.
  - Bài học: **luôn kiểm tra trang web thật trước khi sửa**, không tin hoàn toàn file đối chiếu cũ.
  - **Kiểm tra toàn bộ qua Chrome (chỉ đọc):** 57/57 trang đã có đủ 106 mã trong bảng OEM (so khớp từng ô bảng, bỏ qua khoảng trắng/gạch). → **Đợt 6 ĐÃ XONG.**
  - Còn treo: 2 mã web chưa có trang (AS-J1265 Xpander EPB, AS-J9012 Celerio); 2 mã không có trên sbparts (AS-C554, AS-K2286); mã 18268, 18488 nghi nhầm là đĩa phanh.
- 15/11/2026 – **Kiểm tra lại toàn bộ các nhóm khác trên web (chỉ đọc, qua Chrome):**
  - Đã kiểm: má phanh 321 trang; lọc dầu 80 trang; lọc gió 14 trang; lọc nhiên liệu 14 trang (tổng 429 trang, ~2.100 mã).
  - Kết quả: **421/429 trang đủ mã.** Còn **8 trang thiếu thật** → `du-lieu-oem\Kiem_tra_lai_15-11-2026_con_thieu.csv`:
    - Má phanh: Escape 2001-2008 trước (thiếu 30 mã), Wigo 2023-2024 trước (thiếu 10) – 2 trang này **chưa có Bảng mã OEM**; Transit 2024-2025 (4 trang) và VFe34 thiếu mã NiBK PN51046/47/48 (+ FORD JMC 202410054AABBXX).
    - Lọc gió: trang ID 7900 (Wigo, AFA-J1780) chưa có Bảng mã OEM, thiếu 17801-BZ180-001.
  - 3 trang trước đây ghi "chưa sửa – không có bảng OEM" (lọc dầu ID 6375, 6481; lọc gió ID 6828) **nay đã có đủ mã**.
  - Lưu ý dữ liệu: file tổng hợp má phanh tách sai tiền tố mã vào tên hãng (VD "SANGSIN SP | 1076-R" → đúng là SP1076R; "MITSUBISHI MZ | 690027" → MZ690027). Đã so khớp theo dạng đúng.
  - **Chưa kiểm được: lọc gió điều hòa** – không có file ghi trang nào đã thêm mã gì (Book1.xlsx chỉ có 75 mã, không kèm trang).
- 15/11/2026 – **Sửa 8 trang còn thiếu (người dùng đã duyệt, tự đăng nhập wp-admin):**
  - ✅ **Escape 2001-2008 má phanh trước (ID 3429): ĐÃ XONG** – thêm 15 dòng (30 mã) vào cuối bảng "Hãng | Mã OEM | Hãng khác | Mã tương đương | Ghi chú". Kiểm tra lại: 30/30 mã hiện trên web, phần khác của bài không đổi. Bỏ 1 mã trùng: EC25-33-23ZB (file ghi cả FORD và MAZDA → giữ MAZDA).
  - ⏸️ **VFe34 má phanh sau (ID 4554): CHƯA SỬA – nghi sai dữ liệu.** Bảng OEM của trang ghi "VinFast 18268", nhưng sbparts trả mã 18268 là ĐĨA PHANH; mã cần thêm PN51047 lại trùng với má phanh trước Transit 2024. Chờ người dùng xác nhận.
  - ✅ **6 trang chưa có Bảng mã OEM → ĐÃ TẠO BẢNG (người dùng đồng ý, yêu cầu không động dữ liệu khác):**
    - Mẫu theo trang guốc phanh Navara (ID 3679): tiêu đề + bảng 8 cột (4 cặp Hãng | OEM, dòng đầu là tiêu đề).
    - **Tiêu đề bảng: chỉ ghi `<h3><strong>Bảng mã OEM</strong></h3>`** (người dùng yêu cầu 15/11/2026, KHÔNG thêm "của + tên sản phẩm"). Đã sửa lại cả 6 trang. → Áp dụng cho mọi bảng OEM tạo mới sau này.
    - Vị trí: cuối mục "5. Bảng mã OEM tham khảo" (sau bảng mã nhỏ có sẵn, trước `<hr>`); trang chỉ có 1 bảng thì chèn ngay sau bảng thông số.
    - Wigo má phanh trước (ID 5926): 18 mã · Transit trước (ID 5946, 4559): FORD P2W9-2K021-BA + NiBK PN51047 · Transit sau (ID 5950): FORD P2W9-2M008-BA + NiBK PN51048 · Transit sau (ID 5942): FORD P2W9-2M008-AA + FORD (JMC) 202410054AABBXX + NiBK PN51046 · Lọc gió Wigo (ID 7900): TOYOTA 17801-BZ180 + DAIHATSU 17801-BZ180-001.
    - Kiểm tra: cả 6 trang nội dung lưu = nội dung cũ + khối mới (không đổi gì khác); trang công khai hiện đủ mã; chụp màn hình trang Wigo hiển thị tốt.
    - Ghi chú: slug một số trang khác link trong file cũ (VD 5926 = `ma-phanh-truoc-dung-cho-xe-wigo`, 5950 = `...-transit-ab-u986`, 5942 = `...-transit-ab-u984`) – đã đổi từ trước, link cũ vẫn tự chuyển hướng; không phải do lần sửa này.
  - ⏭️ **VFe34 (ID 4554): BỎ QUA** theo yêu cầu người dùng (15/11/2026) – dữ liệu nghi sai (mã 18268 là đĩa phanh; PN51047 trùng Transit). Không sửa trang.
  - **Kết thúc đợt sửa 8 trang thiếu mã: 7 trang ĐÃ XONG, 1 trang bỏ qua.**
- 16/11/2026 – **Kiểm tra lại (chỉ đọc) 7 trang sửa ngày 15/11** (ID 5926, 5946, 4559, 5950, 5942, 7900, 3429): tất cả hiển thị đúng, đủ mã, tiêu đề đúng "Bảng mã OEM". Không sửa gì.
- 16/11/2026 – **Ô tìm kiếm mã OEM không gạch** (phiên Claude khác): tạo trường ẩn ACF `oem_khong_gach` (nhóm ID 8571), điền cho 1.482/1.482 sản phẩm, bật trong Ivory Search form 2644; gõ `0446548210` ra đúng sản phẩm. Phát hiện 61 SP có mã OEM lỗi Excel (`4,05E+09`) và 130 SP chưa có bảng OEM – chờ người dùng quyết. Xem CLAUDE.md mục 6.6, skill `hoathang-tim-ma-oem`.
- 16/11/2026 – **Tạo Bảng mã OEM cho 12/67 trang chưa có bảng** (ID 3439, 7953, 7785, 6750, 6649, 6565, 6244, 6112, 5989, 4382, 3821, 2658): tra azfilter/sbparts theo mã gốc trên trang, kiểm tra 12/12 lưu đúng, đủ mã. Còn 55 trang (ít/không có dữ liệu) → `Trang_chua_co_bang_OEM_16-11-2026.csv`. Ghi chú: AS-J1265 (ID 6565), AS-J9012 (ID 6649) nay **đã có trang** trên web. Mẹo tra sbparts: POST JSON `{part_no}` tới `/service/search_partnumber` (header X-Requested-With), mã chéo ở các bảng có dòng đầu "Chủ sở hữu | Số" trong `/catalogue/<id>`. azfilter: chỉ lấy dòng trong khối tiêu đề "Bản ghi chéo" (khối "Số phiên bản" là mã Azumi, lấy nhầm sẽ lệch cột).
- 16/11/2026 – Điền lại ô ẩn `oem_khong_gach` cho 12 trang trên: 12/12 đúng; gõ `43022SZAA00` ra trang Mux.
- 16/11/2026 – **Kiểm tra toàn bộ 1.482 SP** với azfilter/sbparts: thêm **408 mã vào 131 trang** (nhóm A), điền lại ô ẩn. Nhóm B 22 trang nghi bảng sai – chưa sửa. Chi tiết: `Kiem_tra_toan_bo_OEM_16-11-2026_chay_kho.csv`. Quy tắc nhóm: A = mã chéo đã có trên trang ≥50% hoặc thiếu ≤3 mã; B = còn lại. Mã nguồn có đuôi `_JTK`, `+A017` (bộ kit) thì bỏ.

- 16/11/2026 – **Tra lại 55 trang chưa có bảng** (chỉ đọc, tra cả mã Asahi và mã OEM trên trang): không có mã mới. 23 trang azfilter chỉ có 1 mã; 14 trang bài đã có bảng mã chéo khác; 18 trang nguồn không có dữ liệu. Chưa sửa web. File: `Tra_lai_55_trang_chua_co_bang_16-11-2026.csv`.
- 16/11/2026 – Người dùng quyết: **để nguyên 55 trang chưa có bảng**, không tạo bảng 1 mã; chỉ làm lại khi có nguồn mã mới.
- 17/11/2026 – **Kiểm tra lại theo thứ tự đợt – Đợt 1 má phanh (chạy khô, chỉ đọc):** 418 trang má phanh (theo tên SP), tra sbparts bằng mã OEM gốc trên trang (sbparts không tra được mã Asahi). Kết quả: 383 đủ; **9 trang nhóm A thiếu 27 mã** (7 trang AB-K1543 thiếu Kashiyama D11268/D11283, riêng 2215/2207 bảng 11 cột thiếu thêm 5 mã; 1992 Santafe sau thiếu D-11280); 1 trang nhóm B (2257 Sorento sau, bảng chỉ khớp 3/43 – cùng AB-K1284 với 1992); 4554 VFe34 bỏ qua; 24 trang sbparts không có dữ liệu. File: `Dot1_ma_phanh_kiem_tra_lai_chay_kho_17-11-2026.csv`. Người dùng duyệt → **ĐÃ THÊM 27 mã vào 9 trang** (3122, 2221, 2218, 2216, 2214, 1914, 2215, 2207, 1992): lưu đúng 9/9, trang công khai đủ mã, mọi dòng bảng đúng số ô, điền lại ô ẩn 9/9. Còn: 2257 Sorento sau (nhóm B) chờ người dùng xem. Tiếp theo: Đợt 2 lọc dầu. Dữ liệu tạm trong localStorage tab wp-admin: `oem_mp_17_11`, `oem_mp_sb_17_11`.
- 17/11/2026 – **Đợt 2 lọc dầu – kiểm tra lại (chạy khô, chỉ đọc):** 164 trang (tên bắt đầu "Lọc dầu", không gồm "lọc dầu hộp số" 208 trang). Tra azfilter bằng mã OEM trên trang: 161 đủ; **3 trang thiếu 1 mã mỗi trang** – 6039 Peugeot 3008 (+PEUGEOT 92365780), 7429 Peugeot 2008 & 7436 Traveller (+FIAT 5984044). File: `Dot2_loc_dau_kiem_tra_lai_chay_kho_17-11-2026.csv`. Người dùng duyệt → **ĐÃ THÊM 3 mã vào 3 trang** (6039, 7429, 7436): lưu đúng 3/3, web hiện mã, bảng đúng số ô, ô ẩn 3/3. Chưa kiểm: 208 trang lọc dầu hộp số. Ghi chú: vài bảng có ô mã lạ dạng `41500 0000` (HINO, trang 7444…), `4650 000` (7429/7436) – nghi mã hỏng, chưa xử lý.
- 17/11/2026 – **Đợt 3 lọc nhiên liệu – kiểm tra lại (chỉ đọc):** 162 trang ("Lọc nhiên liệu" + "Lọc xăng"), tra azfilter: **161/161 đủ mã – không cần thêm**; 1 trang azfilter không có dữ liệu (7789 K3/Cerato). **Phát hiện ngoài OEM (chưa sửa, chờ người dùng):** 81 trang lọc xăng Azumi (ID 3083–3251) có mô tả ghi nhầm "Bộ lọc dầu hộp số tự động AZUMI…"; trang 7797 Lọc xăng Xpander có bảng ghi mã Mazda PE01-13-ZE0 (nghi sai). File: `Dot3_loc_nhien_lieu_kiem_tra_lai_17-11-2026.csv`.
- 17/11/2026 – **Đợt 4 lọc gió động cơ – kiểm tra lại (chỉ đọc):** 187 trang (tên "Lọc gió", không gồm điều hoà), tra azfilter: **184/184 đủ mã – không cần thêm**; 3 trang azfilter không có dữ liệu (6880 Transit 2022, 6288 Territory, 6244 LUX A). Quét mô tả: không có trang ghi nhầm loại hàng. File: `Dot4_loc_gio_kiem_tra_lai_17-11-2026.csv`.
- 17/11/2026 – **Đợt 5 lọc gió điều hoà – kiểm tra lại lần đầu (chạy khô, chỉ đọc):** 221 trang, tra azfilter: 205 đủ; **5 trang thiếu 27 mã** (6704, 6703 +2; 6705 Cruze, 6699 Fadil +11 mã BYD/Dongfeng/Opel; 6111 Innova +TOYOTA 87139-YZZ78); 11 trang azfilter không có dữ liệu (VinFast, Lux, Peugeot). AFC-U2205: 2 sản phẩm azfilter (71028815, 99581007) có cùng 42 mã chéo. Mô tả không ghi nhầm loại hàng. File: `Dot5_loc_gio_dieu_hoa_kiem_tra_lai_chay_kho_17-11-2026.csv`. Người dùng duyệt → **ĐÃ THÊM 27 mã vào 5 trang** (6704, 6703, 6705, 6699, 6111): lưu đúng 5/5, web hiện đủ, bảng đúng số ô, ô ẩn 5/5. **Đã kiểm tra lại xong cả 5 đợt.**
- 17/11/2026 – **Sửa mô tả 81 trang lọc xăng/lọc nhiên liệu Azumi (ID 3083–3251) ghi nhầm "lọc dầu hộp số"** (người dùng duyệt cách A): thay cả khối cuối bài (câu "Bộ lọc dầu hộp số tự động AZUMI…" + "Ưu điểm của bộ lọc dầu số tự động" + 6 ý) bằng câu mới + "Ưu điểm của lọc xăng/lọc nhiên liệu AZUMI" + 3 ý chung (không ghi chất liệu). 48 lọc xăng, 33 lọc nhiên liệu. Kiểm tra: lưu đúng 81/81, phần trên + mô tả ngắn + tiêu đề giữ nguyên, web không còn chữ "dầu hộp số". File: `Trang_loc_xang_mo_ta_ghi_nham_loc_dau_hop_so_17-11-2026.csv`. Không đổi bảng OEM nên không cần điền lại ô ẩn.

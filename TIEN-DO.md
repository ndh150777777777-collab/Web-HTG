# Tiến độ công việc web hoathang.vn

> File này được **cập nhật và đẩy lên GitHub sau mỗi lần thao tác trên website**, để mọi người trong nhóm biết đã làm gì, làm tới đâu.
> Nhật ký chi tiết dự án mã OEM: [`tien-do/tien-do-oem.md`](tien-do/tien-do-oem.md).

**Cập nhật lần cuối:** 19/11/2026

## Tổng quan các dự án
| # | Dự án | Trạng thái | Ghi chú |
|---|---|---|---|
| 6.1 | Sửa SEO trang/bài dưới 85 điểm Rank Math | ⏸ Dừng đổi từ khoá | 17/11: đổi từ khoá chỉ làm giảm điểm → dừng; đã khôi phục từ khoá cũ 104 trang (giữ 5 trang bằng điểm). Hướng tiếp: sửa nội dung để tăng điểm |
| 6.2 | Viết lại SEO trang AFT-U520 (lọc dầu hộp số AT Territory 1.5) | ⏳ Chưa bắt đầu | |
| 6.3 | Thêm "Bảng mã OEM" vào trang sản phẩm | 🔄 Đang làm | 15/11: 6 trang; 16/11: thêm 12 trang. Còn 55 trang chưa có bảng (ít/không có dữ liệu) |
| 6.4 | Cập nhật mã OEM mới nhất | 🔄 Đang làm | 16/11: kiểm tra TOÀN BỘ 1.482 SP với azfilter/sbparts, thêm 408 mã vào 131 trang; còn 22 trang nghi bảng sai chờ xem |
| 6.5 | 8 hạng mục sửa nội dung | ⏳ Chưa bắt đầu | |
| 6.6 | Ô tìm kiếm tra được mã OEM gõ liền không gạch | ✅ Xong phần tìm kiếm | Còn treo: 61 SP mã lỗi Excel |

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

## Nhật ký thao tác trên website
### 19/11/2026 – Thêm SP mới: Lọc gió điều hòa dùng cho xe VF3 | Asahi AFC-V331 | BIN 34036070 (ID 8604) – BẢN NHÁP, chờ ảnh
- Web đã có bản than **AFC-V331C** VF3 (ID 6089) cùng OEM. **azfilter KHÔNG có dữ liệu** BIN 34036070 → không có mã chéo, không có kích thước.
- Người dùng chọn: **bỏ phần kích thước**, **không ghi năm**, giữ 3 chỗ cụt chữ. Chỉ 1 mã OEM → không tạo bảng 8 cột (luật), chỉ bảng nhỏ ASAHI / VINFAST.
- Slug `loc-gio-dieu-hoa-dung-cho-xe-vf3`. Rank Math + ô ẩn `AFCV331 BIN34036070` OK, nội dung lưu khớp bản duyệt.
- **Còn lại:** người dùng chèn ảnh → xuất bản.

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

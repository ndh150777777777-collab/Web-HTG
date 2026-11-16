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

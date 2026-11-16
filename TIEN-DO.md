# Tiến độ công việc web hoathang.vn

> File này được **cập nhật và đẩy lên GitHub sau mỗi lần thao tác trên website**, để mọi người trong nhóm biết đã làm gì, làm tới đâu.
> Nhật ký chi tiết dự án mã OEM: [`tien-do/tien-do-oem.md`](tien-do/tien-do-oem.md).

**Cập nhật lần cuối:** 16/11/2026 (tối)

## Tổng quan các dự án
| # | Dự án | Trạng thái | Ghi chú |
|---|---|---|---|
| 6.1 | Sửa SEO trang/bài dưới 85 điểm Rank Math | ⏳ Chưa bắt đầu | |
| 6.2 | Viết lại SEO trang AFT-U520 (lọc dầu hộp số AT Territory 1.5) | ⏳ Chưa bắt đầu | |
| 6.3 | Thêm "Bảng mã OEM" vào trang sản phẩm | 🔄 Đang làm | 15/11: 6 trang; 16/11: thêm 12 trang. Còn 55 trang chưa có bảng (ít/không có dữ liệu) |
| 6.4 | Cập nhật mã OEM mới nhất | 🔄 Đang làm | Đợt 1-6 xong; kiểm tra lại 429 trang; còn lọc gió điều hòa chưa kiểm |
| 6.5 | 8 hạng mục sửa nội dung | ⏳ Chưa bắt đầu | |
| 6.6 | Ô tìm kiếm tra được mã OEM gõ liền không gạch | ✅ Xong phần tìm kiếm | Còn treo: 61 SP mã lỗi Excel |

## Mã OEM theo nhóm hàng
| Đợt | Nhóm hàng | Nguồn tra | Trạng thái |
|---|---|---|---|
| 1 | Má phanh | sbparts.jp | ✅ Xong – kiểm tra lại 15/11: 321 trang, đã bổ sung 6 trang thiếu |
| 2 | Lọc dầu | azfilter.jp | ✅ Xong – kiểm tra lại 15/11: 80/80 trang đủ |
| 3 | Lọc nhiên liệu | azfilter.jp | ✅ Xong – kiểm tra lại 15/11: 14/14 trang đủ |
| 4 | Lọc gió động cơ | azfilter.jp | ✅ Xong – 14 trang, đã bổ sung trang Wigo (ID 7900) |
| 5 | Lọc gió điều hòa | azfilter.jp | ❓ Đã làm trước đây – **chưa kiểm tra lại được** (thiếu file ghi trang) |
| 6 | Guốc phanh | sbparts.jp | ✅ Xong – 57/57 trang đủ 106 mã |

## Việc còn treo / chờ quyết định
- **61 sản phẩm có mã OEM lỗi Excel** (hiện dạng `4,05E+09`) – cần lấy lại mã đúng. VD ID: 5883, 5877, 5658, 5655, 4657, 4396, 4395, 4394.
- **55 sản phẩm còn chưa có bảng OEM** (kiểm tra 16/11: thực tế 67, không phải 130; đã làm 12). Danh sách: `du-lieu-oem/Trang_chua_co_bang_OEM_16-11-2026.csv`.
- Khi thêm sản phẩm mới / sửa bảng OEM: phải **điền lại ô ẩn `oem_khong_gach`** (skill `hoathang-tim-ma-oem`).
- Lọc gió điều hòa: dò 75 mã trong `Book1.xlsx` trên web để kiểm tra.
- Guốc phanh: AS-J1265 (Xpander EPB), AS-J9012 (Celerio) chưa có trang; AS-C554, AS-K2286 không có trên sbparts; mã 18268, 18488 nghi là đĩa phanh.
- Má phanh sau VFe34 (ID 4554): **bỏ qua** theo quyết định người dùng – dữ liệu nghi sai.
- Má phanh: một số trang có dòng mã nghi sai (MG5 AB-C202, Sprinter, Peugeot 3008 AB-E602, RX330/Highlander AB-J1005, Z8/Rexton/Santafe Gold AB-C864, Z8 AB-C865).

## Nhật ký thao tác trên website
<!-- Mỗi lần thao tác trên web: thêm 1 mục MỚI NHẤT LÊN ĐẦU. Ghi: ngày – làm gì – trang (ID) – kết quả kiểm tra – còn lại gì. -->

### 16/11/2026
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

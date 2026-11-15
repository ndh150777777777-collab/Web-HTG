# Tiến độ công việc web hoathang.vn

> File này được **cập nhật và đẩy lên GitHub sau mỗi lần thao tác trên website**, để mọi người trong nhóm biết đã làm gì, làm tới đâu.
> Nhật ký chi tiết dự án mã OEM: [`tien-do/tien-do-oem.md`](tien-do/tien-do-oem.md).

**Cập nhật lần cuối:** 15/11/2026

## Tổng quan các dự án
| # | Dự án | Trạng thái | Ghi chú |
|---|---|---|---|
| 5.1 | Sửa SEO trang/bài dưới 85 điểm Rank Math | ⏳ Chưa bắt đầu | |
| 5.2 | Viết lại SEO trang AFT-U520 (lọc dầu hộp số AT Territory 1.5) | ⏳ Chưa bắt đầu | |
| 5.3 | Thêm "Bảng mã OEM" vào trang sản phẩm | 🔄 Đang làm | 6 trang đã tạo bảng (15/11/2026) |
| 5.4 | Cập nhật mã OEM mới nhất | 🔄 Đang làm | Đợt 1-6 xong; kiểm tra lại 429 trang; còn lọc gió điều hòa chưa kiểm |
| 5.5 | 8 hạng mục sửa nội dung | ⏳ Chưa bắt đầu | |

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
- Lọc gió điều hòa: dò 75 mã trong `Book1.xlsx` trên web để kiểm tra.
- Guốc phanh: AS-J1265 (Xpander EPB), AS-J9012 (Celerio) chưa có trang; AS-C554, AS-K2286 không có trên sbparts; mã 18268, 18488 nghi là đĩa phanh.
- Má phanh sau VFe34 (ID 4554): **bỏ qua** theo quyết định người dùng – dữ liệu nghi sai.
- Má phanh: một số trang có dòng mã nghi sai (MG5 AB-C202, Sprinter, Peugeot 3008 AB-E602, RX330/Highlander AB-J1005, Z8/Rexton/Santafe Gold AB-C864, Z8 AB-C865).

## Nhật ký thao tác trên website
<!-- Mỗi lần thao tác trên web: thêm 1 mục MỚI NHẤT LÊN ĐẦU. Ghi: ngày – làm gì – trang (ID) – kết quả kiểm tra – còn lại gì. -->

### 15/11/2026
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

# Dữ liệu đã làm – dự án mã OEM (cập nhật 15/11/2026)

> Nguồn đầy đủ: `C:\Users\Admin\du-an-thu-nghiem\du-lieu-oem\tien-do-oem.md` – luôn đọc file đó trước, file này chỉ là bản tóm tắt.

## File dữ liệu (thư mục `du-lieu-oem\`)
| File | Nội dung |
|---|---|
| `Doi_chieu_OEM_hoathang_tong_hop.xlsx` | Đối chiếu má phanh + guốc phanh với sbparts (13/11/2026). Sheet: Tổng hợp (290 mã, đợt 1-3), OEM cần bổ sung (1.501 dòng), Theo từng trang web (378 trang), Cần kiểm tra trên web, Ghi chú. Có lỗi tách tiền tố mã (xem SKILL.md mục 5). |
| `Them_OEM_loc_dau_hoathang.xlsx` | Lọc dầu: mã file → ID trang → hãng → mã thêm, trạng thái (568 "Đã thêm", 33 "Chưa sửa – trang không có bảng OEM"). |
| `Them_OEM_loc_gio_hoathang.xlsx` | Lọc gió động cơ (29 đã thêm, 22 chưa sửa). |
| `Them_OEM_loc_nhien_lieu_hoathang.xlsx` | Lọc nhiên liệu (49 đã thêm). |
| `Ma_khong_co_du_lieu.xlsx` | Mã azfilter không có dữ liệu; mã có azfilter nhưng chưa có trang web. |
| `Ma_OEM_chua_co_tren_web.xlsx` | Mã má phanh chưa có trang; mã nghi là đĩa phanh. |
| `Book1.xlsx` | 75 mã (có vẻ lọc gió điều hòa: 97133-…, BDGF-61-J6X…) – **không kèm trang**. |
| `Dot6_guoc_phanh_chay_kho.csv` | Chạy khô đợt 6 guốc phanh: 57 trang / 106 mã. |
| `Kiem_tra_lai_15-11-2026_con_thieu.csv` | 8 trang còn thiếu sau khi kiểm tra lại toàn bộ. |
| `Downloads\má phanh + guốc phanh asahi.xlsx` | Nguồn: 290 mã (235 má phanh, 55 guốc phanh); cột D = mã OEM tách. |

## Kết quả các đợt
| Đợt | Nhóm | Trạng thái |
|---|---|---|
| 1-5 | Má phanh, lọc dầu, lọc nhiên liệu, lọc gió, lọc gió điều hòa | Đã làm (trước 15/11/2026) |
| 6 | Guốc phanh (sbparts) | **ĐÃ XONG** – 57/57 trang đủ 106 mã (đã có sẵn từ trước) |
| Kiểm tra lại 15/11/2026 | Má phanh 321 trang, lọc dầu 80, lọc gió 14, lọc nhiên liệu 14 | 421/429 trang đủ mã; 8 trang thiếu → đã xử lý bên dưới |

## 8 trang thiếu mã – đã xử lý 15/11/2026
| Trang | ID | Xử lý |
|---|---|---|
| Má phanh trước Escape 2001-2008 | 3429 | Thêm 15 dòng (30 mã) vào bảng 5 cột có sẵn ✅ |
| Má phanh trước Wigo 2023-2024 | 5926 | Tạo Bảng mã OEM, 18 mã ✅ |
| Má phanh trước Transit 2024-2025 (AB-U985) | 5946 | Tạo bảng: FORD P2W9-2K021-BA, NiBK PN51047 ✅ |
| Má phanh trước Transit 2024-2025 (AB-U983) | 4559 | Tạo bảng: FORD P2W9-2K021-BA, NiBK PN51047 ✅ |
| Má phanh sau Transit 2024-2025 (AB-U986) | 5950 | Tạo bảng: FORD P2W9-2M008-BA, NiBK PN51048 ✅ |
| Má phanh sau Transit 2024-2025 (AB-U984) | 5942 | Tạo bảng: FORD P2W9-2M008-AA, FORD (JMC) 202410054AABBXX, NiBK PN51046 ✅ |
| Lọc gió động cơ Wigo 2023-2025 (AFA-J1780) | 7900 | Tạo bảng: TOYOTA 17801-BZ180, DAIHATSU 17801-BZ180-001 ✅ |
| Má phanh sau VFe34 | 4554 | ⏭️ Bỏ qua (người dùng quyết định – dữ liệu nghi sai) |

Tiêu đề 6 bảng mới đã đổi thành **"Bảng mã OEM"** theo yêu cầu.

## Việc còn treo
1. **Lọc gió điều hòa**: chưa kiểm được (không có file ghi trang nào đã thêm mã). Có thể dò 75 mã trong `Book1.xlsx` trên web.
2. Guốc phanh: AS-J1265 (Xpander EPB), AS-J9012 (Celerio) – web chưa có trang; AS-C554 (MG5 Taxi), AS-K2286 (Stargazer) – không có trên sbparts; 18268, 18488 nghi đĩa phanh.
3. Má phanh (file "Cần kiểm tra trên web"): MG5 AB-C202 có dòng HYUNDAI 58101-D9A00 nghi lẫn; Sprinter dòng "HYUNDAI / KIA: SP1273" sai hãng (đúng SANGSIN); Peugeot 3008 AB-E602 hai mã BYD lạ; RX330/Highlander AB-J1005 mã TOYOTA/LEXUS mất số 0 đầu; Z8/Rexton/Santafe Gold dùng chung AB-C864; Z8 AB-C865 mã 18118 chưa xác nhận.

## Trang mẫu
- Bảng mã OEM 8 cột chuẩn: guốc phanh sau Navara NP300 2016-2023 – ID 3679 – `/san-pham/guoc-phanh-sau-dung-cho-xe-navara-np300-16-23/`.

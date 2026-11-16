# Luật về mã OEM – hoathang.vn

> Tách từ `CLAUDE.md` ngày 16/11/2026. Claude Code tự đọc mọi file trong `.claude/rules/` đầu mỗi phiên, giống `CLAUDE.md`.
> Mục tiêu: mã OEM phải **chính xác tuyệt đối**, không lẫn sang sản phẩm khác. Nhanh mà sai thì không làm – chậm mà đúng.

## 1. Dữ liệu mã OEM
- **Không bịa mã:** thiếu mã OEM thì KHÔNG tự điền, không suy đoán – hỏi người dùng hoặc tra nguồn (mục 2).
- **Mã OEM luôn giữ dạng chữ (Text):**
  - Giữ nguyên số `0` ở đầu (VD `04465-48210`, `0446548210`) và mã dài – không để Excel / script đổi thành số hay dạng khoa học `4,05E+09` (lỗi đã gặp ở 61 SP).
  - Không mở rồi lưu lại file CSV mã OEM bằng Excel; đọc/ghi bằng PowerShell hay JS thì xử lý mã như chuỗi, không ép sang số.
- **Copy-First:** không sửa trực tiếp file mã OEM gốc (Excel/CSV đầu vào); kết quả lọc / chuẩn hoá lưu ra file mới có ngày trong tên.
- File `.xlsx` đầu vào chuyển sang CSV trước khi giao cho Sub-agent (đọc bằng `doc-xlsx.ps1`).
- Kết quả kiểm tra / chạy khô xuất **CSV UTF-8 có BOM**, ô thiếu để trống, có cột **Duyệt** và **Kết quả**, đặt trong `du-lieu-oem/`, tên `<Nội_dung>_dd-mm-yyyy.csv`.

## 2. Nguồn tra mã (bắt buộc theo nhóm hàng)
| Nhóm hàng | Tra ở |
|---|---|
| Má phanh, guốc phanh | **sbparts.jp/catalogue** |
| Lọc dầu, lọc nhiên liệu, lọc gió động cơ, lọc gió điều hoà | **azfilter.jp/catalogue** |

- **sbparts.jp:** POST JSON `{part_no}` tới `/service/search_partnumber` (header `X-Requested-With: XMLHttpRequest`) → lấy id từ `catalogue/(\d+)` → mã chéo trong bảng ở `/catalogue/<id>` có dòng đầu "Chủ sở hữu | Số". **Chỉ giữ sản phẩm có danh sách chứa đúng mã đã tra.**
- **azfilter.jp:** `/catalogue/search-part-number?product_id=` → chỉ lấy `.search-res-crosses__line` trong khối **"Bản ghi chéo"** (khối "Số phiên bản" là mã Azumi – lấy nhầm sẽ lệch cột).
- **Mã dạng bộ kit** (đuôi `_JTK`, `_K1`, `_K2`, `+A017`…) không phải mã OEM thường → bỏ qua.
- **Chỉ cập nhật mã có trang trên hoathang.vn**; mã không có trang thì bỏ qua.

## 3. Trước khi sửa mã trên web
- **Luôn kiểm tra trang web thật trước** – file đối chiếu cũ có thể đã lỗi thời (bài học 15/11/2026: file cũ báo 57 trang guốc phanh thiếu mã, thực tế đã đủ).
- **Sửa hàng loạt:** chạy khô trước, báo **số trang / số mã sẽ thay đổi** kèm danh sách (file CSV), chờ người dùng duyệt rồi mới làm.
- Bảng trên trang **lệch hẳn với nguồn** (nghi chép nhầm bảng sản phẩm khác) → không tự thay, báo người dùng xem.
- Sub-agent làm theo cặp `oem-checker` (chỉ đọc) → người dùng duyệt → `oem-updater` (chỉ chạy khi đầu vào ghi rõ **"người dùng đã duyệt"**).

## 4. Bảng mã OEM trên trang sản phẩm
- **Mẫu chuẩn:** trang guốc phanh sau Navara NP300 2016-2023 (ID 3679).
- **Tiêu đề bảng chỉ ghi đúng "Bảng mã OEM"** – không thêm "của + tên sản phẩm".
- Bảng mới: **4 cặp cột Hãng | OEM** (8 cột, dòng đầu là tiêu đề); cặp đầu là mã gốc của sản phẩm, sau đó các mã tương đương.
- **Vị trí:** cuối mục "5. Bảng mã OEM tham khảo" (sau bảng mã nhỏ có sẵn, trước `<hr>`); trang chỉ có bảng thông số thì đặt ngay sau bảng thông số; trang trống thì thêm vào cuối. **Không xoá bảng mã nhỏ.**
- **Chỉ tạo bảng mới khi người dùng đồng ý.** Không tạo bảng chỉ có 1 mã (người dùng quyết 16/11/2026).
- **Bảng có 4 dạng 2 / 4 / 8 / 11 cột.** Dạng 11 cột có cột trống xen giữa các cặp (VD ID 1914, 2207, 2215) – dòng mới phải theo đúng mẫu của bảng đó. Sau khi lưu, **kiểm tra mọi dòng đúng số ô**.
- Khi sửa: chỉ thay đúng phần bảng cần sửa, không động phần khác; sau khi lưu đọc lại kiểm tra (nội dung lưu = nội dung cũ + phần sửa, trang công khai hiện đúng).

## 5. Ô ẩn tìm kiếm mã không gạch (`oem_khong_gach`)
- **Không thêm mã dạng không gạch vào bảng OEM** – người dùng không muốn.
- Mỗi khi **thêm sản phẩm mới hoặc sửa/thêm mã trong bảng OEM** → **chạy lại bước điền ô ẩn ACF `oem_khong_gach`** cho các sản phẩm đó (web không tự chạy). Quy trình: skill `hoathang-tim-ma-oem`.
- Kiểm tra tìm kiếm bằng ô Ivory Search (form 2644) trên trang chủ, không dùng `?s=...`.

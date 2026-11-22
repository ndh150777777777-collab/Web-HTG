---
name: hoathang-oem
description: Dùng khi cập nhật, kiểm tra hoặc thêm mã OEM / tạo "Bảng mã OEM" trên các trang sản phẩm hoathang.vn (má phanh, guốc phanh, lọc dầu, lọc nhiên liệu, lọc gió động cơ, lọc gió điều hòa). Gồm quy trình an toàn đã kiểm chứng, mẹo đọc azfilter, cách sửa bảng có sẵn, đoạn HTML bảng mẫu, các lỗi dữ liệu đã biết và mẹo kỹ thuật.
---

# Cập nhật & kiểm tra mã OEM – hoathang.vn

> **Luật mã OEM** (không bịa mã, giữ dạng chữ, nguồn tra theo nhóm hàng, mã bộ kit, quy tắc Bảng mã OEM, ô ẩn tìm kiếm) nằm ở **`.claude/rules/oem-rules.md`**; quy định chung ở `CLAUDE.md` mục 1 và 6.2. Skill này chỉ giữ **cách làm chi tiết** – khi lệch nhau, lấy `CLAUDE.md` / `oem-rules.md` làm chuẩn.

Đọc thêm: `du-lieu-da-lam.md` (kết quả các đợt đến 15/11/2026 – tiến độ mới nhất xem `TIEN-DO.md`) và `meo-ky-thuat.md` (lỗi thường gặp khi chạy script/trình duyệt) trong cùng thư mục skill này.

## 1. Mẹo đọc trang azfilter.jp
- Lấy `https://azfilter.jp/catalogue/search-part-number?product_id=<MÃ>` rồi đọc HTML (render sẵn). Bị chuyển sang `/catalogue/<số>` = trang sản phẩm; nếu là danh sách thì lấy link trong `main table a` (tối đa 6), giữ trang có mã chéo trùng mã tra.
- Mã chéo: `.search-res-crosses__name` (hãng) và `.search-res-crosses__value` (số), chỉ trong khối `.search-res-crosses__title` "Bản ghi chéo".
- Cách tra sbparts.jp: xem `oem-rules.md` mục 2.

## 2. Quy trình chuẩn (đã kiểm chứng 15/11/2026)
1. **Đọc tiến độ** (`du-lieu-oem\tien-do-oem.md` và `TIEN-DO.md` mục 6.3 / 6.4) – không làm lại đợt đã xong.
2. **Đọc Excel**: `scripts\doc-xlsx.ps1 -Path <file> -MaxRows 20` (dùng hàm `Read-Xlsx` trong `scripts\xlsx-lib.ps1`) hoặc Python 3.14 + openpyxl (đã cài 17/11/2026); chuyển sang CSV trước khi xử lý (`CLAUDE.md` mục 1.7). Làm sạch: bỏ dòng trống/trùng; sửa chữ O thay số 0 (`28113-O3100` → `28113-03100`), dấu cách thừa, tách 2 mã dính một ô; ghi lại mã đã sửa.
3. **KIỂM TRA WEB THẬT TRƯỚC** (chỉ đọc): mở `https://hoathang.vn/` trong tab mới, chạy `scripts\kiem-tra-ma.js` (fetch từng trang công khai `credentials:'omit'`, so khớp **từng ô bảng** sau chuẩn hoá: viết hoa, bỏ mọi ký tự không phải chữ/số). Với mã báo thiếu, thử lại dạng có tiền tố (xem mục 5).
4. **Chạy khô**: lập file CSV theo `CLAUDE.md` mục 1.7 (UTF-8 có BOM, ô thiếu để trống, cột "Duyệt" + "Kết quả", tên `<Nội_dung>_dd-mm-yyyy.csv` trong `du-lieu-oem/`) gồm trang, link, số mã thiếu, mã thiếu → **báo số trang / số mã, chờ người dùng duyệt**.
5. **Sửa** (người dùng tự đăng nhập wp-admin trên Chrome): theo `scripts\luu-noi-dung.js` (cách lưu an toàn ở `CLAUDE.md` mục 3 – so nội dung cũ, khác thì DỪNG; không dùng TinyMCE).
   - Form gửi lại đúng `post_name` hiện có nên **không đổi slug**.
   - Nhiều trang: chạy nền (`(async()=>{...})()` ghi vào `window.__log`) rồi đọc kết quả sau mỗi ≤ 10 giây (lệnh JS bị ngắt ~45 giây).
6. **Kiểm tra sau khi lưu**: (a) nội dung đã lưu == nội dung dự kiến (chỉ khác đúng phần thêm); (b) trang công khai (`/?p=<ID>&nc=<thời gian>`, `cache:'no-store'`) hiện đủ mã; (c) chụp màn hình 1 trang để xem hiển thị.
7. **Điền lại ô ẩn `oem_khong_gach`** cho các trang đã sửa (skill `hoathang-tim-ma-oem`).
8. **Ghi tiến độ** vào `du-lieu-oem\tien-do-oem.md` và `plugin-hoathang/TIEN-DO.md` (mục 6.3 / 6.4), rồi đẩy GitHub. Đóng tab đã mở.

## 3. Sửa bảng OEM có sẵn
- Chỉ sửa trong bảng có tiêu đề cột **"Hãng"** hoặc **"Chủ sở hữu"** (tên cột có thể chứa ký tự không ngắt ` ` → dùng `[\s ]`).
- Điền **cặp ô trống trước**, hết ô trống mới **thêm dòng cuối bảng** (chèn trước `</tbody>`), giữ đúng số cột của bảng đó: bảng có dạng 2 / 4 / 8 / 11 cột (dạng 11 cột có cột trống xen giữa các cặp, VD ID 1914, 2207, 2215 – xem `oem-rules.md` mục 4), ngoài ra có vài bảng riêng:
  - Bảng 5 cột trang Escape 2001-2008 (ID 3429): `Hãng | Mã OEM | Hãng khác | Mã tương đương | Ghi chú` → mỗi dòng 2 cặp + ô Ghi chú trống.
- Sau khi lưu: kiểm tra **mọi dòng đúng số ô**.
- Không đụng phần khác của bài. Bỏ mã trùng (cùng mã chuẩn hoá, ghi cho 2 hãng – giữ hãng đúng, VD `EC25-33-23ZB` giữ MAZDA).
- Thứ tự gợi ý: mã hãng xe/OEM trước, mã phụ tùng/tra cứu (Akebono, Kashiyama, NiBK, Sangsin, FMSI…) sau.

## 4. Đoạn HTML mẫu khi tạo "Bảng mã OEM" mới
> Quy tắc (chỉ tạo khi người dùng đồng ý, không tạo bảng 1 mã, tiêu đề chỉ "Bảng mã OEM", mã gốc ở cặp đầu, vị trí đặt bảng, không xoá bảng mã nhỏ): xem **`oem-rules.md` mục 4**.

Bảng 8 cột theo mẫu trang guốc phanh Navara NP300 (ID 3679); dòng cuối thiếu cặp thì để ô trống:
```html
<h3><strong>Bảng mã OEM</strong></h3>
<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup><col width="140"><col width="125"><col width="135"><col width="153"><col width="100"><col width="166"><col width="100"><col width="184"></colgroup>
<tbody>
<tr>
<td>Hãng</td><td>OEM</td><td>Hãng</td><td>OEM</td><td>Hãng</td><td>OEM</td><td>Hãng</td><td>OEM</td>
</tr>
<tr>
<td>TOYOTA</td><td>04465-BZ154</td><td>…</td><td>…</td><td>…</td><td>…</td><td>…</td><td>…</td>
</tr>
</tbody>
</table>
```

## 5. Lỗi dữ liệu đã biết trong file cũ
- `Doi_chieu_OEM_hoathang_tong_hop.xlsx` **tách sai tiền tố mã vào tên hãng**: `SANGSIN SP | 1076-R` → mã đúng **SP1076R**; `MITSUBISHI MZ | 690027` → **MZ690027**; `MITSUBISHI MR/MN …`, `BENDIX AUS DB | 1991` → **DB1991**; `VAG JZW | 698 451 N` → **JZW698451N**. Mã 4 số trơn (1458, 2028…) thuộc SANGSIN → thử `SP` + mã.
- Một số ô dính nhiều mã (`D1317-8431 MERCEDES-BENZ 0044206920 …`, `13412807 DAEWOO/GM 13301208`) → tách trước khi so.
- Mã **18268, 18488** nằm trong file guốc phanh nhưng sbparts trả về **ĐĨA PHANH** (BR29124 / BR33122).
- Mã **PN51047** vừa gán cho má phanh trước Transit 2024 vừa cho má phanh sau VFe34 → nghi sai (các trang/mã người dùng bảo bỏ qua: `CLAUDE.md` mục 6.2).
- File đối chiếu ngày **13/11/2026 đã cũ** so với web → luôn kiểm tra web thật trước.

## 6. Lưu ý về đường dẫn
- Nhiều trang **đã đổi slug từ trước** (VD ID 5926 = `/san-pham/ma-phanh-truoc-dung-cho-xe-wigo/`, ID 5950 = `...-transit-ab-u986`, ID 5942 = `...-transit-ab-u984`); link cũ trong file Excel vẫn tự chuyển hướng. Khi làm việc nên dùng **ID trang** (`/?p=<ID>`) hoặc lấy ID từ class `postid-<ID>` của trang công khai.

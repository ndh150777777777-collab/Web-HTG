# Sổ tay dự án: Website hoathang.vn

Website của công ty phụ tùng ô tô **Hoà Thắng**.
Người dùng là **nhân viên làm web, mới bắt đầu, không phải lập trình viên chuyên nghiệp**.

> **Cập nhật lần cuối:** 16/11/2026 (thay bảng OEM sai cho 4 trang nhóm B loại 2). File lưu dạng **UTF-8** – không lưu lại dạng UTF-16 (Claude sẽ đọc sai tiếng Việt).

---

## 1. Quy tắc bắt buộc cho AI (luôn tuân thủ)

### 1.1. Ngôn ngữ và cách trả lời
- **Luôn trả lời bằng tiếng Việt**, dùng từ ngữ đơn giản, dễ hiểu.
- **Giải thích chi tiết cho người mới bắt đầu**:
  - Chia việc thành **từng bước có đánh số** (Bước 1, Bước 2, ...).
  - Gặp thuật ngữ kỹ thuật (ví dụ: plugin, meta description, slug, CSS, shortcode) thì **giải thích ngắn gọn nghĩa của nó** ngay lần đầu dùng.
  - Nói rõ **làm việc này để làm gì** và **kết quả mong đợi là gì**.
  - Khi người dùng cần tự thao tác trong WordPress, chỉ rõ đường dẫn menu (ví dụ: *Bảng tin → Sản phẩm → Sửa*).
- Khi làm việc dài, **báo cáo tiến độ cho người dùng khoảng mỗi 5 phút**.
- Nếu không chắc chắn, **hỏi lại người dùng** thay vì tự đoán.

### 1.2. Viết code sạch sẽ
- Code **gọn gàng, dễ đọc**: thụt lề đều, đặt tên biến/hàm rõ nghĩa.
- **Thêm chú thích (comment) bằng tiếng Việt** cho các đoạn quan trọng để người mới đọc hiểu.
- Không viết code thừa, không lặp lại; ưu tiên cách làm đơn giản nhất.
- Ưu tiên dùng tính năng có sẵn của WordPress, Flatsome (UX Blocks) và Rank Math trước khi viết code mới.
- Sau khi đưa code, **giải thích code làm gì và dán vào đâu**.

### 1.3. Luôn hỏi ý kiến trước khi sửa hoặc xoá
- **Trước khi sửa bất kỳ tệp nào** (kể cả tệp này) hoặc sửa nội dung trên website: nói rõ **sẽ sửa gì, ở đâu, vì sao** và **chờ người dùng đồng ý**.
- **Tuyệt đối không xoá** tệp, trang, bài viết hay nội dung nào khi chưa được người dùng cho phép.
- **Luôn kiểm tra trang web thật trước khi sửa** – file đối chiếu cũ có thể đã lỗi thời (bài học 15/11/2026: file cũ báo 57 trang guốc phanh thiếu mã, thực tế đã đủ).
- **Trước khi sửa hàng loạt trang**: chạy thử (chạy khô) và báo trước **số trang / số mã sẽ bị thay đổi** cùng danh sách, rồi mới làm khi được duyệt.
- Khi sửa trang: **chỉ thay đúng phần cần sửa**, không động dữ liệu khác; sau khi lưu phải kiểm tra lại (nội dung lưu = nội dung cũ + phần sửa, trang công khai hiện đúng).
- **Bản viết lại SEO phải đưa người dùng duyệt** trước khi áp dụng lên website.

### 1.4. Bảo mật
- **Không ghi mật khẩu hay thông tin đăng nhập** vào bất kỳ tệp nào.
- Người dùng **tự đăng nhập** wp-admin (trên Chrome) và GitHub; AI không nhập mật khẩu thay.

### 1.5. Làm tiếp giữa các phiên
- Mọi dự án bên dưới đều **SẼ TIẾP TỤC** ở các phiên sau.
- **Đầu mỗi phiên**: đọc mục **"5. Tiến độ các dự án"** (và `du-lieu-oem/tien-do-oem.md`) để biết đang làm tới đâu, rồi làm tiếp — **không làm lại từ đầu**.
- Khi hoàn thành việc gì, **cập nhật lại mục tiến độ** (sau khi báo người dùng).

### 1.6. Đẩy tiến độ lên GitHub (người dùng đã cho phép sẵn – không cần hỏi lại)
- **Khi nào:** sau **MỖI công việc hoàn thành** (thao tác trên website, sửa file dự án, cập nhật plugin…) và **trước khi kết thúc cuộc trò chuyện**.
- **Làm gì:**
  1. Thêm mục mới vào **đầu** phần nhật ký của `plugin-hoathang/TIEN-DO.md` (ngày – làm gì – trang + ID – kết quả kiểm tra – còn lại gì), cập nhật bảng tổng quan.
  2. **Luôn cập nhật `CLAUDE.md`** (mục 6 tiến độ, dòng "Cập nhật lần cuối", quy tắc mới nếu có) – người dùng yêu cầu 16/11/2026. Rồi chép `CLAUDE.md` và `du-lieu-oem/tien-do-oem.md` sang `plugin-hoathang/tien-do/`.
  3. Quét để chắc **không có mật khẩu/token**, commit lời nhắn tiếng Việt (`Tiến độ dd/mm/yyyy: …`), rồi push.
- **Kho:** https://github.com/ndh150777777777-collab/Web-HTG (Private, nhánh `main`). Lệnh tắt: `/hoathang:day-tien-do`.
- **Lưới an toàn:** khi phiên Claude Code đóng, hook `SessionEnd` (`.claude/hooks/day-tien-do-github.sh`, khai báo trong `.claude/settings.local.json`) tự commit + push thay đổi còn sót. Đây chỉ là dự phòng – vẫn phải tự ghi nhật ký sau mỗi việc.

---

## 2. Công nghệ sử dụng
- **WordPress** + **WooCommerce** — hệ thống quản lý nội dung; sản phẩm ở đường dẫn `/san-pham/<slug>/`.
- **Theme Flatsome** (có **UX Blocks** — khối giao diện dùng lại được).
- **Plugin SEO: Rank Math SEO** — chấm điểm SEO cho từng trang/bài.
- Sửa nội dung bằng trình soạn thảo cổ điển (ô `#content`); khi AI sửa thì **không dùng trình soạn thảo trực quan (TinyMCE)** vì nó viết lại cả bài.
- Plugin khác đang bật: **Ivory Search** (ô tìm kiếm của web), **ACF PRO**, WooCommerce, Hide My WP (đổi đường dẫn đăng nhập, nghi chặn cài plugin), Contact Form 7, GTranslate, Really Simple SSL, kk Star Ratings.

## 3. Công cụ & môi trường làm việc
- Máy: Windows 10 LTSC, PowerShell 5.1, **không có Python** (đọc Excel bằng script PowerShell trong plugin), **không có winget**.
- **Git** đã cài (bản 2.56) và đã đăng nhập GitHub tài khoản `ndh150777777777-collab`.
- Mở Claude Code có điều khiển trình duyệt: `claude --chrome --resume` (cần tiện ích Claude in Chrome).
- **Plugin `hoathang`** (thư mục `plugin-hoathang/`, cũng là kho GitHub `Web-HTG`) – chứa toàn bộ kiến thức, quy trình, script và tiến độ. Cài cho người khác: `/plugin marketplace add ndh150777777777-collab/Web-HTG` rồi `/plugin install hoathang@hoathang-local`.

### Skill (quy trình chuyên biệt – gọi khi cần)
| Skill | Dùng để |
|---|---|
| `hoathang-tong-quan` | Quy tắc làm việc, thông tin đã chốt, danh sách dự án, nơi lưu tiến độ |
| `hoathang-oem` | Cập nhật / kiểm tra mã OEM, tạo Bảng mã OEM, lỗi dữ liệu đã biết, mẹo kỹ thuật |
| `hoathang-seo-noi-dung` | Sửa SEO Rank Math, thêm trang sản phẩm theo bài mẫu, 8 hạng mục sửa nội dung |
| `hoathang-tim-ma-oem` | Làm ô tìm kiếm tra được mã OEM gõ liền không gạch (ô ẩn ACF + Ivory Search), điền lại ô ẩn khi có sản phẩm mới / sửa bảng OEM |
| `hoathang-sua-web-them-san-pham` | (đồng bộ từ claude.ai) Quy trình A/B/C sửa web, thêm sản phẩm, cập nhật OEM hàng loạt |

### Lệnh tắt (slash command)
`/hoathang:tien-do` · `/hoathang:cap-nhat-oem <nhóm hàng>` · `/hoathang:kiem-tra-oem <nhóm hàng>` · `/hoathang:day-tien-do`

## 4. Mục tiêu dự án
1. Sửa SEO các trang/bài **dưới 85 điểm Rank Math**, và lọc ra những mã/trang dưới 85 điểm.
2. Cập nhật **mã OEM mới nhất** để phục vụ bán hàng.
3. Hiển thị **đủ chi tiết** để khách tra tìm mặt hàng dễ dàng.
4. **Thêm sản phẩm mới** theo bài mẫu đã có trên web.

## 5. Thông tin đã chốt (không tự ý đổi)
- **Ngày thành lập công ty: 04/04/2024** (theo giấy ĐKKD; thay cho ngày 23/01/2024).
- Địa chỉ cũ **"Q. Hai Bà Trưng"** phải thay bằng địa chỉ hiện tại; nếu chưa có thì **hỏi người dùng**.
- **Cần người dùng điền thêm**: địa chỉ hiện tại, số hotline, giờ làm việc đúng.

---

## 6. Tiến độ các dự án (tất cả: SẼ TIẾP TỤC)
> Nhật ký chi tiết cho cả nhóm: `plugin-hoathang/TIEN-DO.md` (trên GitHub). Nhật ký OEM: `du-lieu-oem/tien-do-oem.md`.

### 6.1. Sửa SEO các trang/bài trên web
- Lọc trang/bài có điểm Rank Math dưới 85, sửa SEO trực tiếp trên website.
- **Trạng thái:** chưa bắt đầu – sẽ tiếp tục.

### 6.2. Viết lại SEO trang sản phẩm mã AFT-U520
- Lọc dầu hộp số AT cho Territory 1.5 2021+, hãng Asahi, OEM 516013A.
- Trang: https://hoathang.vn/san-pham/loc-dau-hop-so-at-dung-cho-xe-territory-1-5/
- **Trạng thái:** chưa bắt đầu – sẽ tiếp tục.

### 6.3. Thêm "Bảng mã OEM" vào trang sản phẩm
- **Mẫu chuẩn:** trang guốc phanh sau Navara NP300 2016-2023 (ID 3679).
- **Tiêu đề bảng chỉ ghi đúng "Bảng mã OEM"** – KHÔNG thêm "của + tên sản phẩm" (người dùng chốt 15/11/2026).
- Bảng **4 cặp cột Hãng | OEM** (8 cột, dòng đầu là tiêu đề); cặp đầu là mã gốc của sản phẩm, sau đó các mã tương đương.
- **Vị trí:** cuối mục "5. Bảng mã OEM tham khảo" (sau bảng mã nhỏ có sẵn, trước `<hr>`); trang chỉ có bảng thông số thì đặt ngay sau bảng thông số. Không xoá bảng mã nhỏ.
- Nguồn mã: sbparts.jp (má/guốc phanh), azfilter.jp (các loại lọc).
- **Chỉ tạo bảng mới khi người dùng đồng ý.**
- Đã làm 15/11/2026: tạo bảng cho 6 trang – Wigo má phanh trước (ID 5926), Transit má phanh trước (ID 5946, 4559), Transit má phanh sau (ID 5950, 5942), Wigo lọc gió động cơ (ID 7900).
- **16/11/2026:** quét 1.482 SP → **67 trang chưa có bảng**. Đã tạo bảng cho **12 trang có thêm mã mới** (ID 3439, 7953, 7785, 6750, 6649, 6565, 6244, 6112, 5989, 4382, 3821, 2658) – đưa hết mã, trang trống thì thêm vào cuối. Còn 55 trang ít/không có dữ liệu: `du-lieu-oem/Trang_chua_co_bang_OEM_16-11-2026.csv`.
- **Trạng thái:** sẽ tiếp tục (55 trang còn lại chờ người dùng quyết).

### 6.4. Cập nhật mã OEM mới nhất lên các trang sản phẩm
- Từ file Excel mã OEM, tra mã OEM theo nhóm hàng; **chỉ cập nhật mã có trang trên hoathang.vn**, mã không có trang thì bỏ qua.
- **Nơi tra mã OEM (bắt buộc theo nhóm hàng):**
  - **Má phanh, guốc phanh** → tra trên **sbparts.jp/catalogue**
  - **Lọc dầu, lọc nhiên liệu, lọc gió động cơ, lọc gió điều hòa** → tra trên **azfilter.jp/catalogue**
- **Các đợt:**
  | Đợt | Nhóm hàng | Trạng thái |
  |---|---|---|
  | 1 | Má phanh | ✅ Xong – kiểm tra lại 15/11: 321 trang, đã bổ sung trang thiếu |
  | 2 | Lọc dầu | ✅ Xong – kiểm tra lại 15/11: 80/80 trang đủ |
  | 3 | Lọc nhiên liệu | ✅ Xong – kiểm tra lại 15/11: 14/14 trang đủ |
  | 4 | Lọc gió động cơ | ✅ Xong – 14 trang, đã bổ sung trang Wigo (ID 7900) |
  | 5 | Lọc gió điều hòa | ❓ Đã làm trước đây – **chưa kiểm tra lại được** (thiếu file ghi trang; có 75 mã trong `Book1.xlsx`) |
  | 6 | Guốc phanh | ✅ Xong – 57/57 trang đủ 106 mã |
  | 7 | *(chưa chọn nhóm hàng)* | Chưa làm |
- **15/11/2026:** kiểm tra lại 429 trang → 421 đủ, 8 thiếu → sửa 7 trang (Escape 2001-2008 ID 3429 thêm 30 mã + 6 trang tạo bảng ở mục 6.3), **bỏ qua VFe34 (ID 4554)** theo quyết định người dùng (dữ liệu nghi sai).
- **16/11/2026 – kiểm tra TOÀN BỘ 1.482 SP:** thêm 408 mã vào 131 trang (điền lại ô ẩn xong). **Nhóm B 22 trang** bảng lệch hẳn với nguồn (nghi ghi mã sản phẩm khác) – chờ người dùng xem. File: `du-lieu-oem/Kiem_tra_toan_bo_OEM_16-11-2026_chay_kho.csv`.
- **16/11/2026 – so sánh 22 trang nhóm B** (`du-lieu-oem/Nhom_B_so_sanh_16-11-2026.csv`): **14 trang loại 1** bảng đúng sản phẩm Asahi (khớp mã gốc khác cùng mã Asahi, chỉ thiếu mã của mã gốc ghi trên trang); **4 trang loại 2** nghi chép nhầm bảng (1916 Morning má phanh trước mang bảng má phanh sau Sportage ID 2271; 6095/6098/6099 mang bảng lọc gió điều hoà Sedona AFC-K324); **4 trang loại 3** (6225 Lux SA cần người xem; 3378–3380 nguồn chỉ có mã bộ kit _K1/_K2 → bỏ qua). **Đã thay bảng 4 trang loại 2** (người dùng duyệt 16/11): 1916 → 25 mã má phanh trước theo sbparts; 6095/6098/6099 → 7 mã theo azfilter (mã gốc trang đứng đầu). Kiểm tra OK, đã điền lại ô ẩn; gõ `581011YA10` ra trang Morning. Loại 1 và 7 ô lỗi Excel còn chờ người dùng quyết.
- **Còn treo:** guốc phanh AS-J1265 (Xpander EPB), AS-J9012 (Celerio) chưa có trang; AS-C554, AS-K2286 không có trên sbparts; mã 18268, 18488 nghi là đĩa phanh; vài trang má phanh có dòng mã nghi sai (xem `du-lieu-oem/tien-do-oem.md`).
- **Trạng thái:** sẽ tiếp tục.

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

### 6.5. Danh sách 8 hạng mục sửa nội dung
Làm lần lượt; xong mục nào ghi **"ĐÃ XONG"** cạnh mục đó.
1. Nhãn "BÁN CHẠY NHẤT"
2. Giờ hotline 24/7
3. Ngày thành lập (đã chốt 04/04/2024)
4. Bài Automechanika 2022
5. Điểm tự chấm 4.8/5
6. Đuôi `utm_source=chatgpt.com` trong liên kết
7. Trang thiếu giá bán
8. Địa chỉ cũ "Q. Hai Bà Trưng"

- **Trạng thái:** chưa bắt đầu – sẽ tiếp tục.

---

## 7. Các file trong dự án
| File / thư mục | Dùng để |
|---|---|
| `CLAUDE.md` | Sổ tay này – Claude tự đọc đầu mỗi phiên |
| `du-lieu-oem/` | Dữ liệu mã OEM: file Excel đối chiếu (`Doi_chieu_OEM_hoathang_tong_hop.xlsx`, `Them_OEM_loc_*.xlsx`, `Ma_khong_co_du_lieu.xlsx`, `Ma_OEM_chua_co_tren_web.xlsx`, `Book1.xlsx`), CSV chạy khô / kiểm tra, nhật ký `tien-do-oem.md` |
| `plugin-hoathang/` | Plugin `hoathang` + kho GitHub `Web-HTG` (skill, lệnh tắt, script, `TIEN-DO.md`) |
| `cap-nhat-oem.bat` | Lệnh tắt: mở Claude Code làm tiếp dự án mã OEM |
| `index.html`, `mo-trang-web.bat` | Trang web HTML học tập đầu tiên của người dùng + lệnh tắt mở trang |
| `css/style.css` | Phần trang trí (CSS) của `index.html` – tách ra ngày 16/11/2026 |
| `js/`, `images/` | Để dành cho trang học tập (đang trống) |
| `.claude/` | Cấu hình riêng của dự án: hook `SessionEnd` đẩy tiến độ lên GitHub |


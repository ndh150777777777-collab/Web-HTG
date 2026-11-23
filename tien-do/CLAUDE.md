# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

# Sổ tay dự án: Website hoathang.vn

Website của công ty phụ tùng ô tô **Hoà Thắng**.
Người dùng là **nhân viên làm web, mới bắt đầu, không phải lập trình viên chuyên nghiệp**.

> File lưu dạng **UTF-8** – không lưu lại dạng UTF-16 (Claude sẽ đọc sai tiếng Việt). Tiến độ công việc **không ghi ở đây** – xem `plugin-hoathang/TIEN-DO.md`.

---

## 1. Quy tắc bắt buộc cho AI (luôn tuân thủ)

> **Mục tiêu ưu tiên:** mã OEM, thông số kỹ thuật và nội dung SEO phải **chính xác tuyệt đối**, không sai lệch sang sản phẩm khác. Nhanh mà sai thì không làm – chậm mà đúng.

### 1.1. Ngôn ngữ và cách trả lời
- **Luôn trả lời bằng tiếng Việt**, dùng từ ngữ đơn giản, dễ hiểu.
- **Giải thích chi tiết cho người mới bắt đầu**:
  - Chia việc thành **từng bước có đánh số** (Bước 1, Bước 2, ...).
  - Gặp thuật ngữ kỹ thuật (ví dụ: plugin, meta description, slug, CSS, shortcode) thì **giải thích ngắn gọn nghĩa của nó** ngay lần đầu dùng.
  - Nói rõ **làm việc này để làm gì** và **kết quả mong đợi là gì**.
  - Khi người dùng cần tự thao tác trong WordPress, chỉ rõ đường dẫn menu (ví dụ: *Bảng tin → Sản phẩm → Sửa*).
- Khi làm việc dài, **báo cáo tiến độ cho người dùng khoảng mỗi 10 phút**.
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
- **Đầu mỗi phiên**: đọc `plugin-hoathang/TIEN-DO.md` (bảng tổng quan + phần **"Trạng thái chi tiết các dự án"**, mục 6.1 → 6.8) và `du-lieu-oem/tien-do-oem.md` để biết đang làm tới đâu, rồi làm tiếp — **không làm lại từ đầu**.
- Khi hoàn thành việc gì, **cập nhật tiến độ trong `TIEN-DO.md`** (sau khi báo người dùng) – không ghi tiến độ vào `CLAUDE.md`.

### 1.6. Đẩy tiến độ lên GitHub (người dùng đã cho phép sẵn – không cần hỏi lại)
- **Khi nào:** sau **MỖI công việc hoàn thành** (thao tác trên website, sửa file dự án, cập nhật plugin…) và **trước khi kết thúc cuộc trò chuyện**.
- **Làm gì:**
  1. Cập nhật `plugin-hoathang/TIEN-DO.md`: thêm mục mới vào **đầu** phần nhật ký (ngày – làm gì – trang + ID – kết quả kiểm tra – còn lại gì), sửa bảng tổng quan, phần "Trạng thái chi tiết các dự án" và dòng "Cập nhật lần cuối".
  2. `CLAUDE.md` **chỉ sửa khi có quy tắc / cách làm mới** (người dùng quyết 22/11/2026: CLAUDE.md chỉ giữ nội dung công việc, tiến độ ghi vào TIEN-DO.md). Rồi chép `CLAUDE.md` và `du-lieu-oem/tien-do-oem.md` sang `plugin-hoathang/tien-do/`.
  3. Quét để chắc **không có mật khẩu/token**, commit lời nhắn tiếng Việt (`Tiến độ dd/mm/yyyy: …`), rồi push.
- **Kho:** https://github.com/ndh150777777777-collab/Web-HTG (Private, nhánh `main`). Lệnh tắt: `/hoathang:day-tien-do`.
- **Lưới an toàn:** khi phiên Claude Code đóng, hook `SessionEnd` (`.claude/hooks/day-tien-do-github.sh`, khai báo trong `.claude/settings.local.json`) tự commit + push thay đổi còn sót. Đây chỉ là dự phòng – vẫn phải tự ghi nhật ký sau mỗi việc.

### 1.7. Quy tắc dữ liệu (chuẩn hoá & xuất file) – chốt 16/11/2026
- **Không bịa dữ liệu:** thiếu thông số kỹ thuật / mã OEM / giá thì KHÔNG tự điền, không suy đoán – hỏi người dùng hoặc tra nguồn (sbparts.jp, azfilter.jp).
- **Ô thiếu dữ liệu ghi thống nhất:**
  - Trong **file CSV kết quả**: để **trống** ô đó (không ghi `N/A`, `0`, `-`).
  - Trong **bản nháp sản phẩm / SEO chờ duyệt**: ghi `[CẦN BỔ SUNG]` – không đăng lên web khi còn dấu này.
  - **Không bao giờ** đưa `N/A` hay `[CẦN BỔ SUNG]` lên trang công khai.
- **File kết quả xuất ra dạng CSV** (sau khi kiểm tra / chuẩn hoá / chạy khô):
  - Phân cách bằng **dấu phẩy**; ô có dấu phẩy hoặc xuống dòng thì đặt trong ngoặc kép `"..."`.
  - Lưu **UTF-8 có BOM** để Excel hiện đúng tiếng Việt (PowerShell 5.1: `Export-Csv -NoTypeInformation -Encoding UTF8`).
  - Dòng đầu là tiêu đề cột; file chờ duyệt có thêm cột **Duyệt** và **Kết quả**.
  - Tên file: `<Nội_dung>_dd-mm-yyyy.csv`, để trong thư mục dữ liệu của dự án (VD `du-lieu-oem/`).
- **Copy-First – không ghi đè file gốc:** tuyệt đối không sửa trực tiếp file dữ liệu thô ban đầu (Excel/CSV đầu vào). Mọi thao tác lọc, chuẩn hoá, biến đổi đều lưu ra **file mới** (có ngày trong tên) để còn đối chiếu lại bản gốc.
- **Mã OEM luôn giữ dạng chữ (Text)** – chi tiết ở `.claude/rules/oem-rules.md`.
- File `.xlsx` đầu vào phải **chuyển sang CSV trước** khi xử lý (đọc bằng `doc-xlsx.ps1`, mục 3).

---

## 2. Công nghệ sử dụng
- **WordPress** + **WooCommerce** — hệ thống quản lý nội dung; sản phẩm ở đường dẫn `/san-pham/<slug>/`.
- **Theme Flatsome** (có **UX Blocks** — khối giao diện dùng lại được).
- **Plugin SEO: Rank Math SEO** — chấm điểm SEO cho từng trang/bài.
- Sửa nội dung bằng trình soạn thảo cổ điển (ô `#content`); khi AI sửa thì **không dùng trình soạn thảo trực quan (TinyMCE)** vì nó viết lại cả bài.
- Plugin khác đang bật: **Ivory Search** (ô tìm kiếm của web), **ACF PRO**, WooCommerce, Hide My WP (đổi đường dẫn đăng nhập, nghi chặn cài plugin), Contact Form 7, GTranslate, Really Simple SSL, kk Star Ratings.

## 3. Công cụ & môi trường làm việc
- Máy: Windows 10 LTSC, PowerShell 5.1, **đã cài Python 3.14.10** (17/11/2026, cài cho tài khoản Admin, có trong PATH, kèm thư viện `openpyxl` 3.1.5 để đọc/ghi Excel; script PowerShell `doc-xlsx.ps1` vẫn dùng được), **không có winget**.
- **Git** đã cài (bản 2.56) và đã đăng nhập GitHub tài khoản `ndh150777777777-collab`.
- Mở Claude Code có điều khiển trình duyệt: `claude --chrome --resume` (cần tiện ích Claude in Chrome).
- **Plugin `hoathang`** (thư mục `plugin-hoathang/`, cũng là kho GitHub `Web-HTG`) – chứa toàn bộ kiến thức, quy trình, script và tiến độ. Cài cho người khác: `/plugin marketplace add ndh150777777777-collab/Web-HTG` rồi `/plugin install hoathang@hoathang-local`.

### Skill (quy trình chuyên biệt – gọi khi cần)
| Skill | Dùng để |
|---|---|
| `hoathang-tong-quan` | Chỉ đường đầu phiên: danh sách dự án 6.1 → 6.8 (đối chiếu số mục với CLAUDE.md), skill cho từng dự án, nơi lưu tiến độ. Quy tắc chỉ ghi ở CLAUDE.md – skill không chép lại |
| `hoathang-oem` | Cập nhật / kiểm tra mã OEM, tạo Bảng mã OEM, lỗi dữ liệu đã biết, mẹo kỹ thuật |
| `hoathang-seo-noi-dung` | Sửa SEO Rank Math, thêm trang sản phẩm theo bài mẫu, 8 hạng mục sửa nội dung |
| `hoathang-tim-ma-oem` | Làm ô tìm kiếm tra được mã OEM gõ liền không gạch (ô ẩn ACF + Ivory Search), điền lại ô ẩn khi có sản phẩm mới / sửa bảng OEM |
| `hoathang-sua-web-them-san-pham` | (đồng bộ từ claude.ai) Quy trình A/B/C sửa web, thêm sản phẩm, cập nhật OEM hàng loạt |

### Lệnh tắt (slash command)
`/hoathang:tien-do` · `/hoathang:cap-nhat-oem <nhóm hàng>` · `/hoathang:kiem-tra-oem <nhóm hàng>` · `/hoathang:day-tien-do`

### Cách AI thao tác trên web (không có build / lint / test)
Dự án không có code để build hay chạy thử. Mọi thay đổi trên hoathang.vn làm bằng **JavaScript chạy trong tab Chrome đã đăng nhập wp-admin** (Claude in Chrome, `javascript_tool`).
- **Sửa nội dung bài / sản phẩm:** fetch `/wp-admin/post.php?post=<ID>&action=edit` → lấy `#content` và `form#post` → so nội dung với bản đã đọc (khác thì dừng) → `new FormData(form)`, đặt `content` mới, `save=Cập nhật`, bỏ `delete` → POST `/wp-admin/post.php` → đọc lại để kiểm tra. Mẫu: `plugin-hoathang/skills/hoathang-oem/scripts/luu-noi-dung.js`.
- **Mô tả ngắn sản phẩm** nằm ở ô `excerpt` (textarea `name=excerpt` trong cùng form) – sửa hàng loạt phải xử lý cả ô này. Đọc bản gốc nhanh: REST `/wp-json/wp/v2/product/<ID>?context=edit` (header `X-WP-Nonce`).
- **Nonce REST:** `/wp-admin/admin-ajax.php?action=rest-nonce`. Trường ACF (`oem_khong_gach`): POST `/wp-json/wp/v2/product/<ID>` với `{acf:{...}}`.
- **CSS bổ sung:** trong `/wp-admin/customize.php` dùng `wp.customize('custom_css[bowmedia]')` → `.set(cũ + mới)` → `wp.customize.previewer.save()`. Chỉ thêm vào cuối, không sửa dòng cũ.
- **Giới hạn công cụ:** kết quả JS trả về bị cắt ở ~1.000 ký tự và bị chặn nếu có `? & =` (thay ký tự trước khi trả). Việc dài: chạy nền trong trang, lưu tiến độ vào `window`/`localStorage`, đọc lại ≤10 giây/lần. Lỗi "classifier no verdict" là tạm thời – chờ rồi thử lại.
- **Web chặn:** cài plugin, sửa file theme (403); đăng nhập không ở `/wp-login.php`. Ô tìm kiếm thật là Ivory Search (xem 6.4). Khung sao kk Star Ratings do theme gọi nên công tắc "tắt" từng bài không có tác dụng.
- **Đọc Excel** (PowerShell; hoặc dùng Python + openpyxl): `powershell -File plugin-hoathang/skills/hoathang-oem/scripts/doc-xlsx.ps1 -Path <file.xlsx> [-MaxRows 15] [-Filter <chữ>]`. Kiểm tra mã trên trang (chỉ đọc): `scripts/kiem-tra-ma.js`.
- **Luật mã OEM** (nguồn tra sbparts/azfilter, cách lấy mã chéo, mã bộ kit, Bảng mã OEM 2/4/8/11 cột, ô ẩn tìm kiếm): xem **`.claude/rules/oem-rules.md`** (Claude tự đọc đầu mỗi phiên).
- Chuyển dữ liệu giữa 2 web trong cùng tab: `window.name`, sang hoathang thì chép vào `localStorage`. Lỗi khác đã gặp: `plugin-hoathang/skills/hoathang-oem/meo-ky-thuat.md`.

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

## 6. Quy tắc theo từng việc (rút từ kinh nghiệm đã làm)
> **Tiến độ, kết quả, ID trang đã làm, việc còn treo** của từng dự án nằm ở `plugin-hoathang/TIEN-DO.md` – phần **"Trạng thái chi tiết các dự án"** (giữ số mục 6.1 → 6.8) và nhật ký bên dưới. Nhật ký OEM: `du-lieu-oem/tien-do-oem.md`.

### 6.1. SEO Rank Math
- Mục tiêu người dùng đặt 16/11/2026: trang **dưới 87 → lên 90**; mẫu bài hiện tại tối đa ~86 (Content AI 0/5, thiếu mục lục, ảnh/video, độ dài) → lấy **~86 làm mức đạt**.
- **Đọc điểm:** trong trang sửa, `wp.data.select('rank-math').getAnalysisScore()` và `rankMathEditor.resultManager.getResults()`; chờ ≥6 giây cho Content AI tải (không thì điểm cao giả).
- **So điểm công bằng:** đặt từ khoá bằng `wp.data.dispatch('rank-math').updateKeywords(kw)` rồi `rankMathEditor.refresh('keyword')` 2 lần (chờ 3,5 giây + 3 giây) cho CẢ từ khoá cũ và mới rồi mới so.
- **Lưu từ khoá + điểm:** REST `/wp-json/rankmath/v1/updateMeta` (không cần lưu nội dung qua TinyMCE). Chấm trong iframe: chờ `rankMathEditor` sẵn sàng, không chờ `onload` (tài nguyên phụ treo).
- Từ khoá có năm dạng `2019-2022` bị Rank Math không nhận trong tiêu đề (điểm ~34).
- **Bài học 17/11/2026:** đổi từ khoá chính riêng cho từng trang **không tăng điểm** (mất điểm mật độ từ khoá) – người dùng đã quyết dừng. Muốn lên điểm phải sửa nội dung (mục lục, ảnh/video, độ dài bài).

### 6.2. Mã OEM và Bảng mã OEM
- Luật chính: `.claude/rules/oem-rules.md` (nguồn tra, bảng 2/4/8/11 cột, ô ẩn).
- **Tra lại nhanh:** lấy mã gốc từ tiêu đề / dòng "Mã OEM" bảng thông số / ô đầu Bảng mã OEM; chuyển dữ liệu giữa tab bằng `BroadcastChannel` (localStorage tab wp-admin gần đầy).
- Người dùng đã quyết: **không tạo bảng chỉ 1 mã**; 55 trang thiếu bảng để nguyên tới khi có nguồn mã mới; bỏ qua VFe34 (ID 4554), 6225 Lux SA, mã kit `_JT` / `_K1` / `_K2`; 7797 Xpander để nguyên tới khi có mã đúng.

### 6.3. Sửa nội dung web
- 8 hạng mục (làm lần lượt, xong ghi "ĐÃ XONG" trong `TIEN-DO.md` mục 6.5): nhãn "BÁN CHẠY NHẤT", giờ hotline 24/7, ngày thành lập, bài Automechanika 2022, điểm tự chấm 4.8/5, đuôi `utm_source=chatgpt.com`, trang thiếu giá bán, địa chỉ cũ "Q. Hai Bà Trưng".
- **Link partsouq.com trong mô tả SP: giữ nguyên** (người dùng quyết).
- Dòng `[rt_reading_time] phút đọc` đang ẩn bằng CSS cuối *Giao diện → Tuỳ biến → CSS bổ sung* (`#readTime, span:has(> #readTime) { display: none !important; }`); muốn hiện lại thì xoá 2 dòng đó.
- Khung sao kk Star Ratings do theme Flatsome tự gọi – công tắc "tắt" từng bài không ẩn được.

### 6.4. Ô tìm kiếm (Ivory Search) và ô ẩn mã không gạch
- Ô tìm kiếm thật là **Ivory Search form 2644** (gợi ý AJAX). Kiểm tra bằng cách gõ vào ô trên trang chủ – `?s=...&post_type=product` hay `flatsome_ajax_search_products` cho kết quả sai. Chỉ tìm được trang **đã xuất bản**.
- Trường ACF **`oem_khong_gach`** (nhóm trường ID 8571, bật REST): mọi mã OEM trong bảng + mã SP trong tên, bỏ `- . /` và khoảng trắng, viết hoa, cách nhau dấu cách; **kèm thêm dạng gốc có gạch** của mã (VD `0446548210 04465-48210`, từ 23/11/2026), bỏ giá trị không phải mã (dung tích `2.5 / 3.0 DIESEL`, ren `3/4-16`). Ivory Search → form 2644 → Includes → Custom Fields đã chọn trường này. Người dùng **không muốn thêm mã không gạch vào bảng OEM**.
- Form 2644 (từ 23/11/2026) **chỉ tìm Product, trong tên + mô tả ngắn + `oem_khong_gach`** – KHÔNG tìm nội dung bài, nên mã chỉ có trong bảng mà thiếu ở ô ẩn sẽ không tìm ra. Cấu hình cũ: `du-lieu-oem/Cau_hinh_Ivory_form2644_truoc_khi_sua_23-11-2026.txt`.
- Thêm SP mới / sửa bảng OEM → **phải điền lại ô ẩn** (web không tự chạy). Quy trình: skill `hoathang-tim-ma-oem`.
- Web **không cài được plugin, không sửa được file theme** (403, nghi Hide My WP). Muốn dùng Code Snippets phải nhờ người dùng bỏ chặn tạm thời.
- **Tìm kiếm nhanh trong trình duyệt** (23/11/2026): plugin **WPCode**, snippet PHP **ID 8623** "Hoà Thắng – Tìm kiếm nhanh" (mã nguồn `plugin-hoathang/skills/hoathang-tim-ma-oem/scripts/tim-nhanh-wpcode.php` – sửa snippet thì sửa cả file này). Tạo tệp `wp-content/uploads/hoathang-tim-kiem.js` (tên, link, ảnh nhỏ, mã từ `oem_khong_gach`), tự làm lại ~1 phút sau khi lưu SP; làm lại bằng tay: `/wp-admin/?ht_tao_lai_tim_kiem=1`. Công tắc `HT_TN_CHE_DO`: `'admin'` = chỉ quản trị viên, `'all'` = mọi khách (**đang `'all'` từ 23/11/2026**). **Trở lại như cũ: WPCode → Code Snippets → tắt snippet 8623.** Vẫn phải điền ô ẩn `oem_khong_gach` vì tệp lấy mã từ đó.
- Tốc độ gợi ý: đo bằng POST `admin-ajax.php` `action=is_ajax_load_posts`, `id=2644`, `security=` nonce lấy từ `IvoryAjaxVars` trên trang chủ; dùng chữ chưa tìm lần nào (gõ lại cùng chữ máy chủ đã nhớ, chỉ ~0,3 s). Kết quả đo: TIEN-DO.md mục 6.8.

### 6.5. Thêm sản phẩm mới
- **Luôn tra azfilter (lọc) / sbparts (phanh) trước** để xác nhận xe lắp được – mã người dùng đưa có thể lệch dòng xe (VD 1748 479 ghi Triton → thực tế Ford Transit). Nguồn không ghi xe đó thì dừng lại hỏi.
- **Cùng mã Asahi, khác dòng xe** (chốt 19/11/2026): chép nguyên trang đã có, chỉ thay dòng xe/năm (và động cơ trong bảng thông số), dùng chung ảnh; câu nào ghi riêng cho xe cũ thì viết lại và đưa duyệt.
- **Mẫu SEO chuẩn lọc gió điều hòa = trang ID 8584** (Transit AFC-U201, người dùng chốt 19/11/2026): đọc `content.raw` / `excerpt.raw` của 8584, giữ bố cục, chỉ thay mã Asahi / OEM / hãng / dòng xe / năm / kích thước / 2 bảng mã.
  - Tên: `Lọc gió điều hòa dùng cho xe <Xe> <năm> | Asahi <mã> | <OEM>`; **slug không có năm** (`loc-gio-dieu-hoa-dung-cho-xe-<xe>`).
  - Phụ đề h2 cỡ 75% "Lọc Gió Điều Hòa-Lọc bụi bẩn…"; "2. Lọc gió là gì?…"; "3./7. … Lọc Gió Điều Hòa Asahi <mã>"; "8. Hướng dẫn thay thế và bảo dưỡng" (không thêm loại hàng); "5. Bảng mã OEM" (bảng nhỏ + bảng 8 cột, mã gốc đứng đầu).
  - Cuối bài: Hotline/Zalo, Website, link `https://partsouq.com/`. Giá để trống; ảnh người dùng tự chèn, đặt làm Ảnh sản phẩm khi được đồng ý.
  - **Rank Math: từ khoá chỉ `Lọc gió điều hòa`** (chốt 20/11/2026) – chỉ áp cho trang mới, không đổi trang lọc gió điều hòa cũ.
  - 8584 có 3 chỗ cụt chữ người dùng giữ nguyên ("khi chọn cho Transit", "là l dùng để đối chiếu", "6. Dấu hiệu cần kiểm tra hoặc") – chép sang trang mới thì hỏi.
- **Lọc gió động cơ:** dùng bố cục 8584 đổi nội dung sang lọc gió động cơ, viết đủ câu (mẫu Seltos ID 8595).
- **Lọc nhiên liệu:** slug giữ năm như các trang cũ (VD `loc-nhien-lieu-ranger-2005-2010`); từ khoá Rank Math dạng `Lọc nhiên liệu,<Xe>`.
- azfilter không có dữ liệu → hỏi người dùng (VD VF3: bỏ kích thước, không ghi năm, chỉ bảng nhỏ).
- Tạo trang dạng **bản nháp**; người dùng xem rồi tự xuất bản. Xong: đặt Rank Math, điền ô ẩn `oem_khong_gach`; sau khi xuất bản thử ô tìm kiếm.

## 7. Các file trong dự án
| File / thư mục | Dùng để |
|---|---|
| `CLAUDE.md` | Sổ tay này (quy tắc + cách làm, không ghi tiến độ) – Claude tự đọc đầu mỗi phiên |
| `plugin-hoathang/TIEN-DO.md` | **Tiến độ tất cả dự án**: bảng tổng quan, trạng thái chi tiết 6.1 → 6.8, nhật ký (mới nhất ở trên) |
| `du-lieu-oem/` | Dữ liệu mã OEM: file Excel đối chiếu (`Doi_chieu_OEM_hoathang_tong_hop.xlsx`, `Them_OEM_loc_*.xlsx`, `Ma_khong_co_du_lieu.xlsx`, `Ma_OEM_chua_co_tren_web.xlsx`, `Book1.xlsx`), nhật ký `tien-do-oem.md` |
| `du-lieu-oem/*.csv` | Kết quả chạy khô / kiểm tra (có cột Duyệt, Kết quả): `Kiem_tra_toan_bo_OEM_16-11-2026_chay_kho.csv` (1.482 SP), `Nhom_B_so_sanh_16-11-2026.csv` (22 trang nhóm B), `Nhom_B_loai1_chay_kho_16-11-2026.csv`, `Trang_chua_co_bang_OEM_16-11-2026.csv` (55 trang), `Dot6_guoc_phanh_chay_kho.csv`, `Kiem_tra_lai_15-11-2026_con_thieu.csv` |
| `plugin-hoathang/` | Plugin `hoathang` + kho GitHub `Web-HTG` (manifest `.claude-plugin/`, skill, lệnh tắt, script, `TIEN-DO.md`) |
| `plugin-hoathang/tien-do/` | Bản sao `CLAUDE.md` và `tien-do-oem.md` để cả nhóm xem trên GitHub – chép đè sau mỗi việc (mục 1.6) |
| `.claude/rules/oem-rules.md` | Luật về mã OEM (nguồn tra, Bảng mã OEM, ô ẩn tìm kiếm) – Claude tự đọc đầu mỗi phiên; tách từ CLAUDE.md 16/11/2026 |
| `cap-nhat-oem.bat` | Lệnh tắt: mở Claude Code làm tiếp dự án mã OEM |
| `index.html`, `mo-trang-web.bat` | Trang web HTML học tập đầu tiên của người dùng + lệnh tắt mở trang |
| `css/style.css` | Phần trang trí (CSS) của `index.html` – tách ra ngày 16/11/2026 |
| `js/`, `images/` | Để dành cho trang học tập (đang trống) |
| `.claude/` | Cấu hình riêng của dự án: hook `SessionEnd` (`hooks/day-tien-do-github.sh`, khai báo trong `settings.local.json`) đẩy tiến độ lên GitHub |


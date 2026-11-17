# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

# Sổ tay dự án: Website hoathang.vn

Website của công ty phụ tùng ô tô **Hoà Thắng**.
Người dùng là **nhân viên làm web, mới bắt đầu, không phải lập trình viên chuyên nghiệp**.

> **Cập nhật lần cuối:** 17/11/2026 (kiểm tra lại mã OEM theo thứ tự đợt: xong Đợt 1 má phanh (27 mã / 9 trang), Đợt 2 lọc dầu (3 mã / 3 trang), Đợt 3 lọc nhiên liệu (đủ, phát hiện 81 trang mô tả sai), Đợt 4 lọc gió (đủ), Đợt 5 lọc gió điều hoà (27 mã / 5 trang); sửa mô tả 81 trang lọc xăng ghi nhầm "lọc dầu hộp số"; lọc dầu hộp số 208 trang (4 mã / 4 trang) – mục 6.4; trước đó: dừng đổi từ khoá SEO, khôi phục từ khoá cũ 104 trang – mục 6.1; trước đó: phát hiện lỗi đo điểm SEO; trước đó: xoá 6 sub-agent; trước đó: đổi từ khoá SEO 214/613 SP, tạm dừng – mục 6.1; trước đó 16/11: 105/613; trước đó: kiểm tra SEO Rank Math toàn web; trước đó: tách luật mã OEM ra file riêng `.claude/rules/oem-rules.md`; trước đó: tra lại 55 trang chưa có bảng OEM – không có mã mới; mục 1.7 "Quy tắc dữ liệu"). File lưu dạng **UTF-8** – không lưu lại dạng UTF-16 (Claude sẽ đọc sai tiếng Việt).

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
- **Đầu mỗi phiên**: đọc mục **"6. Tiến độ các dự án"** (và `du-lieu-oem/tien-do-oem.md`) để biết đang làm tới đâu, rồi làm tiếp — **không làm lại từ đầu**.
- Khi hoàn thành việc gì, **cập nhật lại mục tiến độ** (sau khi báo người dùng).

### 1.6. Đẩy tiến độ lên GitHub (người dùng đã cho phép sẵn – không cần hỏi lại)
- **Khi nào:** sau **MỖI công việc hoàn thành** (thao tác trên website, sửa file dự án, cập nhật plugin…) và **trước khi kết thúc cuộc trò chuyện**.
- **Làm gì:**
  1. Thêm mục mới vào **đầu** phần nhật ký của `plugin-hoathang/TIEN-DO.md` (ngày – làm gì – trang + ID – kết quả kiểm tra – còn lại gì), cập nhật bảng tổng quan.
  2. **Luôn cập nhật `CLAUDE.md`** (mục 6 tiến độ, dòng "Cập nhật lần cuối", quy tắc mới nếu có) – người dùng yêu cầu 16/11/2026. Rồi chép `CLAUDE.md` và `du-lieu-oem/tien-do-oem.md` sang `plugin-hoathang/tien-do/`.
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

### Cách AI thao tác trên web (không có build / lint / test)
Dự án không có code để build hay chạy thử. Mọi thay đổi trên hoathang.vn làm bằng **JavaScript chạy trong tab Chrome đã đăng nhập wp-admin** (Claude in Chrome, `javascript_tool`).
- **Sửa nội dung bài / sản phẩm:** fetch `/wp-admin/post.php?post=<ID>&action=edit` → lấy `#content` và `form#post` → so nội dung với bản đã đọc (khác thì dừng) → `new FormData(form)`, đặt `content` mới, `save=Cập nhật`, bỏ `delete` → POST `/wp-admin/post.php` → đọc lại để kiểm tra. Mẫu: `plugin-hoathang/skills/hoathang-oem/scripts/luu-noi-dung.js`.
- **Mô tả ngắn sản phẩm** nằm ở ô `excerpt` (textarea `name=excerpt` trong cùng form) – sửa hàng loạt phải xử lý cả ô này. Đọc bản gốc nhanh: REST `/wp-json/wp/v2/product/<ID>?context=edit` (header `X-WP-Nonce`).
- **Nonce REST:** `/wp-admin/admin-ajax.php?action=rest-nonce`. Trường ACF (`oem_khong_gach`): POST `/wp-json/wp/v2/product/<ID>` với `{acf:{...}}`.
- **CSS bổ sung:** trong `/wp-admin/customize.php` dùng `wp.customize('custom_css[bowmedia]')` → `.set(cũ + mới)` → `wp.customize.previewer.save()`. Chỉ thêm vào cuối, không sửa dòng cũ.
- **Giới hạn công cụ:** kết quả JS trả về bị cắt ở ~1.000 ký tự và bị chặn nếu có `? & =` (thay ký tự trước khi trả). Việc dài: chạy nền trong trang, lưu tiến độ vào `window`/`localStorage`, đọc lại ≤10 giây/lần. Lỗi "classifier no verdict" là tạm thời – chờ rồi thử lại.
- **Web chặn:** cài plugin, sửa file theme (403); đăng nhập không ở `/wp-login.php`. Ô tìm kiếm thật là Ivory Search (xem 6.6). Khung sao kk Star Ratings do theme gọi nên công tắc "tắt" từng bài không có tác dụng.
- **Đọc Excel** (máy không có Python): `powershell -File plugin-hoathang/skills/hoathang-oem/scripts/doc-xlsx.ps1 -Path <file.xlsx> [-MaxRows 15] [-Filter <chữ>]`. Kiểm tra mã trên trang (chỉ đọc): `scripts/kiem-tra-ma.js`.
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

## 6. Tiến độ các dự án (tất cả: SẼ TIẾP TỤC)
> Nhật ký chi tiết cho cả nhóm: `plugin-hoathang/TIEN-DO.md` (trên GitHub). Nhật ký OEM: `du-lieu-oem/tien-do-oem.md`.

### 6.1. Sửa SEO các trang/bài trên web
- Lọc trang/bài có điểm Rank Math dưới 85, sửa SEO trực tiếp trên website. Người dùng 16/11/2026 nâng mục tiêu: **trang dưới 87 → lên 90**.
- **16/11/2026:** quét xong – 604 SP dưới 87 + 218 trang chưa đặt từ khoá (`du-lieu-seo/SEO_duoi_87_diem_16-11-2026.csv`). Nguyên nhân: từ khoá chính chung chung, trùng nhiều trang. **Điểm trong danh sách là điểm cũ** – Rank Math hiện tại chấm thêm Content AI (0/5) nên trang ghi 90 chấm lại chỉ 86; mẫu bài hiện tại tối đa ~86 (mất TOC, ảnh/video, độ dài, Content AI). Đã đổi từ khoá trang 8387 → 'lọc xăng dùng cho xe Innova' (điểm thật 86).
- **Cách đọc/lưu điểm:** trong trang sửa, `wp.data.select('rank-math').getAnalysisScore()` và `rankMathEditor.resultManager.getResults()` (chờ ≥6 giây cho Content AI tải, nếu không điểm sẽ cao giả); lưu từ khoá + điểm bằng REST `/wp-json/rankmath/v1/updateMeta` (không cần lưu nội dung qua TinyMCE).
- **16/11/2026 (tối) – phương án A (người dùng chọn):** lấy ~86 làm mức đạt; đặt từ khoá chính riêng (tên SP trước dấu phẩy/năm, VD 'Lọc nhiên liệu dùng cho xe D-MAX', giữ từ khoá phụ) cho **613 SP đã duyệt** (chỉ sản phẩm). Chỉ lưu khi điểm mới ≥ điểm cũ (chấm cả 2 trong iframe trang sửa). **17/11: tạm dừng ở 214/613** theo yêu cầu người dùng: 101 tăng điểm, 7 bằng, 106 giữ nguyên, 0 lỗi. Làm tiếp: đọc `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_17-11-2026.csv`, chạy các dòng 'Chưa làm' (399 SP). Mẹo: chạy 2 trang song song; không chờ `onload` của iframe (tài nguyên phụ treo) mà chờ `rankMathEditor` sẵn sàng; tiến độ còn lưu trong localStorage `seo_job_16_11` / `seo_dry_16_11` của tab wp-admin. Để riêng: 183 SP ít nội dung (<300 chữ, cần viết bài), 26 trang/bài (cần người dùng chọn từ khoá) – xem `SEO_tu_khoa_moi_chay_kho_16-11-2026.csv`.
- **17/11/2026 (chiều) – PHÁT HIỆN LỖI ĐO:** lần chạy trước chấm từ khoá cũ lúc trang vừa tải (bị trừ 5 điểm Content AI) còn từ khoá mới sau khi phân tích lại (không bị trừ) → từ khoá mới được cộng oan 5 điểm. Đo lại: 8384 báo 80→85 thực tế 85=85; 6459 báo 81→84 thực tế 86→84; 6486 báo 84→87 thực tế 89→87. Ước tính ~96/108 trang đã lưu thật ra giảm ~2 điểm. **Cách đo đúng:** đặt từ khoá bằng `wp.data.dispatch('rank-math').updateKeywords(kw)` rồi `rankMathEditor.refresh('keyword')` 2 lần (chờ 3,5 giây + 3 giây) cho CẢ từ khoá cũ và mới, rồi mới so. Lưu ý: từ khoá có năm dạng `2019-2022` bị Rank Math không nhận trong tiêu đề → điểm ~34.
- **Người dùng quyết 17/11:** (1) chấm lại công bằng 108 trang đã lưu (chỉ đọc) → xuất CSV trang bị giảm → duyệt → đặt lại từ khoá cũ (từ khoá cũ còn trong localStorage `seo_job_16_11`, trường `oldkw`); (2) chạy tiếp SP còn lại bằng cách đo mới, chỉ lưu khi bằng/cao hơn. **Tạm dừng theo yêu cầu người dùng:** chạy mới 24 SP (1 lưu bằng điểm – 5926, 2 đã có sẵn, 21 giữ nguyên vì thấp hơn); chấm lại mới 2/108 (6385 bằng, 6459 giảm), kết quả trong localStorage `seo_recheck_17_11`. File: `du-lieu-seo/SEO_doi_tu_khoa_ket_qua_lan2_17-11-2026.csv` (còn 375 dòng "Chưa làm").
- **17/11/2026 (tối) – KẾT THÚC đổi từ khoá:** chấm lại công bằng 60 trang đã lưu → 55 giảm (~2 điểm), 5 bằng, 0 tăng; chạy mới 24 SP → 0 tăng. **Người dùng quyết: đổi từ khoá chỉ làm giảm điểm → DỪNG, KHÔNG chạy 375 SP còn lại; khôi phục từ khoá cũ.** Đã khôi phục **104 trang** (55 giảm + 49 chưa chấm) bằng REST updateMeta (từ khoá cũ + điểm cũ), đọc lại 104/104 OK. Giữ từ khoá mới 5 trang bằng điểm: 5926, 6385, 6481, 6857, 8384. File: `du-lieu-seo/SEO_khoi_phuc_tu_khoa_ket_qua_17-11-2026.csv`. **Bài học:** đổi từ khoá chính riêng không tăng điểm Rank Math (mất điểm mật độ từ khoá); muốn lên điểm phải sửa nội dung (mục lục, ảnh/video, độ dài bài).
- **Trạng thái:** việc đổi từ khoá ĐÃ DỪNG. Hướng tiếp (chờ người dùng chọn): thêm mục lục / ảnh / viết dài hơn cho 183 SP ít nội dung, 26 trang/bài cần chọn từ khoá.

### 6.2. Viết lại SEO trang sản phẩm mã AFT-U520
- Lọc dầu hộp số AT cho Territory 1.5 2021+, hãng Asahi, OEM 516013A.
- Trang: https://hoathang.vn/san-pham/loc-dau-hop-so-at-dung-cho-xe-territory-1-5/
- **Trạng thái:** chưa bắt đầu – sẽ tiếp tục.

### 6.3. Thêm "Bảng mã OEM" vào trang sản phẩm
- Luật tạo bảng (mẫu ID 3679, tiêu đề, 8 cột, vị trí, chỉ tạo khi đồng ý): xem `.claude/rules/oem-rules.md` mục 4.
- Đã làm 15/11/2026: tạo bảng cho 6 trang – Wigo má phanh trước (ID 5926), Transit má phanh trước (ID 5946, 4559), Transit má phanh sau (ID 5950, 5942), Wigo lọc gió động cơ (ID 7900).
- **16/11/2026:** quét 1.482 SP → **67 trang chưa có bảng**. Đã tạo bảng cho **12 trang có thêm mã mới** (ID 3439, 7953, 7785, 6750, 6649, 6565, 6244, 6112, 5989, 4382, 3821, 2658) – đưa hết mã, trang trống thì thêm vào cuối. Còn 55 trang ít/không có dữ liệu: `du-lieu-oem/Trang_chua_co_bang_OEM_16-11-2026.csv`.
- **16/11/2026 (sau):** tra lại 55 trang bằng cả mã Asahi lẫn mã OEM trên trang → **không có mã mới** (23 trang nguồn chỉ có 1 mã, 14 trang bài đã có bảng mã chéo khác, 18 trang nguồn không có dữ liệu). Kết quả: `du-lieu-oem/Tra_lai_55_trang_chua_co_bang_16-11-2026.csv`.
- **Người dùng quyết 16/11/2026: ĐỂ NGUYÊN 55 trang, không tạo bảng 1 mã.** Chỉ làm lại khi có nguồn mã mới (file nhà cung cấp hoặc azfilter/sbparts có thêm dữ liệu).
- **Trạng thái:** sẽ tiếp tục khi có nguồn mã mới.

### 6.4. Cập nhật mã OEM mới nhất lên các trang sản phẩm
- Từ file Excel mã OEM, tra mã OEM theo nhóm hàng. Luật tra mã (nguồn theo nhóm hàng, chỉ cập nhật mã có trang): xem `.claude/rules/oem-rules.md` mục 2.
- **Các đợt:**
  | Đợt | Nhóm hàng | Trạng thái |
  |---|---|---|
  | 1 | Má phanh | ✅ Xong – kiểm tra lại 17/11: 418 trang, thêm 27 mã vào 9 trang (3122, 2221, 2218, 2216, 2214, 1914, 2215, 2207, 1992), ô ẩn OK; 2257 Sorento sau nghi bảng sai – chờ xem. File `du-lieu-oem/Dot1_ma_phanh_kiem_tra_lai_chay_kho_17-11-2026.csv` |
  | 2 | Lọc dầu | ✅ Xong – kiểm tra lại 17/11: 164 trang, thêm 3 mã vào 3 trang (6039, 7429, 7436), ô ẩn OK; 208 trang lọc dầu hộp số chưa kiểm |
  | 3 | Lọc nhiên liệu | ✅ Xong – kiểm tra lại 17/11: 162 trang (gồm lọc xăng) đủ mã. **Đã sửa 17/11:** 81 trang lọc xăng Azumi (ID 3083–3251) mô tả ghi nhầm "lọc dầu hộp số" → thay bằng nội dung đúng loại hàng (cách A). Còn: 7797 Xpander bảng mã Mazda – chờ người dùng. File `du-lieu-oem/Dot3_loc_nhien_lieu_kiem_tra_lai_17-11-2026.csv` |
  | 4 | Lọc gió động cơ | ✅ Xong – kiểm tra lại 17/11: 187 trang, 184 đủ mã, 3 trang azfilter không có dữ liệu (6880, 6288, 6244) |
  | 5 | Lọc gió điều hòa | ✅ Xong – kiểm tra lại 17/11: 221 trang, thêm 27 mã vào 5 trang (6704, 6703, 6705, 6699, 6111), ô ẩn OK; 11 trang azfilter không có dữ liệu. File `du-lieu-oem/Dot5_loc_gio_dieu_hoa_kiem_tra_lai_chay_kho_17-11-2026.csv` |
  | 6 | Guốc phanh | ✅ Xong – 57/57 trang đủ 106 mã |
  | – | Lọc dầu hộp số | ✅ Kiểm tra lần đầu 17/11: 208 trang, thêm 4 mã vào 4 trang (3305, 2592, 2596, 2435), ô ẩn OK; 4 trang azfilter không có dữ liệu. File `du-lieu-oem/Loc_dau_hop_so_kiem_tra_OEM_chay_kho_17-11-2026.csv` |
  | 7 | *(chưa chọn nhóm hàng)* | Chưa làm |
- **15/11/2026:** kiểm tra lại 429 trang → 421 đủ, 8 thiếu → sửa 7 trang (Escape 2001-2008 ID 3429 thêm 30 mã + 6 trang tạo bảng ở mục 6.3), **bỏ qua VFe34 (ID 4554)** theo quyết định người dùng (dữ liệu nghi sai).
- **16/11/2026 – kiểm tra TOÀN BỘ 1.482 SP:** thêm 408 mã vào 131 trang (điền lại ô ẩn xong). **Nhóm B 22 trang** bảng lệch hẳn với nguồn (nghi ghi mã sản phẩm khác) – chờ người dùng xem. File: `du-lieu-oem/Kiem_tra_toan_bo_OEM_16-11-2026_chay_kho.csv`.
- **16/11/2026 – so sánh 22 trang nhóm B** (`du-lieu-oem/Nhom_B_so_sanh_16-11-2026.csv`): **14 trang loại 1** bảng đúng sản phẩm Asahi (khớp mã gốc khác cùng mã Asahi, chỉ thiếu mã của mã gốc ghi trên trang); **4 trang loại 2** nghi chép nhầm bảng (1916 Morning má phanh trước mang bảng má phanh sau Sportage ID 2271; 6095/6098/6099 mang bảng lọc gió điều hoà Sedona AFC-K324); **4 trang loại 3** (6225 Lux SA cần người xem; 3378–3380 nguồn chỉ có mã bộ kit _K1/_K2 → bỏ qua). **Đã thay bảng 4 trang loại 2** (người dùng duyệt 16/11): 1916 → 25 mã má phanh trước theo sbparts; 6095/6098/6099 → 7 mã theo azfilter (mã gốc trang đứng đầu). Kiểm tra OK, đã điền lại ô ẩn; gõ `581011YA10` ra trang Morning. **Đã thêm 669 mã vào 14 trang loại 1** (người dùng duyệt 16/11; 4335–4339 mỗi trang +106 mã; 2215/2207 bảng 11 cột có cột trống xen giữa – đã dựng dòng mới đúng mẫu). Kiểm tra 14/14 OK, ô ẩn 14/14; gõ `26669013` ra Aveo/Cruze/Fadil. Còn: 7 ô lỗi Excel (4394, 4391, 4335–4339), 6225 Lux SA.
- **Còn treo:** guốc phanh AS-J1265 (Xpander EPB), AS-J9012 (Celerio) chưa có trang; AS-C554, AS-K2286 không có trên sbparts; mã 18268, 18488 nghi là đĩa phanh; vài trang má phanh có dòng mã nghi sai (xem `du-lieu-oem/tien-do-oem.md`).
- **Trạng thái:** sẽ tiếp tục.

### 6.5. Danh sách 8 hạng mục sửa nội dung
Làm lần lượt; xong mục nào ghi **"ĐÃ XONG"** cạnh mục đó.
1. Nhãn "BÁN CHẠY NHẤT"
2. Giờ hotline 24/7
3. Ngày thành lập (đã chốt 04/04/2024)
4. Bài Automechanika 2022
5. Điểm tự chấm 4.8/5 – **ĐÃ XONG 16/11/2026** (không còn 4.8/5; xoá dữ liệu bình chọn kk Star Ratings của bài Giới thiệu ID 712 – đang hiện 4.6/5 (9 bình chọn) – và SP MG ZS ID 3553 (khai báo sao gửi Google); 2 trang này cũng đặt "tắt" chấm sao. Giao diện Flatsome tự gọi khung sao nên công tắc "tắt" không ẩn được – giờ hiện khung trống "Rate this post")
6. Đuôi `utm_source=chatgpt.com` trong liên kết – **ĐÃ XONG 16/11/2026** (xoá 3.105 link trên 1.155 sản phẩm: 1.740 trong mô tả + 1.365 trong mô tả ngắn; quét lại còn 0; trang/bài/menu không bị dính)
7. Trang thiếu giá bán
8. Địa chỉ cũ "Q. Hai Bà Trưng"

- **Trạng thái:** đang làm – xong mục 5, 6 (16/11/2026). Đã ẩn dòng `[rt_reading_time] phút đọc` (shortcode hỏng do theme in ra ở đầu cả 8 bài viết) bằng CSS thêm vào cuối *Giao diện → Tuỳ biến → CSS bổ sung* (`#readTime, span:has(> #readTime) { display: none !important; }`) – 16/11/2026; muốn hiện lại thì xoá 2 dòng đó. 971 link partsouq.com trong mô tả SP: **người dùng quyết giữ nguyên, không làm**.

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

---

## 7. Các file trong dự án
| File / thư mục | Dùng để |
|---|---|
| `CLAUDE.md` | Sổ tay này – Claude tự đọc đầu mỗi phiên |
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


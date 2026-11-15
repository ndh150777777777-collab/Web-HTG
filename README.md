# Plugin `hoathang` cho Claude Code

Gói toàn bộ kiến thức, quy trình và dữ liệu đã làm cho website **hoathang.vn** (phụ tùng ô tô Hoà Thắng), để Claude ở phiên nào cũng biết cách làm việc và làm tiếp, không làm lại từ đầu.

## Trong plugin có gì
```
plugin-hoathang/
├── .claude-plugin/
│   ├── plugin.json            ← thông tin plugin
│   └── marketplace.json       ← để cài plugin từ thư mục trên máy
├── skills/
│   ├── hoathang-tong-quan/    ← quy tắc làm việc, thông tin đã chốt, danh sách dự án
│   ├── hoathang-oem/          ← quy trình cập nhật/kiểm tra mã OEM, tạo Bảng mã OEM
│   │   ├── du-lieu-da-lam.md  ← kết quả các đợt, ID trang, việc còn treo
│   │   ├── meo-ky-thuat.md    ← lỗi đã gặp và cách tránh
│   │   └── scripts/           ← đọc Excel (PowerShell), kiểm tra mã, lưu trang an toàn
│   └── hoathang-seo-noi-dung/ ← SEO Rank Math, thêm sản phẩm, 8 hạng mục sửa nội dung
└── commands/
    ├── tien-do.md             ← /hoathang:tien-do
    ├── cap-nhat-oem.md        ← /hoathang:cap-nhat-oem <nhóm hàng>
    └── kiem-tra-oem.md        ← /hoathang:kiem-tra-oem <nhóm hàng>
```
- **Skill** = sổ tay hướng dẫn; Claude tự mở đúng sổ khi việc liên quan.
- **Lệnh tắt (slash command)** = gõ `/hoathang:...` để bắt đầu nhanh một việc.

## Cách cài (chọn 1 trong 3)

**Cách 0 – Cài từ GitHub (cho người khác trong nhóm)**
1. Mở Claude Code.
2. Gõ: `/plugin marketplace add ndh150777777777-collab/Wed-HTG`
3. Gõ: `/plugin install hoathang@hoathang-local`
4. Thoát (`/exit`) rồi mở lại Claude Code.
> Nếu kho GitHub để **Private**, người cài phải được mời vào kho và đã đăng nhập GitHub trên máy.

**Cách 1 – Cài cố định từ thư mục trên máy**
1. Mở Claude Code ở thư mục dự án.
2. Gõ: `/plugin marketplace add C:\Users\Admin\du-an-thu-nghiem\plugin-hoathang`
3. Gõ: `/plugin install hoathang@hoathang-local`
4. Thoát (`/exit`) rồi mở lại Claude Code.

**Cách 2 – Dùng thử cho 1 phiên**
```
claude --plugin-dir "C:\Users\Admin\du-an-thu-nghiem\plugin-hoathang"
```
Muốn có cả trình duyệt Chrome: thêm `--chrome`.

## Cách dùng
- `/hoathang:tien-do` – xem đang làm tới đâu, nên làm gì tiếp.
- `/hoathang:cap-nhat-oem lọc gió điều hòa` – làm tiếp cập nhật mã OEM cho một nhóm.
- `/hoathang:kiem-tra-oem tất cả` – kiểm tra lại (chỉ đọc) các trang đã đủ mã chưa.
- Hoặc cứ nói bình thường, VD "sửa SEO trang AFT-U520" – Claude tự dùng skill phù hợp.

## Lưu ý
- Plugin **không chứa mật khẩu** hay thông tin đăng nhập. Người dùng luôn tự đăng nhập wp-admin trên Chrome.
- Tiến độ thật vẫn nằm ở `CLAUDE.md` và `du-lieu-oem\tien-do-oem.md` của dự án; `du-lieu-da-lam.md` trong plugin là bản tóm tắt ngày 15/11/2026. Khi có tiến độ mới, nên nhờ Claude cập nhật cả file này.

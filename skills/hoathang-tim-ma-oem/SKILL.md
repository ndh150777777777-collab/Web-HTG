---
name: hoathang-tim-ma-oem
description: Dùng khi khách/nhân viên tra mã OEM gõ liền không gạch (ví dụ 0446548210 thay vì 04465-48210) mà ô tìm kiếm hoathang.vn không ra; hoặc khi thêm sản phẩm mới / sửa bảng OEM và cần điền lại ô ẩn "oem_khong_gach" cho ô tìm kiếm Ivory Search.
---

# Tìm mã OEM gõ liền không gạch trên hoathang.vn

> Bối cảnh và quy tắc (Ivory Search form 2644, trường ACF `oem_khong_gach` nhóm ID 8571, không thêm mã không gạch vào bảng OEM, web chặn cài plugin / sửa theme, cách kiểm tra bằng ô tìm kiếm trên trang chủ) nằm ở **`CLAUDE.md` mục 6.4** và **`.claude/rules/oem-rules.md` mục 5**. Skill này chỉ giữ quy trình và đoạn code. Tiến độ: `TIEN-DO.md` mục 6.6.

## Lưu ý riêng khi chạy
- **Từ 23/11/2026 form 2644 không tìm nội dung bài** → ô ẩn phải có **cả mã không gạch lẫn mã có gạch**, thiếu dạng nào thì gõ dạng đó không ra. Đoạn code dưới đã tạo đủ 2 dạng.
- Khi chạy cho toàn bộ SP, đoạn code tính lại ô ẩn từ bảng (thứ tự mã có thể khác bản đang lưu) → `canGhi` có thể gần bằng tổng số SP; đó là bình thường, vẫn phải báo người dùng.
- Chỉ ghi trường `oem_khong_gach`. **Không đổi nội dung bài, bảng OEM, SEO.**
- Trước khi ghi hàng loạt: chạy khô, báo số sản phẩm cần ghi, chờ người dùng đồng ý.
- **Khi nào phải chạy lại:** thêm sản phẩm mới, hoặc thêm/sửa mã trong bảng OEM → điền lại ô ẩn cho các sản phẩm đó (web không tự chạy).

## Quy trình điền ô ẩn (chạy JS trong tab wp-admin đã đăng nhập, ví dụ Claude in Chrome)
Bước 1 – Lấy sản phẩm và tính mã (chạy khô, chưa ghi):
```js
// Lấy toàn bộ sản phẩm (nếu chỉ cập nhật vài sản phẩm, thay bằng ?include=ID1,ID2)
const all=[];for(let p=1;p<=20;p++){
  const r=await fetch('/wp-json/wp/v2/product?per_page=100&page='+p+'&_fields=id,title,content,acf',{credentials:'include'});
  if(r.status!==200)break;const j=await r.json();all.push(...j);if(j.length<100)break;}
// Bỏ dấu - . / và khoảng trắng, viết hoa
const norm=s=>s.replace(/[\s\-\.\/]/g,'').toUpperCase();
const sciRe=/^\d[.,]\d+E\+\d+$/i;                 // mã bị lỗi Excel (4,05E+09) -> bỏ qua, báo người dùng
const year=/^\d{4}\s*[-–]\s*(\d{2,4}|nay)?$/i;     // năm đời xe -> bỏ qua
const isCode=t=>{
  if(sciRe.test(t)||year.test(t)||/\bmm\b/i.test(t))return false;
  if(!/^[A-Z0-9][A-Z0-9 \-\.\/]{3,24}$/i.test(t))return false;
  const d=(t.match(/\d/g)||[]).length;
  return d>=4||(d>=3&&/[A-Z]/i.test(t)&&/-/.test(t)); // mã OEM, hoặc mã Asahi dạng AFC-J108
};
// Giá trị không phải mã OEM lọt từ bảng thông số: dung tích máy (2.5 / 3.0 DIESEL, 2.0L), ren (3/4-16)
const khongPhaiMa=t=>/^\d\.\d+ ?L?( ?\/ ?\d\.\d+ ?L?)*( [A-Z]+)?$/.test(t)||/^\d+\/\d+-\d+$/.test(t)||t.includes('DIESEL');
window.__final={};const changed=[],sci=[];
for(const x of all){
  const doc=new DOMParser().parseFromString(x.content.rendered,'text/html');const set=new Set();
  doc.querySelectorAll('td,th').forEach(c=>{
    const t=c.textContent.replace(/ /g,' ').trim();
    if(sciRe.test(t)&&!sci.includes(x.id))sci.push(x.id);
    if(isCode(t))set.add(t);});
  const tm=(x.title.rendered||'').match(/[A-Z]{1,3}-[A-Z]?\d{3,5}[A-Z]?/);if(tm)set.add(tm[0]); // mã sản phẩm trong tên
  // Ô ẩn = mã không gạch (như cũ) + dạng gốc có gạch, viết hoa (từ 23/11/2026, vì form 2644 không tìm nội dung bài)
  const goc=[...set].map(t=>t.replace(/\s+/g,' ').toUpperCase());
  const coGach=goc.filter(t=>t!==norm(t)&&!khongPhaiMa(t));
  const v=[...new Set([...goc.map(norm),...coGach])].join(' ');window.__final[x.id]=v;
  if(((x.acf&&x.acf.oem_khong_gach)||'')!==v)changed.push(x.id);}
window.__changed=changed;
({tong:all.length,canGhi:changed.length,loiExcel:sci.length})
```
Báo người dùng số `canGhi`, chờ đồng ý.

Bước 2 – Ghi (4 luồng song song, ~11 sản phẩm/giây). Nonce lấy từ `admin-ajax.php?action=rest-nonce` (trang wp-admin không có sẵn `wpApiSettings`):
```js
const nonce=(await (await fetch('/wp-admin/admin-ajax.php?action=rest-nonce',{credentials:'include'})).text()).trim();
window.__prog={done:0,fail:[],total:window.__changed.length,running:true};
const ids=[...window.__changed];let i=0;
const worker=async()=>{while(i<ids.length){const id=ids[i++];
  try{const r=await fetch('/wp-json/wp/v2/product/'+id,{method:'POST',credentials:'include',
    headers:{'Content-Type':'application/json','X-WP-Nonce':nonce},
    body:JSON.stringify({acf:{oem_khong_gach:window.__final[id]}})});
    if(r.status!==200)window.__prog.fail.push([id,r.status]);else window.__prog.done++;
  }catch(e){window.__prog.fail.push([id,'err'])}}};
Promise.all([worker(),worker(),worker(),worker()]).then(()=>{window.__prog.running=false});
```
Đọc `window.__prog` mỗi ≤30 giây (lệnh JS bị ngắt nếu chạy quá ~45 giây; đừng chuyển trang giữa chừng vì biến sẽ mất). Nếu có `fail` thì chạy lại riêng các ID đó.

Bước 3 – Kiểm tra: mở trang chủ, gõ mã không gạch (ví dụ `0446548210`) **và mã có gạch** (`04465-48210`) vào ô "Nhập mã để tìm kiếm" → cả hai phải hiện đúng sản phẩm (Sienna 2011-2020 và Highlander 2005-2019, Asahi AB-J1324).

## Nếu phải tạo lại từ đầu (chỉ khi mất cấu hình)
1. ACF → Nhóm trường → Thêm mới: trường văn bản tên `oem_khong_gach`, vị trí "Loại bài viết = product", bật "Hiển thị trong REST API", xuất bản.
2. Chạy Bước 1-2 cho mọi sản phẩm.
3. Ivory Search → Search Forms → form 2644 (`admin.php?page=ivory-search&post=2644&action=edit`) → Includes → Custom Fields: chọn `oem_khong_gach` (chỉ hiện sau khi ít nhất một sản phẩm đã có dữ liệu trường này) → Save Form.

## Việc còn treo
Xem `TIEN-DO.md` phần "Việc còn treo / chờ quyết định" (VD 61 sản phẩm có mã lỗi Excel `4,05E+09`, 55 trang chưa có bảng OEM) – không ghi tiến độ trong skill.

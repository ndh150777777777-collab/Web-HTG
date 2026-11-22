---
name: hoathang-tim-ma-oem
description: Dùng khi khách/nhân viên tra mã OEM gõ liền không gạch (ví dụ 0446548210 thay vì 04465-48210) mà ô tìm kiếm hoathang.vn không ra; hoặc khi thêm sản phẩm mới / sửa bảng OEM và cần điền lại ô ẩn "oem_khong_gach" cho ô tìm kiếm Ivory Search.
---

# Tìm mã OEM gõ liền không gạch trên hoathang.vn

## Bối cảnh (đã chốt 16/11/2026)
- Bảng OEM ghi mã có gạch (`04465-48210`). Khách gõ liền (`0446548210`). **Không được thêm mã không gạch vào bảng OEM** (người dùng không muốn).
- Ô tìm kiếm thật của web là plugin **Ivory Search**, form ID **2644** (gợi ý AJAX khi gõ). Không phải tìm kiếm mặc định WordPress/Flatsome → khi kiểm tra phải gõ vào ô trên trang chủ, không dùng `?s=...&post_type=product` hay `flatsome_ajax_search_products`.
- Cách làm: mỗi sản phẩm có **trường ẩn ACF `oem_khong_gach`** chứa mọi mã OEM đã bỏ `- . /` và khoảng trắng, viết hoa, cách nhau bằng dấu cách. Ivory Search được bật tìm trong trường này (Includes → Custom Fields).
- Nhóm trường ACF: "Mã OEM không gạch (ẩn, dùng cho tìm kiếm)", ID 8571, gắn vào `product`, bật REST API.
- Web **chặn cài plugin** và **sửa file theme** → không dùng Code Snippets/functions.php; trang đăng nhập không phải `/wp-login.php`. Người dùng tự đăng nhập wp-admin trên Chrome; AI không nhập mật khẩu.

## Quy tắc
- Trả lời tiếng Việt, đơn giản, báo tiến độ mỗi 5 phút.
- Chỉ ghi trường `oem_khong_gach`. **Không đổi nội dung bài, bảng OEM, SEO.**
- Trước khi ghi hàng loạt: chạy khô, báo số sản phẩm cần ghi, chờ người dùng đồng ý.
- Sau khi ghi: kiểm tra bằng cách gõ mã không gạch vào ô tìm kiếm trên trang chủ.
- Xong việc: cập nhật tiến độ (plugin-hoathang/TIEN-DO.md mục 6.6) và đẩy GitHub theo `/hoathang:day-tien-do`.

## Khi nào phải chạy lại
Thêm sản phẩm mới, hoặc thêm/sửa mã trong bảng OEM của sản phẩm → điền lại ô ẩn cho các sản phẩm đó (không có đoạn code tự chạy).

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
window.__final={};const changed=[],sci=[];
for(const x of all){
  const doc=new DOMParser().parseFromString(x.content.rendered,'text/html');const set=new Set();
  doc.querySelectorAll('td,th').forEach(c=>{
    const t=c.textContent.replace(/ /g,' ').trim();
    if(sciRe.test(t)&&!sci.includes(x.id))sci.push(x.id);
    if(isCode(t))set.add(t);});
  const tm=(x.title.rendered||'').match(/[A-Z]{1,3}-[A-Z]?\d{3,5}/);if(tm)set.add(tm[0]); // mã sản phẩm trong tên
  const v=[...new Set([...set].map(norm))].join(' ');window.__final[x.id]=v;
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

Bước 3 – Kiểm tra: mở trang chủ, gõ mã không gạch (ví dụ `0446548210`) vào ô "Nhập mã để tìm kiếm" → phải hiện đúng sản phẩm (Sienna 2011-2020 và Highlander 2005-2019, Asahi AB-J1324).

## Nếu phải tạo lại từ đầu (chỉ khi mất cấu hình)
1. ACF → Nhóm trường → Thêm mới: trường văn bản tên `oem_khong_gach`, vị trí "Loại bài viết = product", bật "Hiển thị trong REST API", xuất bản.
2. Chạy Bước 1-2 cho mọi sản phẩm.
3. Ivory Search → Search Forms → form 2644 (`admin.php?page=ivory-search&post=2644&action=edit`) → Includes → Custom Fields: chọn `oem_khong_gach` (chỉ hiện sau khi ít nhất một sản phẩm đã có dữ liệu trường này) → Save Form.

## Dữ liệu cần người dùng quyết (còn treo 16/11/2026)
- ~61 sản phẩm có mã OEM lỗi Excel (`4,05E+09`…) trong bảng OEM → cần lấy mã đúng từ Excel gốc / azfilter.jp / sbparts.jp.
- ~130 sản phẩm không có bảng OEM → chỉ tạo bảng khi người dùng đồng ý (xem skill `hoathang-oem`).

// =====================================================================
// LƯU NỘI DUNG TRANG SẢN PHẨM AN TOÀN (wp-admin, người dùng đã tự đăng nhập)
// Chỉ dùng SAU KHI người dùng đã duyệt danh sách chạy khô.
// Cách dùng: mở /wp-admin/edit.php?post_type=product, dán file này, rồi:
//   window.__sua(ID, c => c.replace(...))   // hàm nhận nội dung cũ, trả nội dung mới
// Chạy nền -> đọc kết quả: window.__log, window.__done
// =====================================================================
window.__log = window.__log || [];

// Lấy nội dung bài (#content) và form sửa của trang ID
window.__docTrang = async id => {
  const html = await (await fetch('/wp-admin/post.php?post=' + id + '&action=edit')).text();
  const ed = new DOMParser().parseFromString(html, 'text/html');
  return { ed, c: ed.querySelector('#content').value, form: ed.querySelector('form#post') };
};

window.__sua = (id, bienDoi, maCanCo = []) => {
  window.__done = false;
  (async () => {
    const n = x => x.replace(/\r\n/g, '\n').trim();
    const norm = s => s.toUpperCase().replace(/[^A-Z0-9]/g, '');
    try {
      const { c, form } = await window.__docTrang(id);
      const c2 = bienDoi(c);
      if (!c2 || c2 === c) { window.__log.push(id + ': khong co gi thay doi -> bo qua'); return; }
      // Gửi lại đúng form của WordPress (giữ nguyên slug, tiêu đề, giá...), chỉ thay nội dung
      const fd = new FormData(form);
      fd.set('content', c2);
      fd.set('save', 'Cập nhật');
      const r = await fetch('/wp-admin/post.php', { method: 'POST', body: fd });
      // Kiểm tra 1: nội dung đã lưu đúng bản dự kiến
      const sau = await window.__docTrang(id);
      const dung = n(sau.c) === n(c2);
      // Kiểm tra 2: trang công khai hiện đủ mã cần có
      const pub = new DOMParser().parseFromString(await (await fetch('/?p=' + id + '&nc=' + Date.now(), { credentials: 'omit', cache: 'no-store' })).text(), 'text/html');
      const cells = new Set([...pub.querySelectorAll('td,th')].map(t => norm(t.textContent)));
      const thieu = maCanCo.filter(m => !cells.has(norm(m)));
      window.__log.push(`${id}: HTTP ${r.status}; noi dung dung ban du kien: ${dung}; web thieu ${thieu.length}/${maCanCo.length} ${thieu.join(' ')}`);
    } catch (e) { window.__log.push(id + ': LOI ' + e); }
    finally { window.__done = true; }
  })();
  return 'Dang luu trang ' + id + ' (doc window.__log sau vai giay)';
};

// Tạo khối "Bảng mã OEM" 8 cột (4 cặp Hãng | OEM) theo mẫu trang Navara (ID 3679)
window.__bangOEM = pairs => {
  const cols = [140, 125, 135, 153, 100, 166, 100, 184].map(w => `<col width="${w}">`).join('');
  let rows = '<tr>\n' + '<td>Hãng</td>\n<td>OEM</td>\n'.repeat(4) + '</tr>\n';
  for (let i = 0; i < pairs.length; i += 4) {
    rows += '<tr>\n';
    for (let j = 0; j < 4; j++) { const q = pairs[i + j] || ['', '']; rows += `<td>${q[0]}</td>\n<td>${q[1]}</td>\n`; }
    rows += '</tr>\n';
  }
  return `\n<h3><strong>Bảng mã OEM</strong></h3>\n<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup>${cols}</colgroup>\n<tbody>\n${rows}</tbody>\n</table>\n`;
};

// Vị trí chèn bảng mới: sau bảng mã nhỏ của mục 5 (trước <hr>), hoặc ngay sau bảng thông số
window.__viTriChen = c => {
  const soBang = (c.match(/<table/g) || []).length;
  if (soBang >= 2) {
    const cuoi = c.lastIndexOf('</table>') + 8;
    const hr = c.indexOf('<hr', cuoi);
    return (hr > 0 && hr - cuoi < 300) ? hr : cuoi;
  }
  return c.indexOf('</table>') + 8;
};
'Da nap __sua, __bangOEM, __viTriChen';

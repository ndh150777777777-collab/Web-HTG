// =====================================================================
// KIỂM TRA MÃ OEM TRÊN WEB (CHỈ ĐỌC, KHÔNG SỬA GÌ)
// Cách dùng: mở https://hoathang.vn/ trong tab mới, dán toàn bộ file này
// vào javascript_tool, rồi gọi:
//   await window.__check(`M|~ma-phanh-sau-dung-cho-xe-xxx|MA1,MA2
//   D|/?p=4310|MA3,MA4`)
// Mỗi dòng: nhóm | đường dẫn (dấu ~ = /san-pham/, hoặc /?p=ID) | mã đã chuẩn hoá
// Kết quả gom dồn trong window.__kq (đọc từng phần vì kết quả dài bị cắt).
// =====================================================================
window.__kq = window.__kq || [];

// Chuẩn hoá mã: viết hoa, bỏ khoảng trắng, gạch, chấm, gạch chéo...
window.__norm = s => s.toUpperCase().replace(/[^A-Z0-9]/g, '');

window.__check = async (text) => {
  const norm = window.__norm;
  const list = text.trim().split('\n').map(l => {
    const [g, u, c] = l.trim().split('|');
    const url = u.replace(/^~/, '/san-pham/') + (u.startsWith('/?') ? '' : '/');
    return { g, u: url, c: c.split(',') };
  });
  const res = [];
  // Mỗi lượt 6 trang để không làm nặng máy chủ
  for (let i = 0; i < list.length; i += 6) {
    res.push(...await Promise.all(list.slice(i, i + 6).map(async p => {
      try {
        const r = await fetch(p.u, { credentials: 'omit' });
        if (!r.ok) return { ...p, err: 'HTTP ' + r.status };
        const doc = new DOMParser().parseFromString(await r.text(), 'text/html');
        // Mỗi ô bảng là 1 mã -> so khớp chính xác từng ô
        const cells = new Set([...doc.querySelectorAll('td, th')].map(td => norm(td.textContent)).filter(Boolean));
        const title = ((doc.querySelector('h1') || {}).textContent || '').trim();
        return { ...p, title, tables: doc.querySelectorAll('table').length, missing: p.c.filter(c => !cells.has(c)) };
      } catch (e) { return { ...p, err: String(e) }; }
    })));
  }
  window.__kq.push(...res);
  const bad = res.filter(o => o.err || o.missing.length || !o.tables);
  // In gọn, tránh ký tự ? = & (bị chặn khi trả kết quả)
  return `Da kiem ${res.length}, du ${res.length - bad.length}\n` + bad.map(b =>
    `${b.g}|${(b.title || '').split('|')[0].trim()}|bang:${b.tables}|${b.err || ''}thieu ${b.missing ? b.missing.length + '/' + b.c.length : ''}: ${(b.missing || []).slice(0, 6).join(',')}`
  ).join('\n');
};

// Mã bị file cũ tách tiền tố (VD SANGSIN "SP | 1076-R"): thử thêm tiền tố
window.__fixPrefix = { '1991': 'DB', '102611': 'MN', '449544': 'MR', '690186': 'MR', '895250': 'MR', '690006': 'MZ', '690016': 'MZ', '690027': 'MZ', '698451N': 'JZW' };
window.__withPrefix = c => (window.__fixPrefix[c] || (/^\d{4}R?$/.test(c) ? 'SP' : '')) + c;
'Da nap ham __check';

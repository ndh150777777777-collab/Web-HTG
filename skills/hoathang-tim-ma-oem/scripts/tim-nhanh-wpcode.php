<?php
/**
 * Hoà Thắng – TÌM KIẾM NHANH TRONG TRÌNH DUYỆT (thay phần gợi ý của Ivory Search form 2644)
 * ---------------------------------------------------------------------------------------
 * Dán vào: WPCode → Code Snippets → Add Snippet → "Add Your Custom Code" → loại "PHP Snippet",
 *          Insert Method "Auto Insert", Location "Run Everywhere".
 *
 * CÁCH HOẠT ĐỘNG
 *  1. Máy chủ tạo sẵn 1 tệp danh sách sản phẩm: wp-content/uploads/hoathang-tim-kiem.js
 *     (tên, link, ảnh nhỏ, mã OEM lấy từ ô ẩn oem_khong_gach). Tệp tự làm lại ~1 phút sau khi
 *     lưu / thêm / xoá sản phẩm.
 *  2. Khi khách bấm vào ô tìm kiếm, trình duyệt tải tệp này 1 lần (~100 KB), rồi mỗi chữ gõ vào
 *     được tìm ngay trên máy khách – không phải hỏi máy chủ nữa.
 *  3. Nhấn Enter / "Xem tất cả kết quả" vẫn mở trang kết quả của Ivory Search như cũ.
 *
 * MUỐN TRỞ LẠI NHƯ CŨ: WPCode → Code Snippets → gạt TẮT snippet này. Ivory Search chạy lại ngay.
 * Nếu tải tệp danh sách bị lỗi, code tự nhường lại cho Ivory Search (khách vẫn tìm được).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ===================== CÔNG TẮC =====================
// 'admin' = chỉ tài khoản quản trị dùng cách tìm mới (để thử trước)
// 'all'   = mọi khách đều dùng
if ( ! defined( 'HT_TN_CHE_DO' ) ) {
	define( 'HT_TN_CHE_DO', 'all' ); // 23/11/2026: người dùng thử ổn → bật cho mọi khách
}
define( 'HT_TN_FORM_ID', 2644 );          // ID form Ivory Search đang dùng trên web
// Lưu dạng .js (không phải .json) vì máy chủ chỉ nén tệp .js/.css → khách tải ~110 KB thay vì ~650 KB
define( 'HT_TN_TEN_TEP', 'hoathang-tim-kiem.js' );

/** Đường dẫn tệp danh sách: [đường dẫn trên máy chủ, địa chỉ web] */
function ht_tn_tep() {
	$u = wp_upload_dir( null, false );
	return array( $u['basedir'] . '/' . HT_TN_TEN_TEP, $u['baseurl'] . '/' . HT_TN_TEN_TEP );
}

/** Tạo (hoặc làm lại) tệp danh sách sản phẩm đang xuất bản. */
function ht_tn_tao_tep() {
	$ids = get_posts( array(
		'post_type'      => 'product',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'fields'         => 'ids',
		'orderby'        => 'ID',
		'order'          => 'DESC',
		'no_found_rows'  => true,
	) );
	$goc_anh = wp_upload_dir( null, false )['baseurl'] . '/';
	$goc_sp  = home_url( '/san-pham/' );
	$ds      = array();

	foreach ( $ids as $id ) {
		// Mã OEM: lấy từ ô ẩn, bỏ - . / rồi gộp trùng (mã có gạch và không gạch thành 1)
		$ma = array();
		foreach ( preg_split( '/\s+/', (string) get_post_meta( $id, 'oem_khong_gach', true ) ) as $t ) {
			$t = strtoupper( preg_replace( '/[\-\.\/]/', '', $t ) );
			if ( strlen( $t ) >= 3 ) {
				$ma[ $t ] = true;
			}
		}
		$anh  = (string) get_the_post_thumbnail_url( $id, 'thumbnail' );
		$link = (string) get_permalink( $id );
		$ds[] = array(
			$id,
			html_entity_decode( get_the_title( $id ), ENT_QUOTES, 'UTF-8' ),
			// Rút gọn link / ảnh cho tệp nhẹ (trình duyệt sẽ ghép lại)
			0 === strpos( $link, $goc_sp ) ? substr( $link, strlen( $goc_sp ) ) : $link,
			0 === strpos( $anh, $goc_anh ) ? substr( $anh, strlen( $goc_anh ) ) : $anh,
			implode( ' ', array_keys( $ma ) ),
		);
	}

	list( $duong_dan ) = ht_tn_tep();
	$tam = $duong_dan . '.tmp';
	// Ghi ra tệp tạm rồi đổi tên → khách không bao giờ tải phải tệp đang ghi dở
	if ( false !== file_put_contents( $tam, 'window.HT_TN_DS=' . wp_json_encode( $ds, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . ';', LOCK_EX ) ) {
		rename( $tam, $duong_dan );
		update_option( 'ht_tn_phien_ban', time(), false ); // số phiên bản để trình duyệt tải bản mới
	}
}
add_action( 'ht_tn_tao_tep_hook', 'ht_tn_tao_tep' );

/** Hẹn làm lại tệp sau 60 giây (gộp nhiều lần lưu liên tiếp thành 1 lần). */
function ht_tn_hen_lam_lai() {
	if ( ! wp_next_scheduled( 'ht_tn_tao_tep_hook' ) ) {
		wp_schedule_single_event( time() + 60, 'ht_tn_tao_tep_hook' );
	}
}
add_action( 'save_post_product', 'ht_tn_hen_lam_lai' );
add_action( 'trashed_post', 'ht_tn_hen_lam_lai' );
add_action( 'untrashed_post', 'ht_tn_hen_lam_lai' );
add_action( 'deleted_post', 'ht_tn_hen_lam_lai' );

/** Quản trị: chưa có tệp thì tạo ngay; vào /wp-admin/?ht_tao_lai_tim_kiem=1 để làm lại bằng tay. */
add_action( 'admin_init', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	list( $duong_dan ) = ht_tn_tep();
	if ( ! file_exists( $duong_dan ) || isset( $_GET['ht_tao_lai_tim_kiem'] ) ) {
		ht_tn_tao_tep();
	}
	// Dọn tệp .json của bản thử đầu (23/11/2026, người dùng cho xoá) – không còn dùng
	$tep_cu = dirname( $duong_dan ) . '/hoathang-tim-kiem.json';
	if ( file_exists( $tep_cu ) ) {
		unlink( $tep_cu );
	}
} );

/** In đoạn tìm kiếm nhanh (CSS + JavaScript) ở cuối trang công khai. */
add_action( 'wp_footer', function () {
	if ( 'all' !== HT_TN_CHE_DO && ! current_user_can( 'manage_options' ) ) {
		return; // đang thử: khách thường vẫn dùng Ivory Search như cũ
	}
	list( $duong_dan, $dia_chi ) = ht_tn_tep();
	if ( ! file_exists( $duong_dan ) ) {
		return; // chưa có tệp → để Ivory Search lo
	}
	$cau_hinh = array(
		'tep'    => $dia_chi . '?v=' . (int) get_option( 'ht_tn_phien_ban', 1 ),
		'goc_sp' => home_url( '/san-pham/' ),
		'goc_anh'=> wp_upload_dir( null, false )['baseurl'] . '/',
		'form'   => HT_TN_FORM_ID,
	);
	?>
<style id="ht-tim-nhanh-css">
/* Ẩn khung gợi ý cũ của Ivory Search (chỉ khi tìm nhanh đang chạy) */
html.ht-tn-bat [id^="is-ajax-search-result-<?php echo (int) HT_TN_FORM_ID; ?>"],
html.ht-tn-bat [id^="is-ajax-search-details-<?php echo (int) HT_TN_FORM_ID; ?>"],
html.ht-tn-bat .is-form-id-<?php echo (int) HT_TN_FORM_ID; ?> .is-loader-image { display: none !important; }
.ht-tn-hop { position: absolute; left: 0; right: 0; top: 100%; z-index: 99999; background: #fff; border: 1px solid #ddd;
	box-shadow: 0 6px 18px rgba(0,0,0,.15); max-height: 420px; overflow-y: auto; text-align: left; min-width: 280px; }
.ht-tn-muc { display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-bottom: 1px solid #f0f0f0;
	color: #333 !important; font-size: 14px; line-height: 1.35; text-decoration: none !important; }
.ht-tn-muc:hover, .ht-tn-muc.ht-tn-chon { background: #f3f7ff; }
.ht-tn-muc img { width: 44px; height: 44px; object-fit: contain; flex: 0 0 44px; background: #fafafa; }
.ht-tn-chan { display: block; padding: 9px 10px; font-size: 13px; color: #0a58ca !important; cursor: pointer; background: #fafafa; }
.ht-tn-trong { padding: 10px; font-size: 14px; color: #666; }
</style>
<script id="ht-tim-nhanh-js">
(function () {
	var CH = <?php echo wp_json_encode( $cau_hinh, JSON_UNESCAPED_SLASHES ); ?>;
	var CHON_FORM = 'form.is-form-id-' + CH.form;
	var ds = null, dangTai = null, loi = false;

	// Bỏ dấu tiếng Việt + viết thường: "Má phanh" → "ma phanh"
	function boDau(s) {
		return s.normalize('NFD').replace(/[̀-ͯ]/g, '').replace(/đ/g, 'd').replace(/Đ/g, 'd').toLowerCase();
	}
	// Tải danh sách sản phẩm (chỉ 1 lần)
	function taiDanhSach() {
		if (!dangTai) {
			dangTai = new Promise(function (xong, hong) {
				var s = document.createElement('script'); // tệp danh sách dạng .js: window.HT_TN_DS = [...]
				s.src = CH.tep; s.async = true;
				s.onload = function () { window.HT_TN_DS ? xong(window.HT_TN_DS) : hong(); };
				s.onerror = hong;
				document.head.appendChild(s);
			}).then(function (j) {
				ds = j.map(function (r) {
					return { ten: r[1], link: r[2], anh: r[3], ma: ' ' + r[4] + ' ',
						khoa: boDau(r[1]).replace(/[\-\.\/]/g, '') }; // tên đã bỏ dấu, bỏ gạch
				});
				document.documentElement.classList.add('ht-tn-bat');
			}).catch(function () { loi = true; }); // lỗi → nhường lại cho Ivory Search
		}
		return dangTai;
	}
	// Tìm: mọi từ khách gõ đều phải có trong tên hoặc mã OEM (không phân biệt dấu, gạch, hoa/thường)
	function tim(q) {
		var tu = boDau(q).split(/\s+/).map(function (t) { return t.replace(/[\-\.\/]/g, ''); }).filter(Boolean);
		if (!tu.length) return [];
		var lien = tu.join('').toUpperCase(); // "04465 48210" → "0446548210"
		var kq = [];
		for (var i = 0; i < ds.length; i++) {
			var sp = ds[i], diem = 0, du = true;
			for (var k = 0; k < tu.length; k++) {
				var T = tu[k].toUpperCase();
				if (sp.ma.indexOf(' ' + T + ' ') > -1) diem += 3;      // trùng nguyên mã
				else if (sp.ma.indexOf(T) > -1) diem += 2;            // khớp 1 phần mã
				else if (sp.khoa.indexOf(tu[k]) > -1) diem += 1;      // có trong tên
				else { du = false; break; }
			}
			if (!du && tu.length > 1 && lien.length >= 4 && sp.ma.indexOf(lien) > -1) { du = true; diem = 3; }
			if (du) kq.push([diem, sp]);
		}
		kq.sort(function (a, b) { return b[0] - a[0]; });
		return kq.map(function (x) { return x[1]; });
	}
	// Vẽ khung gợi ý ngay dưới ô tìm kiếm
	function veKetQua(o) {
		var form = o.closest(CHON_FORM);
		var hop = form.querySelector('.ht-tn-hop');
		if (!hop) {
			hop = document.createElement('div');
			hop.className = 'ht-tn-hop';
			if (getComputedStyle(form).position === 'static') form.style.position = 'relative';
			form.appendChild(hop);
		}
		var q = o.value.trim();
		if (q.length < 2) { hop.style.display = 'none'; return; }
		var kq = tim(q);
		hop.innerHTML = '';
		if (!kq.length) {
			var tr = document.createElement('div');
			tr.className = 'ht-tn-trong';
			tr.textContent = 'Không tìm thấy sản phẩm phù hợp.';
			hop.appendChild(tr);
		}
		kq.slice(0, 10).forEach(function (sp) {
			var a = document.createElement('a');
			a.className = 'ht-tn-muc';
			a.href = /^https?:/.test(sp.link) ? sp.link : CH.goc_sp + sp.link;
			if (sp.anh) {
				var img = document.createElement('img');
				img.src = /^https?:/.test(sp.anh) ? sp.anh : CH.goc_anh + sp.anh;
				img.alt = ''; img.loading = 'lazy';
				a.appendChild(img);
			}
			var t = document.createElement('span');
			t.textContent = sp.ten; // dùng textContent: an toàn, không chèn HTML lạ
			a.appendChild(t);
			hop.appendChild(a);
		});
		if (kq.length) {
			var chan = document.createElement('a');
			chan.className = 'ht-tn-chan';
			chan.textContent = 'Xem tất cả ' + kq.length + ' kết quả →';
			chan.addEventListener('click', function (e) { e.preventDefault(); form.submit(); });
			hop.appendChild(chan);
		}
		hop.style.display = 'block';
	}
	function laOTimKiem(el) {
		return el && el.matches && el.matches(CHON_FORM + ' input[name="s"]');
	}
	// Bắt sự kiện gõ phím trước Ivory Search (pha "capture") để Ivory không gửi yêu cầu lên máy chủ
	['keydown', 'keyup', 'keypress', 'input'].forEach(function (loai) {
		document.addEventListener(loai, function (e) {
			var o = e.target;
			if (!laOTimKiem(o) || loi) return;
			if (e.key === 'Enter') return; // Enter: để form gửi đi như cũ (trang kết quả Ivory)
			e.stopPropagation();
			if (loai === 'keydown' && (e.key === 'ArrowDown' || e.key === 'ArrowUp')) { diChuyen(o, e.key === 'ArrowDown' ? 1 : -1); e.preventDefault(); return; }
			if (loai === 'keydown' && e.key === 'Escape') { anHop(); return; }
			if (loai === 'input') {
				taiDanhSach().then(function () { if (!loi) veKetQua(o); });
			}
		}, true);
	});
	// Mũi tên lên/xuống để chọn, Enter để mở sản phẩm đang chọn
	function diChuyen(o, buoc) {
		var hop = o.closest(CHON_FORM).querySelector('.ht-tn-hop');
		if (!hop) return;
		var muc = [].slice.call(hop.querySelectorAll('.ht-tn-muc'));
		var i = muc.findIndex(function (m) { return m.classList.contains('ht-tn-chon'); });
		muc.forEach(function (m) { m.classList.remove('ht-tn-chon'); });
		i = Math.max(0, Math.min(muc.length - 1, i + buoc));
		if (muc[i]) { muc[i].classList.add('ht-tn-chon'); muc[i].scrollIntoView({ block: 'nearest' }); }
	}
	document.addEventListener('submit', function (e) {
		var form = e.target;
		if (!form.matches || !form.matches(CHON_FORM)) return;
		var chon = form.querySelector('.ht-tn-muc.ht-tn-chon');
		if (chon) { e.preventDefault(); location.href = chon.href; }
	}, true);
	// Bấm vào ô tìm kiếm thì bắt đầu tải danh sách sẵn
	document.addEventListener('focusin', function (e) { if (laOTimKiem(e.target)) taiDanhSach(); });
	function anHop() {
		[].forEach.call(document.querySelectorAll('.ht-tn-hop'), function (h) { h.style.display = 'none'; });
	}
	// Bấm ra ngoài thì đóng khung gợi ý
	document.addEventListener('click', function (e) { if (!e.target.closest(CHON_FORM)) anHop(); });
})();
</script>
	<?php
}, 99 );

<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'productmanager' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qqM6)QSSN!vz[BuV5Fy)oR%6?MxN^kLk)cxvrr@Kc48&e[~_DZ#3RMu[K|[Twc7#' );
define( 'SECURE_AUTH_KEY',  'b]x6(}[$j6ynBF/ng4,5mk5ozS9AG-2dOy9mP<ed2e9W(Spa~E.QC:R6>&z%$Y9l' );
define( 'LOGGED_IN_KEY',    'J3uR|N;-t>|){1#W4!WtyM6I[j?I~eJ}@4Q2-zLfmFMh}~.d}|6uuc9`gyi^MNuJ' );
define( 'NONCE_KEY',        '+6JLnn<F!]i(JyZOg1Mcvt<G!tE7f-c[Y4?w&@(udVIbz=gftXF%_`@S[6Y.3>z|' );
define( 'AUTH_SALT',        'pjjD6hrJa%E}.%lmDlt,Jq:|/MfOU?(Y`J@*4!xE<{?_]P56)_42aE*5Z1bU_C_(' );
define( 'SECURE_AUTH_SALT', '*doq~ebH!6Am^g=^2?}`RJD+.M&y.#UzF#mbhL/#~sSp5<S7>@~%&ykX-C!P2*cG' );
define( 'LOGGED_IN_SALT',   'x),F#|[ekl$ey&H[ix$y2g{4 >ao5S2On1n(8w9[/K@)l5&^5ZSqn+0$+=8%:Vtb' );
define( 'NONCE_SALT',       'gg^79`*uS+g^]tcDpm$n9c=ohyRE4_oBO|#f2hN-g+kBeHw$dks9-ithCik7E:tu' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

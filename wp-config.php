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
define( 'DB_NAME', 'maithinga_kt1' );

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
define( 'AUTH_KEY',         '~wAv+_oWA)^2uR{f,R6uA;&ZENFqA(Oa$J^do~eSTrG<XeiWvo~::Ik( :eX-@:(' );
define( 'SECURE_AUTH_KEY',  '2OQ]TwfDRoBSQK5-z|Uv=3l61)t+{t6H9E!io7D5mtkXLR,2Ejp5-h-v&N2Q.g:/' );
define( 'LOGGED_IN_KEY',    '+m<C1UY`O6m9nH B:VVzp)|#P[Q/Q!%(`(C=vb>zO S1![6,_-K/Sx<CPoPOGjcc' );
define( 'NONCE_KEY',        'k`REuoY,aOxdgMRo*CGAqI@SFJVk-VJ20c&fk}SC6BWRX )WW0}EL.d_?zr#TcD#' );
define( 'AUTH_SALT',        '8R<@ZXB/[yKvr/-?n)%oWMgD$LsCVbivI0IySdK).ycXSmpVQx0j|lIA8Q$-g+sR' );
define( 'SECURE_AUTH_SALT', '~pe3bBe+SI#<b1-?o{O>=`z(%VCKWn5TaDR  =jHw#s+3rj(bW)Y(/J:cBY+T.i9' );
define( 'LOGGED_IN_SALT',   'z-]EiHX1.CV E*S34h%png1qG(0|*#pa5w.5HJVNx0dA|4^6{!{?hU^xu YcEmt:' );
define( 'NONCE_SALT',       ',Xt!Pp_tvp*yBsZTc$bYwxS-,D`1u?(,0/)kCg3pM?JGydOEVMZb2%m{P%;+?ft<' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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

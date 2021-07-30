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
define( 'DB_NAME', 'marketingdemo' );

/** Username của database */
define( 'DB_USER', 'marketingdemo' );

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
define( 'AUTH_KEY',         '0x.]#.?sP$^r2NGg M7ctIh97he<e)uOGS)owZwKl@:y{f_ZmH^`A5oCKu/HCMgx' );
define( 'SECURE_AUTH_KEY',  '2MUtfy`um@60b%5]^Lae_>X4d5ZQzp%lrIh#-^?p3u<yVrc/0zxwG=m0jzVlg*n^' );
define( 'LOGGED_IN_KEY',    'rm06j_k}!)a`Rk!TW^Z$Y]*.Jlh!N~mvoKd9Uu+2h==hs{H>AS10ToI<1F+M#X^G' );
define( 'NONCE_KEY',        ')]EQ?6rts$[O+Qg/9?Wj<0n,6fcdU;mUo#~:khF.[z!v*Jf$XFts19%&*CV_:6;z' );
define( 'AUTH_SALT',        'hRI|_?+9}5fw)a%-61n/g.M2DR:ehD91LoO|Z0oEHtA3-%^V~g]_*LS^>{joNsy-' );
define( 'SECURE_AUTH_SALT', '7%HID8Gr +T3n7z&G/g<DT6B[tua5,|ii.Os4kppNU1K4fTGj_Q> i0.Z.5EQPET' );
define( 'LOGGED_IN_SALT',   '#Gt@~{f68$Uw_l_Yi53`Oqap_&*QJ4ZAchR6uSJUDY+LbH+Zwx#dyL*)`+S|`EYG' );
define( 'NONCE_SALT',       '8fSn|M8+UoIFOTTO7BjinJ|5))|6|K^tLx/}xUZ,D{mZ5_+kgfoES;42EMJee6mk' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_admin';

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

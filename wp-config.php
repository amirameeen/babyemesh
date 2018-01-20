<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'babyemesh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!5:08L{+_VpUSDOaJ:7^4EsSDOh}`&>Nr|OORxGbYQx~lPa:Iu.a:Sf38CIC8;B)');
define('SECURE_AUTH_KEY',  ':=wr/M4s3~nP!KvVhT~}u<x2{6G|gNaa56:;-+^7wU-ZWb3y5gTP5:yI_.OowR2)');
define('LOGGED_IN_KEY',    'AHq>,5/R_>DjXoEkR}|(ZlL< -JH!/U%MQ^i<|TW9`d#MmG*RpkrQD~I(n8T00_U');
define('NONCE_KEY',        '~mu,1[e`nJNwm<8c-NB1K6_[|R_]._|/wghl#(AZ+YpC>k)c+@}Z>jD h[ugTe=q');
define('AUTH_SALT',        '@S7Le~Fwy(SxV Ej+m-$96)H907$:|8_F>O7Dih0D4#=iQH>6PzhY.YU)wk{|;za');
define('SECURE_AUTH_SALT', '$xb9.~:YK&&.LOF n>s}d]Y77Y{wSF>*eM1hWQ?M`UUg:lzvt23}7&zX$??H@XZV');
define('LOGGED_IN_SALT',   ')k<()Oba@L!-@rf9W[F,{(}y#CXyM51:wAbkNdxp<ad0ITB(R1NQK/;_vCY`1P{F');
define('NONCE_SALT',       '*zWfi!AU@ANI,EfZ`Z;LA_?{m+%a(ijCU:-x93:N1Lq[[|rwXnB^wnK/rd#u2hBe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'baby_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

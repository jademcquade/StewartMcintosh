<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stewart-mcintosh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+J!|UZWRfOW}T }$Y@fyvC;uigR!NSPwTyjS_+[5lJLVhs[OXV7dlyO$d{$X{IP|');
define('SECURE_AUTH_KEY',  '?[+]q!^[G4VNNGrc:B&4|2F#-E7/AZ$|~$--vSR-&P,wB-`Aqy9XC pD-TUF<%wR');
define('LOGGED_IN_KEY',    '3O/kl9{HREN$MIUM]u;WIb?=;Dx4-<Cm;-<))u9*MYAB|+-kTej[D Un-nF/c-#O');
define('NONCE_KEY',        '%AQpL:LVwndU6b[%=P.D=imckmuY]X(VOlX*vZ3#|nZKp83gD<DHM1nLU}w-57.{');
define('AUTH_SALT',        'gS9>6xfextPp--,Q|,b-OK~cXpD$k8w.t~:oa-`-9p1n/Ch]tM*K^~$!eyJ&M G-');
define('SECURE_AUTH_SALT', '0c;{Gv|mv!uY|kk-?<BieJEM>%[UWQha7OA-O0nZ+H6CPTdnSHD~`wZB<94i SN[');
define('LOGGED_IN_SALT',   'nsWt4e[%3cg+/F+QKt9iFE$b{C%@uLk;cV}n)idS8NzVDHSN67[F`(X j7zlV;kT');
define('NONCE_SALT',       '#N.O6%<t4ab~h`C{L |mlV}L|reK#IM?$eg0cwSt!A+aa(c-kKsx*/,oZiQtfd c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

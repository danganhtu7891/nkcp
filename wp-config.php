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
define('DB_NAME', 'nkcphuc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'L$*^Xfcj+5r`u&mIq<P6hTfdc8|S71m}x.e65U|A$~bl/P~]qaaO:fEb$!6F<}73');
define('SECURE_AUTH_KEY',  '_QZP[,1Whn6z))<~BZJ(~ 8B3fc;F5 G6XyQD}Af6~%GGgchkVeO9l++1P$d(``E');
define('LOGGED_IN_KEY',    'Z:P{:=5aB7YDlGQi>zx^w@u?=mavM1~h9!F:T!J!VWi*#)s`/&#fv(;/*<gwP.nc');
define('NONCE_KEY',        't@f_69h8)_Vf?bU!2)T9G]gq~/1XY/O(89I:g*Z5~H2;Px[?KgE=j|LO:MsYhb}L');
define('AUTH_SALT',        'os[O?:Qkef%D/0%*X[n5yH3zYpbgzR1iECfi=J@ X:XMwO{gy;[WDn1T~<%C!&f]');
define('SECURE_AUTH_SALT', '6#n-PI3|{7#`[HS3!n5Kw0m86agp[ qsyoIjfR[BS;I}(^8FtJPd3Psc=f8DG5qm');
define('LOGGED_IN_SALT',   '!MTy14AyFqat0NZ,[F};+VRhQ+YR:WL%}EA-R]1SS6FV9a!Gy,zA2RFr>v+Fdc E');
define('NONCE_SALT',       '?rw}Dc.Kz:Gvu(P4vj~Nb[,-Fd&g (f80troJN9p]I@@k_QD0Ikf06J&wpIZ@g8h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

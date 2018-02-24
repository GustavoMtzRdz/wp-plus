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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         'MOTs=M6X~Bfi(K2A8Y~03[j+0cKM/^O[z0Xd]eW=gBU+_MY{!LIQJsx;O BRv}Qf');
define('SECURE_AUTH_KEY',  'S^2ghHZoE:lz_j0SLs5]GGwQX_Mcu.28wuYg1Ej2, !wav$^H+;_]5Pd7ZV]1-iB');
define('LOGGED_IN_KEY',    '~hbj`Ch5O=DA~DpWHzj{*9G(t9tI~*J[KjpbZ3HMSj[j*:I(=>oIBt+S$fi!`G>,');
define('NONCE_KEY',        'sNelm 0@]_z-2&KRm`sUSBa_kPSB|YAA*[N:7y`{N;?)e>Mvr86UWSAO 2nOh$~%');
define('AUTH_SALT',        'Nf9,dRHX-(ti]bSmI+SB={W%2^mIizZ9{M=MVvogiyc(76;s`f3R5FcuHSr]VWDE');
define('SECURE_AUTH_SALT', '~g`g_!`gi*6w1#cB7lWjAQ5)x-:]m})B0U9^;zM5A2i ~Jd:eS[/Z<O{?j6Qpd&[');
define('LOGGED_IN_SALT',   'jI>+YWiiE7Ivhs5wMPDr?G4.Mv,i16)5^YJB=OC&1csT2xVwb8:m$?vAsx)Ie%te');
define('NONCE_SALT',       'Y7I|x*G(Lb6vXxQ*LzK;~atQI9`bMoCMD>.fq|Kv)@TjVKm[D.^OQxsnF}e+f382');

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

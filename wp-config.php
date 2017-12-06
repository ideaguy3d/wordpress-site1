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
define('DB_NAME', 'wp1-v491');

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
define('AUTH_KEY',         '@Eh]6UIryk)w-^Mo^%Ki`e[9bkU|K*p4c#rY;$oAFaJ5VeGoHx%q#(mxL^`?w(Ux');
define('SECURE_AUTH_KEY',  '501X1(P[C0dIe;}swatROW.ym`R#AYKiZ-l;hp{tTXJngtlDa1g0j4p;,31j,>/3');
define('LOGGED_IN_KEY',    's+Bq?1!tHcWE>shw0Z=N^UsI~V}YS%j!.,qsB^8k!}y8(TSd|@Oue68YNTe/lpAw');
define('NONCE_KEY',        '3f+8nx@oQa D)XTd-:f*Mn!>ien7.$cA-`^ j5Rt<^hd<] GsFRFj2`T9q+BV[LY');
define('AUTH_SALT',        '|l<B,484g$?,^U_jZcLep!6Kd)-$^^>Y?W`qMbff{VOSraE6R(K9i6}b[q/@=hq5');
define('SECURE_AUTH_SALT', '-/!+*s*#MkS>mmq#+.w}a,AwSnGdn~>|lOeXb,E:FjFmL$8s_ND*#Z5 ,H-jA7Er');
define('LOGGED_IN_SALT',   ']>pxN.b&G(oT2=!Sgu-Z7fV6PGqrIT2j[OEdg}rX6Pc)V4KK=f,q:kDKK0AQ6OTb');
define('NONCE_SALT',       'M7BqE2e`BmhHjdVF;hBQPg]>.8./c05Gc5n)@?Jt.VP>F6~sik5+NYH(;m^4rryJ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

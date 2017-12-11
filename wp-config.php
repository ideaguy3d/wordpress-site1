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
define('DB_NAME', 'humescores');

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
define('AUTH_KEY',         '-gh(/XS[gi:}(5=hxe5J.}V25Ek)GwMy P|x~v!^v/S [;2VnCu[hwIf*>Pg+W,h');
define('SECURE_AUTH_KEY',  '7C{a;tvbRQ3c0?tXnYUdofb5YI7oJ+x%RT$_fT<>r[sM]#i4%GjuT`,LA#?66QC(');
define('LOGGED_IN_KEY',    ')80f4;~HwI[!pHS`S~fK8%KYLrnF,y@iFgcF~h!tvVxb.EpNi4|j9)4rtShn}?}b');
define('NONCE_KEY',        'Oi,>p@k<eM9#p+Q@<;w*G-&,(:^3LC!uL9b6_HoZF%GSLV<vSORvr5OJykQ~&`W4');
define('AUTH_SALT',        ',eG(2O)xE36uYSL7HWiK^]6(J%+,jG-%p|S3NjwAa*|=yJ??6Kq;dJl/qw{P @^4');
define('SECURE_AUTH_SALT', 'fvIsI<nMQ}g$uh8pUmCq6&i2P%qx]X/).uogMB9$Y]~|Nll=L6?n5KYVXUpszD%c');
define('LOGGED_IN_SALT',   'EX}75inp=Myjb8!tRGI ~-F(C~1dM^%N ^fSfO{yya{V&A2ZT0iJE%ym@ikz$.`3');
define('NONCE_SALT',       '3DbAHjE`t.q@mT3YguS,RkO}z),46|r@&jnSskk8(yOw3@Z>MIR9n=PH!5g|FqX0');

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

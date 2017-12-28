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
define('DB_NAME', 'ocean_blog');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin1937');

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
define('AUTH_KEY',         's:,SV6C*<qy}nDm7RHNhifY#-&)ao6MT*B#1H3LckQ.at9M2amBgGT6^qC]{ ?Yq');
define('SECURE_AUTH_KEY',  'z@F*WqVunAmA7? .5)rnks-}|Kuj!k9O1`.nc%|IeWX#Yf~=WxbYl}&HFzp*3_I[');
define('LOGGED_IN_KEY',    ',5zRDV#m~-S[%i8UwX0{KSBnfI&n5KKEs^b+Y:+%hP;8H<yK[BIBs3N&:%jWhz@X');
define('NONCE_KEY',        '{AN0D$,k5(Td[kV{M812,nT~1qjgD0g#Ng5bP^6 .Kr/c~Q3Xp*BxE[GA@fl~+3O');
define('AUTH_SALT',        '!,__9eJWsRX>M_gW3tf)  VDN{0X]$@[^Ft59-Mw~kKo.]iHZ<I)*3cEV>!z]lN2');
define('SECURE_AUTH_SALT', 'i6$h2RxlZph/{: xp+yX8w)bHW6:zV1.H$gUGK8u@p#t|{C97vwRB46^N2TQmlhM');
define('LOGGED_IN_SALT',   '~;_8}P-N{)rorjHg5Ekfji$^wSQ@J]I#C}S7/Q`),4;h~l4K,n9oyGqG2-zXWpk;');
define('NONCE_SALT',       'HK 9q.RnE+Q !*$eFWMrhwBM#Wytb{^qAcT^mNFMf)<*SgZ*(IlS{*?%{kf y%b-');

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

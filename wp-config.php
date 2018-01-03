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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'oceanedudb');

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
define('AUTH_KEY',         'm=YWB4Jx<tsyrpiZ`.eIvMz(^2bo-N*s]q%w.qtS8M0[ntpaK_QlUu:zeI`ilkYf');
define('SECURE_AUTH_KEY',  'Kx)?4HQY9~^uL?pZ[rikd@hBS15<,%*N!-NS4vNaC}w^:VW,>?p>83d,{EP=<zf%');
define('LOGGED_IN_KEY',    ' #7#*d8oT|*qQd09|c*j6(QTG4O;OC4Ww.vl#~}>|cjy}:QiseHBOIl)$A)~=3W}');
define('NONCE_KEY',        '4jrQiSc`v@=d76g#.r(VsS:T~NwU]+Z%S[0lZ?mS~v]:uov^SM:#hizJv0DUmxA^');
define('AUTH_SALT',        't63eo0d0TtT *LK2$xnnV;,+w*~x3;hUxWlk 9HtEV}ePvygs5t64n:k?BJH (4P');
define('SECURE_AUTH_SALT', 'M`^D|JU>e0S3y}Ks6Do(G 0_:ft]+MXX&:`R6}^,~PFf8~*f`QM!}I*VUMrQ#YJ=');
define('LOGGED_IN_SALT',   '>T?S$W7g=I@qin%k*o6Az;unMYEG?S{tj@fdA0=wrOJjt7z9b#q24.T[1Y_M^EoP');
define('NONCE_SALT',       '~M6BBiwEy+`$% Q :qG(,3?LUiiJO-C|6#vzBy.~vb*(OMZ.Zq^<_8Rv=-Ml`:H2');

/**#@-*/

// MULTISITE START CONFIGURATION

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/oceanedublog/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

// END OF MULTISITE CONFIGURATION


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


// Multisite Start



// End of Multisite
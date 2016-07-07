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
// define( 'WPCACHEHOME', '/nfs/c01/h14/mnt/38031/domains/uxjobsboard.com/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'uxjobsbo_jobengine_uxjobsboard');


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
define('AUTH_KEY',         'MD&J|/a<k!z%;|L:y-j_T[YrG<SJ{+wy0ARi&N%g.-NTMx&%<>?WhT;C]JVyz XS');

define('SECURE_AUTH_KEY',  'tRP.&6R2A2+hR4M,z=DD-O>(]_H|#lKJ~]+A[Dv8mf-rj12z#|% |5:>=aMS,o,l');

define('LOGGED_IN_KEY',    'z@E3UEGrHf-F+v3-.@;UtqO7BJ?wHP{g++eRsbVjeFd,qFvVdM.KxsW+/0=dbXH4');

define('NONCE_KEY',        'rnCYN$pV[+|E;6[r|E[)I4syrA-EV|PxI3QQO$Y-$4_xE,bt;z#$4K@xQ;z?9&!#');

define('AUTH_SALT',        '}!/bD:-ANGCy2>Sk3D`6#,sJ#!M&d)v20[KRIgVTk](!!bHfq0]jOAHS!Sc2&:-6');

define('SECURE_AUTH_SALT', '3Q~}4{Y0J|C*3 I]jLt<4gQhW7@@@]|!BnW1(m{$nDUl_E,*dpi0XBOsk/+fo0i.');

define('LOGGED_IN_SALT',   ';ciQ-e+Q?+&u];C]Q`j grDOl+*S5_a`|(h6*)!UukH2[j}~tFW?BK@6g4r_/{j-');

define('NONCE_SALT',       'zhmtcynzezogzlzty1yta1mjc5ntjjngu3njg4ztbkmmnkmzg4ogixmtdjnjaymm');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jobengine_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_CACHE', false); // Added by WP Rocket

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

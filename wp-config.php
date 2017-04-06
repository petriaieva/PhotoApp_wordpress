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
define('DB_NAME', 'photoapp');

/** MySQL database username */
define('DB_USER', 'genya');

/** MySQL database password */
define('DB_PASSWORD', 'Y8vb2211');

/** MySQL hostname */
define('DB_HOST', 'photoapp');

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
define('AUTH_KEY',         '8.=ZF}^ltS>nOe3zU^h^AH/g6)IT-kLWE@?Sg}9S& Slof:)R8ni/S!xT8,_0&`O');
define('SECURE_AUTH_KEY',  '/]_..-8/44YgK(>,d|00R;r:}:-/gXMo}=q&F{1WyUpGcz7f,miyjIY({#eqE7)u');
define('LOGGED_IN_KEY',    'lHK#^kI*_%AZw>)tYe7|H?2:,|5d -w=vBlD|rI#`&p[igQH;j-;=%fwUrHIhD}b');
define('NONCE_KEY',        '/T.iHhb09 4%G8ow@m@(bevJv=m|$>f-?<t*P[{I$gQt-jkR~|#85(kG-IyJTVKB');
define('AUTH_SALT',        'Tu%b}PtfmAFlm8US{tFU{nr{ai03@pi)O(oPs+>o5eGprWeqG%:m`,22mD eWWGo');
define('SECURE_AUTH_SALT', '|?<b-t,VNg?z}npu<7#nH(gHKj1}>h)<$;_bSS?%X}P)N|%KHk:Hjf?tQW*;ou1*');
define('LOGGED_IN_SALT',   ';ckL;m$mE|N5-0cw?)D[M(^2jXCJ8*oh5%^YDt|mc9|fN!9,2//mj11;;`8:bT X');
define('NONCE_SALT',       '{X}HksfI3Eb4t5>{ksrdu&UH>P}TG9]3Jf)CoGt5iODSj=`aD$#;50&zs%YwaAR;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ph';

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

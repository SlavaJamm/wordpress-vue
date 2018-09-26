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
define('DB_NAME', 'wordpressVueTest');

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
define('AUTH_KEY',         'l|}3NBg1{>;:U0.`Ej^Vjim)5gkZ<2 Wzh!nIVo uEJa*:B6HulK`.vn~dT@^IMH');
define('SECURE_AUTH_KEY',  '4,u$(.Uz>haah*Wp82T6*K.d5.Z4OU5U*TI)?!T`v@c|erW4sHIC!A<e;sW*v+`;');
define('LOGGED_IN_KEY',    '2.9B@s1cIBy)tvffjE&XeA<l`zpP0z|dK5e2X6(7{(iNbS#*G#k)f+pf.Zu00kod');
define('NONCE_KEY',        'a<qSD1f_ofI~[Bi9O>t+3s]DjAF`pMdhsXD)ibh0EMBWo3iG8.=eln 4:76?$S`k');
define('AUTH_SALT',        '9[^UL&3wgx#Lbp<4nlN+d1PxBXdwlY0;<R8c1@.`Lmm@^bp!.d&R80X^zq:AhT*U');
define('SECURE_AUTH_SALT', '4xJG|}Op=Jb^QNq*`6OsV`~*WoNt,q>`5o t@ewRB{:;QU2v)4mMR~fX|Xewh@H ');
define('LOGGED_IN_SALT',   'tcahB}/qppW%/?BP~y{Q>Ha5VFglKwAf /M^ss)/`x|DI{|4[]tm6d)+0]^z~4j,');
define('NONCE_SALT',       '9`Y!kz7,E~Vp1`+>V_Nu.0;fxf{objm!bLF7bZ1>K.b$-6NsZF1j*<-%o]5oQ`Z,');

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

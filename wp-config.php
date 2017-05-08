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
define('DB_NAME', 'wordpress2');

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
define('AUTH_KEY',         'xm>yzh7>VCT!-flX$q-b:?#~#6*dp$pH7-/KZ*}fiD33j}jR~J40{N~h|6KrfbIk');
define('SECURE_AUTH_KEY',  '4O7)]&Jfis7oT(/1WI^}15qi.^ubP`09UM{tjL;,q8276_>h7dCXa5fjE8wFFW..');
define('LOGGED_IN_KEY',    'TPC@Vc sdCTF)5x[$0rIdLKkAmqx7W;za`/?2CMO=EOb&P,}Rq/suaOWJOsAuf$1');
define('NONCE_KEY',        'WCDgt[^q qdGS)nPPjl.4>q*E7YR9,,bS</f$4bj-Oszb5IW7&:tEZk==6ZE7p>_');
define('AUTH_SALT',        's3Nr1dJ>G,lvJ} X/%SYQLNJy;M-2Rw5K?TY6Iy_a>d0^jXULsVG~`@Hp71%T4Io');
define('SECURE_AUTH_SALT', 'CM|e_jjgQfcNM/s]Y-_xWm(Wwu+8TJy67c;4YM:p4=(hR{}3T+L7Atg{@=wNK3Kq');
define('LOGGED_IN_SALT',   'ZtaT*I7oB@Y}!ItxLx:gmlQY{zLy#Sr0t;?~uvrwzT56~H465a.=(DHy>}/prEFn');
define('NONCE_SALT',       'MXG5}YdZ0ud(i!!Lf2zl[4vxWg|*f_8JgGC/Pwa(Aa^fy~$TVSk#>I;|;Sya;Q;6');

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

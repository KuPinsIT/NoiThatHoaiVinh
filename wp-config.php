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
define('DB_NAME', 'hoaivinh');

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
define('AUTH_KEY',         'zrpB^JW1IH0usPxYWJVwv$Ip;Jr6[I75(/Yxv9QTFocCQ[d6`> <s-^X{3K]6^*r');
define('SECURE_AUTH_KEY',  '??(C^w^Z,)eSo{f6UvWj%~``{K7w}gr}_Z6[5t|2p&{&JVPb0R0)Dn]Z^zupJHg{');
define('LOGGED_IN_KEY',    'AM/}5k]K&k*&7beT%VXbkVYUcbNfpErfu$Jm=@Poe:#l9^`#v^O{.3G{R@x)rIv@');
define('NONCE_KEY',        'T+eJ?a@<{ V=N/):nQT$ZY@El*LCKr<S=s&=WEI_Oy}#0=@OQz`/r.8[OyaF_tCN');
define('AUTH_SALT',        'Bn;Sv2]:{P+#0om?Qbl1W/BF*0^#3#;,S]_wgdJbNK8`nUGt1 5^u4B1pO&p[7f2');
define('SECURE_AUTH_SALT', '+~^.#kHM(Bp1=}1g&rd_*u9pOk_YueGXu Ydn5_%&e:qaPn8iSeR4QmkO],Y{Xoc');
define('LOGGED_IN_SALT',   '3ECcclJ*]_QkZ~zp4p384u=u6]nJV/+.0BKt8Uk=c)o]et3M1jo5.I>nhZ5597;_');
define('NONCE_SALT',       'ZIiVOoC<=ejnCN)%.42<We(GaR9?Ly5$i(|;TquGkE-eBxM-s^@ (0yY@3o=d)mP');

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

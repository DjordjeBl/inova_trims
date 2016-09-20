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
define('DB_NAME', 'inovatrims');

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
define('AUTH_KEY',         'U 4Nx0K1U*X$/<YvHZ&6b(I+wi9o?k<{A. aToa5A8rerA`Dw.KUo@XD>fhc`#-l');
define('SECURE_AUTH_KEY',  'Zf#?ZFXa^3Op|Qi2Jf>cIoW!7,L(bcU!F(e2;lM0[&)SDDj*,+-$c8(Uj+%z{EtH');
define('LOGGED_IN_KEY',    '?EoUyA-kWj5%*([SNJ`Mjd%Wl7Uj:_x&m7z;S|LjaCeJ&>uF7$y$F#cB0;2 j|&P');
define('NONCE_KEY',        'wi|0S,{mHOW,&H>(B(F_7cAB;cz$Mh:yx8iFg`I[ phekni2-d+Dy&V&G&T^<6gC');
define('AUTH_SALT',        ')J9Qd%i:NszKt)_js)AuDl?+,3F1QSQ5CoFG#&.Vyp`[dK?hJ!JMH[l=S[|5(V#y');
define('SECURE_AUTH_SALT', 'zQ-UhP#dvrJkK*fs_l< / !gaq/2:^(#Ds%:~DMEct!E}<j_^EKMskk`N;2$e$/G');
define('LOGGED_IN_SALT',   '85Qn.StAne4?qLgk]C4O2@Z55o=pyD)>q)2_n%s)G9}LhU9ygLC3ft;a58(L,hXg');
define('NONCE_SALT',       '93?PEUa2kxY,l>vcB}Mn3hR|k3vlgS]sjy/di0I]MacnU(<mHD2J[OaCG[>Bq.?w');

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

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
define('DB_NAME', 'travel');

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
define('AUTH_KEY',         'Bw+OOq.I/BN}i[2el`b6!3ld8I(:{f_4bgny;iIoF^B2d_:uWIRQWV[~[%$SP8 I');
define('SECURE_AUTH_KEY',  '|wJ3!}p_pd0SHB18HHkMxslDp<Jpy&!E/?p*-bBOs3<8aFB4sxqf:vC=Sf:*ov|.');
define('LOGGED_IN_KEY',    'b@xPc.?<Vg(lk+$dr$C&ht_3=-^uvZdWvq>=)0bl}rtF2D{e;2 _]IwB:HM3OVCR');
define('NONCE_KEY',        'Vg%K=BjcpuJw4l{aNy+{P-xp)S$!oZuTx)$mo:q_&6m$@,[&u+-tvK|#:mK%amKa');
define('AUTH_SALT',        'fj=`l/gA0;@:_8:5}Uq9Nkn~2RT_kq$9B(>);ZxS9f>LSbPzzd%q@+kxC+]m0BbZ');
define('SECURE_AUTH_SALT', 'v$+IkI*gz<Y9{&WqQo?Qh{rv<=88Gdq-3si(DLh@R};XTt*_P>C}(!S6%|)!GA`%');
define('LOGGED_IN_SALT',   '7P]u9R4q1w.K+AjK<eg7/ubQiiG=7!exADLs+I+fcJ)+he/C@JdMDzr+9I?Xf6&7');
define('NONCE_SALT',       'T$&dt&3~B%VPIp;`N:<WOa)a2**$l|>@Rq_bh0C=g1xwe]R&[M@|n[EKke}9x0PM');

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

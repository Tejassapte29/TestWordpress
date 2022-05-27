<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NZp1{`Eg|@YRR;E,Mo6S?&GJbNj@3Lt~]!&WxQPKV@+1P59A+Kk33{+t5boK,4cA' );
define( 'SECURE_AUTH_KEY',  '(@W8%{fN?Obw<1L.APl3FAS1[M062@Up=R{GWPH;328QC?yoMD9*(FVVCxaZwcg?' );
define( 'LOGGED_IN_KEY',    'LY86!K22`Mb#bK0AS7rs%xb*c>GN,/=d:y7EV,+O7cc-Yz9;o%Nv+AC&7[$(XiAW' );
define( 'NONCE_KEY',        'yuR:HWVf)4?L#=}6k8ff2sH3L1pU1,8M(^eiac]D@Jvzd6/`:#`~kk_R9%Gj&T{y' );
define( 'AUTH_SALT',        '|GAP(y~N&[QURmE5qhv#M,e^2_M8FUyv+^0ZCfs?ZV[N@@WS`bEl0U6Unt-B,+Q;' );
define( 'SECURE_AUTH_SALT', 'ud3/&8_F$oY3Gw{@tG4+C?P-y JKEp|kKDR?`vTnEb`(2).tX/hhf8gpl@o$V-Yl' );
define( 'LOGGED_IN_SALT',   'n*l&b|nyw+2;-y1U}Alq+cOL^4PvJA5IT4F6=gfdOLY:Sopuyh6fd?R|Z4.Cg228' );
define( 'NONCE_SALT',       ';}aDLNS<Rn(<>(ccub[Z<(eWuhps9_!0gm)L[A=~jZUOQ^aBd%Ndlt;h6R@Yv9`*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

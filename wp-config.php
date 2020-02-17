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
define( 'DB_NAME', 'db_wecan' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!!%50ys-27!>72-q&=m)LLTjNpCJp]f_9?Eg-!7U9o#LVr&j8y;@ek-@d>|r0}6y' );
define( 'SECURE_AUTH_KEY',  'Z]Wc<ei<|v8 DnI:^s-6Rd<S][LKWK0Iv5~myAH-(.Dc2I^]!AqW/W,!#ASJbi +' );
define( 'LOGGED_IN_KEY',    '[(%C=/*O474g/},|}.xc3wLW6t%*!F_uxsbf@><V, <lBT+)mI=_%1Zzha6nVf}.' );
define( 'NONCE_KEY',        '5T+P=CoLKX?b/GsHG+!&vr}j@_CO.MrsMN( I)gC;f&y3LVUbsm+Q5xD{*s%Xf9P' );
define( 'AUTH_SALT',        'PAM}em0/q_eYCiduhG*E,-^=-CZI0kIwzsCyN]oG!$zch6,#B~iUbyZ-a%r5cm$9' );
define( 'SECURE_AUTH_SALT', '-zz8jJ<;5w?u{QJE2b>)gvLZmQCR.Ef[?0nhk<wKk/No+YNZ5>x#d0e)rI](IWa-' );
define( 'LOGGED_IN_SALT',   '#KR)ar1Px7d^}0dQ7?).js9d3w*+GMLs*n9K%_ZZ0Vqqplm_@1lU&zV4OZN7:fMD' );
define( 'NONCE_SALT',       'n0vuS]MTlZBsoO3yC|JA9=*?IK,Co% 9^huE`H(]U,$i$0]J1KqInEx=S3p}m[C7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

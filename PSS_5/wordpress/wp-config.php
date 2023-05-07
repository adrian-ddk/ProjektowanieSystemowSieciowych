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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pizzeria' );

/** Database username */
define( 'DB_USER', 'wp_admin' );

/** Database password */
define( 'DB_PASSWORD', 'palnik' );

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
define( 'AUTH_KEY',         'irn9+OFhowI0%HE?V@W*l@*(ef/yJ%CB{SVxx}2qgsKWK6YuLGCOXjntXGs1/p%8' );
define( 'SECURE_AUTH_KEY',  'KqCbxPyYw~H(Q1]P?67&Le4!l*[P#d(cRlCVbX 9c)XAecvIY^1SqkGl2Bsf<4M8' );
define( 'LOGGED_IN_KEY',    '^G; R;*s+|i!+*2y>6)!Uk;}v=EpG>!^}-3W3P1#)t45YW;hF2$wGlZr,})ao7.Q' );
define( 'NONCE_KEY',        'P-<!dqABp-Yu_U@5~*.xM[!XL/z@70VW.4-$-g5Gc%BP!6KQo#}Z(.s)^?/`JsH ' );
define( 'AUTH_SALT',        'qvo`.mC6s?EAgJv^@WnFcw~$r4o{R1.46;0>$N,e7{1&c3=sVuz{dz=ba=^3:l*>' );
define( 'SECURE_AUTH_SALT', '#KwJ{&$c$k#=vn*mm*t(RxPT)<x| ,UzTrCkeq~6@Ts&|*)P2r-WLPnDn%:0[A&k' );
define( 'LOGGED_IN_SALT',   'R6nh`6^jR!EWCkl`*gK,N(NHNa-*On}ju|Pi-}H{g-LxLrk&E@n%`NV(NiK,K C?' );
define( 'NONCE_SALT',       ',<N*#rhew*5|BTThV2[+p9nJHS-$%;AiGY:& l:XRkeBlGJ#~=[xO(B &_P755{C' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

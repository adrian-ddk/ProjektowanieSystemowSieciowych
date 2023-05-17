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
define( 'DB_PASSWORD', 'Qwerty12345!' );

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
define( 'AUTH_KEY',         'FRm/L3d!2[[!20H@%NGJDDY?:DB41p[gZ_-6~v|4@@Ks3iC[]nbF$t0qoY~)LCm?' );
define( 'SECURE_AUTH_KEY',  'x Vxr=7?~B}.(Zh6*DZJkz<{jDxg,<{iW`k$+D/,0:C*:QF:~,DV:kHifY{heJpD' );
define( 'LOGGED_IN_KEY',    '>*?AzROZqfSuxC-^/rAm5@KRV/hP7-=&ShxS~cX&A@7G@5f@v-O~oZ`JG>t7D:}}' );
define( 'NONCE_KEY',        'AF6}A. ^c$6N@%Esp@ZN9x= @Z_4V&B_,g,<P#_/qTZQ>h&*@-rC6vKh9skl*E:?' );
define( 'AUTH_SALT',        'y-Y7G0 c&L.u+XT>5R~c>i*2N74OO}1l,1jTlmu<nC<JY5A_i{MDvWM!]D}#G~KV' );
define( 'SECURE_AUTH_SALT', 'NOOMD4bP@M_w;%.#;K$F~#)B#LP#SR,$Be:sEL[K<8oL?AqBrOW{@m>iUvVL_3 [' );
define( 'LOGGED_IN_SALT',   '7mqPE]69`M$Bs%~YM,Y>00l&0@-)3zr<xuy{e#DjPQ`aYi|I@.1~N2NEpKVb~Y?S' );
define( 'NONCE_SALT',       ';4[4Og+8P{6rSs|2u2C&m~M|f<EwlttAz%)/]Q8Ahj$Anq%MHG|eiD[l,{SmiaK#' );

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

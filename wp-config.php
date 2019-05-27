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
define( 'DB_NAME', 'ejemplo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']7UfZ: hRu}R]Npa)bhH*efcuKrN1z=SM.B9pn,/jGP;z9VRX.p/wFesYA6@<2HO' );
define( 'SECURE_AUTH_KEY',  '=>N&`2S=m^[CB8aOMp4aQ@=e2@D|.q;eZC/3P?@_LxQVZ^gC;28R.58kZ2*m#Qbc' );
define( 'LOGGED_IN_KEY',    'Z)!53pXG``;R?{_xMF*ZzhK/Ou94ph=lFzRZhw ugp}wV+l)fl%]a-Ji>y0`.D0r' );
define( 'NONCE_KEY',        'LrcO-l!DI=B-BdCgs+Fs?,XW|;0:Jkhsn|2[1BIpuRCuW49WkbA@&?.X6dIQXp7%' );
define( 'AUTH_SALT',        'E;YdA+ItKO#W9Im+^=b?8:Ew<TYY=|A=?,il|v)7{H/Fg1a&+R~2_8h)S}|YxfbD' );
define( 'SECURE_AUTH_SALT', '/fPMa@nNkpOnyAE<;++/oG01Wh$_2r]=daBL5SxC/3TwXI#9[fot`>AL8&2Slkqj' );
define( 'LOGGED_IN_SALT',   'd*W+.uqBe&+^!;-sD. :dpC!uDJpmzZG!U`Cv+HifL*SlXhoR#L.M|CR`MTm](>]' );
define( 'NONCE_SALT',       'n>/4!Q*<wBHPN)a8e|1~NV{?aGt=q?BcuQh?N{GkQFe_t|g&0z`X9r+8|o(?L_p5' );

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

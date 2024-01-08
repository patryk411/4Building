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
define( 'DB_NAME', 'building' );

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
define( 'AUTH_KEY',         'BJ h@<!Li?1&FbhfcxUM0Jl1=M,_=]5EA`3T2e>WIu0N?8j&rXD1KU1qp>!:fJ)@' );
define( 'SECURE_AUTH_KEY',  '#gD.Sd[U*[<t*SKc$)U{QOH=K}ft!YSl+&xBpraS%_9$ Zxvh_w>NQ8TM|`ma!?G' );
define( 'LOGGED_IN_KEY',    'jP2Z,>9u0FxO%:+I)2`-I?rV/qWrWB6^M9I5d j.RGn?t9vOT;I^BgPHl$z}LVkC' );
define( 'NONCE_KEY',        '% U*PYufhxguf|=9Yp_(=?%*<JX`*?wl2s$Wm?uh(.^rWg*3WeYZKF-Nk6#3A:br' );
define( 'AUTH_SALT',        'XsV3)W;%fN%Rx8m(VDdPGbX_5=zG&o|]L|oF04bC!zZR+&BiHA*_2[IkqwArjwZ7' );
define( 'SECURE_AUTH_SALT', 'cEb[qnk6~>1mtXasl,*fQRNR;}6HEV=-xf`P/)57!;TL>l@SoqZ^gP+>:pnUqn<M' );
define( 'LOGGED_IN_SALT',   'X`b&,5j{t.FG+k0tu&qff/=i0D?OKsC 7R@RuBGFdnjc,f-r87CLV)P9 #S {`GG' );
define( 'NONCE_SALT',       'Acf:cl1/5P*]*:I?%3OvT2*XP[4WBq|GaK4Ko}vg<$Ju9zwb85,[Y}U,.2wi&N)Y' );

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

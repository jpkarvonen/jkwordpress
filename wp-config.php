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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jkdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/ 2E;gz*ag3=c[Z0.4;=1D.MC/KUz? w.|`s*uD,Wx;VoPCb;(6H!V-%%*iz<Q C' );
define( 'SECURE_AUTH_KEY',  'K)2kXx.m0e>#wVJ bazts%D %fH5 :^utYwx,E<F6:}v|?wBq=qZ# !pg8yCB!kH' );
define( 'LOGGED_IN_KEY',    '6SkS/`tSeqYn)bmGY)O1$mxLp%(xzkRFlaSYBOMf&X5H~o8ua8C6|TQw@LPbyR~.' );
define( 'NONCE_KEY',        '_F,rLI_y|pY? &sPvh^uo&#(S*4?K`9BD{1X>j1/#2M{dg ^WIclVf(lol~vk[){' );
define( 'AUTH_SALT',        'o!hXZ{{AE7]o[TlR]Dg.M.Wdp@55+X%5u?s8wXS,E,F$sf|[CdyV#{9BR-%Mt+T5' );
define( 'SECURE_AUTH_SALT', '~khd}Uz>~8T302COS(o1e{a4]:xEd/_y/x<#l1kk1+3|E64Supkw7x@=4unR(*RN' );
define( 'LOGGED_IN_SALT',   '64@bF<g3nj-JVbKHXi)(Hd^6fVh}!(%/&Q>vTW_dS-eWLIcL{S{m=]v[g;9B`J}3' );
define( 'NONCE_SALT',       'h,yR,W711(U.ed|cueZKgZ{lz9Vy>f.@~h$?(<(*XFvi6cj%JHVIpzG7><%RyM!}' );

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

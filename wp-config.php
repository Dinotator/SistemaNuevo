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
define( 'DB_NAME', 'sistemanuevo' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3a04632fab0820c5091a8fd5d9716e19e13f4c5f74c72de7' );

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
define( 'AUTH_KEY',         'HP3R-h1.8%>m6LRHRLKbNOEU`.9RhV%]:#9ua{!P.,~znJ3v*wz*Y]02#b:2|LrD' );
define( 'SECURE_AUTH_KEY',  '5*Xv#3d(YeJKs6YEgv4n@<+^Vubnl2-:Kr}]o/zFU%l&[%J+>t( NHjvoXtUlM+I' );
define( 'LOGGED_IN_KEY',    'l#&w3pR+5L(^kPT>9})U.=M-!!cmfM!:UA_o/gG[waAZA{`q:HF|K]*Gmc2LFL&L' );
define( 'NONCE_KEY',        'wJP?Or8CC4B7PlYF|Ho#NCZ#9zZ9mV2&#N1)vC#LE u4KA!X~X^a:z<E{V1s=PV}' );
define( 'AUTH_SALT',        'j*8dsVUV,D._mSnLYO$5G&IeF3vFwCv,,+KTN(7!Jr_TkfNaRLsr,X!!LhYvvDg@' );
define( 'SECURE_AUTH_SALT', '/$ b@/RCMR>@<F]|:86D=io)gE,FDtbH~F&c-4&zcv[YX:g.1VVGm+W$oo5tP%!B' );
define( 'LOGGED_IN_SALT',   '*PCSb{:(2tIZ*$a.u!D]7<12Zd<hE`BQtOA}`yh9}u*`+#lfbr(Ru;w`*v|a<;P:' );
define( 'NONCE_SALT',       'Vdx`@+mGmlXz4_&Pf]vqjl>TAzX=aIN[[3_fYYaXG/{uZ2| MErw01,?S;lK}GP]' );

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

define('FS_METHOD', 'direct');
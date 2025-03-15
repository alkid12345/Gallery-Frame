<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gallery-frame_db' );

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
define( 'AUTH_KEY',         'x`54eDbV0oY5o-e|v6~#83P1I+QHH`h;=CHJ9gNx-WcMKxo~A[$?8nknb+tZ<xr!' );
define( 'SECURE_AUTH_KEY',  'Ip5m1LBL(E&4}KHch/6kgZ-Lz4prSl&YY-;5=J):J_-Kz)J[[TC[fp]Lf]&HJ[i6' );
define( 'LOGGED_IN_KEY',    ':hxF3;tR d^l~1_rWRnhe?cPFGOOR(2&61wF_<e/nmAK(jl$g`EGF<-~^rFDs$-x' );
define( 'NONCE_KEY',        'N}VSP,34HC(5d@nf.yJ(p-7Iv^}YM]l::(|6`EOw;m@&5!ESmD?X[s/Kzlt2 u2 ' );
define( 'AUTH_SALT',        'inPS.>5ZI{H]nS/Q1g0(x:io4565 +n#ac<%FzR:4d=u^+m}]&_fuwtdDP+&%A}h' );
define( 'SECURE_AUTH_SALT', 'z+6P@#2UNn_5)hgwC>W0S4>}wlV9yG;n+Wvm)h?GVn6z*-ER=8,Ey#|C.d3%3TxM' );
define( 'LOGGED_IN_SALT',   '8VSTEPZj1Oq]6#!/A/elqV36&0BfeADs,UcVHbvCNnC!.x.-I5&pE?6g;)UE)`=6' );
define( 'NONCE_SALT',       'Zd-`DuSBMrwMX1-:M~Fc.K4<L@J[WcyOie1&K-r9s$KBJ26`:6Qy]1VEH3)&)n6%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

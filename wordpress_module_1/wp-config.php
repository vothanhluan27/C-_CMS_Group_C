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
define( 'DB_NAME', 'wordpress_module_1' );

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
define( 'AUTH_KEY',         'a Dy45O!C&q_Es$m+4ye^5].p[h~36kd6W498h8;sRCl;6wLI%B<T.zgAY+&*NbA' );
define( 'SECURE_AUTH_KEY',  'B.E)B`%/+HSt;WjgR4u6FS{TEposD<cX]pxW]3UwLnOsjBF_W. ( 91CG$3<mi3%' );
define( 'LOGGED_IN_KEY',    'V$u}C&PZVKWyRat[ DAqNlFX&!a/MGf*x7(o%suk$-= a!jDmfM7uTSNs=W//O~Y' );
define( 'NONCE_KEY',        '|_VQ%q7qn?.kwohdjI8]XAe>Pe=R2zVW=#m.,INUz)?qEX9WS3L2}2FfzI(vS?=M' );
define( 'AUTH_SALT',        '_E])KtGw8}6h1pX1Gc6^=<MhESl##8=KxIaAaExLCrV4J7}__FGQuQ86BL0TSAJ5' );
define( 'SECURE_AUTH_SALT', '+m]DMhOU3}j,Kf&EbrK`jg-vM F-|6w!ghUn#~bM95j$:how-lCP;lF$-1k3.(S@' );
define( 'LOGGED_IN_SALT',   'JYBCs::Q?<ZJf(a!4`cs xSow$tL%ByS)~|0B( bp;w;1S` I~5^,R pvK/^K&_4' );
define( 'NONCE_SALT',       'p`;0E)<T=73yypFOJGS-y4X-|[//q<,VCUUU;6pXbFPWoEjMY;>+)X8kM71I;>^`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_module1';

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

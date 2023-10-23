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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'z^^LYViO^9V1:aE{vq9wmALEpRe{VI*XOVP>bG*r`6_NG&=c44:PcG#.mF|AFfO ' );
define( 'SECURE_AUTH_KEY',  'wU|;pIpgrU1np4#Os]F1QLG9,etjy$=)KQ0~K6RG.[D?^ s+>W.E6RU*=fx{QMX(' );
define( 'LOGGED_IN_KEY',    'l&S@?aU9q!.pC?U5biq_#zU9H-,=S4[}&fk$Nb6pA-HX{1aa|Cm.QSx=rUwK[uUj' );
define( 'NONCE_KEY',        'oZ^-1~^p/,{5`TkK7zX8WNt`ho7T5(3!PyvH2tuR:V&t{)B2H5fodf/-{JYx[_~g' );
define( 'AUTH_SALT',        'bL`?ir5i^]esZ]S!J0u?Ujqv zvujRz/ojdIid&hjA&_1reExF*}rW}L7vIi??#-' );
define( 'SECURE_AUTH_SALT', 'D7xDR()3Xc3!@PeZ^RP&X0)C-Jrs%C~Oiw6FL0g>t:[ByZ{bE]$F}l>)Z6Dc#XO<' );
define( 'LOGGED_IN_SALT',   'sLgC0OLVmcU$9RK9s/:c[!yHM>O!^E5A!yo@TovG<d%r.i+Ro5*km>+*N;-GX8hG' );
define( 'NONCE_SALT',       '++$5,2v;A5n)gWb6gX_!r$s*eMMf4[nV0]W.eipsVK}e|xeuG1uU8G5*SfoBALM1' );

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

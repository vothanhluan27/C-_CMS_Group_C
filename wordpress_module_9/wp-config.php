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
define( 'AUTH_KEY',         ':TtAL5DNeRpjX^/AR[/Qn,r]C?lpldv8QQ<2:~<N{|uWZx}F7}&UQKEB}7)RvNgG' );
define( 'SECURE_AUTH_KEY',  'P*=yZkLTDGV]kxNl_g]=>=A9uMp!--0%:e)Kg`#.Ug[C60`~.<<t7y11)]o6jG1-' );
define( 'LOGGED_IN_KEY',    'PU<Xj<U_ZQ1?,odw*U?rouR-6iWhz,;>QzZiUXF`BO9T6}LKRJUAz)j2=EPsC;ol' );
define( 'NONCE_KEY',        'Xm9$2B,5WG<<}rt0%@h.[h-:7.|kY@~rdQ{yWN +5qKs}UPpl0mK6$j|chf-efNc' );
define( 'AUTH_SALT',        '# dgKzzlk-NbLmFiLlvzwx*2aDOT.V8=6kKfa1PQEKBl!o0o >b**hu((`Ln2YAB' );
define( 'SECURE_AUTH_SALT', 'fd}se6;)_gx~nvplP^PT-fn>GKS$U(>~WE>o {iXnY[&xrH/aeJx{H6>[2#Nm{HT' );
define( 'LOGGED_IN_SALT',   'kpaEHIQ:@(J|lJq~^%peh}T.qfA,UQXeElmQ?o9J{crdn8_7J(9O7iGgjya;4v99' );
define( 'NONCE_SALT',       '0pMmu{.%}>{t=?a+l 74 Eub^B^LmpmAg~&_+cg*I4?*Su)cY{LoLFGS!O2MxKe@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_module9';

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

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
define( 'AUTH_KEY',         '<Ie4`#jlunrMa?9/,eXmct!Er,S}>!O.CXME-;px#[3^At+$MT{]:6U!)lk!dspz' );
define( 'SECURE_AUTH_KEY',  '/pT3!.UZP)Y6})!B:R)p2]wVA=-_l4 !HRd4yo[f;As6|A|I{vXIG*4Lnnr* M8-' );
define( 'LOGGED_IN_KEY',    '}Q!~M/n$y9N3OV&z^D^G_vc[}C/=P}8P~QM/j4(-=RCvu|3`lq42S]~hrAirNS;~' );
define( 'NONCE_KEY',        'KeB&_$w[F*3n=I^h3-a^$0`=dyI#_W5@T7MQ`?hrvmhixI1^pPYlnvj77&u4mQO!' );
define( 'AUTH_SALT',        'LCGx*Mf*a<7Qe`|QV(U]1i~7lXLmV(8.ISIaslz5)yKkZX1wU<vr,qz-#UU3]t}C' );
define( 'SECURE_AUTH_SALT', '~4{2]O6XTsp%0g{)Xx2WKxpa(dCZnX9Xr-+(&2&z;vA_,vna5/3<mC;cr&E usO5' );
define( 'LOGGED_IN_SALT',   'b7#R,+0$3mj^5+@F3}CT HxYh /`?,=S<$j`m}4hRTsOMhku1I5Wd&m-WT2>vqJS' );
define( 'NONCE_SALT',       'roJOM4c(aAj$0rUMoE/6BN%z9&K+mj2e4h}Hm#09hQQ=[U]tGp05/l@}0buup+uv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_module7';

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

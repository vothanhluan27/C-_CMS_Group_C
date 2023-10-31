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
define( 'AUTH_KEY',         '^1;+Ra[|5P+mD<bJ5{tkn?%JTOs}RX9^8Kr;JfLhyLoDI;w!@dyWzKK39P;>U`lJ' );
define( 'SECURE_AUTH_KEY',  'F%ss#WUsB3l1R4Nwe@DSzVAx6box=3:dcJ7 Q90.R.{z9Zdo1+md+ab+}zYzb%|^' );
define( 'LOGGED_IN_KEY',    '|d}Yek]S[}0161H0(!zeZKXc8.^[<d>5*&99{V7Gwo[q2D`p[1L}SuU EY`kZyb@' );
define( 'NONCE_KEY',        'Oe%N~f!ZE$|^O8}&[OEYd5gE#8 cop|nhXiD>n;q>FpKVKfI$XwN@MINg13Yd0*;' );
define( 'AUTH_SALT',        'vgN:p7W!-e*GbwbVtX-9mh$(Rcr608Ne9O8}T%ye0r#(=QF^CAqV{Kr3o=t{Iysh' );
define( 'SECURE_AUTH_SALT', 'GUYJ_5(JV;$8sX3WR{=BwwN*e4,3}<%VSQ8kTK`HRs-M%JuVkk)>vP7v`~oZW|F]' );
define( 'LOGGED_IN_SALT',   'jrrTu=ZQv[-msR@fsdk2+:NKCFJOvg@SV|Ht34pP35>SA~oE![8T9imeF TOMOY9' );
define( 'NONCE_SALT',       '^S$#$yf>7De{-3.--Ebbq]kuqwl+?+!}X(g07{C44C/evZsrnvUyr@RJ(1m<A0dO' );

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

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
define( 'AUTH_KEY',         'X4){%%*uf^}Wcb0bA4n7A(#.A06VheUzLoWZRAg{ mz-x(8ZUxe_`N@}wz%nxebW' );
define( 'SECURE_AUTH_KEY',  '+/c>I%$<0m4]up1>3+-B@3H(9 e$S%@y,zoT)TjvzZ,%1BF}?^[3{j|e?S#xGI1]' );
define( 'LOGGED_IN_KEY',    ',QcoP>Zwi33v>?zxiLQj}[`Xx-:e]7`63Js7,`NF?#q`m-1.SvzhK9{^9(nBn2L4' );
define( 'NONCE_KEY',        '#P]?KyY 5RPy>X= ]/B`^ogG5hh!+[J{8OGV{y[ur)w~t:bSveqLy_?SY6[cI80+' );
define( 'AUTH_SALT',        'Er[Y|OB%QS(&w^MN1)n[l=nYwH[&-8}o,.,=&%* K0n7{9GS>%ZO>z/**m2a*(Ww' );
define( 'SECURE_AUTH_SALT', 'X1%]6Pu@].D:b &TCq{N&-5gH`/t!BOg((mGI3$lk/DlSO-wnABI/dQbQK7s ?__' );
define( 'LOGGED_IN_SALT',   '<I6zm1FI<}gt]N3aOV5:%F^`@D4C$-U|P43$?zFN|hUZX%b#DXqQ49R2SKtX [}0' );
define( 'NONCE_SALT',       '0a)gpo8>Au~$)-A{E?rlakeJ<a5n^}!,{>2)2FqbvZP[o0]Yu-YGp%dybdrr>VGs' );

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

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
define( 'DB_NAME', 'wordpress_v631_Test' );

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
define( 'AUTH_KEY',         'n}1V$dCQa%?-AC(T()RVKg `Jop{=XP@A.HBS_4~kY]YXQ/0Keu{KaZbI9oW4%P:' );
define( 'SECURE_AUTH_KEY',  'm<SfHjg91#rYpEo(+c15US]+!/&_@N=0#Q(hiXp;{]-rmSbOQ1-io#-3yJVLAB|Q' );
define( 'LOGGED_IN_KEY',    'fY7u4 (TK$UG`u]f6$,uZN@-*zV4u&,^+>AaNN[0NsSdQ111cbqwo6hXa^:GMFfJ' );
define( 'NONCE_KEY',        'LUA[d?eN}xbueztw|G.>6bEbRi;*fd^I@sVx/HM+V9H`$v25 =}_G]_!iT)4`[1g' );
define( 'AUTH_SALT',        'D*z@xRGPDlp<7uy2pR/lV6gMLuSami[~K&s556%,w6.F[KGG)xQXGQ48$]K1s+oP' );
define( 'SECURE_AUTH_SALT', 'Mf4t;P)Y&y3.x$-[+fg)G~2~dJ}aR8a?s)K3Rg}7I&/fOb<pB)yR|w(U5L>b;)Fg' );
define( 'LOGGED_IN_SALT',   'IGe,0St-Z5((HiDGcQUg`vrH]!Zey8j1o~7NGJ~}/X~_<m.#d(u|^wHm]Lh6>L]w' );
define( 'NONCE_SALT',       'GH:TBKE-YD;e,}r}?sz]6:g[7)[QxL8]#@9](Wb9-)>O_Z- `+l;MHSeR*Y/lAg)' );

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

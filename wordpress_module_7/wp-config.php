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
define( 'AUTH_KEY',         'Y#k{C~k~@]G56I4E!R!mafY$?=%;9LHup?F2SZ!xp#d2$#?E<hu&iAJ&rpNrO~Pq' );
define( 'SECURE_AUTH_KEY',  '}$kIZ,,}n)iD!N?z?-=D&lbYtXT;PC-YFB(|P%lwd9^d[coy;3CI]fpTS`ct6+v@' );
define( 'LOGGED_IN_KEY',    '~hR1sl=jBVTzqRe87C p$V>`=.7)(AI|[lH>JHSvj+C[XGNp&Px7~QsC*wvXtfK|' );
define( 'NONCE_KEY',        'x_ELPzjP#[cWq2`-|`6x)*05`KiYQ4zKNs[&&Vrw|~^(VopJh_}b=W]c{]b t8R9' );
define( 'AUTH_SALT',        'qXM2Yp,DwVGCAO&_gL]e<_E|mOa.cx&G<C.+=M6C1NC2H(zP!Z6dwCtFFZ5 ^CIC' );
define( 'SECURE_AUTH_SALT', 'hXTF3I=Tk#N#IuX0Yi/&8yXK=L.j~o~Wuf<8t;!|!r(~ZdJ]ym^*<(0DvOcV]5s|' );
define( 'LOGGED_IN_SALT',   ',2r6sLC&_w9#]H:|d1t#+P>ePNbCIO7x<~Wkz;Yg2p_v9$J3r|qr0Vp9}a.G^[1D' );
define( 'NONCE_SALT',       'vR=a(s1`d4tKG{,he1V)%eC!+4qHy(1Z1801Uu^z*&vz`j<{f)OP^NiL&:&Z1k};' );

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'repuestos' );

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
define( 'AUTH_KEY',         'Z[PoC2CK7 r  <rq&_ndp/!m8*`9e;}si`NbZVV0-4dNBu8E7o5_^D-7DJuxF~yu' );
define( 'SECURE_AUTH_KEY',  '[Q:$8VC`R6~zbSvdJA3BF/MF#mNO.(F[{0;Uw0Obfl=EQ|Ta0v<?PpaN:g=QNP!q' );
define( 'LOGGED_IN_KEY',    ')]7VBY}zJhrm0wV|cnM FThdoX`:eE+5,m%13o*mIv2ko)zT%r:dsZ6J3k>_$~%F' );
define( 'NONCE_KEY',        'kKMOd9c}#=V.<daUa-6:eJ3[Fl2zrb6S3WG@$?DpjcTHe%iw_kWDNp6)$AyH|6%D' );
define( 'AUTH_SALT',        'xm~[O> cl4P!;Ap-W<%m{&aYI4D9`M_ U^<2G8Y/Wd<k06z1m][b=[,zSe2Segb{' );
define( 'SECURE_AUTH_SALT', 'aPNO;aetp[u5~j*nPb 4r=uOCu}=KzyAR }PMPksp^QHp^E$6?pVv| rE{xBX>j.' );
define( 'LOGGED_IN_SALT',   'oj+E#XmVsp2,P3LwCJQpCFs!<5Cp]_#`=b.4Z`l4c/iK9qO0</B-o$O?IVXjXZyg' );
define( 'NONCE_SALT',       'jN1Kol{y<*  HdW2.]6X%h^*)A=uu;7AJ^A[^x}n)jy8#mJDk@l];Y:zz#UK]pd[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

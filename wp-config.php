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
define( 'DB_NAME', 'wordpress_quant_test_task' );

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
define( 'AUTH_KEY',         '{czfK)^&-2e$!O8OxGJ?a9Pt74t_EK sj,YFc<T7Qo H-8!8u[hCm.9</+@<D@-p' );
define( 'SECURE_AUTH_KEY',  '2aCEQCQ.?Goc:u=S.|Ot|m,fKcH3?Q%k*8?Hj2LbXYUhnraFot;WJSGASB1:2NwK' );
define( 'LOGGED_IN_KEY',    'Ups?H~AwIYGs*|uh+nscioihKsCC}%+@n9-8U)&P T1#Z)selwllraD;xo#=rn=M' );
define( 'NONCE_KEY',        'F,v9/]nDwq0@e#3.c&ia`{g>OxYkA>aD]pD0<+y-Xi8<Z710eZ0.|z#tE+ZQ]Le]' );
define( 'AUTH_SALT',        'vSUB~NxOy?uqJ<C=gf|EG#oc(pFt:zA;o4he8Dh*<B 5_o:h.lRNb5&)Oxms}!(^' );
define( 'SECURE_AUTH_SALT', 'tgOZ@R5!r1ZQtN+ReRJ3,9:+ibVb6O+unThHd&,(sSV}bGs3%~zId0g|^hK+AGt<' );
define( 'LOGGED_IN_SALT',   'e1J|bGM32%]+Y.<`yRsFGGy?:;nPYb(Yl(USh3$.n[&(9~Zq,BJj3~T.CB^:}K]i' );
define( 'NONCE_SALT',       '<G;Gs/iRtmC,!+o<Nz{k!S[IQ*JYPBJS[bQ,#AyscMsUvBh~Iy-t_#Wy<R#ry{)+' );

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

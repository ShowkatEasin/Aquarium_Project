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
define( 'DB_NAME', 'nature_aquatic' );

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
define( 'AUTH_KEY',         'i[K)i`svmqjf.X{5{$.e6Uk7CceXyIeFO(gKcCzOX8f,YgD,][?4mU*#f/GD[|d6' );
define( 'SECURE_AUTH_KEY',  ']}/:qs23>D)SG]I@ Ig^@7c@S-P]<*x/O_+,+WrkD$p.:?ki.~_M]`If<fV2nxYX' );
define( 'LOGGED_IN_KEY',    '_b^#{M<gu(4Th$Vgkq KsgJGcBvJ@LNO}DG!CBf:$FBr362f6Z @9.Y7-s$%%g90' );
define( 'NONCE_KEY',        'VSkIsM8h[recf5s#K63%6<+k/x/1y{q1M6$rn9%FJ!;FQ0A,k}$Z:0z;x#zx_?XF' );
define( 'AUTH_SALT',        'Z2{y)b5=]g)#(N|}bz2^t Js#[Hc3B3<hIm-5KlBQstbKIO`%v+IOWKDN.8&xk=8' );
define( 'SECURE_AUTH_SALT', '@:p~U y!MK-t<2#*SN;Dvk$k#T4[7B9&js>|EV^#G7#@7lk5BggP6o+7S;{/kkPZ' );
define( 'LOGGED_IN_SALT',   'AZkNDN *+O>06;h-PfJ72U;K#So!*PRUMr)1wV6:E>sGr 5x#.%D8:(QW^frYd>+' );
define( 'NONCE_SALT',       '?-+L1VVCQ2eY1%cgDM#Xd|mJoaM5k./<@{!r(ZJ6FO]LoTlbWI`VqxF_t+fZZNd}' );

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

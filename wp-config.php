<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luxurybycityboy_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uql4fc~@AKz/{/fOO2M(l2U1).OLB{[[C1Nev. 0=WY6~B`7X}i48{a3yMn`u;:i' );
define( 'SECURE_AUTH_KEY',  'Wj|DjnH$_S,!.h_MUK:2K>-3i#d&|eJk%xUxb}S1>CKa[;}qq&Ng./J]t#}4s]KO' );
define( 'LOGGED_IN_KEY',    '(E}MJXNbW,Wl>mub3*KY,f#P.ah!>jS]&Mm,g;K5*n0(Hc`.;*4$eDK*{owurzO^' );
define( 'NONCE_KEY',        '{F@RBoZwYXojBXl&oSQrRdX*CP<GbMhTS:e6-^BlB1o3voeP`wtcu*NE.u!67AZq' );
define( 'AUTH_SALT',        'q6g>csHtQUhYCsrY[7HqBxJP<MqvJsa;4m6}9kVN0UC0FO3gxr7n4r;Y_+OCt3i7' );
define( 'SECURE_AUTH_SALT', 'j,s9vk0OPV)~vZ5`d5ky^n97VM?PZ 5L-NCKFH#UK(o[f>IKxpd**ZD`OJjlo;)R' );
define( 'LOGGED_IN_SALT',   'V+?Y~uZS}l`k2EK]AK8JC|:xSarUjy=yu]M48J+]r.<qz}f><>#%R2E+[X:/3kEc' );
define( 'NONCE_SALT',       'b&&(nhOU(d,$[.8cM>fF^Z$o2;mge5,+a|BD*2yL%/ XzfFJv(a1sVoknjZz1`Rf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'zm_reviews4u_db' );

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
define( 'AUTH_KEY',         '&kpO8vcO^QmZ7wAH<OaUYxLQfxDn yK/9+n=w(s&of%NBYZsxR0JmTKy$RapyhS:' );
define( 'SECURE_AUTH_KEY',  '42b8d tyCLfDN{4{s({d<B+%7q=~S##GHiwAj:4OO4ksUcP=b9Yjot>be?vD~@yR' );
define( 'LOGGED_IN_KEY',    'OHWS{$:&e5(cT1O}(62>I)!m-pM4E/kHgLWv78R?LcM~%F$-rxeb(LmN6ph`iP`>' );
define( 'NONCE_KEY',        'EhakyyTbh[!}/q-L|NFWT.CvUT_prds}Cd~2|L(~t&!?F,qkX6;OT%HOR=Kry{O)' );
define( 'AUTH_SALT',        'fAZ.G1j)[r!+6F|&sH&a>/cPt*ZcC0ImG.GA?5GM_&.%#MR-u]+%&Z;fC,$IQZ)H' );
define( 'SECURE_AUTH_SALT', '-`MKz~Ob&$x5M1Zb@&Wp#0#_y+^&1{>;YU#&GUOFNq{#^.>hAHeNqF,Y<t((4L];' );
define( 'LOGGED_IN_SALT',   '3F*6vjEETkdMO-)v T<|Vp.MU,%K=]qS5}T9Upgb,Y^2~gz>_s!1;j4a9#&CKVH/' );
define( 'NONCE_SALT',       'J=El-tfwIGTda|dWEP3D:g?pf(K2B4.E!tra=SAP+9yR:#>f?Mi7n= -T46VG[*^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zm_';

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

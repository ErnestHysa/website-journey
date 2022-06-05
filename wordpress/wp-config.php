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
define( 'DB_NAME', 'website_db' );

/** Database username */
define( 'DB_USER', 'admin_website' );

/** Database password */
define( 'DB_PASSWORD', 'erhysa123' );

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
define( 'AUTH_KEY',         'Do_ORJ.UC)HE:<g]Xg:uKRonfoa40%/#EIc pRl`wEqG_NcVV%UvPni[h>k@W)hQ' );
define( 'SECURE_AUTH_KEY',  'F;)QSY2)72{ttPT![u?K 7[NMJH>8i?aE7Lv7HzLrJee4?)qh*HzJ4fD}yaX,pYF' );
define( 'LOGGED_IN_KEY',    'a/i:p1M1;i2G{Y5Vk/rXzVrlQ3Yw#T)@U>>lQkp.N-X6wQ5za*)0sv~64&+  4aF' );
define( 'NONCE_KEY',        '5^qp :Og=y6gTN.<Z6d:z!=!{ti)qrr,57AQ~Nh!dkRPYl)]Y;T0ke)lzZIhmsRj' );
define( 'AUTH_SALT',        '{Y1SCZ`EbFH21{}Coq&dO&7DAPa0efF+ hR>^7S1)k*_T^_M &MaUm<2d@ipaB3S' );
define( 'SECURE_AUTH_SALT', 'dG:V}R|Ki2ZHDn`rp2ia4]<`O/fKV* / KN*b9HP8 FVa6<2GW2s|gmmAxqkHs4*' );
define( 'LOGGED_IN_SALT',   'vEAcgaTwV7pW.lcKzdgiQ.>u8u7eo]MfkM_R7cFkZ=)}ZH+^qH/c]ws#p[FxJY!e' );
define( 'NONCE_SALT',       'I?E-W(,9wc*O2K*,9+AhrC+F:wekodVY5@Z6$42I;9E0N@g3(If0zvkX1rk<U)fD' );

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

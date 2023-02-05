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
define( 'DB_NAME', 'herbalife' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '|xp.Xjkh5FN=14sJRO5,jtpaH84y(r/R!dwt[5byB,wm6</To7b)x}-A!:(`%Hld' );
define( 'SECURE_AUTH_KEY',  'T)2jnZjK%R`#7MwCO{@UGf+cR4E@*[A1w=3ZG3G`8xPf.k|+0zCB!!i*d=eG<=)?' );
define( 'LOGGED_IN_KEY',    'H2+[bXtcbA#OHj`FEu5wT*bnF@%?[wUOU(`_rlSg[ELF*jH25)+KIvoy)V>nE&#9' );
define( 'NONCE_KEY',        '~F;LSZv,]mKB!,t,Ra3d]lf(Y-y8tQi+W9UuRXJ{Cs@o7Fy{8S-np?+!4yz`hl4y' );
define( 'AUTH_SALT',        ')tV{F4L8HB+R&8:H-XP1E(r )n6n9fzpzp_6)5!4[N0MAOL@UB`sg!ygP?0(7^2A' );
define( 'SECURE_AUTH_SALT', '$bufV%B>?bE{(vf~-$tlgC2_a?}y*sXm%yfE(NAnRJ:=<#,=&v<i)dz7lGa,Z^kY' );
define( 'LOGGED_IN_SALT',   '#cqEZJO)k*L3=-8}IGAD(3jg]{V6w`V*3MA jH-H?/Z0U?I&T;aopn`h$bcjIfIX' );
define( 'NONCE_SALT',       'ZOg%a~(MBD0TpKEE3]^81mbr } R+_,KgFWC&cJ-YiBg| Q(I6 qlD9[[bW$f<8J' );

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

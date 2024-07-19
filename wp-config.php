<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nvlands' );

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
define( 'AUTH_KEY',         '9|^ZZv 8PM1pv-1-7unqQM$yCVFH@jjack$#QZ<6 A &z$=Mr[~y^0.Cf*$uLRv`' );
define( 'SECURE_AUTH_KEY',  'o[Z|KPrHEPU,%*w+CLZ;K7}wg?O`5OZ!]N!Y8cBA;e-Ss]&xjK^,16}iuS<=XA+Y' );
define( 'LOGGED_IN_KEY',    'Z@2s~Ox#&sC=b~,a)F|y+vx6);Fu=lH)>6[#1A%,@P$)0F)%!*k7*?cvM6<-9~N.' );
define( 'NONCE_KEY',        'eGqj:085=aD~T~^i[8&4*0/aR~9$ro?j:p%<lAs/PDRR*o{FOd9/s:<*E7``^gXq' );
define( 'AUTH_SALT',        'WEW*U7)6@&Cz]Zy3[Ud/fz-?g8t14=?FJ_A0khQ,v(]OGUG2UL5VZ$f{8sKhSxG~' );
define( 'SECURE_AUTH_SALT', 'f<mGL=}8l)8bHEK,E|ZAqg@zRLTioTk|>jJ}Y=>ZR{2SD^-2xG@-[j`K2q2C_A_B' );
define( 'LOGGED_IN_SALT',   'jHOEOZDKX@3q.$WX a-sDQ98FGBPvcLGz?Pkt~SYzvKM2zNz[>NK_o1lj/^(eJM5' );
define( 'NONCE_SALT',       '^]$*zF^-fJiN0FJKy52{K-Er6w8bkAa?Gh=1ZW7Zm9)_`Ua2>WwHfx=/VO/H5lDq' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

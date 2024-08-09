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
define( 'DB_NAME', 'wp1db' );

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
define( 'AUTH_KEY',         'b&{K_.YN7b>~b$/6`6gk@m{anS1in!k.Yk3s4}=Q)NxF`+pZ5>jDw! %U|bW293x' );
define( 'SECURE_AUTH_KEY',  'q>#I Q/]C/~sP,]j*ms#O~8z6Fg7z@nw/x9w,~k+;G*.Dec*+6@8(]xp>!NJW3^K' );
define( 'LOGGED_IN_KEY',    '{w-~Z-R g+76<n!y6lHhdJGR!L^@%zsl-95@T?{)>5F?EH}S1?4.ifZ{b( ZY#$l' );
define( 'NONCE_KEY',        '<i#u7_{NtqgX++<Xs6Y=$dYT~yX$z|-%Nm:SuaFN5scaLD@.bgdNZf:WT+R*w~l$' );
define( 'AUTH_SALT',        '|SQ1?~h.!ZNWFYXF4sy(+UZmIG&d.Wl^7aVt^/|S<#P{-hsnc]!E9Q_Nx0h>;[K{' );
define( 'SECURE_AUTH_SALT', '8 LusJB+Hs0%BqQQo@%TDY=;xT[pf|NJ%0H#@0(X5@WR<)G#R,&aOM;Do5y*xHrK' );
define( 'LOGGED_IN_SALT',   'O*,d(r9{*v=Xgc3j:#dV~/Dofh|%Ccj;2INyY198Q:<:r9~esNR[KMl{)J~V-yi&' );
define( 'NONCE_SALT',       '%FD+U,n`7nJA jTNZ+@5<l<:IiUZ4H[<W5,+zuYB:b1<u<Ysa*(MwL+Uz*f=F`N ' );

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

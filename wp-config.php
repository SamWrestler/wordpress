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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4$ESYo9K)nq_xXD~=Xtyttgj$AyyJ5?/PZAQ,!8UZ/ cVT)J.dkKS+!WlO2Cr1qs' );
define( 'SECURE_AUTH_KEY',  'B| k.M#?W(^`]@I2!G=&0E8F:?[J5U)QD6`5D0TcU$>c,g!I5t;LZImn{B#XBzcB' );
define( 'LOGGED_IN_KEY',    'QC5P`8d7C2/~lU=]yY|r_:JtZS,[6;hT-T1w|fYzd7~+|NP@j8laY@jBNY(yf0no' );
define( 'NONCE_KEY',        'nirtWID&0k80?+}/4N1U|(_8iYhL!{-3aMmP R~,c,P]zt=VFe@[rK]MCF&Ut&Y.' );
define( 'AUTH_SALT',        ' +@xNCS*Wkm*7~D$JG&MQ&(FXl,,[oMUllk&d]l4vO!U]/E$$Mc+NdZI*N=R$]7~' );
define( 'SECURE_AUTH_SALT', 'Z=m|j6hh=IZFgW,&1#LhQ0E{z^d$K(j3i~kjIY:8_XixPX)D?QW3LOPDt1vG WAf' );
define( 'LOGGED_IN_SALT',   'Pr.pPo,ZG; %`)-;]9@03T=S{iqwgMag^-$2u=#{J!^Q$n?!>C;[oh6v>S)=`8Gt' );
define( 'NONCE_SALT',       'HQoT{6#k=TjUM]dCa&1pI3n,3th7NR%gK= nf.~.Uqd6:v$|pkTLiE4PdK=AYVGn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'smn_';

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

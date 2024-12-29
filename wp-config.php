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
define( 'DB_NAME', 'kimashop' );

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
define( 'AUTH_KEY',         'UDYv:M4=+}T*A6KEoPRwk[Ift9dDPp.b2TL).??B#eP~G,81q),l:WS=?VYm.jDt' );
define( 'SECURE_AUTH_KEY',  'z6oO:m7(ZKU9r0aZ]{$q#8,lt4WVvQ=F^BqFgKZx-vZr%J: 5aP[.6fsr.6hp,%o' );
define( 'LOGGED_IN_KEY',    '{P~HX`]T.tQ|7.<JcKbyj!`{fFPUa6, @=,v~J)`6OG;Wf;qM5b{I;IMdFu=r6gR' );
define( 'NONCE_KEY',        'Kss!: H40;r/O1I(47US|h8cA~08S6jFy&]1PiNud890N DO )*anN9[rJ::GN>[' );
define( 'AUTH_SALT',        'c(Zn8csa{j4ob<!LzM9W50b,m_T+fo~Q`&$>8SMTjmmv/y1|P4>[-7F}j:kh}~,$' );
define( 'SECURE_AUTH_SALT', 'jK$CP$lmY@6Cwg7m!7Q22?ka,)n+==I.XKw_#mOE@`rH!dpetM;TzJ0@_UK-X=]X' );
define( 'LOGGED_IN_SALT',   'aOx5IKc@KulY&`/Nf(HdQhnD_(h60e+VH*{C8EA~A<ji4+lD(C|<ajnbW*|Qt+(N' );
define( 'NONCE_SALT',       '3NL,AT*_[<%`+9:|l`*Qj-S<pP}`z*k@~K3zc>Xn8XTQsZ)6oC.(WUt_2{T?-v,j' );

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

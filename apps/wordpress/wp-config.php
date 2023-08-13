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
define( 'DB_NAME', 'db_name' );

/** Database username */
define( 'DB_USER', 'db_user' );

/** Database password */
define( 'DB_PASSWORD', 'db_pwd' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '-SkYK#AZ$5C_ P,4K`0LBSMrVI_e*xOGUO&UkguhP#Xm]i,=ga@.~e 5cJXF&r`Q' );
define( 'SECURE_AUTH_KEY',  'he@A>h=qR$f ?6cE%#k.#<7lBdV[~q1Lfl* jVxxfdSoU#:3fMrcRwT/xAtGATh8' );
define( 'LOGGED_IN_KEY',    'Wd#5pgk2pr8]]p4ju&dHr*P.4s_jo|x{^7S=,@ >6Z5CA7gl|Z>G,#za~gcl>q<h' );
define( 'NONCE_KEY',        'B*Tp()}0y(gZI)dNn+MY/56gc@ISv!te.NvGb9].d>b0PQ^-H*}Q<SE:|E3q;gOX' );
define( 'AUTH_SALT',        ' ]=|Fbsx)/aX3zAw8bRO/D)PrXjg!-%W.Pid~_W2hS>pawk>?_q93rSB0rhNb>nT' );
define( 'SECURE_AUTH_SALT', '8u{x!=.z=`0!rJ76<jP59zeSVDWJ.bOdfhK010AT$6&qlH|;I.t|~:-}(goKYfO)' );
define( 'LOGGED_IN_SALT',   '1hi`~R6J2F)c;:VkO^k&#p&mblI_+D=.R@6`3`lbK/H[($tUt&*9)!T2X:`!7Ft1' );
define( 'NONCE_SALT',       'Y(b)x>B,m08_P8TtFM9,|mlxc^B;{i>O3D[f,ia+O{;Oe=H|g5]AtVN_;Pb^V1Jc' );

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

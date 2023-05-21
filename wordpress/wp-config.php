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
define( 'DB_NAME', 'dbmyweb' );

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
define( 'AUTH_KEY',         'M:`wyeJEG_)V/,}ySjj@?IUtnx9l=SsjKjXi1t)lDI(];p)irTmbCCYH_0.N1pqD' );
define( 'SECURE_AUTH_KEY',  'gM7Pn[4R~efl)<rF`%:E)./|>1q-s|jb(>`=Qh#;M3!?|L<+S+w:X%gsGB#G{Lz&' );
define( 'LOGGED_IN_KEY',    '?i6Xp+shq7o?a}rTTcU!W#SL ?8-4Z#Xl>yGaCb6Xod`fAR1;L|;RE~Fhl(HTKGX' );
define( 'NONCE_KEY',        'ZXTSERX~R/FcP`-kj]gLrPPtx>L!sviORv`0`h7?*>X4E-IhsHn8yLUK9h}h%TTd' );
define( 'AUTH_SALT',        'i1y{]o[t&n9]OHiH{H-|z/9#k.~3<Ls;nc7jo^79J[i~MQiGPg*PpjJ>f?5~|T^;' );
define( 'SECURE_AUTH_SALT', '?Q#>hz]ti!l8HV_H7{FZ o69K|cMt4|t^Arp4>u&pF@?i}Wtt7pGnSuj*>f=Q1{[' );
define( 'LOGGED_IN_SALT',   '7muI>;rc{T|ds7EAFSVp&~fkxG#ijLJT_((og4[rIDQq*5@RF{E2N)Z/IdwuQAp1' );
define( 'NONCE_SALT',       ')joNIuqj7#.T4v@AH%9~jM:Y%w&7uFu+yyRa;9&vhB2n!i-woL/_HO,(,vwDCpCE' );

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

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
define( 'DB_NAME', 'jdrodriguez' );

/** MySQL database username */
define( 'DB_USER', 'jdrodriguez' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Caloyer02020' );

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
define( 'AUTH_KEY',         'sKI>S.%.SI.M1hft@0W+-EA16TEYJ|e*<@Ji[b*w;=Ez?0z@J~@Wfm^jFtfgjn6r' );
define( 'SECURE_AUTH_KEY',  '/bP[zL=/pmM!:zaG6$sh&#>>S9wnW2tD 2V6[e/QH<qmyZ0&^tL<QSjn@!nvM[yC' );
define( 'LOGGED_IN_KEY',    'X0TB)P%uEsLmxH^2-|uQ4avY*YPUMTze#,8d^o|U_z!5)w{V~x9-:}:Jrj2Hf|}b' );
define( 'NONCE_KEY',        '<}m`)(7+F$XeH{0$Q|FB`8Vk]l&{-I)JW[.Bz#h(-*W,tjm*gekwo2lSlUN3Mf.)' );
define( 'AUTH_SALT',        'rL-qC):_(1~dUmSXrR0A.}_n`+(]h~D,R}M@?`ls0 iYHIFdrqFW)z>7%Vz]08T]' );
define( 'SECURE_AUTH_SALT', 'fE7)%l<Cu;2xz~GDP(PuOAHxzMtOxF mdQp@0%yb0PaS;:4T:8${,nV#St/N)p|(' );
define( 'LOGGED_IN_SALT',   'NrG:uWGB1t{G7->0Idi:Jzq?8*}K5e<USxx&:!#wKjRX8J{@NFNE?%qEwXlmL]CB' );
define( 'NONCE_SALT',       'd+Hkqnn+H;@x K?3TW|y.S -[LC8,P#nua}k~<%NN~hp#^z]yPXdeW3[U8d<jIP>' );

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

/** FTP*/
define('FTP_HOST', 'localhost');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'xampp');

if(is_admin()) {
	add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
	define( 'FS_CHMOD_DIR', 0751 );
}

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
define( 'DB_NAME', 'cgsdb' );

/** Database username */
define( 'DB_USER', 'govindchoudhary' );

/** Database password */
define( 'DB_PASSWORD', 'Govind8595@.#' );

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
define( 'AUTH_KEY',         ' ,^}Ik=-ps5a#=F^&>9zar^F|JTcA2F!6~eUp=kmMh:tt^{0xPPtzfO%>%)#NM,q' );
define( 'SECURE_AUTH_KEY',  'AyZw@5mH5Fq`k_*{c4A3oICV-TEJ#b6|9K3FD 8bE$o/BUpmh^|+$b4KcX,6epE&' );
define( 'LOGGED_IN_KEY',    ',Q;`@K3Qps?b@/_ls7D3VW),>*xAw+O_>4<_]y[3=V}P/1wIvC2ym;zdWA/C:EoJ' );
define( 'NONCE_KEY',        '=<!H_?.^1%Q@(2,$3)nZf]wk+FQc[CgrFT ^50>mKLW!v1^#tIx;U%2a@!x2a,.3' );
define( 'AUTH_SALT',        'pYH7Whc#Z<P:$=d8i  X:4T%4JFXpMlKBbu.g,4%z#.Uz1^,}If2 Ki,sk>ZDWid' );
define( 'SECURE_AUTH_SALT', '+{@Hk9?j~@hgaHIiA:2LSS[DGO]Adw~7Du~LRX8.EJ?Vv*IJE58za,cF8C4(#kuY' );
define( 'LOGGED_IN_SALT',   'RW/pqTN0h3gGfmSyBU!1XL,f5Vo`Py|ylGq6hibcS~~x7fo2Q4dg.osemSg;Yx>T' );
define( 'NONCE_SALT',       'Bxa32bF%pbW*(rQw?hMshK3=gP&T~wM;,(<*Yyise@[qwQWmQhaz!k4 w?&d6O)T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ft_server' );

/** MySQL database username */
define( 'DB_USER', 'tmarx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:1235' );

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
define( 'AUTH_KEY',         'd-<.{o[3@_sTf#=5/A`TPOo_S;^c+.EaKHH`$rE2Lqq%zv>B;OE,pE,7shs+AB#@' );
define( 'SECURE_AUTH_KEY',  'G)&)*jqja)F;Sz=EgLrKjOnakkl9kSQ<G=4]BTj`63WqH6Xc7$DjcI05Uo]/{!fU' );
define( 'LOGGED_IN_KEY',    '*cO]*sgoU{6:_w$+sjkxqcyt[k++|*YJqnNRgwN{C4B<HUbl~g0*u<Tw~4twyWN>' );
define( 'NONCE_KEY',        '1Z}H/^9Sn>!95*sth;&72p+Ezl 8mJGo,pl>79F?3oAk#:$Wbc/Hnb>;X%PSbAQ;' );
define( 'AUTH_SALT',        '=4A[PPC!rlb[$:2HZb9eGuweBEj_R2AuPVa(cvkJNdh)P%9O/RzM.rc nZk+}w)m' );
define( 'SECURE_AUTH_SALT', '0ZvGDi=?Tcv$*?VVF]Nf^6*_wYJ0w+A{v5DI7)wcD8cf`tLWX>[tlrY%&%BqX9U8' );
define( 'LOGGED_IN_SALT',   'Oo/]B.Xx&>^/y8N3h;yXn*t%#0VLXR:-? A],&5$IcoQpo[2Fh*s]x-.5^O7 *,W' );
define( 'NONCE_SALT',       'crEIv:BT2WSnKFSw|wtzwJC5/ESF!Q_Hd[td1OMTF|=PtGJuQ@RS[4isX}^>zDmi' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('WP_HOME', 'http://localhost:1235');
define('WP_SITEURL', 'http://localhost:1235');

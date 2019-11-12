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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'tmarx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','http://localhost:1234');
define('WP_SITEURL','http://localhost:1234');
define('RELOCATE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'En-7hA] (3?)u>]~Q71 9GLdkGIa9DW3^;)I9G;d#L,a/n[f-FG.mZznpt%V$liz' );
define( 'SECURE_AUTH_KEY',  'h8U#oO(D)4)d?4/aRJvCI&#q:3IxB:6^!<425]I]+6+)Vm#Y[Tq:;sEgwV`xcd&R' );
define( 'LOGGED_IN_KEY',    '=O(kBZI4&&)4*n6z3NsTi0wKmi@a%sSGG).y5h1>%]f}DmVsVKg]{X0 {`<H7Rm(' );
define( 'NONCE_KEY',        '07g8D,#fsi-yalK;QK7F2ODAi,o|RffeZn8=b-SSqNXyeAla8zdIL!!K9#mo|vg#' );
define( 'AUTH_SALT',        '1k430G3@zaaY_~H5y7W,|y}<rq}a1ee.CY4h|vYLV`U3vPoQA/;u7NTZ S1Mmb8N' );
define( 'SECURE_AUTH_SALT', '~A8sg|oCD`EyLhQlXw_hw@p3n`Q*B# |<XNHa7%?bVA5@X=D=gwvt7DL7dIE2km*' );
define( 'LOGGED_IN_SALT',   'Q}SW=x(b|jm&IOE^%[6-a$^dst,1hRr3OFFVBNJDZGF$+lo[1.;H.t `,ub=Kviu' );
define( 'NONCE_SALT',       '.#-in$P+1-r1f4%=RYJaW^;gFx>#q,FYQc%woBX$asA6cr}&9GhvMyhbRF_h8#<S' );

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

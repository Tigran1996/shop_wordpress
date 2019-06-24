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
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`+xZF{$++jfnH>o&Cl~jg]V OKX?QRcYRzt|y/zxbQEcx8Pys34d[P%7p.}R9g6h' );
define( 'SECURE_AUTH_KEY',  '/}-80GoSi2]<MkCNH>pxb nv^|o.3i)@9y]D1sV@p<o1)y@&6r@&1]h_v2uR,!%+' );
define( 'LOGGED_IN_KEY',    'EVih}_l&`@*_hc!3M:u C8G_pIx)fg}f~x8e&qZ0eB&hpRog;Y&T3Re?YDo~hq)9' );
define( 'NONCE_KEY',        '^:csGJF_nq=40$4G(:scyfxH|.4oO;XwmaF#f<}yIV?lU<s6~~shJ>istbV}b`mV' );
define( 'AUTH_SALT',        'Nn?@/k[o)s4cQNcoF-1r,Z<Mw1&J^J+m(4o]sWS:9~}<>9F[yK(qOk5Cp_B_x<Se' );
define( 'SECURE_AUTH_SALT', '+9c`c;>i4NILu:?M]=*D#DDW=[-$i;ekgOV|mMqE*4ZCoKR]Ru]6gm.7A2Y&Sf33' );
define( 'LOGGED_IN_SALT',   '|N@tY{[pNkI?<s)L0COa)3r~g.[#Pwn;l}`TPr45gt1J;g6p:5,k3H#d96LcYv4~' );
define( 'NONCE_SALT',       'GgwDT5>Q/$d~~{5-HlWg4 R.u9!k#577Q~P{=TH|}?82q/HzlSFzDgcd8tqV,/<u' );

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

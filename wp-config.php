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
define( 'DB_NAME', 'vdcs' );

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
define( 'AUTH_KEY',         'tO[WSW VQs}2Y-mB<xYTB+fMCg+!oDRT0,OpQ>zL//f+{*!?uy^IeWK*,rwz`r%E' );
define( 'SECURE_AUTH_KEY',  'fRff_gn;Ocxkft%viE+7HS_nH+Gxpy=(6[zJX|m1]c,qY@:,@_h(rh^7(H8]El,U' );
define( 'LOGGED_IN_KEY',    '^ZH`lP{ow8j7Uu&}+7Yg&AjgYLd-2YFzu2Uu:C{R#@11S[^RoAfk:37qGKXlpT*(' );
define( 'NONCE_KEY',        'vL/&T[G|r1,U09-wkjP#wQH:xsEuV;A:C r<7)]F m$[,-wiR8N`]{C,lrg.U3S|' );
define( 'AUTH_SALT',        'x7e16)ElTw?CpZtP4qiW3+L0_(.uYc{R+CN*B]k0_Zr>3,ic6FUtzzOB6Q=2U4(R' );
define( 'SECURE_AUTH_SALT', '}c%+1V: vTIG G0x2^V/o3 D&u.UYL?s*>fY;-~!QS7y[w9N^g^s5X68ohsl<KL|' );
define( 'LOGGED_IN_SALT',   'srZm7$LuUbllsDxazf&wD_>L]>g dD>uX0J9+96&>uoc_asqgHz?/n&B,_iyRyAz' );
define( 'NONCE_SALT',       'kwF;+^+F[4*=]Q8PBVv9*J;LWI%.$4NFtV(C!&=qLHwme%$8}z)jk%P-j?TCUv:!' );

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

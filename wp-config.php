<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u364876456_Yv8ZW' );

/** Database username */
define( 'DB_USER', 'u364876456_g3BXd' );

/** Database password */
define( 'DB_PASSWORD', 'HXcGdQuLNg' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'N|B9kEkk@e/s2 DvmB8~P_)[1s2<.s+qKnfd-rdZl_9Uk5@=SG]KE_`<emWFrg6{' );
define( 'SECURE_AUTH_KEY',   'd6U6.T,k52Dv{]3-JN},&NpQ?2rzB!tS9M&>VR9VkO!_SS2U7&lUj$[k*AgMN,//' );
define( 'LOGGED_IN_KEY',     'M)9:|dY}p&p^RJ8~ pVCC$HTJ,]QYuu,/w2PPUv6>xk^IJpR[vYX!C8zkv_0y-gF' );
define( 'NONCE_KEY',         'ABj1v!@Dg?3dk%+ r6P.N;pnJXA7o@c4-`x_D=>C:#Vz4WHeQQMI7Oi5^(opawXe' );
define( 'AUTH_SALT',         'm<rGQ0yd$]^aS.-F5w|ns<&Qac^Q8?XeW.y(=:fEUHR0>7&%q;/v^yhUT`;(em u' );
define( 'SECURE_AUTH_SALT',  'z^dj1(#xJNsJze3 De|R/^rzTESLP6CrFu`Na%Kr 180Nx4(%u=?hHD:IfwMLfd,' );
define( 'LOGGED_IN_SALT',    '=`mWy;9qJO@#_XPG/(&>P*txzd2#&L<nJO#7N&)V+x&~u!;$Z4oDlg1lX+%OrO+O' );
define( 'NONCE_SALT',        '4$PO;MyFFAdNr%z[8rC}:aLM=wqoRC3<JI<Q7|-v^m6vHH%}3tRMcpYu.R 8N<:}' );
define( 'WP_CACHE_KEY_SALT', 'M<^{,Q9zxxoBw_RJ`=)[enA}[LqNnKsnAy6<<et8+cmm-/&l#p^q2dqBdIhV_7B ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd3182a5a28414c7440a2dee9fe5dda38' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

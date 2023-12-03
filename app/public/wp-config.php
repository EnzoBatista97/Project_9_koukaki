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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '(,0Hr{JQV3,#TlVYEwd<FWK=mA4%!_;HiNBb@Q745IPJ9 W:fWn]}KDF5M3f(6UD' );
define( 'SECURE_AUTH_KEY',   'M#Q]{3*4>|2X?3WGUe0,WSGakYV(nr~T0ss-bc@fM10h5yft3pvvN Tr5{#a@.0r' );
define( 'LOGGED_IN_KEY',     'E?:I1Vgm>fXL-!+^Ds9/4eRB|IacD#Z^pE2pp9~/#VLYs?ZTl(ursi_t8.2](qUV' );
define( 'NONCE_KEY',         '/G+3k/1BZ{i28IAWctHn:Q)nC( QE#~d(|Wu>]cVk:*gZOn6Nh~HQ:WPOGs@S|#D' );
define( 'AUTH_SALT',         'whU:m}F}znR`_uWEhB4>Onun$:hjAaO]@E?O5@kL]*{q(#FDd,BiYqc<LD#7JUf}' );
define( 'SECURE_AUTH_SALT',  'ED|>PMw|>h2zo0nB5]UZa^X4bfci|<8b/9*i3FwfEC+$aD;dY!d|`cnt)R}bO}sy' );
define( 'LOGGED_IN_SALT',    'T @SL#$9yDc=#h#Ia^/CC9~F39kX_L3VX8%ieIY:oEgRW~/Vw^jvgy;7hNR%z+rU' );
define( 'NONCE_SALT',        'D4yxpiL2T <z4r qu3s11 mYh&QTyyke!F!(`GPg6oT(R+ knBKnPI.AfLOt|YLY' );
define( 'WP_CACHE_KEY_SALT', 'V{y6P*S_Xc1/a}x@lj>X>!r!>%iQ)(F,vt/5)l?,I2:ro)M@?t$?uO<Doc)#Mx6_' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         'V/G].~eM|yfQa*yY$zuz!vS~0G8bY9D/ZF0f0-|vG-kNjZrL)uB)N5)TMs*?o%Q%' );
define( 'SECURE_AUTH_KEY',  '>WNYe!oT)hTSD5_vT_>`xd$R_0;yKNhB~Ir5-MNMuMzZf),Fh[-hT-M_ANrzErKq' );
define( 'LOGGED_IN_KEY',    'w1xw-;@WadX[M[q.`],KT/z<n;0&C.rS9 ;]/ OxF%%{lbBTX=*rK5>,x?rh>/**' );
define( 'NONCE_KEY',        'u+q9/E^H:-]FCT}rNR*(s N4+QTft&azOAUF{/+S@#&,85^)M1$AP2tH8-xsFWLz' );
define( 'AUTH_SALT',        'I28%4m|p;xYBuc-~0@>eyaq-TI]F{+G_bwFgmGC.<fk-$[O(uLKG|POF{zO3(RKs' );
define( 'SECURE_AUTH_SALT', '(Nt:3$aZOq]a!OMvLDg*V40Q~Zd_DLt*5@ sCZGE(fU6$~nkZXJ8UQLg!6UB13 6' );
define( 'LOGGED_IN_SALT',   'mwvHd}UN_}57_pZmPW05J)eKAQv9q]j>[4+U/Kdk!Ae;W.rFD%1jmp*T0`RC[?8)' );
define( 'NONCE_SALT',       '0yT*ZW_k#~@AHkvP92,$-)){D7Ua.B:^l0C2pbCVse!iJxWH|,*wzP]E4[cF/qEa' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

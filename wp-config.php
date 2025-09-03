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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rT*Y<iI@tX]:}WKE]Hzsq*G8`71B.Khi0O}YW]Z(Z^BN.h]y^n(fj+k{_4WErw]a' );
define( 'SECURE_AUTH_KEY',  'G>`FcIcTCv}P@X+C:Q!m,>!Omkta%N!PLY9d?wFp#E^rA,f(?AZdu`m%k<D*Zv#M' );
define( 'LOGGED_IN_KEY',    '%<f]c$-M9&ADs41PN%:qtQZ#z-5&WzvL}VBzW`A{RP0D0bf@sO^|Y`jpVt|hk|9H' );
define( 'NONCE_KEY',        '~n`(;bd$q5h*C(rm.C!?d8o>8B1}*x`.|y# Wh;Ax3-}>rrgx*U?MN.B40I[e `t' );
define( 'AUTH_SALT',        'kTF.2bJ2xek{h0~zy$)-MS)yb|YT_bx~hM{.^T.hWkif!j?Dt WU$m!0%MBb]~xd' );
define( 'SECURE_AUTH_SALT', '%-qc/VDA(U;b;[K1]CHG,KFe%w%j)P^7=7@@5dE=D3^cQgVBy,M_%pQ>bFB2omqL' );
define( 'LOGGED_IN_SALT',   'WO/C-sKZ#)r+ouPoPC^>,$+,1YfGyqk!5fU/OA93jb9YxBzj;v0o{&M!JPdt5iCO' );
define( 'NONCE_SALT',       '9_As.7?E^btvxL_yWZ`R9/5#T2^w?.wqB2v%@S?^e-pDe_Aj$2p[:]kdPXN]BpUD' );

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

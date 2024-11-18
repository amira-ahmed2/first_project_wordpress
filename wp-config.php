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
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'G>l`[lGu:96)4A*4TP[l&Di9q/$l(4s0p~d5m?*Ql>kDkRi_~zQQpn%vavQ@rNh2' );
define( 'SECURE_AUTH_KEY',  'TdJ^Ni%*Qg>e$34T`zSZ3gN}2,x_PYU I#D@t<r7{)(aDwZIb)88eTxOfr^GyBd1' );
define( 'LOGGED_IN_KEY',    '_Nq1^!KL?rgR;(TFhhEeU3N(DdSH=gU;TM[guDO_I3t4 W_|}:F[n[AnwWk|si~&' );
define( 'NONCE_KEY',        'K6(NPPY%WKg.GaXGT!)mk`[XV;c2g#M3sC=}}KkTbkUE?T0Q04J/0#=OWx#J@^HL' );
define( 'AUTH_SALT',        '%|xFy*) ~QlF10 1i;vmqYE~bV2-B:WjY]a!y#U/cy>JMX<??AjJ%3`yW9ap:-E4' );
define( 'SECURE_AUTH_SALT', '1I3zR&`u[gil}L_EFH527 3MHU(~i*;i@|^5C!BZ{enFe5MK/W^jyPm_!tPDFi4g' );
define( 'LOGGED_IN_SALT',   'qF0$8^WyGo3;> OHEtBeNK9[#u *TRq+R:E=f;zs`gTRcF!&TS}2]Q:S^-;*_OX<' );
define( 'NONCE_SALT',       'L_8_(WPaR[eXZ9:]kVbmzO[cfm;W;ZsB<~af#lAojC< uOjw..JwTnD,j}p4ayIW' );
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

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
define( 'AUTH_KEY',          's3)_6Sf|,8d>R!$aU2>ptw@s5xgq;A~RVxdMI]c-;H`@vQ}(a+Y&.j=VcUZd~KrV' );
define( 'SECURE_AUTH_KEY',   'Wsg%u1p,p$&+P.z7>y|D4k%jJ/TM(?E5w4?g_%*s X/N;$)su7{9Y=a <`$bjJ#@' );
define( 'LOGGED_IN_KEY',     'BS0[%fQ/m25UdJk}I8mwJoS;skM)97S+5a=qTXsIk_D~YXcJ5ja{3W.B;22xiI3w' );
define( 'NONCE_KEY',         'puxpSXkfR$;Xh!RveqmL90{9!}qDz|D7|{^m%fk^rK{c12.c$qEEmd  h{%Yw15H' );
define( 'AUTH_SALT',         'Cv`VhjbChSYevRK2`wh$P<I$lQjPV2vMUTEY`NXKUK07^LwoY1}Ezaz9t<k^8L!?' );
define( 'SECURE_AUTH_SALT',  ';S=9<&yZ<T{j}q`b:lv3mV>umKihz*gG}bj^%t{]7s~?u^h=Q1MiL8|;wgmg$L5l' );
define( 'LOGGED_IN_SALT',    '1&SMYr5+bch8|Au51*WM0>$9hEnZnPnjlln$>&e_Hojdv*-ZR`}hk/uwrX7rR>)~' );
define( 'NONCE_SALT',        '%_X:a!k0>lQr}M0[Vxbv2y|}dR?ZBouBgDOUi32jwY9huw91cyCy5V^<l+.1*L;~' );
define( 'WP_CACHE_KEY_SALT', '9o5=6v_qke9a %R.!.Hmy!+/??,f}Ob Njy*%J@e$Z`_pJB>&ja7l0!gE$z.IQb8' );


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

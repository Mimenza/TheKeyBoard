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
define( 'DB_NAME', 'bbddwpress' );

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
define( 'AUTH_KEY',         ':%=3oAQ~X^(eVl!#f&|]e2!j0:ibij,9Tm0|vB>)eC-CHpUL_mW6#-:m/kLh&W?X' );
define( 'SECURE_AUTH_KEY',  'H05bX5FM4B*w.aj20j(J2d;=@L+D4~ie[Uw^R6!Z<?-sUdG4biuCx4r7w15u^v})' );
define( 'LOGGED_IN_KEY',    'zAi)vUXuo)&Maw3o#%x;qkJ>%e6 Q@oS}[&/!iLMvn/U`NFac_GNP=P`*$%b(AOi' );
define( 'NONCE_KEY',        'xAq5zr%OJ{zsNKI_!87GhPn`jJtpTcm=r(?VewDzG0(QaNLlOET%rRH:IQPmv;vL' );
define( 'AUTH_SALT',        ';aFm$6&v+8wL]~L@~i-i:JKB#yb-~rV_>n|H+n(KqZ,1]Ic$&ykDm]=/=Rj<jnKg' );
define( 'SECURE_AUTH_SALT', 'lF@EYTyfun!gMrTc29x80PF,+y7pQJeKf17r!d~V;n(u0&6j>?Q1Uqj.,>F;?:b4' );
define( 'LOGGED_IN_SALT',   'yQ{fe{_C6QF6Nno<7k0:B8:eUHYJ[SoP[*~U1F-,7EY1~:Qgw>nSc=%hFQ(_mUcW' );
define( 'NONCE_SALT',       'gywhWK[:/`^ 9KZjb8YY=1odwB3iX7@^!6f3O%bDS^){894|29x,a#m2~x%pBDY1' );

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

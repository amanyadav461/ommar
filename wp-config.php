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
define( 'DB_NAME', 'om-mar' );

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
define( 'AUTH_KEY',         'u%EC&<P]}7Ot@ifH!l[<=2XTB)Y+:c(wS)!^kZdxzC,d<Q$3O]},+.r$y!;(sVRd' );
define( 'SECURE_AUTH_KEY',  'Y%uC=ck`B&LS>)eMCDg^qjbEG[Td 3apMz }l$A|<MclA YY;oHa{JdXwt`11<at' );
define( 'LOGGED_IN_KEY',    'SY;(n~vB,j=u@D(S-HdjXcF#=#-VR>sa}w5$PAyQuj0+ve-8E-H|wg4ph360-sy^' );
define( 'NONCE_KEY',        'PjK%R}dLt=gBuSsX0%ZndH8*r`tx2K;?WFpz;,qG<PW.z 0%cU$M6cgXpim^z]H4' );
define( 'AUTH_SALT',        'rT3#Ae>d7u.wbw> c%]Fk$lfalf#N&VUu>|$7NzadO)}Q*W!dig^eR^Vm3a]]-Q9' );
define( 'SECURE_AUTH_SALT', 'Q5/&+1KwsubJ_+*MJlwv/PiZcK6+%7J*zKfF~~;2_}{k{*}ty7&<5(2#c5@:R.Yw' );
define( 'LOGGED_IN_SALT',   'd/jYTRexpfgYuKa)&urArd>tD<TPW<*i5TgC/c)(}9J%`q@_@nT_eXc/X{a4LE7=' );
define( 'NONCE_SALT',       '$4{)/{[xmJ:,4v,|kE:.V$&*0NC4#T_F~8h$)l9/3.iKx7yy%M*@{+:d9p%hd75$' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'civicrm' );

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
define( 'AUTH_KEY',         'rP`SZ79u_m j[U!:(Tw2vE5<Eo lCf{&v,K!Xn!imv&/wi#3,.Ade[M21x% Cqj8' );
define( 'SECURE_AUTH_KEY',  'OF16RC0}+HI(Bv@/ysDZ}A=^QwR!2+`Yob/[[s9kS=*V/ly}!#V pS~]JXir!z%e' );
define( 'LOGGED_IN_KEY',    ',|=k5uGC(!-y+;57.[Og62SkBN>-UBf^0?MoS1zY>DU$1:Dcg/ SA6xb6US7Gc1o' );
define( 'NONCE_KEY',        'CtH+3(h_lJU~|G4<9R@2ljeyWq+66sp!xS>>KeUI~q?SQ5WO-QWr:8,F(BL!.k8!' );
define( 'AUTH_SALT',        'C!Nf/sqKA@Q9|OanWlsExi?J]Y%l+@0;rs0R)mcZY9(Qm51)fX[>ue&myCy]r~Y%' );
define( 'SECURE_AUTH_SALT', 'hk|x`O12^_$>X!FzSb>$:7ry6b3dKo%TIU5?u&$zxbzRR7[_`.@|%fFDp5{LfiUF' );
define( 'LOGGED_IN_SALT',   'Ee#.I?& jXKJvpfLx2YOAjf?^*M0bjXp,&zF]JR8pdO^pm-qYRp`B&mh&l)P)6=f' );
define( 'NONCE_SALT',       'eR!n7AZi-WbT](%#/>kjaWRWC}O2TM<vMcA=j5p$s<U}fad3rrVuph<I,ZiKWZ}*' );

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

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
define( 'DB_NAME', 'project_civicrm' );

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
define( 'AUTH_KEY',         'ogK`7ZjGNLz;IoM%0`f5h]w_]g.cAG? F.(e^k==mV+`^6b=vru%U}jgD(:~4@+R' );
define( 'SECURE_AUTH_KEY',  'Y~0NizoFv}f2mz;j^o;<<n;L1|`KlFkTdW[44S-Zg_[!!.~v4? hNo@2[b(%g:YV' );
define( 'LOGGED_IN_KEY',    'yd>:{RY $_ d%bl1[3ECRSLHHTGj]cW=ArNU9oOPJ}Rh;#Rl!.k0o2!hGF|T&Kh@' );
define( 'NONCE_KEY',        'b=)TsiNggQ}S`jM Kq1)t`bv!<%Tz(-J-6kw/O7SeOe!*mJKi]Nr>#Q+:A1p^Gkw' );
define( 'AUTH_SALT',        'Ck5o+i:;K}S?(ZXBZ~H<np$+2.=q=3yh#I=R}=r^I`J(V!CK~z#-r!= 2[71&kTm' );
define( 'SECURE_AUTH_SALT', 'xs[x~Eau@+,k!TmTiKTC$R<:/jOQ;8.bSeq`K`9%|>h4pXuE}[E~!r<H:~q8KABP' );
define( 'LOGGED_IN_SALT',   '4Qbi[=1iVY$ivy<8}rrOTZLq6WyKYK(N(`ZRkZv{tE(DI^xOiw.u9@awRjx#R.B{' );
define( 'NONCE_SALT',       'b~haN;PE.E6Q]QBlnEkiinZ#)D%AsEgvH# oHl5=}=F:*fPOGZ!Cg&:<a$lLEMYP' );

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

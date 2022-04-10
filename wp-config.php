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
define( 'DB_NAME', 'education_db' );

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
define( 'AUTH_KEY',         'Rb8||]%k2tLF_7_}7D?V2ZJ!g/L|gu0(5mR#{jwqH9>DJx*)4wjyB0`/&}8)gZb1' );
define( 'SECURE_AUTH_KEY',  '^P[Ogq+28>26:u>=WfHC{-/[3^ mz_>Cz1mTz-dYkQqY6>1~Yf(gROP?[uZ4CIY7' );
define( 'LOGGED_IN_KEY',    'Zy7~/540D)&gq8!|U#>{1Y5i}K2XUw:U;6K#q^wP{./MovOF^]E_vVzx.*j8.yIP' );
define( 'NONCE_KEY',        'DZ}8D>x8CtJ6-=NX/2NXBS#c{F0?013((.}QGbF4%-@3=?=UCG&#|wtBnsV)QjW6' );
define( 'AUTH_SALT',        'W|q-IQ^}QBdh023t%qs@W412~HC`cT#{4uofIJpw.l:tDb-1=/sB11-3{ww]4n[b' );
define( 'SECURE_AUTH_SALT', 'X$X.!dx*Gn,Z%~:hz_B@ _hA|`/Ti*)?P&~L(dAaiYi4L<Ji{j&JbRfQ<,6CG];f' );
define( 'LOGGED_IN_SALT',   ',|]D.~{_YzuY<Ap{:@=gG([~F!5}y/4ZwXn@!Dn<HUAynN}lqM$T~5ZPTG|@o<B|' );
define( 'NONCE_SALT',       'm/oe[g!Mh!Kf+X<7 v]00h*NrA$eU]/:T>Ya*6mqot&dvQzH7MW;@+,%;3uQN+=[' );

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

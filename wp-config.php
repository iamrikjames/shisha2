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
define( 'DB_NAME', 'shisha2_db' );

/** MySQL database username */
define( 'DB_USER', 'shisha2db_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jvy2f8$2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'R/Vt/fY{Y)?}:|uy;1%*%tD#4x(Fj@s7.a|$-E-EAZ!6?Ny6Y?C4!&TJ_xrd*dc*');
define('SECURE_AUTH_KEY',  'J%gh?3#Q()m$8kRQg=ytKvouBMj-wK8J=7P1KwaR2^TZIJ/miRS@z_$GBU$T~:(R');
define('LOGGED_IN_KEY',    '1_PH4Cv.gh@#<6rE[H9N9=&!x/iWP|9pT!%X!~*FL7p6ur5>aPKuti|A)c!#/2uj');
define('NONCE_KEY',        'nk~%uXoc.25w-3!j05B/}:A$PE{X~x;q1Ko$Zs|{NSJ9$=xGQ6[n0`.;}a soD~r');
define('AUTH_SALT',        '@Vi+J|d!H]W#(7/k$|Ab@t4*QOfCX`<kq2Uri+!X|%{J:T +ZdnmVL?+oWP5R{^x');
define('SECURE_AUTH_SALT', 'SZUVt1YJD;fUCeHW>P/8w.Rpjy1<P(9^!ywJNK!K5PQmCE?|?K>tTHe*h@FhMyc ');
define('LOGGED_IN_SALT',   '54r:y2%tly*>[[?chuh2TsK8-?1Vw]TAg_5+05F{(FvhqGL)%mG.}Z,?X$ oKx(7');
define('NONCE_SALT',       'Ef2=uAuz~,y@F1;WD.^5+df7xudkrTr+r|GCA0W@W&E|4*ypKC<0 3Ca[=UrxqSJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wps2_';

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

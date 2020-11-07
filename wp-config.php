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
define( 'DB_NAME', 'cpu_dr_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/VDyOa2*JiDV5&^kYL2@lSzWE0/Ua7$/0`mP-eFR#.U_FH)0H 7bf26CpQ(m]Xg}' );
define( 'SECURE_AUTH_KEY',  'Ux^M3B$wjA=uO~^q7V4o/#AjvA9%e[Go/2jQM%%mqO9eK2!xv-qlz*fW^mv,5J%L' );
define( 'LOGGED_IN_KEY',    'zK3N{7$pu>$vt)%XvlIf+M[,%2g[qs4}hZP#9[y$]Oi_W>~V`|^Zd=n<;5^.Qp*3' );
define( 'NONCE_KEY',        '%i}1BYk6N0*p&AP9$FEPA6AQ1%1a~;ZWPner/|@y?xGe*K)|WNqO<]CZ7F8NOrez' );
define( 'AUTH_SALT',        'xfFIZ9e*<t7a3:^AvU]zv!] `DfLJ{l0%k+s-twGM> >|!$%W/]=y`9>Dy@6sa4z' );
define( 'SECURE_AUTH_SALT', 'F-a$?pW-xSu1,?p,T|q>Pvqjl<*.h<@[40ZgP!g0HAUF&PzE9C@Si%V30Qypy6+s' );
define( 'LOGGED_IN_SALT',   '0aaBsVYMEm}-4:!5k1%[K ??+X/$SE6ovTkLSH]|2<3Qx5rXc2 vW1SKI3nM:Q3<' );
define( 'NONCE_SALT',       'vt+}Z}M *gLgYmr*r+5u(s!Y@+UEvs|-nrp$3z|J~L!T^x6]mr& B$D0_if70:Ui' );

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

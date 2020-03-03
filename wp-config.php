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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projektas-wp' );

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
define( 'AUTH_KEY',         'Nb ;fE^rE!?M|kNdM5D<`3/+(JlII$z-_finfjp%_Gy4!62j)qj)l$G*,w_I^TG~' );
define( 'SECURE_AUTH_KEY',  '!OjPH!AsY9FC!<F&I/(~mf7xlotCkq+M(=r7HG@(4hJFF9IXHI4:k5U9YZv-yB(X' );
define( 'LOGGED_IN_KEY',    'A1iN(!}r3~Ouo)GiJoPU3v73<p#={zq`^HfH?9_>?Sfmuw$H}Yt|{%z(;$xb{wD4' );
define( 'NONCE_KEY',        '4z[;3x31=k[/);L~D&~biZp @l>;iJ.TCtelXL?(YY+dZPS8Q<[4>W>(9ZW.K0$4' );
define( 'AUTH_SALT',        'FJQEi!-Q]N&:os0hB9k=*[GEz8__a#XoK(N[{t=c[ML-+[IB><.#cb,){c{a><)l' );
define( 'SECURE_AUTH_SALT', 'HV$j8=%<i=16n~<E<qPJv86rz}}g/opctKj^Jb:eLOIjy^,@,X5uA<g#OA)L@>AC' );
define( 'LOGGED_IN_SALT',   ']B;T{0Kn5H5vXqGY*IWgG3@Lafq;T#[OM}xiJ{c2pU3dCNZ;Az9y)yQ2W*C59>a<' );
define( 'NONCE_SALT',       '`SG`(ESrwYk:2b6kmUhz<cAAbg,#t5e* >iw&nJ|oTSt5.9B~R-R )z~moWZ3CS[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

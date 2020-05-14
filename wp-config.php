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
define( 'DB_NAME', 'bootcamp0203wp' );

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
define( 'AUTH_KEY',         '`YJIBr`97IC3Sq|Geami*^FXNfH_vF5fNtls9q?i;D}w0oO,ed|%fK<OBe,T_3>Z' );
define( 'SECURE_AUTH_KEY',  '2Zg5c.1U}8} k^GMdoaCqD ~Gh<]%3tPebQNJ_u$THoJn?[z #dRof&g,2&:`]Z=' );
define( 'LOGGED_IN_KEY',    'JUjR]*2am!iMZ.?! 5o-xK~B Wj{QRd*I#j ]=:E>?_=QZ.*s# a2vrLMvSdfUSL' );
define( 'NONCE_KEY',        '.&{tX(1>Z/9Hkcb#}F@DHsHQ.4[-lN+Vm|TFhnQ_V=ZSX{~N^9NlN0L};k^7531O' );
define( 'AUTH_SALT',        ';.uFYw6[qH-Ui_utl]e{(=1lf5uy8#d.L%C;pDT&XsoV!9%iaxCCa+l^*Jtx7:[G' );
define( 'SECURE_AUTH_SALT', 'hP1l)#/H=[OetSfd!HoGM#9/D5xW^ON,mH1~Lfy>I8{q7_)LR4:@L^>OA4:ed %O' );
define( 'LOGGED_IN_SALT',   'm~n?y#FlBSi6W{4BL,?EdwEXn>*A$fcdV4#%^W./J)zKjYi&k*v(AYVg[xV;&b6r' );
define( 'NONCE_SALT',       '%kGvPp#NBX]5;gw{LnA;>.*sl)297ScHZ.hr8%T4fQCInqI+@FWBDt}/!s`~^#w?' );

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

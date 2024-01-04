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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ndjouopme_tchoumba_dtb' );

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
define( 'AUTH_KEY',         'cW~B N[&=4X}Thx,oq0BeB (OE:? :C$FVVH<z95-w|zLGc$>IJrf8]Wy8wZ~hQP' );
define( 'SECURE_AUTH_KEY',  '.4+hI%]{r-9pC+<S^mAwi%@|G#X[}~d#*fVx2*pKq(L!jfwP#@*:F/}8kz8+okJd' );
define( 'LOGGED_IN_KEY',    '],lc}thvN!:C@!8;c,eVkjs`7`+7ZRr+qJ)hKDLqdW1R9&E8M][;57Wv[=A`ByZ/' );
define( 'NONCE_KEY',        ']7f3S9)8:Qv*<VN}x1b/hp.r^*`ziE#X21TIuHaiz?zUzeUud38^1/xv9;c?vWwo' );
define( 'AUTH_SALT',        ')*y68LupdkYKZP<*MuuiOa=~hCbPa?z?Q.WX6R :e86fl4Ny{2^^C}~66iH(#]% ' );
define( 'SECURE_AUTH_SALT', ':cue!0(v[@-!lu^12 lSG&T!:zC-45<Bv^ORJ) DV;1vyEZwQNv9po~-n!;;//`u' );
define( 'LOGGED_IN_SALT',   'YrrRKM7J0h8B)4k)Ny`{:U4+EU]7xHdvoz(jc{0@-8 _@&83:WKA9)nI,mm7f~YV' );
define( 'NONCE_SALT',       ')^IoT?p}!NyRCkc^lE[)|Gs|nfa!f3Rzl!`2;FA-Ijfh3$R^&V) J9@3uP;w{$Q2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

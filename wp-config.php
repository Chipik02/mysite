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
define( 'DB_NAME', 'mysite2' );

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
define( 'AUTH_KEY',         'i*?;(A $_=Eh#,1x&|HLVvbP~-zMI}hSYOV<Pm! XNX(nu200R:t1 +CHvUipl4@' );
define( 'SECURE_AUTH_KEY',  '2dkY(rPb{&:[YGQo_HsD*Z$Ne5e|wxA<ML`kks#B9gcsfVx.mL^/nX9d48 X`l_t' );
define( 'LOGGED_IN_KEY',    'sl.v?Lv!-+X;J47fL^37>&x:&*rJNe NH)eWdy}Oc=F8jb-FMDrIffmX.HFE|C+~' );
define( 'NONCE_KEY',        ' ujq] unc_0?aP>5XEvEKz7lDNp<Y[}NDLHm[E?~[u+HkYPq9_aYdK:KXOwFHUP)' );
define( 'AUTH_SALT',        'U#J#tI:&mPMIC=:;S1E9zMix(DTZ)-,/hu+%l*lS^7I{k+ZVs4b*gP8*#g[k< T5' );
define( 'SECURE_AUTH_SALT', ',x; ,;@qX_$Z-pC?c75`52*~<sp:?m6E/&|O)nN(MRxQDp~%e{qAt8_p![+XHQvB' );
define( 'LOGGED_IN_SALT',   '*6y,40/`i-X8I=+r)95{>/T@|b_?6,N6X]wwB[WPU;9 =f-HPraH=)mX!%_wzL,5' );
define( 'NONCE_SALT',       'f+<QTc!;aYI9)+?%ZF?S~6$i<.]/KB1(jd`)awn0@DZc!we:o_Z(Ak!Lh}mnoem5' );

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

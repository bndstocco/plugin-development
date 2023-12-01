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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\bnd\Local Sites\plugin-create\app\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_+t7Ig?7R{<R<UZ/-y0)R`q4M/wYabBvG4.HO<LmIg)OQca:[UWLSBfN0%;~]62D' );
define( 'SECURE_AUTH_KEY',   '?}aU|b0*-xQ9^X9*WA$J|]{5SwY1GThx6~oKvCwbaFufSoVOu:3TpL<}b#~p i_I' );
define( 'LOGGED_IN_KEY',     'W!MVr%F*uzur)-/zMbHYqF}KZP$?+G-7u$9<v[AQ+bZq3{217{7zAx5H^q13Ekj<' );
define( 'NONCE_KEY',         '@o(2lem<PXIPbs2e;#:)]CJxox4`m^H;_jes^hL0h5(Wp^?q(t)-4|(GXn5[6iy*' );
define( 'AUTH_SALT',         '*IhF8,,a&^SJ;nQ5RF |A{,%1b3tlPsfvn15ZnA+::)X(Zup6~k0=/{k{OlK-R!}' );
define( 'SECURE_AUTH_SALT',  'LG}N,{{A}7Q2(DEjspKr=O4{/Jm8bxzx2}%.&6X-9,S@,SZn9K^&G%ti1/pV=RAG' );
define( 'LOGGED_IN_SALT',    '$WHsrz0m-8h7eH*%M;!U%AGe|#.}GLHk%Opf`c2^ok >gY]Qv4daHo[]bZj_q+o>' );
define( 'NONCE_SALT',        '+Qo6^j,4)&k?!/AF2/]Jjc`d7L6XDF=ucZ?q-[BU=L-r|eE4]H:fstw6I@Uz Ku7' );
define( 'WP_CACHE_KEY_SALT', 'em{C37%tY2Ar!2n,`@4xgEtKd16Sj;{U.ssMH@ejAQ;W%NrLI:VWSU>6Alr%);D7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

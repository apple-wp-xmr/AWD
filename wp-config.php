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
define( 'DB_NAME', 'awd' );

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
define( 'AUTH_KEY',         'nZGpB]x#1+St]Rvacv?u$ _;Jk0lExAeEokQvvyLy]lv7rMNYC.0 y~bp.-zt9sB' );
define( 'SECURE_AUTH_KEY',  'K_y4nB+Zb|p{/,|lmOrUUT)GeD}W3OFc2Bz@QoO~q[H,/b;{r,&upM5_T :dpYgw' );
define( 'LOGGED_IN_KEY',    'e ;- 1|6wfg6vi^.`cl7NH6#.>E+Bfnkd7x7{]v)e2|kUjQ;WO#f!O)s%K17JC6A' );
define( 'NONCE_KEY',        'N9gPR81a+wh#VLY3*,X[Ljt,e8HZ|l?p8MEr&Q]yU*S,Q!|e>}?pye+J6}|0?^De' );
define( 'AUTH_SALT',        '<RuFw*mvL>{Nh1X :m=ViU&JcFj7eRhQr3:5V0Mk|Yw`QdOB[sR*MB5zLYbZSY:m' );
define( 'SECURE_AUTH_SALT', 'VxD?|h=iP4LCQI-?;r?V@1Xr32~wESo]^PEp,Fnh8e7v:IN3R).^Xe&eEm!eUo`,' );
define( 'LOGGED_IN_SALT',   '`~+klcD1|Dal]~X_C-O{3#>Bx[3%F@,T`|K^A?pK-*F3{aUSdkHJNyGXXJ!_>zm:' );
define( 'NONCE_SALT',       'kC}Gd/|$E!3(&1sGE9/&brt;VjIB^,6Ru[eJfUl36y)5< T%*7dAHKQ$G_Mj./%h' );

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

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
define('DB_NAME', 'sovereign-agricultural');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SzKW U}FzFRlM>P8.qV4}4MHuQK )2H0p,Ke&Sd@S17Xt5W5B@_p&upMyYMHU2:}');
define('SECURE_AUTH_KEY',  'hbC`^jy*`TVjdFu?|Y]6!t^~{HH_#Vy_d,GMxGFp _ugvMHuvi/! j:=C*22oRb}');
define('LOGGED_IN_KEY',    'n]H5*Q/i!17iDg.z4>#gpffs&vf5vJRCQe|-0Rbtd5Wv<1<uGD339tBFk-W.@ISv');
define('NONCE_KEY',        'z}!A>Ek`:2 xsqIY `4cO~Gg&5^-#Gop;f6@*CW_#-TvtNp;7q4,USINgl0P6fbm');
define('AUTH_SALT',        'yrRPHn0tU=s33_$<u1%fvK}dGTG?!SGP%E<5^))Jxu{~lK{)<C{ FqqqK~opK{?S');
define('SECURE_AUTH_SALT', 'aAE)HkV}&b`r>a6AszUP#[pP~&WPpZk*kS][FvHEtl#cOAjyWpq`20F&O r}nO]X');
define('LOGGED_IN_SALT',   'k1K:|eEgKj] S:r;4!Z1|1V0!$/+[p-}%*:.9]m&PA>yZ~}P{&F]B6DP{oWv#l!#');
define('NONCE_SALT',       'Nb*H%3p)4#]O{fo#<DO8m]~l3.(i3qQ{PkduAdV`N)$FeT&AF`r.=9t7J%1_*VP^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

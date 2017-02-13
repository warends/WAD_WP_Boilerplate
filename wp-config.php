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
define('DB_NAME', 'will_arends_dev');

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
define('AUTH_KEY',         'Jn(}b(]7xYQ#(OjQx6flX??7uo$,HT5.sf1n2v]{k&}Yff0F+`N*$5,@AJN5R=#T');
define('SECURE_AUTH_KEY',  '8,Fj0Vwr<QV%^bUXIQBl+qkM^>Pn;V_T8IIO~/7N#`@+*)5q`CAB=UD (X]`rZ~4');
define('LOGGED_IN_KEY',    'Z:2B(ju@{<1c?uI%>sE:]<a{NS;c<H(1>Zabw)75B,BP*k%Gf$|yb#.2{;+C~Gva');
define('NONCE_KEY',        'p]{M{g/Zoy2:mka5K;PH~+0~:]MHFE_sDY#v{#%N<[nP3bB^U-LS}+HR`DWVO,kh');
define('AUTH_SALT',        '?QiSkvP|1h X4MUBTYBcXkmGN1KwQCX,&sg/Ab%p40h/vf~ JOb!VlT7*4;3jyE^');
define('SECURE_AUTH_SALT', '=`=3eO9&c;wV-KQJHKVmP-Z5?_x.2E1l%]f{L;((L0jxLIL%j;P#K!M74a[,fCYN');
define('LOGGED_IN_SALT',   'zxvhjv&jNtM4|LRl)Y{# 7>etb IIt=^xm{DyJ{g+&4YMbyLm|sWV?1@V.bKXvf6');
define('NONCE_SALT',       '!&BjP?41Nb$c{jcRq.><l)yzdgj~?aOXep=LSB*!lk#wRD>=:5)acWV sph;yPC.');

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

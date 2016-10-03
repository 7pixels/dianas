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
define('DB_NAME', 'dev_site_dianas_local_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'x-[?ddy-)+bCo .>~T9Q:Yu[xqfgR&%JZ-E< %3e_8$|eoOSyp!Z_Lx4J}B((SLv');
define('SECURE_AUTH_KEY',  '8Mv~d(pn%S[=w/*Y`+%v uD3cx>}lQ>_JX`WAEd{TScx^4ChMxO&mxO*pma~4Lgp');
define('LOGGED_IN_KEY',    'I/>g2#RU5]M~yO<rK/+.f8Bgk>EvC>&0zaWy|vP:Bj}AqT`~0y!<uHLe?*nrbbE_');
define('NONCE_KEY',        '#8,+?FP;&MYQUCv~ |1FNKh6K%r>{Rp=U@l8}Q1Q-$qkV&UtpKKCV-Gd37?B6^%q');
define('AUTH_SALT',        'Llg*z/i@hMVHJsFBS3J${BB],Q^t :fD;PP%2O9+xD)MKB+P;oetd4V&>@v(a]ll');
define('SECURE_AUTH_SALT', '#TI`9jGMw|d^&`dwX5hDT$ `qtXT613h<lJ6=3:0d2$3V<vU%-N`Q/<Hjx1&PEUm');
define('LOGGED_IN_SALT',   'B$wk7Myqf+bN2rYWARAk]?>R Utb{1Z4`ic>UE7D:Ch*7$XPnMM{qRp7,GPr~z.G');
define('NONCE_SALT',       '5qIab3![3uIpd)c3^oY<#~LH=iJJc]_L|L=$>Aq*![SO{.jx~@`gdW)m*>tFuY/8');

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

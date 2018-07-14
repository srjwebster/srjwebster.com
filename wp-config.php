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
define('DB_NAME', 'srjwebster');

/** MySQL database username */
define('DB_USER', 'srjwebster');

/** MySQL database password */
define('DB_PASSWORD', 'Wymondham2015!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{[}_!]bBKA3G^$6r&=n-9E,&=lHfz6OWHrIsWSgm4D8%Q3pyB{=5M|Bfc4TbbLJv');
define('SECURE_AUTH_KEY',  'mcm&ok7F8%yiYb*icA8>kpFew@Xd[XfDL<#~WpRJ gj;^HS16J?^zzfxUO5Wy).]');
define('LOGGED_IN_KEY',    '-M2Dc{{xWKCiD&5`W|zKQBkBV_zyBIqG`CHB#g`hzAFMuR)%Y LN7P0vwSb/z@#[');
define('NONCE_KEY',        '|P}@|0{uBv_X-fgFKE&R(fXQXf7^B#-U}+I-CZ<*Ih*wG{EXOei9[M;{q+@>,&e!');
define('AUTH_SALT',        'K(fbSb|5,_6rs+ftZ:)Ye;F]Ybs4/-F,&loZ6j+u!!Ou[m+*~*a@g:J-f~~.},3Y');
define('SECURE_AUTH_SALT', '>M94@K#x_BZK%!b1+?R%W@Br#YRa940i18RI>--JE-1[bt;,13dR@I3gZktveJo<');
define('LOGGED_IN_SALT',   ']@_(ItLBR7:+rO$(Ufd/}W[@*I7jugkA8V.f5X!N;j=,9<E48,{^Z`+=pn>s(}q3');
define('NONCE_SALT',       'jW(YU:NRhJrwu+t #p0r$T]zRIu^JnTUk8GN(4|&u835s+P>8v(U9y}f}gQ/&=2V');
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

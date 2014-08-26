<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'enzymatic_enzymatic_net_au');

/** MySQL database username */
define('DB_USER', 'myenzy1000');

/** MySQL database password */
define('DB_PASSWORD', '9wB4cXmE');

/** MySQL hostname */
define('DB_HOST', 'mysql-6.enzymatic.net.au');

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
define('AUTH_KEY',         'And9$DRr|swh/lZ:Ijtgr#=C3H-}LIh{`Bz=5TPhDa1|J1^7D^@n%^WL%V|h22$?');
define('SECURE_AUTH_KEY',  ' h.dL>n6RIbFhVV=Go]0LL]6kll&uo&s_BZNn>D|@#+_a1?t9%|,cI>3TBhnQg_B');
define('LOGGED_IN_KEY',    '{->-8<DDdg;~+STz*QoCr8&:Xm+WJJH]>Gz?v=T4uL{%N%]JY4DPHN%Yu8>qhq$3');
define('NONCE_KEY',        '9Cr`[--H#Ruv<==M}<u,_.T(#OOp$7++oE1k+S]KuuMX,q%.Jc*/L@6;S?`>3k1E');
define('AUTH_SALT',        'uuD/$oI>`}jp<2@taIsir^3x<=&+E+u%=zs3j[r2[D0T6Xne[b_oQl[4l-O,jlUg');
define('SECURE_AUTH_SALT', 'B)p0WD-)-1#~gyb-+N?#*RC]x^vwN4z%v!D<M}++6eL0g[C#&K`qqXg^5-[/-tml');
define('LOGGED_IN_SALT',   'J:33&]|qoK#dsTicj@U=;+~;?CSwPo,-fIO/]ds%|!gAT7:|tN>w`>d+wEMf/ipT');
define('NONCE_SALT',       'k@c;7^G!,<y79r6i;:F!a4Swf.%rn<cfeUIHWeXQ1j?Z7I:[F-uzp8ry(D9SFa!1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

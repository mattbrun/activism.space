<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Sql879427_1');

/** MySQL database username */
define('DB_USER', 'Sql879427');

/** MySQL database password */
define('DB_PASSWORD', '5qd17la0a0');

/** MySQL hostname */
define('DB_HOST', '62.149.150.236');

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
define('AUTH_KEY',         '8,SQ<Fbhl_}q=S5cJ<e75qP/|nk^?y=5$8!CwB-K+)9$g&bog2{oM.P/Tc[(4bfs');
define('SECURE_AUTH_KEY',  'o)]P(1U:3$)w6&pL$stJ|fS?3F^9p/KCx5Dia$~K+|=/RO8^E,Ou@ j/R7^-3hV6');
define('LOGGED_IN_KEY',    'ld2T`#ZKvm</B)Ot|,|wo_Cfe)hFRKNcZqF31J&(-(mjJ<!c>W@KS,AoO(D4`+Gf');
define('NONCE_KEY',        'zshk` |+|T#vp*;q?//v+#rAjU|)3aiK[8Nd]xyh|)KrVyD^85|)||HQN58epcfm');
define('AUTH_SALT',        'g5()U>yE^I4e6QA&`PLRl(}5Lw[g`VAL,)+.Cl7d|jf5&lVKx+fpd%MM:;swP+uC');
define('SECURE_AUTH_SALT', 'gR*6!u4+A01q4iki7 }Ydh|jS~}6|+6X6}%ug R;mSD4CPIS<<H-&Y4s)#S#)ej~');
define('LOGGED_IN_SALT',   '47e2J>*DP:yx @S22Ii(scB5<KSijw-|@6=.JNP7UR@qVs.TlG,>98nib$m-`CW+');
define('NONCE_SALT',       '9>HYCLc68QW[vCQ{33%MQ~9%e:(aLaVgP+$|GFN0 O6dXq5*2*/ ApAk8]O|YRii');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.activism.space');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

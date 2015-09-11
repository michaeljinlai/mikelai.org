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
define('DB_NAME', 'db209388_wp');

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
define('AUTH_KEY',         '#NY51.Of+`Pcyo+$xoV_aUug^_3SA-R[W&4v_ 7 MC56b#i|6{$84oj1;+3+l;}#');
define('SECURE_AUTH_KEY',  'A*u9R<*r6mIe}Y&@|B[h=+@Y!nq|qDXw cg+&YZ%ZR};bxPSOb92+e[u#*rClnVX');
define('LOGGED_IN_KEY',    '#rC?H-J)AEof/MxhI<kko]yL5i9CB<S2;p1gR1a#RMn}.bZeJkC$O2/a3A-<_V%6');
define('NONCE_KEY',        'hK0yvtjXUJ%w@{^RR1a+K)d4Tm+~)K(h[1-gveNUx`1Oi0*xYAvv*W3P)kXDJz=6');
define('AUTH_SALT',        'B[E+bQAa(pX`0boNG(B68+;TrBsbN/=GULBZgt#Pt=kkmKzSWqms);r>d)sCqj^;');
define('SECURE_AUTH_SALT', 'v;Mv-+..L)`JG77F6H(H/W5sC}6F!&5=%$+-#I*9x4@epzq82jF&,GLN5h{BA;a|');
define('LOGGED_IN_SALT',   'Ba;IHv1`@C(mC*%]im|XAnJ^];(RbyxgPl{7d&kRFhaL*)+0vtII% j&yTUh%#us');
define('NONCE_SALT',       'v }I?hG56efU{X>#H+; N9DE{4O$Vj+M85V(v9p;#ij)c hI9qZMZO7?gm5U^8Rd');

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

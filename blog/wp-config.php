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
define('DB_NAME', 'wp_portfolio');

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
define('AUTH_KEY',         'T-;aRTLq0nHR=htl+6.U8(C^y5XA7[tVke-m}qb|}UzNUK?--W^c@Y5>t.[(*rRu');
define('SECURE_AUTH_KEY',  '380N_U0pC:l1oOTj*mPWewR%{WNF(z)!0Qb<BlnaBITD$h=g+`^L6,>GLpw,pILX');
define('LOGGED_IN_KEY',    'f=3|fJh*+vp;//_>Z[=pnUcAee>,B0)(MC!B4nhn[V(| )j2{p_[56@rUqR,j9U:');
define('NONCE_KEY',        'wn/`-e:%ok1W;!Nq0o81HVPN%Q}RX|<K[:hcd[S{T)vbkXfJ+~y?n>}OY/Xn2nDE');
define('AUTH_SALT',        'c(*V[1-GPno(9pKHst*`w%:Ss4?/s},g]Ej&?#%QRN0oR@uUR6W2>]P;JP`M9[iX');
define('SECURE_AUTH_SALT', '8Hql%#~gT+<k[gb/36Xo~;b.7[N`>r]M^9<v<Xe V5FI0OYYc9)`[6=uWGX%8o9~');
define('LOGGED_IN_SALT',   'P XA9(yjtQtN_?$$ISCS,N`)fP4(RH/q#>Q7Ep_)h3z7j=#VU[UwC~! YS(]JvTP');
define('NONCE_SALT',       'TnRlGyL(TAZ#M<Rf=O)R-+Ff,f#I#=P/)]LZ1IRW[)1qri*FCSy/jRyr`!9V=*Vt');

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

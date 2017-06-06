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
define('DB_NAME', 'escuela_naval_web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vm?0GG~m-0+CMA)]TDmY,+1{A6#F.b;rawr#X/8qK:6fl3=Z*qor25+L<vHY%,E;');
define('SECURE_AUTH_KEY',  'oxLPV:JnXacwRC)F^<_SajT55{rn=O1qLyc -i6r`9!t^miN2uHvvu@E&V.l-I;|');
define('LOGGED_IN_KEY',    '0ui5Y;[k>lGZw3pfQ)z!%/rji@= )KC]QMk0L OH?:[D=Z%j.z7<!-15X)P|HQMD');
define('NONCE_KEY',        '`2ka$r7O#[G3(`M0VEC~kKq&8#M1uab-f}_;:i!;W{lBU8JwxJ~mz_v},jl2w[6I');
define('AUTH_SALT',        'NF)u&p-Ls<bqUX(!`uqoUr~CAi?ge1zm<ler*zwFm{8:H5g~V,wG:1;mapb-Ek@e');
define('SECURE_AUTH_SALT', 'megB(i%T&.i75l6,U%Wg[9RI.)pMg9]n%?{w(ow%_W3qUv&0Nly*ITXCji(bVbcj');
define('LOGGED_IN_SALT',   'a6?[UZ@gM=HM?tazp]R&sgv upgDxrt.NWLRjzTgI]DYaOk/pX1c>yzi9fx:?MPX');
define('NONCE_SALT',       '/wW*Rm i=z*xP uY%7e$!HN>8DT-KW  mOE}XWlSADN},[M1mh1cb+Wj8!6OtB:Q');

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

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
define('DB_NAME', 'stroud');

/** MySQL database username */
define('DB_USER', 'sf_root');

/** MySQL database password */
define('DB_PASSWORD', 'sf_root');

/** MySQL hostname */
define('DB_HOST', 'Localhost');

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
define('AUTH_KEY',         'rV:z>sL[8]vE{u Clz*Da687)lXCNt{>if]V?@@r_#)[1OYn}~m6!)&&Sb1Jo6E}');
define('SECURE_AUTH_KEY',  '+:rF~k<.!,9[Enl.a%?8,x*Huzgf9+yFnrO&tvkJI. e6MW.Xs5dlg{k[LUZNekq');
define('LOGGED_IN_KEY',    '(hx ^)D0N6kQMlYQ9CPIcQ2/3wk.kG)>R(JCw^WdlL>rL<yTLn<mj22Q<t_)S&]R');
define('NONCE_KEY',        '!sRk#,L u8?#4CH6ly^?H96GAgYkv:VZa]nfo-%B,nQ[AWX):2qDBk/jT2w^#>^c');
define('AUTH_SALT',        'SQcYv2={q}I?#NOq.<xn;~<m3ZizL0{()bZKlSKa&sFBF=cM@Ww0]eE;[p8%%&>h');
define('SECURE_AUTH_SALT', 'SR1do+7fvHnAfjma^@43D5C.v,_G$QnZoFj5pWFY;1 &g4&ELvS4BsgN*aiZvtCl');
define('LOGGED_IN_SALT',   'Q>0:^ws ^.3@1z/7Qb)h]{BRBYBr}3_U5|8pz<^JuXP~|@eOV:k8YD,Ptfj(#^l]');
define('NONCE_SALT',       'Umsi7CNl.8MGEU/sRGJVJgrg#-,OZq[b9C Rj(F[Wq~W?T[ldFYxXUB//ILhE=oA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sf_';

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

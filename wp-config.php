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
define('DB_NAME', 'mana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',U*3lH|B=C`T]$2<?GB,$U{-FkqD$T-%Ez9mn@A2~QP+SJ|}.zwa8n1BPEs5?,_h');
define('SECURE_AUTH_KEY',  'K.:p !>+Pyuj1RX33~<YJ]^_:eI/`X?>y8)vV[kzbZ6|dM/`l9g8ON`3fVoI$:Ap');
define('LOGGED_IN_KEY',    '{Uo_*<&T1]}ZLm3v5)~fHw]:L&,MkZRM!Dmizp8c5{dg!k(XV?Xl> EAPZpP2pOa');
define('NONCE_KEY',        '.GvS|*Qu{-vj~U|ngW.::N4.SVrSpQ[s[mcM-`/Cmw5Z3DsU,?wrA%%Qj e0=uC@');
define('AUTH_SALT',        'n2h5Y0,9eA8GA><fYL7LO+s&`Wtg2@v5s}JAi1>5C9dF4k}qZ6#*O%-TO)cUlnp6');
define('SECURE_AUTH_SALT', '5o)f:ZjXXX(=AP?Fr,SrN-fk|.{m&IG]UKvI7Y.UQ6aEC1Nk35p_.*k[FJ_LOtvj');
define('LOGGED_IN_SALT',   'bUlEXO(1H#4x;D:Me3kq^JTG>8(w6vx0dLt-0.b@iYRiCRg-$Rq>eB_kpa`tlHO-');
define('NONCE_SALT',       '?KF`$unv%#A?N(*;)OVfR1Co+T!j_Ac|TYlzn.DGY%4pORBnw~MmVqH?2`c{iX@6');

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

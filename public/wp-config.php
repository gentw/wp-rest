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
define('DB_NAME', 'wpdev');

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
define('AUTH_KEY',         'cBat@g|(n:~&f88-2g+ma3xs1cP*]2MV.t/hyf^ a{;2A1L9M}Y#^&AjPDW]4J7]');
define('SECURE_AUTH_KEY',  '8y+yTN`Srb7F[FCBW)NLE,`j_Hh{Qv^[Kg?0(/eu>v`sCu5Ax*|Q!(#iA~56q8Fa');
define('LOGGED_IN_KEY',    '<jy-9t1@ThM@.T`kv*?$%7b1lWbf(@foH)U&>3CQa)Yq7B]+`[PWSOB>}0r,bL W');
define('NONCE_KEY',        'Sd1dT)tcaH@6gwV){24R<~K-:T>]>*lC>1xC-`0|iJ6&fZ7$.#b8yrVI-;D*[Cw(');
define('AUTH_SALT',        'AG7)MQro]+OG!8tMSyQC:{fVP|bQ`)bLVeL-R*@8sr!hCXVnF<WrL=HheI)s{30,');
define('SECURE_AUTH_SALT', 'i]KzE>X%+o8eiy|g]SkjT+!TqpqDqhK&aG|_HObWd,/qka8-PMtc{+MHL5;dB3f1');
define('LOGGED_IN_SALT',   'ai_UBC7o)^ni6yA:z*/Oq*jqz8XJC`xzP8bmqkT%t9/},TY(jr^25q]NvLtIbvjn');
define('NONCE_SALT',       ';n jSV(gcLUM60F)1eh;Enhm?i/fNG}4:!j[S:l`@8/VLjWqQ2I^Le-aTm[1Bw^,');

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

<?php
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
define('DB_NAME', 'thedoorsalesman');

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
define('AUTH_KEY',         'e%{l4OaQLR.vLI(Mt*oM2/0a<ozxh9T=&koeL2(CxCT)kZ[v5{,r$|)1Q@oK|o},');
define('SECURE_AUTH_KEY',  'VsF]sIiCnYA(C=v`-a7#v%WI+`!{O~`lH-S3bb%LLstQx v>B+]Ni/+E)g6`#Y@$');
define('LOGGED_IN_KEY',    'iXrN?Io59_i !]gT?FZ8|iE/*QY^Sdbp5{>9GcO{^@_[cj,-o=B?K}|d@+)p8c2E');
define('NONCE_KEY',        'i/*CQ;njv:bVf1/hY-v.04ge/SZT(7WwC$ObqPpJM8UwVJ=4bIzge*0IWf^6Uug$');
define('AUTH_SALT',        's*/~_#N+_/<@Pji7Yc05)##-+@;UA(fvn+P,+08*R:G.xSY2V^AHmjWjkB5<3H_w');
define('SECURE_AUTH_SALT', 'Yw+}?lr}E[B(A80?P,-i_6.mD JSzMawcT%J$D&*(7%3vpR0R+.[%E9N|GaMnWX[');
define('LOGGED_IN_SALT',   '#/-Q9NuMCL/rW5hp,fp]0N|m`$J]l_XJql3&wV&7es.meyWJV+oPj+KdAgr3d+qx');
define('NONCE_SALT',       '} |xB_~&U@F}bdiUZ6}ic&Tl|-p.J(nS-WVkeKzmMHch|VL@Nb@/<+|9M .=][|g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ds_';

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

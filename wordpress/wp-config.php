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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'eXQ^bFi_mhy@}K4Vq0QSH=g{]T]J4J9Nc7|qu_:<wb%02w%5.ML(,Mg(?-.#n!&4');
define('SECURE_AUTH_KEY',  '|PJXd!OU8R}E|m8JF`h?au,}USkirS|P=#8|Q_P5k]Oz9IMr-HHCn$]q&s-X>>=E');
define('LOGGED_IN_KEY',    'tZ)cLJk= 6)%NsP;CKA8h=noHD/ugLc/CEQ^bllC%p]S=SH8N~;z$TfG:kYQ`d!x');
define('NONCE_KEY',        'AjuzF&ja:.1:Z0<:6f!JCDXi_18d6I$R]%#$zDxSQ4UE_2HN^m/U|+z6Ky(+eKmP');
define('AUTH_SALT',        '{kJFTZUzw~(=|+1(9`eb-@Glnob:cFX9>5;<Ut[7LuNPCFG2djiTT~{El/K!A@9{');
define('SECURE_AUTH_SALT', 'B8G%)@p$[n$1@+K{H+yA8(;y-eDw%t2-)x(KaK`}~vU+g[`DIPS889;SX2PWk$uM');
define('LOGGED_IN_SALT',   'kTf?TO(f&$bfGLDtvg@F?Gej~^Ud-2-%eVI&:-~-w?E5oQ,x[oC5|ouS/xb(nd+>');
define('NONCE_SALT',       'j_g(K-Z% 2g)QI_L^<j,!~OwKth/kOz+a0T@*3Tyw+%:>zyF9ur4.dDZh-+;i9wB');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

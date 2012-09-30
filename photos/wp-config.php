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
define('DB_NAME', 'kirasblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/{!nB4/pFhsl,1a5S,@S`6OAOQWV,j ,y~Ldq,rjyq9&`Ol+YQcqu:&}.E+>FiC)');
define('SECURE_AUTH_KEY',  ':+zw5`L_Li4e-Zk|Cu-mlOFGwkwTA:||DaH@gB0--!E[bPzJdwzi,5q%f8i-YizB');
define('LOGGED_IN_KEY',    'LI&]vNwgQr_AXi_`U`T1-sP&`P*l3:lc4zN!+;:b_[<ty>5B9>)ra-x@8jdJ5T^>');
define('NONCE_KEY',        'gD5`@b|sFYZV)>zt4v6$.-gBl8Z|OZk(wCv-zAp$:(Y.ZRb3YqE<)K+|9Ib:;REC');
define('AUTH_SALT',        '(*K]{9>+_-&`1GA44b)9#+|_fZCE]p+N^.JR@ C<$32o-|^?P2Hm4AcO@|s*BI=W');
define('SECURE_AUTH_SALT', ':g+7}{kpHhMQpWh.EnD=(5^ =|i-MQ%|`QW)ZC}H`Uv>sf/pV1r*.dNU3eQzHb4)');
define('LOGGED_IN_SALT',   '<)$61/M|2Pfh%v|^?+Sw7FZXgz&Da-Pdq KrHfT|-|s2WnIOnv4F~h-uq6Yz<dP,');
define('NONCE_SALT',       'e}-AR&^}aMYe_OUMyz1 1V6Y+V@Ect!^+)~b65zj<&x10W3fD/*n!/G?eWOr]!QG');

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

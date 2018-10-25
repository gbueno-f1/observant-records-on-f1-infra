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
define('DB_NAME', 'web');

/** MySQL database username */
define('DB_USER', 'web');

/** MySQL database password */
define('DB_PASSWORD', 'web');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Define the URL */
//define('WP_SITEURL', 'http://localhost:8081');
//define('WP_HOME', 'http://localhost:8081');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*A$)m#@R%756-Dsw8ago>B9p# 1j87;}4(1O[[3|3sxYRIQ+I/?mz,CKt&;yh=|X');
define('SECURE_AUTH_KEY',  'Wa}{-*y]9|*6#-g7*-Wig}OpSi$x+5gtxr~A1/_(:;S1Vrbkb4zU!?XUCGV$EC//');
define('LOGGED_IN_KEY',    '(C[Y-Qgxd/,^zLMIlIrM6Uj-qB]xkbP_W?[:*0<Coe_)#9x|rj:M0#]vM +1NQlJ');
define('NONCE_KEY',        'ZiLaS?2]+3x7/ZC-.|%$!cmGDt[_v%)GC1dP84oo6r0Vq|a7cQ0%oY,Ny&Ol&Y<g');
define('AUTH_SALT',        '@j|AuS^dn_.V`ufE|9F@I|i/!%]CR!Doqnj +r6RZJ+=P^>SSAJlm` sj+PN[Gss');
define('SECURE_AUTH_SALT', '_T^,r25p@2:T]VGODm*X!-+_G-z]2lzU*CPwJ>:$v7$IOXg%jWN2]Hp!ni8ePKuI');
define('LOGGED_IN_SALT',   'mhtae`O2;7H6g,l[GL<Cl),]66z:t.=]8rNmCj*y)lHv@<R:ZXNgM:+h=4n-qfOf');
define('NONCE_SALT',       '7p^eZ_RGW |*0(Ed7(x,s2x9#[x#RP#XtbcI#L[`$DdpnUy=z`Z|{4vEm0Ue+a^|');


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

/** Disallow file modifications */
define('DISALLOW_FILE_MODS',true);

/** Disallow file editing */
define('DISALLOW_FILE_EDIT',true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
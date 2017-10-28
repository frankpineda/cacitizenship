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
define('DB_NAME', 'cac');

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
define('AUTH_KEY',         'a;n$GAK>[s*.Oap1VxB^7LuBWp~)_5ksH$FP@)0~kwM`gkhoB*%a2*}bu/43Xc`Z');
define('SECURE_AUTH_KEY',  '3<iLQvp.V~lT#LCx:Sk[f>9k.^so^/j[= 8f&wtV#>Sv_<U8u(|(U~Tgwe?^10(a');
define('LOGGED_IN_KEY',    'yqZ!km+P>ClMA:QbT`i{]zpd{1&{^lx BZ6,{fl2ut_CPy$%J.=~SJ4;Hv,qoDX!');
define('NONCE_KEY',        'c@C|r($T`(qO8;W3mC$##b>thakt4aZad!hd P/*]JLRtrDL9XhH>>w85-]uB_U.');
define('AUTH_SALT',        'UZiFL0IP:q8CQZ+gi~D@~tn>lMZq.rN#}:z@i~_|cB|`-DV8wFsuoS5gff@f+&xi');
define('SECURE_AUTH_SALT', 'T:.a ;L-8!WO2KH.+Yg`?ntSc@D~oAOMXHGYB<o=+(@q|+s]f{5J*~&Tu^Zi4OzW');
define('LOGGED_IN_SALT',   '!gQbdR()pEHW]kf)KsLjfc5ShH?B{+82@oN;0*47Pb4D+dcuNTU`Z_D1`MwLZ1Yh');
define('NONCE_SALT',       'v4W+5Z~l}BD[l7zf.93W%Ov4N 4$VVA$_jj%uxU7,&jsa,m/j@leE!6q!^Ynle0o');

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

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
 // Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define('SCRIPT_DEBUG', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_mcclellan_enterprises');

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
define('AUTH_KEY',         'z^s1VF(Eq]ZpB/gsX[dR.k_sf+Zl>{%o6B2t `SF[1]qYB V^<knvS(pTc?%q;>9');
define('SECURE_AUTH_KEY',  'I%K/yVkM}~CC**3kn`0W%zYd&]z||2z}]>%2X7oB^RKmibb_>+j(gyX1._`+.-nJ');
define('LOGGED_IN_KEY',    '=*idSEROLR:(!gD+Q*xEsS_91 Y}`U4 ^B8X/<<^.g3m8+ur+bZzHl!Ip|IX+[{X');
define('NONCE_KEY',        '{n+^p]Nw232n0o}+eNIW{_]-=h}|/;0zf}y{Y|xBF]h19MV_0Rb{ij[py*-.x+rI');
define('AUTH_SALT',        'Nw]M!iHg3gT)GC02p1|LzQ5#(<5#Ow<6Y:{up%WF@k?|&sO!kC(#>t{vn/cU;Y{F');
define('SECURE_AUTH_SALT', 'SetO0HgwS`qI61+A0L*,*/<+S*3CB[O%X0O@+*`FA|3BA-8MU%}+kKf;f47QG[@}');
define('LOGGED_IN_SALT',   'kkL}kz4p$6HyuX[~vk(A& <GEb+3oyGSnI8 _6[?f[-t^VvdF6re;Tq-#A5}@jsR');
define('NONCE_SALT',       '!v<(jI3r&U*Zw02MYy{ws%^vW)b|t>(cw2 <-dC7.V}S1]1EJ+J$#ocvJ[}jk3&a');

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


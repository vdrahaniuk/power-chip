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
define('DB_NAME', 'powerchip_us743h');

/** MySQL database username */
define('DB_USER', 'powerchip_665thd');

/** MySQL database password */
define('DB_PASSWORD', 'N7u9qfyUN4u1');

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
define('AUTH_KEY',         'B5m@VZG&`&1s0|m~Tm!8(12{,9LOCKJ6.>?MYv.3%Ccs@.VQB2kPr.rCU8dLsMA:');
define('SECURE_AUTH_KEY',  'C5#]hdydd3OmCE?|Qo2pl>c|7cNj1;OX,jBHq/G[]ICD0+AD=PDk=BD=+5b#btOs');
define('LOGGED_IN_KEY',    'C&}Zw-Tg3U!_[[0R(7s$6cuN#*:,RBEHF2(~xW+d=DEtVicw;w2jj2ES1rQx]NKq');
define('NONCE_KEY',        'NAdpc7FAE@V j{_PzJP:T(Ok&_3P_r@[*j>Amp(`dChz!%bK6hzDnT8l_6uH~_E^');
define('AUTH_SALT',        'Ucb8(pV+fh=h<U!JG~DmDr$&{>_18aIZDC2VGuJ[9c.ZdOh/4v5745$R0#~u$J#K');
define('SECURE_AUTH_SALT', '!uJ+@qNB5Xz?N^NYedIZ*BTWpI)H*=(Ft6#}SFbNJ4g_]vOy+L=DQOP@.Z2V3f]y');
define('LOGGED_IN_SALT',   'Tm<=$[q/Y]Rn!4;f.mOu^$99}~LSK_% ~vkje{.&;Y,#(wM^k$YDIob,3eo_-dEg');
define('NONCE_SALT',       '){0QL%!R/0Q5f9Eq&w]`.(.hDX/tlA~#g6rO:?9;5etR@f=x5:SQNJ^A[SG!pU%`');

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
# define('WPLANG', '');
define('WPLANG', 'ru_RU');

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

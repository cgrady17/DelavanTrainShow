<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'dtsmain_sw369');

/** MySQL database username */
define('DB_USER', 'dtsmain_sw369');

/** MySQL database password */
define('DB_PASSWORD', '595PdS(@7c');

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
define('AUTH_KEY',         'mf3vor3e42swywx6mydplkkvifiyak9uwwcvam2jnf1ewfw7fyvioakoqllg7jwr');
define('SECURE_AUTH_KEY',  '3jonkkhecsjieaqgbkz9absbonxnyzevlbg5eiopjzinhbdza3rs9luxad4km8pj');
define('LOGGED_IN_KEY',    'plkvrtwn91udd4lvzfsnjy2rt6hlw919vbez4mtmk9ai6lu2x4739nq8t862jmvi');
define('NONCE_KEY',        'pn9ml2u7k6kz5vzwpmpewp44utbpooygwacxxcgndjrbfubpbrzk4xk4ibhq43wu');
define('AUTH_SALT',        '14i7ufcxfkcrqug7idsf7jtpplaezhcnulr29gsg8furveok0fgqdy85dnoj7vzl');
define('SECURE_AUTH_SALT', 'qlflcbnfnkumlc1gwyxefnogl0fvxfemcelw1eyhvktomxbmcukg2xpuj0dylww6');
define('LOGGED_IN_SALT',   'lrlcwu9lalyzdlzz379ytwqtzhzqla4d535plfqz6licimpa5brho5cdysbpq3jh');
define('NONCE_SALT',       '39c7tpxigqcg7j9lr1qdypmfesmrqjtz2ktqnfzv7epwhtohhsa02uatpggl0l7t');

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

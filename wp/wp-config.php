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
define('DB_NAME', 'ezyro_19854646_175');

/** MySQL database username */
define('DB_USER', '19854646_1');

/** MySQL database password */
define('DB_PASSWORD', 'h1-9[SpYM2');

/** MySQL hostname */
define('DB_HOST', 'sql209.byetcluster.com');

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
define('AUTH_KEY',         'vkans9drgdmvzqlwgnk4lqdzobfyitahlobnb3y7c7yiwkvky5dc6oj2ureo8hhy');
define('SECURE_AUTH_KEY',  'ml7pgk1bbs7jlovjqgmstdutiupopjjvgiokvqj1drum4sjvc0sdsremhi39umdh');
define('LOGGED_IN_KEY',    'c8wr2dn5sype5jvipkcgbykbb0rnqudobht8gijimpqzvvhlwvltzztbihkoqp99');
define('NONCE_KEY',        'mz7oj4uuecyprtdau4xb3w7zgmhu1cji0vkfywa5zftc43jiobckwjmzcjekbpr0');
define('AUTH_SALT',        'xsj2xkrdsmfgffrpzoflwregoqaey8rgcyjwwfh59w5s1gjt8gp8gownsal7rq9k');
define('SECURE_AUTH_SALT', 'mma24jizkiewmz7hyupcdxsrt52462rjrvviufdeyuwdb70htlxpnngkfykbbuyc');
define('LOGGED_IN_SALT',   'qlcuui8gi5yk51ru3jvrg8j3imlqgkmx4gpk4jlhsjf1ef4bop4rmsakilc7xexd');
define('NONCE_SALT',       'mtrg1szk4txhz4wrgfckemupd9qow06bknqnbyimfpw13qjnzv4ausjasiqtn1dd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptv_';

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

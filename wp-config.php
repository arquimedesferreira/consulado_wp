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
define('DB_NAME', 'u898292678_hudyp');

/** MySQL database username */
define('DB_USER', 'u898292678_wanyp');

/** MySQL database password */
define('DB_PASSWORD', 'saPaLyheMa');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'YXXei7TLzQdlNsrsOjT6BMZyEeNEVtewesx1xbeEYM6vWiQTQiNbVMwDbseknKnO');
define('SECURE_AUTH_KEY',  '99WeFtnJCBOzctsMKliVOvdhTu6oysX3MKIL9enfQhSS1uXbEnQxejn67HXGQogV');
define('LOGGED_IN_KEY',    'yhiUD4DcrBSLwJwZCYtFbbAX7Id2YT5tEdNdkwgCajVzQZHkI6LVnEmvGom1Yz0V');
define('NONCE_KEY',        'KA1g4OYaaCGD1COa2PqPzyJOl5fNxNoa7knS02i4lKILWJ10orwEiOUPMLea0BBq');
define('AUTH_SALT',        'b57j9vpmHivvcjG2qO5fLUl035CPmzwKhQBRfdeMGYMZq5btlsDUaUE2d7PbG6nk');
define('SECURE_AUTH_SALT', 'BDCBSXuiDLqOyfecAEVXwEFm4Ly02WFjKhuWnlv7L0qhlv6Nsj0pEbbrUuI3uPCN');
define('LOGGED_IN_SALT',   '47JMK3LOg9o21xDxn4GhMMzteRKNM6uYdXOgu4WvqUPwFTl58C8qxQGUUXDgVIwW');
define('NONCE_SALT',       'B1DQyrmIcKK98Ade4ITW7tJO6WTHRhw3WCkpLCwK0vl5e07vKHE7GlkcGbTOp9Wa');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'isot_';

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

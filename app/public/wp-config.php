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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eS8NjS7AmAL18k5hhn2hKjiuO5qKeZhhPVibGI41n8psjXS6KpESkXCELpuXDVAdJ3y0eBIptUg3ROtVWGtJCQ==');
define('SECURE_AUTH_KEY',  'cvoqrAVIuLpoNTxzQ9xt3063WUOuFnu5vN5SDRx6crU57CTveuozSAMf6CZUBv2mL6uKmkmF2Ow3+/DsA5uDMg==');
define('LOGGED_IN_KEY',    'fjmQae6YMry3gtfiCHh8m8qmLVv8JJtQuA5utpDoXCLGKN5Ga0itRk3I9FtuxjfGH9V1sA6n4X7eCJ8xRzempg==');
define('NONCE_KEY',        'iFHvioTaEceY0wUx1LQYsX6+ncbPQ81xIUTL/631ZAjUrnVNMYDDOS0N45T75BtJU4G2OQgGnD0JYbjMafg+Iw==');
define('AUTH_SALT',        'F7XMt4nKyBIxs0EyrhzRFSoxab8oxoqqGB3G6TfKvwzcf5qokOg3tdSRl0nMoKP86IwO75iVcQQXX6dN/fdYKQ==');
define('SECURE_AUTH_SALT', 'UnKGqsLMMj5/dZhh9OY6F5Mv4tJOuuBsIA1fmjI0b6yiTT6SCtQaF922zx+ylKoh3JSHz2qN6XcnPftJ1Wju8A==');
define('LOGGED_IN_SALT',   'jtrgcHxAEyQ3LNgChso9VrGeXtw/v+RaLm7hKr01yEUWUWVgrhfGbOyHr8KnZfTC+RVdrJuTSde9qsgAiiybbw==');
define('NONCE_SALT',       '7CyHLLHfGi9+Cfs01FLmmGdhw7cdMlqdX2ghmIcwFVqaCl5eFkeYccpkrtgr2aeYFWG54MqcdaiKAgTL7BTK/w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

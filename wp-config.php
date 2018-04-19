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
define('AUTH_KEY',         'siCFTuVopbrDYtE8xNmwZhS9NcvnGDY2/Up9h7DFcMTBSFPp1dVCswdhg8VPF0TIGpJxLKylG98XTkv6bpwtpw==');
define('SECURE_AUTH_KEY',  'l4XnsQ4KfPcjPfH/aQm3Y4elClLjVleOcsNHGjlauTRxvwI0NZnNd0ijJwGe8kLcP70wK6a0J4REYXAbDqCniQ==');
define('LOGGED_IN_KEY',    'kLnUAMAMER+G36ChGwUeOkAIEadmv7KhWsqkNy4ElW3WZfIx3e0l6Q+IPeJwEWN071+VpWdTRGjsUfZwy4ozWA==');
define('NONCE_KEY',        'kvvADs0mD7jF4UhHF90gR7CK9fVcbgE2UEsOfGbvIubNOWdzCLZG4R7Pak2zL/eZhElZM4ZDxN9pFTF0IYpYTQ==');
define('AUTH_SALT',        'ftkM1gxdjy1gEPrlYFsc2Zyjcl7cxth8zyGepKqXE7RysE+LhOQ6lVoKcfF+6/6LEti6tTvuaZ4d2vwldqKAUQ==');
define('SECURE_AUTH_SALT', 'wF9LoQiu5qE3EZC1mnEDWytv5kfkgWls+o7ju9xCTuLOLEtdC8b27+cLpm0BBf6hOrv//5q94PNeEop9m0kU+w==');
define('LOGGED_IN_SALT',   'hp7x8lYIaDDiN6YhdtBAsNZS+V1w+UZwOgnATo7A79AQaDcI5RkP36AdqSwPdM0Mh0oAj/r5kyh4PWdn+OkCAg==');
define('NONCE_SALT',       '+UVq5s3WkKs1rPYQ5TQJWofZ6popCVkUFBvU6dLP7vwMcRf0ruoHpxDjECM6rHzJqRiugJaQWKqwwZxVZGWEMg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

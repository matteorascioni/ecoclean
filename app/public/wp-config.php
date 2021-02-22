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
define('AUTH_KEY',         'a3V1LywFQtwz5nPxqRTlPgQ+C3p4PobpJeeITJb/krOuGdGDQT68I8k0UW+GyNNuKcTP3pwBtmwYqHxDm0+5qQ==');
define('SECURE_AUTH_KEY',  'CHh3MtpuPa6+aZjycfXO0Xtz6B8sF1oNn+/q+KAy7aoR2qvF76oWmSSf9TsqJ1wYVxFEA1IkkykOtHpuDvMOKQ==');
define('LOGGED_IN_KEY',    'W+w3hFAAOnYWf89a9SO2lqlx090f56a3A517cLVp0pAbgPmN47YsIc82WjO+IKS+KbV//CbCj0C90XfIWQBsig==');
define('NONCE_KEY',        'esl/aPYw79LoBDFwUuVwZuIqLIVCOK/3ioTfMdpEHN9fiiOBEC58lhrFCqc7iKSMMHkclsfe7Cb3IOURIZqjSw==');
define('AUTH_SALT',        'Vi3QL7YFYuy2w6Ugdnn2zUU/PlPOdzAjcfyrpgYUeddTYWluF6/pajKJDRtIg4j69qUux1oOFcK2EdRkvBvKTA==');
define('SECURE_AUTH_SALT', 'g6pmOOhWOhYDeNG5Vh/bZEVqhA8AvFE34NK3bAs6AO9al4tJs7VLs/1j7/WEwM6t//Wu0v/zSPocbvdXJyFKug==');
define('LOGGED_IN_SALT',   '/gpGRVkWEjLNIBBewq9ncI0BmIKbASfNc7o+tbefon9mvlR3loYEsaK4yu3GZrrqrGy2y+apYllDJvKC+t1JkA==');
define('NONCE_SALT',       '/get8xknPKiH4KtUhYxnYI/psiKAcytArkHjK8Sp1nmVTVwURV3YaJ04AzvyVOqUEI8PAN8PDVuUGmAjbd6mGw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

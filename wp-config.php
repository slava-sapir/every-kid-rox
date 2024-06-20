<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '5kh2qu+De5D3iorxcCyAyoSML0W7/is90ZOdBCWR3jyIvIY7SnoNWx0Pd3COw7czwmnKmi92x/vmrHvmdp5zcg==');
define('SECURE_AUTH_KEY',  'ziVM5hwBYdZMnQXWcKMdL67XMHk7JXrnDAjlDXcloF+Z6H0ls36N48pKSrCZEMK3XcmBJuWmu3GqXvASUT4/tA==');
define('LOGGED_IN_KEY',    '47iglFN7sYXCkA76lc8HCV+GFcH6ODGo5v6sqkz31B8+hLTEfLs1JehKAmNzsg8QGhMyOk8N/b+HGMih1PJqEg==');
define('NONCE_KEY',        'wK80FyEmzTgcxMkQnJCUuag1rOwFLxLyE+Vwpq+3zmuvHxrBvAH+aaNq0vIGMA4DYEdObfR0N21xRdvrI+Rafw==');
define('AUTH_SALT',        'IF34x5fdN1UMcFAWAIcPfr0W6MhdxjylLIZDY0bF6DcRCn6v0jO8kOjic8sAyuf1pivwYdOIWBjDAkYHeGO3gQ==');
define('SECURE_AUTH_SALT', 'JzGVepc5ROME/sX34j13G7Os6XaybPKMgy5JPRC07D4XD8ttAps4hP6n4leNNw5pPYxVRcQYdwrIeQhZZk3L5g==');
define('LOGGED_IN_SALT',   'uo0mmQRHMccyEt/0K2mzFYvGy25PETiPbnPVjF6AbtY0xsliGNI0vcf98Rc36+ie02p0y6v7A1u/stzaLdUOow==');
define('NONCE_SALT',       'KMN3X0FfCHaizSuso0i4+PiECwNnHaXL9PP+VYxKh4HS4/1Z9sVKOJvcg+n+GnTDAdKjuiPwL01jZElxRcTh0Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

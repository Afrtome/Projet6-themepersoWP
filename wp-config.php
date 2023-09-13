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


define('AUTH_KEY',         '5ZCNsAyPoc+1T9SPUtTz8BEUrU+vskwJWbSlsZ5u5T7MHc/OVgKgeD05jLmhxVdHX1Sl0Wmg5AefSHgAcXL83w==');
define('SECURE_AUTH_KEY',  'EsyvVE2gnOMsOoXiISnnTr8B8G70fWZykarptByw71Rv4UTtrCVXaOROM2Z7OrJ214nDQVPVpIm60yrupX1X4A==');
define('LOGGED_IN_KEY',    'W7w4Mv5+AiEACK3CByu41KSlGV4a9kM2lj9GE/iqfeuBRVEt2G+XMBCwPROiR+nUJEYSzbEqMMZ2wLwa6NavfA==');
define('NONCE_KEY',        'ulVH48NUOFgX+XxuxJ78jQP0jXRcANHkxurjNR2HtJOrd5rgH9dmU66HcAmaKrdDveJzvZkRpgydEHcMcz7kYA==');
define('AUTH_SALT',        'DwpaNaUuVnpSOwSxZoYdxJirMXDHbvUSQHbWWVJ4x5cRHZGuuhNEGmSCFgoduqtXLFYKV86zKQhmCty5d+3oUw==');
define('SECURE_AUTH_SALT', '/JjUBUx0mH+/TbVGBJ906pHCyF8f8uuWoDt4en6pusO0HSPuRApDeEK2FscNfAK7uYAUx/bv9MSvbtfkxe7c+w==');
define('LOGGED_IN_SALT',   'WuEhM34IbjIUjBfGIAKQ1+89pQLuYh2OSEMTsF+WNGoncEwW+9Yc+JMkkDNwgyfqM1zjSfzAMaw/0ZkDDUY9kQ==');
define('NONCE_SALT',       'XJP1ff1uFczs0BRVznvGQBLrda8z2Fu803hzxkJDIumXS9mCCn245/LKgvt64rtLfwKozDBi7RRmx6Y2Ik9Etg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

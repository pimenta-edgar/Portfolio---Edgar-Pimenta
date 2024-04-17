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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edgarpi1_wp972' );

/** Database username */
define( 'DB_USER', 'edgarpi1_wp972' );

/** Database password */
define( 'DB_PASSWORD', '-]0paW1st-1n-VS@' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'cqwsueprjwcewyoo4sos74wc2hrj7piqmupsv8lx08fx84zd8fipsrossovdd4r5' );
define( 'SECURE_AUTH_KEY',  'x57lbrj6bzisnkzzpeoamczby504wcc8owjugxjwoyjn1wlf0gdnlwsesr3lifkl' );
define( 'LOGGED_IN_KEY',    '01e2xkonwwqvmta6isol9yebvumvbq5aolwyxvxf9iez0jltdxylzuzkyfzomdq6' );
define( 'NONCE_KEY',        '4gd2vwm2cd1n5wikadw6uiao0qpovuyxok9iexeqz1xdtbyasx6g1kdbghe6jzqf' );
define( 'AUTH_SALT',        'u58qxxv9bryy8lrgwtb2yhsy0yjlvikjlz3itfi1xctwnzffyumdczp1oydub2wj' );
define( 'SECURE_AUTH_SALT', 'ojzkfkpl3kskgo99tg8mgljyd46o74rjv19ebs4tj23yamgr9ccteffmcz9ukope' );
define( 'LOGGED_IN_SALT',   'ceiatzhvdbp8drwcbzh5dbm13o4ykhaoxhqi4taede35hl7hzylofgryf3jfrwqe' );
define( 'NONCE_SALT',       '2dxtfftunprst8mmep3per162xul4ohjtxckjtlfvdnoqbjfyquzc19j2six1jrz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn6_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

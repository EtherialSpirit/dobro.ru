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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/wmbbwtmp/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wmbbwtmp_wp679' );

/** MySQL database username */
define( 'DB_USER', 'wmbbwtmp_wp679' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S!4U76x.Tp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bobd4hmgdecmkbwyjygdtso79jnhgaw19h257uz938ch3qywfv5cmo7peuva54ce' );
define( 'SECURE_AUTH_KEY',  'h0cwivll7201ftkvirgakk8rs5ltoujkibgpvwuld8g7vreglom8xn0yua0ew6cd' );
define( 'LOGGED_IN_KEY',    '6bwijhkj4kc429prvowrgfsjbgnyucvnb0tlwtci1igax1r3y35y460oqzemaqp0' );
define( 'NONCE_KEY',        'qbnlfydqntzaciuielddtwugjhaiqayhlgnslbsfwlhtgd6stuf7lz2kgjzou8aq' );
define( 'AUTH_SALT',        'ia4si5auphtykftiescz6tttolyihrqk5ibmnnn12lgsas5ilbjgwjjdi4ylpgzl' );
define( 'SECURE_AUTH_SALT', 'jb5vgfvyen3gl42yn3gin2d2mpn55mbqdz8vfovm6jbrlrmokuwswjpgjdkbuwqm' );
define( 'LOGGED_IN_SALT',   'clvypzqaokke6yfwvdwhfebp5kf5zadw0gtdqpskoagbvhlxnjlqcfdp0vmtwhfp' );
define( 'NONCE_SALT',       'm4wjmfnj2e4udnrsbazqi2sxzdrgfzjp3rehc3aomspseruahugb0jdidxia8osn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpo8_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

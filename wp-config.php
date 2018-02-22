<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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
define( 'DB_NAME', 'wordpress_5' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_b' );

/** MySQL database password */
define('DB_PASSWORD', '!1RiHa0Z2x');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'v_y97y%!-4LWD+(h84cbxImP+PhgNxtboL7F604P~uF%vJy6o|125#w;e6lL:70i');
define('SECURE_AUTH_KEY', 'f19LGr7_5777QVki*3If52kH0uOg6R#e&PYsKR80aWDii4|~prld&93!]2(yBzgr');
define('LOGGED_IN_KEY', '&ney(d;J:3j2;QatX##3+](6iW7eo&53KsPvSgoi(O910]4#~&9e1|8Uy/*5N+_I');
define('NONCE_KEY', 'aZ0y)Wg|G;704I]]Qg95931I@LKcj~Tgh%540@Eqcw(SbnpV)@h#9/0/97thpG6J');
define('AUTH_SALT', 'sZ|]Q|E(c1&q+M3Iqyr;v6r4C)KHdEVtRx~2i8*0fB_%1G6~0i@(irP|#&ADu(D2');
define('SECURE_AUTH_SALT', '69/1cejhn[7IK;eHBB_de*a@+Gh7M@dX30Evr3g@843]_DJhYg(1wp]397LX&1X&');
define('LOGGED_IN_SALT', '7serMz;G)o7-C*7bq!6f+Ye55lq1253K96N2L2J@B8(rQ|ZyH%(JcNr-E0Dq(FT9');
define('NONCE_SALT', '_:QE5rh9GiNK36u9XoE2BA-etpf5j[QFy+%854F-h05A8/J!0ew_v5SXU5F3mjud');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '8XUwZ_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

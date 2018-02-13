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
define( 'DB_NAME', 'wordpress_e' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_k' );

/** MySQL database password */
define('DB_PASSWORD', 'mq762G$DxO');

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
define('AUTH_KEY', '!xN636a1dk9N%[53F;z*i!~aVfrgN4Q9#LG%[rE8;90Bpe_DSRMX6|TaDvY[c6~x');
define('SECURE_AUTH_KEY', 'hLZHn+7P7q9K4W%!7a]8wsN3Z3tF*RzmK&2P_[16ae3tEP)bb(7c;2%f7+~F0/:-');
define('LOGGED_IN_KEY', 'BIi%0Zp&h43*@lhVW;lsTTg(V8D21z;s&2Ia2|HDD[b646Rf(U~K+#0G;l&8y&8b');
define('NONCE_KEY', '5a()&@%:p-YRT9)6+sPVTX@RQwpbb@|zz+s8U|NK~le~uzq|U*4Lfp[6h:vh13C4');
define('AUTH_SALT', '6A3!*c!48h&_4dk0NDVG#7p1%v8qNkY|RY4/2Z9LPn4Z1w60L~sl~F@|W8#3)G46');
define('SECURE_AUTH_SALT', 'iC!_9+fJcO_3|eB_Md4i0bKQl1V/1B63o7Ee3eCOT3th6_BaBMFm](s76c370yOz');
define('LOGGED_IN_SALT', 'v#Y8/AUJJB0uf89B/T5!j09OHR78-S9pZ/V9h6|~9q[OqToT:b5rv037slP7CV]U');
define('NONCE_SALT', 'oOC_U3ZM7n3#8Z+M@7;-V*6Yx|+3G/%25lj[TiqL/G#wUl+XN9Bx2S!7-0aR#04[');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'n5D1lKHkwP_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

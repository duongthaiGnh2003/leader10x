<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'leader10x');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'dXm[pKC6K^Ar<G7<79;<|3t<_Q-sP=#`M14F-v;>r}#_8~`;K5%T9p9,;uSf^l9`');
define('SECURE_AUTH_KEY',  'MHa|h9~s*G_`.NUoe8rta*qq,3F 1a<Lm9n*jUp040f@63^,#9sUQUI^~Ni ^~YV');
define('LOGGED_IN_KEY',    'q{3fniE+ZTeDEN-DvE4uRgPuB=-tj$.*]HdmU+FdiO{MYb;_vg+h(}V0`<_R7/u#');
define('NONCE_KEY',        '}Uf!aP^{G.]&9 fQ+#TsX/*M!@pIsK[wRje7np(@tuB06!g[YH(z,6ys&@fp?]<g');
define('AUTH_SALT',        ':{Vo1M5DV2(y62eoR?0^:G#5y2M B}@,j(7:gex>!X~2#pKo)@%4YCupAR~%xe}o');
define('SECURE_AUTH_SALT', 'Vq(d<Z$)N5Oq$UczHwo[(G90D=p}iCgyuA)|pv-ABmlGP 7~Sg8RTM8<m-FjC}4[');
define('LOGGED_IN_SALT',   '_sl[.a6`lBgED#$83Z%<$Nug+oaa?VNo6g;{b_sbE.zwRg%Sv#WfOa[~}/e5+Xy=');
define('NONCE_SALT',       '>pe+_^x|lxufF@YI<j1t&ZXhA:HqK[8>[;EJsZ}|1I~Fsc<[6~}f^P,H-?^rwezO');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);
// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// define('WP_MEMORY_LIMIT', '2048M'); // hoặc thậm chí '1024M'

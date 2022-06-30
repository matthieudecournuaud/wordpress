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
define('DB_NAME', 'Portfolio');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'matthieu');

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
define('AUTH_KEY',         '+TTq#r)!pC5[xm<<0<lE&KUn~Jnh?iLSoS8{K13EMn$ZDDSP#Dt7Z:g6Su3tnufS');
define('SECURE_AUTH_KEY',  'h+j0Jp<&Z,M2>xgh{U$jbEt$4cxh>9@n^`vgPydo%uT!(fe@5Cn#K?Jv+Nvi5wEo');
define('LOGGED_IN_KEY',    'Ua!uL2+BV65_**Ua{-=;_*<PJAHd!D~zK0mHc.g_H:__6SpHamc:t##*h<*!_^II');
define('NONCE_KEY',        'n6t{lUKAO$/LerCI;swQKRkAM8K$!(TILln:5r0+,kFgQ*,9SBGc9?GX,KP(aj: ');
define('AUTH_SALT',        '=RP?vb(?~7NJ7J:Z}?mMXJgL>s^~<_FXfl<8tFW &+>CX2kgeBlKuB1H--mP#BI*');
define('SECURE_AUTH_SALT', '=vWF,&f9?*nf*^T&#?~n/DTqtj+r,3dfLkc{J!_vR>M`9i^LWn`;trsGA:UN}<Gu');
define('LOGGED_IN_SALT',   'OOpgM[9i!Yq3kAt ^-^EU@>H=}i[mn}vyWS?G1`|--HBA0+cE$}o/IvrX8[iDoVh');
define('NONCE_SALT',       '[{[cA_)tUjku,JT*bfK*?]b1H? 62@%g{MNzhUcA2<~]UQR|Z]1$]yDxFjldxa{U');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');

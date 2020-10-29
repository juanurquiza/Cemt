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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'CEMT' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^3ys7Q>4`C;:[6LH5KA&juz8Igqx4ZN2tzSCBuP0?fShf^{Sj^vZ4Z:k[*81OvbN' );
define( 'SECURE_AUTH_KEY',  ',}N/2,L(i9}<>|N#qr?5V|G=ps_y&50!j;nOcc}aq]@Q=GKE;[_Cee8ijs]suyEo' );
define( 'LOGGED_IN_KEY',    'A9nOI?{;EEh|~Z?41lc#P(VY>%n?84qLjp!=]maOsi @&mm7zu)|wGJVh>n9Y=i[' );
define( 'NONCE_KEY',        'fW2UP@q5G[^]k,jYu&Du;}b=8=wIC^*`5w`<sqh^_DwQy+ ?w~d0!G781(??H;V|' );
define( 'AUTH_SALT',        'l{CzVkZMC[!bzI5;TM+Y`7/.wL>P_nz=H!AJ|%I;N_Ms{Wtkfl&caA.WuxU1^bNc' );
define( 'SECURE_AUTH_SALT', 'ZQ7uZy~Wkc9I@rlN=$81:XA>]j0Wh&JCL[mIj2Ud[blZg ZOJ~btZ+>ZwlA>7O`b' );
define( 'LOGGED_IN_SALT',   'dh)z,av~BLk| InVW{LCP.Sw=KQ%oW;=B<XDB~{5ahXfF6o$THWH7uHg6c:@0*eG' );
define( 'NONCE_SALT',       '5dx3c;DJkXdPExkHn)4A:-DEbIdHu0Ugd0r8`P>fu,,/~e0WgsnQ}Ssi!,>!1.@;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

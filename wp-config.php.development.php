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
define('DB_NAME', 'labadigital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`)dM;7LP82,+ISyoWf,E!gK2(l wOx@X_$x%tt|^YN<RMDi#rkb8do(Pqefs b;J');
define('SECURE_AUTH_KEY',  '<<ttD&&%dDRnJZ]4 n)(,n)mW^vig#3Y7<FIvu{@[RJ}z,)Af.U~BhN9d ?:1|R#');
define('LOGGED_IN_KEY',    'Lj1z`N`za(v0EwCxKQ]}?x-.*~zhKreHA}<O%_tiNr6d8bDdNQ,c|Rz`2is.Qy7P');
define('NONCE_KEY',        ' Ag3e.L3H?}@vs~,fc$kBc}7)6n3qB0ue!]w-MLl#0g=zUg<vSziaPP/>[1`m9&+');
define('AUTH_SALT',        'Ov.Lg<[[}/K!KPX+E,A$wh~xUKt-)R$i12wZ1<S<G`>D5T; )o,B:5!!m,Bg9}Z@');
define('SECURE_AUTH_SALT', 'F+u ^TdX4B5MsJ4v(JeaD}@*+|8zcI}D!+p~{ZJeQ5+91WKkY4aQb4wy0>ytvI 3');
define('LOGGED_IN_SALT',   '{0RSh?jV~:=;^t<S|7/a1#5gG[GVc.M,y*aHGf}U#OpboJq0DmAp^}k%|Vh+A9~u');
define('NONCE_SALT',       'rqw9%sy:|+zm9pkM*BHq6.B!7}17TpLKhy>w^~<@Av8]LZbW{_<9XJXob]~^6&D%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

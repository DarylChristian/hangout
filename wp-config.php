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
define('DB_NAME', 'db_hangoutandchill_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'iOjmo@Waw1pUy]tLyqglqimbBT% caA49^Kp*~F>!0{NvkBPY*UC0=o]ipb;6>?h');
define('SECURE_AUTH_KEY',  '4e2-BxrT+JTtvM{^v9kE~d$0;Gm6J0CD>${a8ci!VW/<ywg@f3mrK{e72Q]f@ ?%');
define('LOGGED_IN_KEY',    ',W6_W80vG?!^_S%D)n.LCY{,^(Ys1H+vK[Ao)-iek`t,bK<nW5a{8^eE7:3,U?%-');
define('NONCE_KEY',        'dniYCsQp(/CM76Tqi8xQ+t?W24}S+m6u$B*B@pNS9Ozt123{m-s?XHn0~0k{KL|<');
define('AUTH_SALT',        'NMsEc5EV,5.!<~2-hOeFtK:T!n|65 `-.j[VW#v5pm,L,]}tKI%91O=*0,eS=3(o');
define('SECURE_AUTH_SALT', '^m3=P,wh7a$p;2}bVO,Ug6DO4|g1oD5n~@>]_S.wiLzJ3~!NJyNl.X;$^p#:KEyq');
define('LOGGED_IN_SALT',   'E]Vv2Uxsh2J;Wf<D}3&@oBkINNKt2H][5J=ZV508/nAok+#LvV-t$+x#0~)i[fgg');
define('NONCE_SALT',       ',:(>H/HN 0.Aom7c]PaZ<#$DBx6VslhRtZyP{ZC/XvU1<l%UjJ=?cmA `>xNUoku');

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

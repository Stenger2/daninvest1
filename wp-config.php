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
define( 'DB_NAME', 'daninvest' );

/** MySQL database username */
define( 'DB_USER', 'daninvest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'J5r7Z6d6' );

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
define( 'AUTH_KEY',         'Qe0x_eu7.8oL~Pypo.Y%4,<;,4Z^_MVfR-r2Gy!gA[<b^,Gz,@t>`F<!(E>STJ 6' );
define( 'SECURE_AUTH_KEY',  '`wQw*3k$s#WREWw~2X;WEw)tw9/wbI5Fm}xqYOLSR:Xczjgd5HhzE3*!&RJY}D?|' );
define( 'LOGGED_IN_KEY',    '},s0ERl3nabJb$Jr,|ogG3:ey8Djl)S_NZEf<Oz;N0t8=V-E:LjVNptCvP/,LKg}' );
define( 'NONCE_KEY',        'v.e=  E&10HX_WT +oHi+c&$::,3}IOvV[O)bSEppuEo!A9IzPs5X/L<W^c4tC|u' );
define( 'AUTH_SALT',        '3 `MoZ18DTHm<lfyG+[O$B`-6b>n,81;m[WbX;G<BkoWXrevy76oM|T]h7Ox6rC_' );
define( 'SECURE_AUTH_SALT', 'O[1AhDO8?}&wA~uEeO%we U!!a4F+THUVwd/mQy;kBj !B67>pppqf=pZyhmsI64' );
define( 'LOGGED_IN_SALT',   'e#z`+a4!-;NEz]t7@-:4*;37~ztS,zV!X*bqM_Te+^H%!nYi3 ,~:cP;;}w`QC?x' );
define( 'NONCE_SALT',       '!x&l)V 5B.}R]`:z~=@qOS;# Xx4K*|P@IFna41k9J*N@Im(^^= t.~G4ALFYg}F' );

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

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cd4)+qq2hgn .->,Rvhnlffd*4GDC`-h7ymOf%wDq;5RRvkH_VCo{T`CKu0ZYh&X' );
define( 'SECURE_AUTH_KEY',  '8PB!4O)fHi<jp9^0>cKIajLwNiUZ#Y3-PGKI,0C.-5n<oz_sf~Q;v9*t11q8C=g%' );
define( 'LOGGED_IN_KEY',    'HarS0b]0~NY}@_8d}$N:Un|3^zD_|A+apu$T/]B  9aGJIK>#P:+1*2AkxU;w|$G' );
define( 'NONCE_KEY',        'nf!o;N)X>buGh@1n[;Zb/6/O^Vyhae8$?iikP*~vx,C&g;xNA5QRLw h>_7l@CDv' );
define( 'AUTH_SALT',        '.4pGTUD1AxaJ3l?!su&B0&lHfmvBO1<~GL&n2#}62^2}hY?Mw?nnF|3$9U&:^2U=' );
define( 'SECURE_AUTH_SALT', 'GjA0MT??*%YgTa*guWxB#tT}b&I&MZDskO-~!Hx}o/L@}pqPEISCqa*UO=4ym+2?' );
define( 'LOGGED_IN_SALT',   '5y[6=yC(rrrYoG5n:tkg).3g<7ai$#w}lVt4f4hw]4. N?+X=5;/3{vf,]tvjyhO' );
define( 'NONCE_SALT',       'ZDG#4upgTGveBZO{H5u><mXEhwHP(HX|g34.a-T]P{h92BFw+3j:5Oo36Qtj3$4t' );

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

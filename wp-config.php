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
define( 'DB_NAME', 'faber-nepal' );

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
define( 'AUTH_KEY',         '=Cl%uQT/nB6C.:xiHtqw6NT63]S4/T{,u!+u!vBqN:^^tAbc8zL-HKgYei5w{WQl' );
define( 'SECURE_AUTH_KEY',  '9VEkU-=bDC2`ChA;-qy^X{V5j>/vgOUi]*(s*^_J;iOEB~6Dziqr5r<l T_Q=CbT' );
define( 'LOGGED_IN_KEY',    's.lMt8k.pAd:hk{8F<Q/%jh44db{kMiDx{.sF0~Xt=5c{.`%N=*J[X~7,l~VH^!<' );
define( 'NONCE_KEY',        'Pd TyV7(Z@lA5yD&1j:Rvd`x,DwH<=e[TK4{P,NJH%W)V~uDhhS4X}>l!@.& lo{' );
define( 'AUTH_SALT',        'kZZXB&|[)5zOIw}Ets64v>id8Ni8%at?)mjz/-3MDQ]]140<ov-TgLrn*:^F?8H!' );
define( 'SECURE_AUTH_SALT', 'HWe{_muXtV0<J$A,(2F-U14r*-d|x|d^J]lkw+pKi=7{b@7D`~JjL7koCwC!k}|m' );
define( 'LOGGED_IN_SALT',   'psB/@.R`DHYK15N!?f%8?FawZQQ(x04}-Av*o>Hq?[`NZV>dDT:@<6u,v`mu4<HE' );
define( 'NONCE_SALT',       '+L>l_}wsGo2r>|EyUDpw^<,bv8e.[|mOapV]pD~AYV_2Mxq%)nz%(JP)qpeKQFC&' );

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

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
define( 'DB_NAME', 'projectdb' );

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
define( 'AUTH_KEY',         'BaJ,mPR4T=C^hNc~fGm+?JQcAP~`|m>r.4<l6s,.WkRt<cP!@s6)9ZQ1A[+nlWYL' );
define( 'SECURE_AUTH_KEY',  'm|97;kl}v6|?R/e`o?ZBS@`%)2T.u2da3[RqRYT&<#vFLv9/<//_WCyHs/&w7D=o' );
define( 'LOGGED_IN_KEY',    'IUNQBqA>y+q-~M=?gHV2n}G%z/deQbv}__w/WOAX zW|<hp;@YfW8w//`OHB9p89' );
define( 'NONCE_KEY',        'XyFZ[MtK=vRB}bT unsT)}qELei|x9U]tO$f,/l7A7_U}L~9@baBg4UR7<<St17-' );
define( 'AUTH_SALT',        ',.P?dIpM$H.7ey.Dn#7Q&WM~F9:9UzHu*2Gjktf),c syDQx6Mvh]&VBxog3vF(r' );
define( 'SECURE_AUTH_SALT', 'ESn/ Qj$E[=r4qd4i{aa6}b;0wIF9Q{nd`ausA0J($$hNBB>`Yda(/{`Z7]hc&U#' );
define( 'LOGGED_IN_SALT',   'X&qRd_r|QizWfg:xN)6muP.!{&)V#3sy1:v9$9T]1H*MC4]&c-/_&V:i}H=*-mBP' );
define( 'NONCE_SALT',       'YHX;) 7Wz&-vQ[,Yvdl]nHuny$%E[Ky=h-}SxU,b*22f.8*$wp*:;.$6$Su:5=AE' );

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

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
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '_$W!HdvxbH}^*AX.!T-k[EE_K:pURq}GY;k`1M|V,WO=x(Ncn;xMmYu.pcgITIx{' );
define( 'SECURE_AUTH_KEY',  'i^#V)/9A.CrtiST$z@V HkS/$YclsXDsOr~q~d!s@To]escgF07STH?}&VL&YC9G' );
define( 'LOGGED_IN_KEY',    '%d52/UKw8|lg/=YlCkw]Gx){MZFLe/G>~2BMJF7yon {7-6p@-RnxDlmR#SY8CZ#' );
define( 'NONCE_KEY',        'u#a;x2X)_~/V|(?h2H*c+<lL^Z-zk!{=~NFOMJWU{^|(Q9qqJ>{DO1o>.}o9NvX)' );
define( 'AUTH_SALT',        'V{QoT=tE};ay#Hq&F40S*]PiL1Z:U]FPBRCf/M5g-bjd=!U2KPKq]9E5V>oXnP>J' );
define( 'SECURE_AUTH_SALT', 'zS}6njJI&oOmm1h5&`QC,pb,JN^Uq/*rOd-wnHb#`zc(//CV3U4:5`&cTGdit2H.' );
define( 'LOGGED_IN_SALT',   'v8xPxCa0x!Us/dy^DfaWE&*LA_+P:>oRPPzWM_@SjKDjhj=<aRH52i[Lh#6daHM#' );
define( 'NONCE_SALT',       '1SY6Z[]b#wM=D @28{kKF$~x7n$><s!-h)mOLTBfvpW.YnO0.S)K.CTi)!1YX&yI' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

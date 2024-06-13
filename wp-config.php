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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '5r;|bv[?7m:8x,X*svN(K/YZ|Vy]j`XwMQY7/|,k<<zEAv=,3C[!vmaqZ+:^1~Lg' );
define( 'SECURE_AUTH_KEY',  'U0,P$(_i[0:*qy_kY16YE-Oi{ Ez79pP^&dd^(-z.yh%}`;m9!tgzqD&^a@^^_jC' );
define( 'LOGGED_IN_KEY',    'K0_OPNZK04{dgZQ<jI_O+{T/KJcm!RsVk.tz:D!:zuR/F9Zn|-^4iHttoT:z| }B' );
define( 'NONCE_KEY',        '1tWp1D~rDzP[f_)nU ~|x6Sv!2r7Q^`.J?{9|kly[<*}h>cWc@GL^h(7q(1DT,3(' );
define( 'AUTH_SALT',        'C{t;2r5?5C-8x#LFR PG1w/nW~:3FMf}>ZM+6l&OC)5d j+lJO?T(dgY6shwK>~)' );
define( 'SECURE_AUTH_SALT', 'fNOdk5Qy_Zf:2i; {%9S{=@+kzZ8s]sb)G:t[d4J)P:<T+W+0<)cNbrLQ).+ZUTB' );
define( 'LOGGED_IN_SALT',   'RPCBPI:%7fAM_ynwgU5r@)7aE9a8?IY#c*7Wk+vW-/kgTTj*eay:MM-ptyT5s&m*' );
define( 'NONCE_SALT',       '?VHm~O&sTJM( r/E{HQ6^3mW>e%U41 ~kgtT bYNr!h3KG!PCksQc^WpGg21A^Li' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

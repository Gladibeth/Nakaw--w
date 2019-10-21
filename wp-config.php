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
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_nakawe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c.R7~Kfaf9B]P{,48=NXh Lg+^},+fD|ceQ^);T~RBO$$g#c6Y-4rwC_Ou!~^+~l' );
define( 'SECURE_AUTH_KEY',  'b*4<AxEPdyUiXVG!v:E@bH0tNrXCG,ZVsHH(%Hu?D0g%(cfvkB05L+W}U<#6[u{9' );
define( 'LOGGED_IN_KEY',    'e<kn]V,!!/T|_E(<u^:A*eGj-gyF=);a)+AjO2vF1C~W:SblC+KV;I84is^>BkoU' );
define( 'NONCE_KEY',        'EBM@7H3! !>H^K(*/yGEiciQZq|Vit:qiL]4i[s[ PFgA6];Ofc4ms+X8U^{}xHs' );
define( 'AUTH_SALT',        '8Jx:A:)h1{~]B=e!CQ8h$`!TK0aK6/pSAV6e9Q~5*l >=gqXr#fyW&6+S@gwXU@`' );
define( 'SECURE_AUTH_SALT', 'Cama#M0v]z44|8w@~YWEm7<(I_:O~|Dc>y;i:!6DDQJ[:GarN^9O$v=b=/`UUqP>' );
define( 'LOGGED_IN_SALT',   ',Gdsv3Nl8EG}^(L!kL>80#^jRS~v2YHVzv-(a8+z})0u!=9fA_d4t$3j5>>kZSFX' );
define( 'NONCE_SALT',       'n<:e27]M^(L|YOn7ib<1kH|Tlo2t>{Of`_mI7fB2r&^I^$.W7`KZ rdY?6awj1ZJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

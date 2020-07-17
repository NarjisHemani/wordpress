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
define( 'DB_NAME', 'wordPress' );

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
define( 'AUTH_KEY',         '6y!l]a{hK<LqX~A{z_?5L|hDL<!{9q-c`1vDA0WfVr;|D*qK{6Buuo7k/Sq!}M(l' );
define( 'SECURE_AUTH_KEY',  '[:Utf,b8@02B,!+hm4G+r1t:kHd-oT(^oYVG.4VYo_@WLZQH1BSxwrR/HA`=0$4*' );
define( 'LOGGED_IN_KEY',    '@cj{LdIhnDqAIP|Ch!s`z+=8S/XI]NOB_rIm<m9ZgEdPcVv<$N!Bwf.RPK3IQOKX' );
define( 'NONCE_KEY',        'R>aFcbP|yN}q2r}!uy]6:H-`SYmZ^QtTH`w~Me&}V5#geG_MArJu/c4xZd8b`@lt' );
define( 'AUTH_SALT',        'S_&}`^^4{1,qBQ:G%(>7GCMSq$F/yPo9;$Rsh>/N~;)?`f.Tl23v?ZN~=f+8*~6J' );
define( 'SECURE_AUTH_SALT', 'Ph2}XcA)9|r~HIUTUY0]S2ZZ+,AE$8E9I/e<wXi6V%p(9DoP-{?~Yk{Y:4>*LLUV' );
define( 'LOGGED_IN_SALT',   'eG$+7fn8:X~RxF=(DBE|8U<4k.qNs X:pkJ*O.wX{4^)0$3zRFcIS(5,1!~*@v_B' );
define( 'NONCE_SALT',       'hSLO&qC{b2-DxIc4dIxlguIOVOn,HM7B!sG|wCl0S1j^@p]zvz,ex?N[oO^,v+{7' );

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

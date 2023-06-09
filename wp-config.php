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
define( 'DB_NAME', 'xoxlzkd' );

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
define( 'AUTH_KEY',         'clXuBWJo!k|^<otOQ5A`~g.i|)z[`$oc/NlQ1t]Bu}yco fz d>:C5IpW;:_</=h' );
define( 'SECURE_AUTH_KEY',  '[-M/:nRRQ{h+~Ng{;crY|PVPrGn:5*?KW?K&mXf5:]$p$.Z0otP?ns`, 6ycoCV6' );
define( 'LOGGED_IN_KEY',    '{b<WK@5Ly5]MQ=W(3YXrWyvNj(!BS4C?3e6?>?Ce)H4lV~!l,S34v+)WjX,4gQ0}' );
define( 'NONCE_KEY',        'NWDr<Fj4ntgO@mp8SHTs@3;ws<RcM0#V^6rmS]eC3G5j:iKd>!Gs4+/9e~$`{d,y' );
define( 'AUTH_SALT',        ')/ftwrXx|TP&$d+zCS5:e2Dw>]!OE u#?&*ft~hc0]bE(^2+yaAy-`x>,XTw^n(!' );
define( 'SECURE_AUTH_SALT', 'J`&D{*a4k|CwfIj@TPf,K3()r8sZl{1>nJvldyG^(G@aH1$^G$xUy~-R6a/8z{.:' );
define( 'LOGGED_IN_SALT',   'XjLo7N%;i5cj|=fXW)QA_}>{Di{ygy#4D/4T %q/$r~v|)u`OJKey |rJ25uGnL}' );
define( 'NONCE_SALT',       'Jmzc<CCp:@A)pz|Xx<g8xum4 ^<xZVpsF?lS^eSS?8Rx_TXeCi!H+<5-&`8)/]^)' );

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

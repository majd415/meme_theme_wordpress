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
define( 'DB_NAME', 'new_nn' );

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
define( 'AUTH_KEY',         'x1cNJMm~WV]M5+_o!/A!yaaw;t1HKa4z:,;VOt_v:Zmg[U>&V32<#otBa9]X~ajs' );
define( 'SECURE_AUTH_KEY',  't(9:0)Z_,Rm7=<^/ie}r:j7-bEnctS+Fa%g+rbB/L|I_#@7Q,4nHTua1H~;_F^5Q' );
define( 'LOGGED_IN_KEY',    'RihoUCEHLo|nh*||g<UB4I}; DH>wu?<j~AYE{!gp2 %r]rG(T{,X,q+)S1Jiuxi' );
define( 'NONCE_KEY',        'D)1f8D;Jr~S^]P7-%^Zz] Jji_aOrDt(cnD{sljuw)RSpTR=y!qq_-Y_Ltt_NCYQ' );
define( 'AUTH_SALT',        'w8HmiV^yT. O9ki:Q[EZFa#Zs/lUi{} Fe?K<O}%V^?ese+/g@!d!!QT4o[EuY&v' );
define( 'SECURE_AUTH_SALT', 'q/xc@X|y+t]tSOV9)u.=:Ia~+H^@fJA=t?>=H1M7_+I4TQ$ZGQhK,4! hfc<d{7L' );
define( 'LOGGED_IN_SALT',   'M3[tkqr8&ACqP,9>m`&=MRBK$T~3o UIO~hNywbh]C425,L1ilMHxfY$_7II!]h2' );
define( 'NONCE_SALT',       'Bi9m4sGfS>,/jS[@P4,@?fYw-3&sKgjLzE{cHL*hqz!vGL_izdjTu^=xlP na$kM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn_';

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

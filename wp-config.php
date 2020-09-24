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
define( 'DB_NAME', 'my_db2' );

/** MySQL database username */
define( 'DB_USER', 'my_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G2@Ifan12' );

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
define( 'AUTH_KEY',         '?JkY+1q/:}h9[H1S-N,73jRqKf,u[l%Ff4xk5D+Fp`rB*}(7.b{e`(bzI?`8o]91' );
define( 'SECURE_AUTH_KEY',  'k.M^i@Fr=%f1>(ZuAQ#rf1zfjr@x<LO ^9MA8Vcv9U*qxMO2{$Z)$TK{}Wr8+CR|' );
define( 'LOGGED_IN_KEY',    'pihBu>,@vnNkL6w[{?^Z;_V{Q5=&]r`ZgfrqUyWeKAw=?/iy`IdgXe^,J#2PtGdq' );
define( 'NONCE_KEY',        '7>n7!3y50Dg5,w^GO$HsE.>v!26c;EbQ`A1^g$a9>09Q<ZipdB1STV J^FY-7=U4' );
define( 'AUTH_SALT',        'b4$A~[Q(Vqzr^th>UN~ui{5o1m!FT=bR5@ls]*NZk#JofosUJzH#Kc^J1:9!<@|!' );
define( 'SECURE_AUTH_SALT', 'bZM^9J?GHc)176ZA:@)?1?#F%Ua|](Hh4J/{(i9{SShJBt+h_+jQ/bRqZZiy!ebG' );
define( 'LOGGED_IN_SALT',   'f}6Q,5tLC4:x&`7t&0fz!.Jm!LVa}MTY|t/VN<yi~gcf_})|a00;]{|rmT.8y)<_' );
define( 'NONCE_SALT',       'jed9j*9r5Kk_nAed1nDA?<b`y^+MUAl;]ORVl<54|?<hOgP^rc.kPP|(SjwW-;)1' );

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

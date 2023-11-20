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
define( 'DB_NAME', 'xbwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '#|dj.%vH+!)Omy0P$heXE49g=#:Onn!<-.:Bh}pr:6WTQ|bA=L/YD{g`86RL`_W;' );
define( 'SECURE_AUTH_KEY',  'Z};wq~,/T2QvtnW6rE0)41%NWklLBCm)I1VSnv>hG&x~<5sQ5:PtsB^k&sFCG,ve' );
define( 'LOGGED_IN_KEY',    'eja$IgGm$Nr[W,4s!~p%xZ*W>!>vEc5yD,E<NShU`j1-rs{Qezwk~@b&vw-?iTw~' );
define( 'NONCE_KEY',        ']=:#sLdf:q$`=$%f!Rn4EX!WhhkzSW/Z1$Q*CXJB>eK@<6<G6QmnR-ulO9(y$Zx-' );
define( 'AUTH_SALT',        'cwhCC:-@^(D>SwL@HO>vV5~R_X)Wwf@ndQPCMNPLx>4ghk(M$G:+W`crfz-t)zv3' );
define( 'SECURE_AUTH_SALT', '(s{=;8Jr<ZF&j1,+m`&*=!{)/HNo;?B& I|m;6xkK0lahr^/]y|IDt.4Nrc]VO+I' );
define( 'LOGGED_IN_SALT',   ' k%Y22+(Cf_W2p.<%CfSL%Eh#:eh/3;+ggP~J>MdC+zCTt?=!8GiB|?(5!z.~s[C' );
define( 'NONCE_SALT',       '-#OYH[7_h7Pq8Bnf4]nWf)RN<cw;r23ybp{lf|aHo$P.s?E}?LCNz.CLNjl#Orcb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xbwp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */


define('WPLANG', 'zh_CN');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

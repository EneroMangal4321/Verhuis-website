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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elpa' );

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
define( 'AUTH_KEY',         'aR=bU@rj?Bl&&s_Ok<^YQ(+fAD`%RAYX^IzhpPkTJn/DcFvMq8X9aQ:*/Xl4=B% ' );
define( 'SECURE_AUTH_KEY',  '!vweb9ialh6F_T:$1O}7b0,_:A:x{za_K`Vl7zEHE?o*GwW%amr/HI7dUQDZ}OTE' );
define( 'LOGGED_IN_KEY',    '$lxI mM1@U)EApGmTXi_OOB<K,-05ic HSOQWAZhr5Lny7}K(DYwGmF6K-*BwFc^' );
define( 'NONCE_KEY',        'N HNU58yIp?JTV=9_zzWGkAtB7bi@ZGNE$r,W,->I{<`u7G3>T%#Q_`*R))0#eP^' );
define( 'AUTH_SALT',        '-1ca?L_CUC idYUo0Mx,A<X&qpp{TllB.`E`2^tC6JhUK=UT,54h,1I]UKRRgf5n' );
define( 'SECURE_AUTH_SALT', 'b60(4|m=~Obbp$i(txMp5TvCojFjp9(+p~H>9$p~k4T:1F<Tfd9v.xoe9gf`xOZW' );
define( 'LOGGED_IN_SALT',   '8i-GqkYcU(w9XG?B%OaX]HczhhJiM}X0Gls/W~%]-~$SBi;(Lt;iY(_4hsiim-8i' );
define( 'NONCE_SALT',       'k_^SzfNC>H$qK2@4f-JCkW0^?2.QIs+uBNej5tBp^TxGD@]D;O?mk,GUHfQ(%;xw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_elpa';

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

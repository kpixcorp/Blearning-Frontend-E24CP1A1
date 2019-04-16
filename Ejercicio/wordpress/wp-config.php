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
define( 'DB_NAME', 'tarea1' );

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
define( 'AUTH_KEY',         'jA}&qAG{IbO-]v$V%>m66#at xcNba,;UJ.At.}:15r:`QW/2l~Rzm-1p{YZ^|d)' );
define( 'SECURE_AUTH_KEY',  'P<UFV|Cj_dtm0VVZ93Ck^T~e:+@261EG`1{N!n[/auv_%O:F;RR.=9d5yE[M(Z].' );
define( 'LOGGED_IN_KEY',    'pF4yFv>v$O-C@f^eN^:SA*~:3`,53D[19aD,Q=&EsE!g3FAFnYX0L9Q.fSA/Z(kq' );
define( 'NONCE_KEY',        'rDAmB.O<ZPCyf^/i[~a`K<&?dS_RUz<Te??P7M{;u>BWe}`)Ki!c7btL7A;fR}+:' );
define( 'AUTH_SALT',        'z#[9c_8C7<Ay9je^kKfL9J(N~^(1W78qQ4mk/.q&i7qCj1~?0Jxgk^Aa#_7U.y~l' );
define( 'SECURE_AUTH_SALT', 'dAm)z%D|+[rolQ=G0]HcbD?3T:^q_ARQ:C!CbTb(d%_6TOI^1p+2x4_On>&gCls)' );
define( 'LOGGED_IN_SALT',   '%h]&pY(gCBOQ,eF$)HD($q[If~~U%vU>*9nS#NBhgV[) cv C>?kZudh* 4sNL{G' );
define( 'NONCE_SALT',       '[M54YM2J]E^W~BHc~sbFHt@%YcwwIAC_Tg/Gyd~;YljMU+EHKwR{tw{tc?wdq$Us' );

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

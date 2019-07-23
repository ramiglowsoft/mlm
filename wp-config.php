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
define( 'DB_NAME', 'trendsetter_dbs' );

/** MySQL database username */
define( 'DB_USER', 'trendsetteradmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Haitrendsetteradmin' );

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
define( 'AUTH_KEY',         '!nvY4fV8bxu&u,V}_A%dDyAbinTBQ|d-F{SwQ$JL//veoCr&p*[3.q4[+29U~$bC' );
define( 'SECURE_AUTH_KEY',  'XY4>nM!ry(VwlMPHyhT>v@(w;rsL`lL|=>@pso$;BLECGRd8hm[<w#%+P/W<y6B^' );
define( 'LOGGED_IN_KEY',    'tJ_biPLN|Vpq[PsdaKPdp0-x*&*D6:-(I%5xbBFu.0g8ITxaoI#qv9KmPGf%1dOC' );
define( 'NONCE_KEY',        'x8 5{1:w*W.(z@TO_$<qUPv&_mS+K^LxiQ%&x}X:pJ}luL,6KxvAH!^,Jo<=4<IN' );
define( 'AUTH_SALT',        'Y8(8.ApM QpJ/5VhClWmqi(6zlK7tou~{7/:YX@jPB[~hI<g4cC~I<oxiD$3iJEh' );
define( 'SECURE_AUTH_SALT', 'G]uNB:SQX}_P:2;0K>n?wa%_jU#>%.+?b%@{[^%v]glQEgb.k)oDRS>RX;@,uiBm' );
define( 'LOGGED_IN_SALT',   'Ks~bx@Cg^=h:wn~37Mz[:Nm7<K/K OYIFdfujJ~=P$R1M;%~<3c5;%m,48,0dNGz' );
define( 'NONCE_SALT',       'pvz?K]pmicIU~*E{>K*}0!}S(5D4&[bSw*>(i3ulpikh-G3k!sYrPIodL<]d}saM' );

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

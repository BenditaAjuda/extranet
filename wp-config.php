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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']1]DB$kn2?sv7u*HFiz:)!EsM nAY:VsJPF.tcvId]L:sJEkevIW/XfPY#{y.Dq?' );
define( 'SECURE_AUTH_KEY',   'JS|im!P(6=JbFlamz:b-7j;EAG|VN5>4*Qba%aqU2&[8}R2a+~pkp/.f?s7&~Xsg' );
define( 'LOGGED_IN_KEY',     '#7oR`.u.r8a~[_<`A!#T`j4;Rm-4J MoTqedZyQ_L>&#be{ld;_DdX`+9(GbKp>_' );
define( 'NONCE_KEY',         ']nJTUHzAnUp[!/&2v38|2rY0#K9Ms^:/iJfjwdbFSI%*POTpvIw|p~d^@%;z&DVX' );
define( 'AUTH_SALT',         'vmio-`K9!&H8ue]m.bbARHK}@X]<Dc?-qN}s1dpucfTuN&Ki#~u0 bO e?E]Y@%r' );
define( 'SECURE_AUTH_SALT',  'y0he{Jv7hG}IFP2T@Yjs;%^h<I`mg6Sz9!I0.@[<5C93bo=4_vL?uy k+&wsI_~I' );
define( 'LOGGED_IN_SALT',    'kUM3DEEMupWd|If3,;Jb>6ccqBfH?JYDa6d]_/~Wl,P^#q$VI5sNwc(^NZCCRp9c' );
define( 'NONCE_SALT',        'w|<Y-HKBd>$48QQj-%dG,aE*g)C@+n-VQ6F?<Vb(]Z8ewn(X,vLyE!d$*14!uH}B' );
define( 'WP_CACHE_KEY_SALT', 'JSy.Cd2Ss7>q!)X&yV&g >y`<s=sTGS5|Rv.}BiKgOT>R/bEjON~}tGoM78P3LdS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

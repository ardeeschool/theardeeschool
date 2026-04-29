<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u349765777_L7RfY' );

/** Database username */
define( 'DB_USER', 'u349765777_LoLVl' );

/** Database password */
define( 'DB_PASSWORD', 'XkuGF4vwg5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ']ER,4Ns]80H|jETa^EA^G!Z+$>TxvQU7k7PgDNWUz$tY0,{v3UH,N=GCT$_3-0W:' );
define( 'SECURE_AUTH_KEY',   'x^9QD6X;N2>i^sNi_1$=AP<UW[<(uQ^}GrL+8=:+@ke&ZrgO.qzHu>l%UtZhZ-AB' );
define( 'LOGGED_IN_KEY',     'EOC.D>}L_[xT&a:qyr=z8Ms_8:*8,kN9IG[iHV8b.]io{W,6P<u@Wja^Pxr,;T63' );
define( 'NONCE_KEY',         'ALV]9tZ(|?Mgy9Hez]1@d%k#N#Hfg9o+D{3L*@4D~Kj5!icSJ#7/h[&7%46Ol5d8' );
define( 'AUTH_SALT',         '=s:J+Cy<XUn$H_RVqYBfM,fuzZ+EjjDB3Lsl_dJJ=V)Ue6VW]VX(kb?.1 Y<4hsd' );
define( 'SECURE_AUTH_SALT',  'dhPkQ T->%6==_xJ(8V<0vX34)OHtnJfSv#]uIoG3Cm]1|P6rA!K2U%7K5fj!%=.' );
define( 'LOGGED_IN_SALT',    '_ `q,P:Fw9p[?$yx%:M3e`Ib&qmw}:$m*E&$NB:dSbR`|lb8sk?]GAU5DA`qhzRA' );
define( 'NONCE_SALT',        'cgATX:Shf,7EhhaxAG. 8f>:dBfrv5rNi%!j/><+s YNB;)#@!,B$ )oZ+*xO81b' );
define( 'WP_CACHE_KEY_SALT', '7ot!,Jx0iCu;5e+b7w^1xY2K,:[$HhfWCh8y,wmXyd_)Cs:O*S&/a(WOi.BZ@E22' );


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

define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'dad07844a293c94b72fbf80045ef476b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

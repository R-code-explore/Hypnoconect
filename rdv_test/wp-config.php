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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs6236808' );

/** Database username */
define( 'DB_USER', 'dbu531577' );

/** Database password */
define( 'DB_PASSWORD', 'azeqsdraymond' );

/** Database hostname */
define( 'DB_HOST', 'db5007561751.hosting-data.io' );

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
define( 'AUTH_KEY',         ')(e6o49em7g>,=&,844^JB)39z!O{X*O1 XHCrAdEbqTQWWtoE ul#(f)=jT71U+' );
define( 'SECURE_AUTH_KEY',  'e5t ;}/ eZBk`Mg&O!U/2DCXN?A$Jvf`5=?x&Z;&Jzy%8fLE,gd<N{p*a(j8r3xY' );
define( 'LOGGED_IN_KEY',    'E9h!.x6W*hJpuInJ{Gi,^$W_5*mH9;zjG:*aj-:d1[H@;$khB+(O}>w*>^axb)Ys' );
define( 'NONCE_KEY',        'Hj8}0?~$Zs{>O:H12:FK1Lm Gd<9Jo}=`#?.d`^|K4+LGP*?zv*f~+50&p*x/WGs' );
define( 'AUTH_SALT',        'q+e}`#o){`NE/LU~~/UJ80#$yw`uk<BT5kc}R3s;.E<}Kdt^c{ZPY=UY&nsz6!1Y' );
define( 'SECURE_AUTH_SALT', 'FKj+BK]Qu-olP,xS/T1  []U|!oI;hNH[.|f?V!~BEqPIqVDD ~+]N)LR0Gw1?oG' );
define( 'LOGGED_IN_SALT',   'G{XDI_Gd+UBT[of}4+I@SbagMP)=[@yll19@*SjDk*zA|T~zKTCuv3QiWS6FClC$' );
define( 'NONCE_SALT',       '!tz&8D2i=v%B1ia=w$bR`(OI)ALXoDW5qWELf-v>WE4AM[8AcWry%Fu>8-Q;k lK' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

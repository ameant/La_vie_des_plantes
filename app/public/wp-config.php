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
define( 'AUTH_KEY',          't|Kh,uV&%|~jE<mZUjL$~62{=j:Mxah&8oBjBE;9!M01q2oyLwlF[JI{TA^tvoEF' );
define( 'SECURE_AUTH_KEY',   'r#$o#NJ!Q3CMVM:# x.wRcB8fvoYv.&:ros^~lL=P#|8n.C4$w2=#r+Y4X9>sks0' );
define( 'LOGGED_IN_KEY',     'T8#!O%~8*X3z;E#Nj.?`d M,wjLaBpTOYi1FiJ5OiG#kKao>.0_m.j(mSDZ(E|r!' );
define( 'NONCE_KEY',         '>#s O7}@bo(!PFV2Hn#{XG.@$_s4y:l$3AcMcg@X`tEN#4;P.3_xd=5iXT-;,1or' );
define( 'AUTH_SALT',         'QE_#(W^UFgpq#%5qVy-iDgtVOYLT+UK,oM5!Wo%#l9FvA[UNWj_Q[L#e(>t-]L,?' );
define( 'SECURE_AUTH_SALT',  '=h%dp]&9ID=?}dR pMqkk^JL }V_nMOY@U$_A~dpFl=4rbp 2Gx0|pzu5`8+=d0j' );
define( 'LOGGED_IN_SALT',    '!5(VV*m:;/+Y`)`*-j9;lmO`KCHqC,gO%oT.HbmK >rX04c@^z:{n,&#) !T.?eE' );
define( 'NONCE_SALT',        '!*t$a}4shu>7WMI|^-(GA%,qAh{1^Wr*937:Ix$jh_ChEAZCJog^^qm/>M>a`tKm' );
define( 'WP_CACHE_KEY_SALT', 'h=S;X* ?J;<0KuA>,y?v>?e&!>[!IHL0;JKkWzdh>15O&h;1G$p!#6}1op`)vI0~' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'inceptionuser' );

/** Database password */
define( 'DB_PASSWORD', 'inceptionpwd' );

/** Database hostname */
//define( 'DB_HOST', 'mariadb:3306' );
/*define( 'DB_HOST', 'mariadb:3306' ); -> worked but without mariadb ?*/
define( 'DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' );
/*define( 'DB_HOST', 'mariadb' );*/


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
define('AUTH_KEY',         '|bbMa/I_{|5OD.QM]nQd;xNxqr0g~.9Z}|mx=qLEGFPjAUIK!^ji;o38Up,fS3;v');
define('SECURE_AUTH_KEY',  '4iBz9Q@$SoFDryrOE-(t-)y:5$`YHi)bT:$.nr=QEsQh2cm6F+7njZuo-32#FCU)');
define('LOGGED_IN_KEY',    '^X%sg<||#XeE%Vi}8+},,IL00njn,&(lA=Jq#K+A+2US/[/q}cw9;(Y,449Zs4((');
define('NONCE_KEY',        '|]mF|hzP@!!SP@H*TM9bt-=0v-tB[P_*:<_j+F*xU.]eEMt{KZ _MuQKR+{HNRk5');
define('AUTH_SALT',        'cpFoP$`!R3;Pi#f9B5`vYc*(Vd+wMCY_kS-+a<$w@0Y-+S|_dk3iV7G{oCC*@E#V');
define('SECURE_AUTH_SALT', 'a&EovcvNc/09}~c`4md,(7URRB(q>DmDjR/:-ixo4z7)# V*P+~f7aBWX-A>|:%>');
define('LOGGED_IN_SALT',   'X ~*rK[_57/s+?^zk`<Ts!g5~~WU5J&yHZ++Hl0o+}sQ;&VW/-IJ{-hD_ZUykU#i');
define('NONCE_SALT',       '!.KOte`.|jZ;Wt)mV]5Iz{4Gr,!6J/>y`(c!fDn]:UXcW6qy+hbTle`R-LKmtO)+');

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

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8#gL,Kg~gX%zM_QkJHrR5PUQh[0Akv3nM=AIp1SPLW^y!q{?hl6@+(k?U+)dF/I`' );
define( 'SECURE_AUTH_KEY',  'm:7Uk-U+QVZa_N~h~,{d{C@(%n*s2Dn58[{l}oc#.)EKLvEA{fNY]Oq-5bjQ1Hn]' );
define( 'LOGGED_IN_KEY',    'zcU[NV<;%xYqZ[aK+800[jA)X14U+b!L4NP$.tMAw]XN`8J:z,2_NUEKC>[+~!h>' );
define( 'NONCE_KEY',        'tcn9l1suvOYN2AWYGt)u{bqzKzo*LeZ5@=Dx^7CU:r/]n^8~*.g^[[|cs36F)/3?' );
define( 'AUTH_SALT',        '1Vv//Y]w)d#j&7JBRK.Zv4,3k-e_Hn|{2eLC^m|W~zr^wh[g~,+J.$Oo2}Ne!QGl' );
define( 'SECURE_AUTH_SALT', '04y*l}Wl&?V<Y&#w,e.EQF*u+;Hm}oYl6$Ki+UrrUSu|12PwX]yx(2M.?3c-R@G9' );
define( 'LOGGED_IN_SALT',   'C=CLON7E#yjb-<|Y=kXgU&.N~qQHYT^3Uo9i`B-RL PW~KcUzZ4tl*y%4Pr^+gHh' );
define( 'NONCE_SALT',       ']xPVH YoeM9DzgwaD|VBaKZqx4z3X?4],HKt|!ut3P,AqpXt&[5;ix;{vsL1<EcX' );

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

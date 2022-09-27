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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '}sqn;CO3ybPucaqFlCQ2fWbQWh>XfiZlI5+a@feM{#iH)oTDGJu214v--?U>k0$4' );
define( 'SECURE_AUTH_KEY',  'nR`5&viRr3O6y.,_K!)hvbj$_z~{e4<i|#r!Hs b{R<k0CQ^5N>Lv<gr%rzFK3IR' );
define( 'LOGGED_IN_KEY',    '/ciNz-;=HZe~c?j;~$))JMN_^ND.Rf=dE1Gv{S2#0R806m~7r?rYj#Xf!Vnt0Y[y' );
define( 'NONCE_KEY',        'NIBxn[i QO)(?*CQb_)j.f~dkiy5M.vU~c?g.}4>sj~R]Jjzc!nv1.eqZ2&%[b0s' );
define( 'AUTH_SALT',        'JW=W%X`G]e1QkDh{chnFTXBUs yW:*u9f@w+)*pq`Y[THsoaJYkdhb&+4D8$d#ZK' );
define( 'SECURE_AUTH_SALT', 'Ik1Q@si8X5@9N,vf$u+zKaO/3:%njL9 a(adi4Op}P^ZWi//I5qVz?{)v{i>Py.3' );
define( 'LOGGED_IN_SALT',   'j>Dk&P]m^$wV(ne:PY(9mN;t^D)x8nwN#O?y/AF.0`{eXOTT`Op__?JOH-,/qB +' );
define( 'NONCE_SALT',       '^_wz2 u8^*u>^Pc0kJ<*}spsB1@DVa+8@4]:I]C_(`aJb/D=g|GxuGlf??@f%!U=' );

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

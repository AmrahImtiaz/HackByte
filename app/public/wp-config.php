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
define( 'AUTH_KEY',          'fbzN<iA/8/dKfS;?I9[1Ib~8eD[Mj#QVmhr;YA<S$m=O<cBDTu3m(dSxz(Z*@FuU' );
define( 'SECURE_AUTH_KEY',   'h)Ez+8NB o1^x]C&YT5V-4S/`LDNu;dq+-05t#o?/BDJY~P[|0S&VmY%b?a[s,5^' );
define( 'LOGGED_IN_KEY',     'rgP6HmQR,ti=lfeB,|R}ZOIF$/t2<^0B09ROt=]X1*|CN;$za[2eAx|8G64HPoMN' );
define( 'NONCE_KEY',         '_SyscjKfC-x_C(Z-_Wg<<+7K*/#5?EI!;ch[Q25/aW$K^Qje)7wT %]N(t  !@xB' );
define( 'AUTH_SALT',         'a+<(K!f}<O?]HbdR*Bxa4ligp &*SU:S@*=.#?cSR H=bgSuY N,mnv`{{Y5TY#n' );
define( 'SECURE_AUTH_SALT',  '}@HUmyMWD6QfzKo&~Eb/lR>^doB~MFPP+7$>-K*9JflI`NeqRi!%fD~Q8%yd?qwY' );
define( 'LOGGED_IN_SALT',    '@N{nWvgz @e!QvA=Z-W;W;Sn!#MD%|nQ(`.#X]M++f`67#IcE=NyOHPNrjXex8@?' );
define( 'NONCE_SALT',        'w,u>J(h:S(z<$d?I{Q#s=;Lz&{RRx9L;o#pRVR F@_cH,#IPuFu.6Sp=,@;sYXA^' );
define( 'WP_CACHE_KEY_SALT', 'e{Oom&AbEyw->HZ`Sn5kFH;w=O:A&l441$ZmYmB/BJWMfSFa,/bF}:0gs1:teR@x' );


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

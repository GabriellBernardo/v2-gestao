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
define( 'AUTH_KEY',          'rJWCoEWq$PvhF:7|GNTp,>@Tlx9LUCpvZW}oQPY}X]^inULrL,Xf,P,=&6.dBwQ*' );
define( 'SECURE_AUTH_KEY',   'BWf9/&2:!>-BR>uAb9|pSxwSiA@d<0Z>t0e%U|SC8Xnk@!{i_=~Rz4IqJI/)_TU#' );
define( 'LOGGED_IN_KEY',     'lK]T7TH9-7H3!9eDio29Uzk}ri/0$+odX!|6RWwc1i&ME`inC}0,~i?OJ9y2#B*M' );
define( 'NONCE_KEY',         '*d$d(DwZd ]GOJ6u,!G%(:,wSq(O[F$$! [_eLVugs/vnJL%?PR]=k^d#nxHaR2?' );
define( 'AUTH_SALT',         ',^+(FrKRD.@qCr8a0wo[e<w<J[9BgYDrOdf4bIlspZv=~z[ MY[!{&E`yDWM8(uU' );
define( 'SECURE_AUTH_SALT',  'gc~(0Kwt){p^H37g>+5 u&HJiUzg|,f~@&?I?6q`EPjU~gcLcqgahr|I91PiS(ql' );
define( 'LOGGED_IN_SALT',    '?_UHTJ~3>4|Jh?ge+WG{xC~B{}|M,CUiX`COkDv79bJl<=i^;8sg7H9{q-+YO?^r' );
define( 'NONCE_SALT',        't|bTw^T>isg23V1^|0qTeFA8<qH4L77@Sa=Jm{[I6[~0d#LR?<U;){=84>M+Kt$c' );
define( 'WP_CACHE_KEY_SALT', 'yvsT+U|wee)0#8JPvlK(x[J)?v:wkatSh-K&)j%s8rq{_N(l5s[}ZZY7]<lU)XFJ' );


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

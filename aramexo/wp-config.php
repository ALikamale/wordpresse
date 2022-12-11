<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'aramexo' );

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
define( 'AUTH_KEY',         'yt?$i}Beocg-AxVDa{kYO{Zm=H}4;3/eX2-^Gt zuu0Nhe%xkh~tTk`bUtXZ]UBn' );
define( 'SECURE_AUTH_KEY',  'YaU~|@|.x&:Tg`?!+kIwB{I(=}/q&5#bf^CB.J^tmLzR1>r95pU4@NJyWw2H/V80' );
define( 'LOGGED_IN_KEY',    '-c,i|r@Dq=Ch_MG6t<I~L)B5+V65<ur3HK:QY8 }a>M=;~98.-iKGtkbL(QA,<$J' );
define( 'NONCE_KEY',        ' y0k66|])VR@*P#2RlO{t~4<4^B5*t,Dy`~VHCrt4fElMN)m4Gexi.9`(b_Fy}!C' );
define( 'AUTH_SALT',        '1c/g/*p~j(/3;@iSw)86k=}$jx<fkYB6EMb|?Z?g0pLqFBi6I~6zmAhy=+6Et)o(' );
define( 'SECURE_AUTH_SALT', ')t7@jN:[}6d%?T4f!L4@EJ#q?_4x}^kP/W7}Tr]M#Y|]d_2-B1[Ls!wQI<dnyi7.' );
define( 'LOGGED_IN_SALT',   'Ybg*s6n~;SB|:8!I:FwZB&3bH4GhB}{+, 8|k3qu%V]V4RZ<NU?]762?5Ml&M[l~' );
define( 'NONCE_SALT',       '^!_FYO)7%>O`.*5&-_b>J6SD*{.Z4N<t+]*j^d>zctoCelf1jV|5T+v%xJ3wR0>v' );

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

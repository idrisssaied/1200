<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '1000laila' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Abdoudz10.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.ldl`<ed`B!bc}:N_Z!_fC;9pSi/Q|f.kxhSe2l^Wc-+SV]VG^Oc]8ms/1.ZT&6X' );
define( 'SECURE_AUTH_KEY',  't:9CEWi!)S]|YeL(;MP[.<uvc&&6pF%>yq=xVvFB%Sf=C4duI[AV5L<dp98_!a-c' );
define( 'LOGGED_IN_KEY',    'GNb0o!#7?P /<T!I[cf4EnB*_t?d,]iz_ <=S&NVe8X:F.uSv!#RtxL[e+e}a(Y%' );
define( 'NONCE_KEY',        ']O0W?AAR%.|m_!$;X}qR!]x%|F/_8.}-  .Qa_;LPbd:5W94]Zmpma|b ;I%JLVh' );
define( 'AUTH_SALT',        'uAdE5=gHs&S5aA^u:Su|bLj/A-@5bWmh@/#YCl)-v++cS 7?dz|.ipI{Rv ~O%k{' );
define( 'SECURE_AUTH_SALT', '-dYvP;T/?sAyfo0y!h4p1_PYn))3il*uLqw ;#WF*we1Y!myg}Xtp %kQBQ7qPy?' );
define( 'LOGGED_IN_SALT',   '#;Sdq*ar#7;<m)[R1MSzO0*n;%%]1e*HrAF.TgS}A7i7HktI47i1Y/DDwGadjx/<' );
define( 'NONCE_SALT',       'wmD~0`Ei] %S7(>P$_^?faaiL-bW~a@dQ@|XPIFk$7vlO/N$zvFib9s=1>_zQq<I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

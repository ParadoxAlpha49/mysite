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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*&fQ.]I~`[D(jzCv6m>#F1:1s3dw4#wUE~pi0PWYw8*QN^ ?$KI]n( 1wb=#%H#S' );
define( 'SECURE_AUTH_KEY',  'bmj =^38zm.dFxT856a79y)/eIH C2u*od;;SL{VmtX*%BHF:/nJ90BJtjzf:m8)' );
define( 'LOGGED_IN_KEY',    'GUZLephyi^f2`]lH<bm[bT+.!|LdG?7,si-l0vVFK$LahPrxqob%sP>R4LG]_v`Y' );
define( 'NONCE_KEY',        'cK5{adD&1/9|DtUT3h&Xg=QY/~pm),Tt0]8roA%aksnv{H!,<miC+L4W;Q}<r+M=' );
define( 'AUTH_SALT',        'x=9!t-Dm>9CHFV&.efD&+QkbG#4>7VDO5/K>KW#NGC5gc-c^: Y:)d}$lDGze8d4' );
define( 'SECURE_AUTH_SALT', '3<FCsbxIm;dl^w9[ZyZah8A]rdyUtP[oFu[ $9aCZy>:LVo_ZA)O%Bccqnj;cB+i' );
define( 'LOGGED_IN_SALT',   'y)%Porh.!ZxoAh~GQ_PYUp4 )D*-B]]&:)Fit,5|%&>DnwJZ9pmk#be=g78R{r&P' );
define( 'NONCE_SALT',       'Li}&ZerF)0#T{,WDx6^S:n$Fiz~i}R9Zyw]0!gPRn1]V_HMllC-c!gS-Qx~ydO5a' );

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

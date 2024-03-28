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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site' );

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
define( 'AUTH_KEY',         '`SX`Cx@ ;w|xBmo/KtAf4RjU0G/]PzscZcN;eE|v]j<YipR8~ FS6bjqR>uG`%]n' );
define( 'SECURE_AUTH_KEY',  't~MT8q&t0vuBI@+SrT1I:lLdgF&CAgzX~EZBq/AR^k$R^3qJw<%:B0U %9_}<?D6' );
define( 'LOGGED_IN_KEY',    '|vE`xyv.::9>cEDp>8-3??&8M)QqQkp._~vRt:|~c0)F@0 jSx~atu<y|E0t1kd[' );
define( 'NONCE_KEY',        'e5iX7@s[4LjJ{Q`ek4GjyxH5nYS+n0;t*#+/IBEC7L+`&F7=]&ln^Cr0Tu+tpNB{' );
define( 'AUTH_SALT',        '[9DoCQhTpAwDZX83m<-`l=~1=zLcZD0N-KaBq=Uie,G<*@5Sh$>2dL*U5L`z6cY&' );
define( 'SECURE_AUTH_SALT', 'wo*qsFD3IA]Ht:/DDMy3Q4ZvP]Pi%bUD[)sebL+Dhaaqr{}b@G@Cl kCqu|bblpG' );
define( 'LOGGED_IN_SALT',   ') DNc4*Rm@`+n BcI@)GoH W:jXNin[|oqadApn*8z)X@i0O7+@wx8aZ`E.6j*?g' );
define( 'NONCE_SALT',       ']?rG6*eU@dQM<;8dG^;AV?^Lv,3?czUb}s]X~l[QU4]~hhiD^>_.4oNT7VWSM4~z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

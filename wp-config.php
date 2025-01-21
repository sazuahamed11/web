<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '^LwWv_%Ixor~UJwm9I]mIfkNo)N1HL4-qr W~6kBB6%f0LZ(,}4Ene,q+_VY8HXA' );
define( 'SECURE_AUTH_KEY',  'avZIH8wrjW2wZ-B(z3H6YICQJ~|H r]S_rGS:-u*v?OhlnN%OSYl6RrPK}[+IFYK' );
define( 'LOGGED_IN_KEY',    '9QqoyPAJJ#*qk{bOMOW;~~%SeXq2teAa-uUc8{k R6l6=`if{dyxIP2&+.b]pm3!' );
define( 'NONCE_KEY',        '}^*) X`:MiW$6vXs*60G!<p.(i-M{J~.Pn-_!kNb+VFyA;={_P2Z349|d+3oZ9G/' );
define( 'AUTH_SALT',        ';rz~<qo9}E)8u)DwZmK*A{tcOPdE|cg`)O ]9F.%d&dwL)mV%Pd{KQf-WJow0G~d' );
define( 'SECURE_AUTH_SALT', '-xEDn.^CQD-a,1Tam0Nn[K*adhWyn`U~RTLKSU$Q_Ne!=-~5tVTnu_1la/r6iX7A' );
define( 'LOGGED_IN_SALT',   'Y4`IXxn&KaD0w>Zge<=0,kI3{u^ce16&[/X1eJP~KD67gff5uE2 hy{W.:v-2X1Q' );
define( 'NONCE_SALT',       'Sd_blPZHmN(*rRzA?9xAO5[as1X[c_oUeM)5Xx8yp?plH^W@}nN!M0$)DXB,aJD*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

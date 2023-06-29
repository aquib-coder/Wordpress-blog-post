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
define( 'DB_NAME', 'itblog' );

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
define( 'AUTH_KEY',         'ZlSh?(3(gYaE--/cy5`0PYz,znJ[]y??bWhF1<n[ycx9^`z?a2Puv_4W]#9PGF;q' );
define( 'SECURE_AUTH_KEY',  'x8IxFi[tCDgv)38BQ8Ez4:D8GPCT;tbQ2[HH>OQ%W[L<#ScJu3fUrc+=7ch`/tfp' );
define( 'LOGGED_IN_KEY',    'p[h}xVJ:M}rNdbTMS?4Eluo8%=|!G2l5*R*hnKqRB5uz7@ph}7]Q)LIXLDsrTf;G' );
define( 'NONCE_KEY',        'T<r^#NCso$IjiKix^7MZ+CB]ov !A0kc{`YxueVQZ0-F:sXZ{nQTp_pl H&cll$h' );
define( 'AUTH_SALT',        'U}.<*di)4]AIC2W:16N?me+V@V`dmG:A<qFlZyWnEY~e,Rao[<j.KeHVQTyel|ZH' );
define( 'SECURE_AUTH_SALT', 'p-`GHAJm4yz=Mv~;q7|DyP`eW+)RG`qOdVOC}VxV8 M>d{fYEWFbqGaALWFNXwT8' );
define( 'LOGGED_IN_SALT',   '(qjCwBl.xGvvFxtBZLFAac84?HKbz*zNNH$DYcr0g2T.>kj/C5YMH .rgF#wfZ^I' );
define( 'NONCE_SALT',       'Z1f= ]j;SaV%o%Qe6g@9=ZLdLc(8w(Jzcjm5,U>RZH1^U.gH`]6Y7XM&vL ovu-G' );

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

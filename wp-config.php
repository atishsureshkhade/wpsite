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
define( 'DB_NAME', 'wpsite_DB' );

/** Database username */
define( 'DB_USER', 'wpsiteUser' );

/** Database password */
define( 'DB_PASSWORD', 'Usq56@YotXR^DL' );

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
/*define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );*/

define('AUTH_KEY',         '@+cFw:6c#|x@TS[*2;Ksw{,kqvPLbbo3qingeJp4zZS6v/Rqb.-XF=yC^u1?J5j(');
define('SECURE_AUTH_KEY',  '#v3B<|juxWd,P~3ncCVzaWYGq>?UtYyFw[DgBNsQ2%90P||b?|>{q>yNVlVGRn3v');
define('LOGGED_IN_KEY',    '![%daHHk&d6[FpM!|y2u q&Mylj8!pzeS`b1O}z i3a|h+2dhf=B5s4x~Xjf|<[|');
define('NONCE_KEY',        '^&+>z^[_(0eu.7ge$;tIRk+{rUQb<wX]`E5Sb+J-fty~USh]&ixq9goQJ:P%~D2e');
define('AUTH_SALT',        '|p#_4bSV$R29z)oZaA<Uj_[a%wwJoAs I/R6Ucp6PFKt@C6m$(dQG?he?[9-.l V');
define('SECURE_AUTH_SALT', 'U= -B3&,-edQyW;`?5o+l;Bxj$oU}o74uj4|aP,QZx|Fg&E{8rlS?(<48&<e]3mY');
define('LOGGED_IN_SALT',   '(:83_vmT>|z:DV(gE~~~`U/J_;$%}Ln(lBd.G$WOU(Z]eX,vux3D.iUER+u]EV+*');
define('NONCE_SALT',       '&>fKe+P2%b5beJV8*sJQ_j%Ij+LI3v)Q}YfovTn7A@lL&4Sm]:AKe1ecx3i]2~wA');

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

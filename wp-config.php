<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'fbMu5:Cx1OL2:6=v=cy,rlO=uyczwt[k!U,SR0-_C{l3i]2~&bV`znr}rV~auL[I' );
define( 'SECURE_AUTH_KEY',  ']B`FV}IW,wXlh|>5BNbXWefEo(ZytWHLbI5a|h[XP:/His&ZqR~D,W7nwH4dPFmy' );
define( 'LOGGED_IN_KEY',    '!vr9gX#RI!n(:ayRf7LkwuRo7Z$i2xl[,ZeXK7aCY^.qrr8+$x9[bGVVe}u9a]e^' );
define( 'NONCE_KEY',        '$d}n6{HVH:&Y12fC9Aj{:@$Ebx0vJ_gg:]6r%IWfiDAXql>t%j&I/U20}vBlGW6}' );
define( 'AUTH_SALT',        'WPmd_@?G[ 0(RI,[W_2)*-~8yRnJ2* 5(rO>McT|H/H>S$}*J4>g$9KcS6hfWzA{' );
define( 'SECURE_AUTH_SALT', 'TK2HW9CD6tUm4d<nQ|YeM?u?>M,+7z8IUzBM>q:W+e0HvIwZstnk1[zW*.Cc(Qc]' );
define( 'LOGGED_IN_SALT',   'o:Apj$OBr:nKSvtQ[6)fQ.w(<8nCz=+7_xpTBDA3gBT=vR`/5x9I~.,}(uQd/kZj' );
define( 'NONCE_SALT',       ')~-g4[8`xi+3neB=iGrk~?5g)`h(Q!l0jsXLk15QsK{;vUT*t]InHaz@SagJ9cbw' );

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

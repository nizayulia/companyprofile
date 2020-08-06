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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'ZO/^^!O[v<G~f{p9eZ}L4~&8ZjDL4osnm4]&gyyUobZr,[eLHnCoLa.3NxTD%-{%' );
define( 'SECURE_AUTH_KEY',  '(5[o*W|Y@hA!}Y?o}fX)6(;a=}J#PTZwU^}Bw[%`2bD}@PJ^m3a9>YayAn)PfG;_' );
define( 'LOGGED_IN_KEY',    'xcibJ3QzKypP9Bea;8n|KynB^-%UNfynk6I/D.uIxGIG#<@MD+Wz0+q9QyK7iC>{' );
define( 'NONCE_KEY',        '_o4Ond]18b?4}c%*zH=LO%5WE?JU_$qo!IH|*,]Ng@(UuAz[EBW8yi7bENsv!bWU' );
define( 'AUTH_SALT',        'TQuhT6n}t{(f}r)mV#kNZ6{bw6A4Kg-Z>[u&aD5i;Jq@Lf2_~S!midOuts*H:4tM' );
define( 'SECURE_AUTH_SALT', 'X&=QaW ^gOT)prth_zVMezGlT6kf`M}Xq~ZZP#a})1tXq<.f)%~.w,kWu=itquef' );
define( 'LOGGED_IN_SALT',   '3Kd%cPDn q~D*r)S5Km9R_RM^x4^ih{y);9@7Pd9TOn)vRS.xa~Jl#/osoC=J0;A' );
define( 'NONCE_SALT',       '{G8Rq{@BU,Fd+:p9BK8fH:187Rhg#bglJ:Bl`q0qVf+<=i Qb KNiXbMvrOWs&RL' );

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

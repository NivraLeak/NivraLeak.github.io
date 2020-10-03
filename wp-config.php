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
define( 'DB_NAME', 'silverfoxmedia_bd' );

/** MySQL database username */
define( 'DB_USER', 'jeszev28' );

/** MySQL database password */
define( 'DB_PASSWORD', 'neanderthal' );

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
define( 'AUTH_KEY',         'FfKh*2X7B7H1>ZpQ@q32PYND(dE1[Lmd?VXgE~|/+PCL&R3&u;3I24!>a{7,c%^/' );
define( 'SECURE_AUTH_KEY',  'iBUpRdwaPM7TbIpTr*:,F`e,s(Iz!W >6KyK}3}%dBD.2&S=-V;Gt!Gd2L3sF,Ab' );
define( 'LOGGED_IN_KEY',    'cbBXaP5)DYmkjSMB%MTFJ6+<SR4t+$k3Ez~8D&ur*~`M:O>z;4&I*P-U,Y[yM}OL' );
define( 'NONCE_KEY',        '_/1[X^]H]<A*%ra3;y<ekPK$7~/v5ek>K=vkI{zv^l@1A4A -`n9+/%At(_C}62)' );
define( 'AUTH_SALT',        'v)nr xe!eR-d0RIJ1#IIf/`BlK-b1&k|-Q]>i^T9e#BVVwr5B)d&<B />M/{e+&S' );
define( 'SECURE_AUTH_SALT', 'iu?Oxxks[I(%0AGUJ!*hjK|/Q lHHpGSKW{;k~g%`w0Z[~YA;:w&22?P!+ADi>|M' );
define( 'LOGGED_IN_SALT',   '4r9XZ6uzmutQG-FA.Gyfkvs<SRDy4,~3`ot9C977En;U^5i5#YKT/6x}}6NGx*nx' );
define( 'NONCE_SALT',       '2 8C6LNuwh4i*69#!o.l% esU]6?m{?e<Q];Ea4:~TzAZt<:bg+qQJR#_D4!f)<M' );

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

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
define( 'DB_NAME', 'gencreatives-db' );

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
define( 'AUTH_KEY',         'dJ>Rmn*6F:{M9+]9Jr.OaxD8 h(ZFdKgV!]f9_mnoe[>rIZRLD@pDDJalyI&_uaN' );
define( 'SECURE_AUTH_KEY',  ']}7e#{QA+M]S6g}.?!C.#zJ%y2`/R;d+b*#lLB?_}<^O4NU/Lye3oR?t!_-Xg/)D' );
define( 'LOGGED_IN_KEY',    'gD:}V]b:!L104k^;.88xafFjj(qq03XxMmsZ;Mk8FFsGVj!XO-OdZT%Zb#ObK/(5' );
define( 'NONCE_KEY',        'Nm-B.ycY5+!q<<ARN/1311W%ul_e^C:kTW07-mC{~S9,<bUD(-PXneKkgEtC`Q?Z' );
define( 'AUTH_SALT',        'Dg:f*1@S&B3OwgTZ_@1ueq4:4o({qBv{ix,N9Gej]=ubbdAXL3B#V=yS0_8ZR78^' );
define( 'SECURE_AUTH_SALT', 'F*JA^^)puUjYwfLW]i?V}i!Nv0xKBlM;}3i|GI,!s4,MM4/{8a:o:xo8a elw{]Q' );
define( 'LOGGED_IN_SALT',   'i.m*>#fZxd(c` 4|y5:{^unKkbhcXw|3[wcK2fXRpQ*.]FEAQY5F+vfnQw&[ Flt' );
define( 'NONCE_SALT',       '#(3hkBoAIfcn:__ICKT`t>^OAm42!56M~r<yK=ihu[N[j>?M-&a;23C1J( *D>0[' );

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

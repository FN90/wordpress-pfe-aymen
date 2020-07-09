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
define( 'DB_NAME', 'wordpress_pfe_aymen' );

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
define( 'AUTH_KEY',         'a[Ud6IXrL2XdRvQ_WuvMA0j gP8GY8DNDr9[q=[<bEA#lMqz%c$tgfz|`rK,52B^' );
define( 'SECURE_AUTH_KEY',  'w64 Qt[/:6]cMbPuQS.dg<pK?,2-H3s8u`],8cX~*7PW!#;!N2A1 OXN$2wJ3XP|' );
define( 'LOGGED_IN_KEY',    'ba.6+b7|w^Z$dZd-+C3H_f<:61oE73/[-U8HPDgyZwL+Is%Ct>P0,LVKZ;6m<[hc' );
define( 'NONCE_KEY',        '1FF?5`)bXbJx.hkDp]N8m{4e?^uH]P2@8..|8GZ0Z+u,$%;z8O#=AIBJ-JWt%B|P' );
define( 'AUTH_SALT',        'XYrUDuMS<|)O]D/a7ZusT%/sH/pj32Hspecc79s|}6xUWp<8S)fG Ugvbm=A1-5O' );
define( 'SECURE_AUTH_SALT', '2o6<Chs<0l[h@<A8j7Q5`O9&slocdV2hQ[@_th:<~~~>oXi*pk4>}FQ.y`yu2)I=' );
define( 'LOGGED_IN_SALT',   '2V.Xsa<3)Ix6{9uhM2[MsAhfY=MDhLpfHS:C}GtAV`RMtAb|{$6slTISbwG8#sx[' );
define( 'NONCE_SALT',       'iu>nQ]304Q>30U)d=u4@Q(JkCKPjmz]%hi>zRP%R_@`EXR #eyi%VXzO.}dQv Td' );

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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mercande_demente' );

/** MySQL database username */
define( 'DB_USER', 'mercande_demente' );

/** MySQL database password */
define( 'DB_PASSWORD', '4.5AeZK^SpVR' );

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
define( 'AUTH_KEY',         's;{mLMlv|<@AoHVq,ogQ8!Nk%]KH.B/}f,$M:&(XLOG^idlO60i*3(zx_&hM@L.y' );
define( 'SECURE_AUTH_KEY',  '24la^@dE4f?x-@n<5Mn9k7@d4qbc!K_]_d}5vWs+R-^e>|GxU39-]}i5s|gcHp8]' );
define( 'LOGGED_IN_KEY',    'ZINdvXfYu2M38TGeVMPrQUSolv3;m1L@%pDuzmTwXJ@JOy8^W+#vWv(O^5f87xy.' );
define( 'NONCE_KEY',        'HZi6g7qS{L~5_nItD&Vj@qQfSElPv1g_79mrk2G.]w=X*g,&OV_0oGET_(]JcP.1' );
define( 'AUTH_SALT',        'XJ<PEG|z48t>S~?(<-dtJ-Gl^*13C3,aCb&seLShtIET_!f1bp&+zd=,{S`81Y][' );
define( 'SECURE_AUTH_SALT', 'eD-yu~t5csT9g#S1d).=-U|e_OPe ~b>bB}5S-c{]~TK}WX^EM]I+})5q**_oI!.' );
define( 'LOGGED_IN_SALT',   '+tUSBR.d1q3@KqU)rEzPR SPw3@~&:H+}aM?8`0q3HWkI)#}.9-vB[IQN4Un&:ws' );
define( 'NONCE_SALT',       'R!cZ_#n; I8wy~G5I+Uc=dh_kx>vXyEAC_H!L-F$B>*6La<G[;ukJjdP,25!{ud*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

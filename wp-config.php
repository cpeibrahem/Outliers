<?php
define( 'WP_CACHE', true );

define( 'WP_HOME', 'https://outliers-edu.com/' );
define( 'WP_SITEURL', 'https://outliers-edu.com/' );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u590566464_d9eLe' );

/** Database username */
define( 'DB_USER', 'u590566464_R6his' );

/** Database password */
define( 'DB_PASSWORD', 's9JB45Q9nJ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'iicj)hcI_eXB XTR?|9Q_<ZN9[D75bVW:_-|Q$#*lQrqa)&Fk. MWQ#5nhX|KUP?' );
define( 'SECURE_AUTH_KEY',   '^P?:n#n@HBs|pk7.qUY%n#KVC2 pw#FZyk@dFqK^^~`BN)tjM~LH^b+J9Wt$pqBj' );
define( 'LOGGED_IN_KEY',     'qp.<%7~=wK%:;`oMjjogh=g8A>VB%Z8X(IPA2c=tkP$LMMCN-XM5@6B7K/~nYngO' );
define( 'NONCE_KEY',         'zwL^M/5n)C(|S?],?.;+I/|*CK /IPc}PvA,H9a)2XNVAd6I`pTB59Ru&xxW<]$&' );
define( 'AUTH_SALT',         '_S=rrZgj$`O&eQOZ&`O1QSnQ),y8z%;5^z.:%hi6M2U AWmt<J^#akMNtS>wG{/X' );
define( 'SECURE_AUTH_SALT',  '@n9Le~O C@?A2ONv8Z AjcfL+aqJdmjM.OudP1&L$s}rV]InOEi?pf-M7N~5$?bN' );
define( 'LOGGED_IN_SALT',    '8Ns3Vx_ >/`Ez7:ED|yT-+SB>H>pEk@V;MdR],&;4;M,I_[h[G^nNRc3}u7e/at(' );
define( 'NONCE_SALT',        ':E_6_!Vf<fr}/!0M*QPP9Alp_m5YB`s`n`G9}.z9WWvd8KCEE?4?c8TQ_`*uV1|>' );
define( 'WP_CACHE_KEY_SALT', 't!Aq[_qkF/8TjtBG)M(<im3jmAk*e <]6 _sp5l-(L?I$GBqm!|,eeH4%3gz~H l' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

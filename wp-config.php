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
define( 'AUTH_KEY',         'nHXaFV$zte| n.!0fg*Z9RjWn0j%}M J.M?zT||0ffgi/P>WQ@DiRzLeQsr_mlRr' );
define( 'SECURE_AUTH_KEY',  'HNOfW,H68XWBKLNffN_m,vQqdWkzeHs)]zwUKA%Fa|Is>kpseikhmsa_pBZd9MgX' );
define( 'LOGGED_IN_KEY',    'WhEiXGH<]{wx/ATy50/j%W]k`O-OJemA1qN_a~?)kA bCu/TdjG,i89PW.s^HP~b' );
define( 'NONCE_KEY',        'f1(&JR<}$4rXWsO2u|;5y&@FM_B:Wo~I!*t2o#%_$^ca!(sZ1Z*j]!-Q[KyVJ|V1' );
define( 'AUTH_SALT',        'Zoqt;IHHX.loh}>M|-_Nx<X}sv$^M%Eo4G- Y<d=O|vVlYmq0St>-fkBFQPHz)^o' );
define( 'SECURE_AUTH_SALT', 'f{Re<{=jP36[J>bsWb%Er!F!tz}k!t)}B1f)Y&/^u8ys7ZCZQ8dbiHdvmGSCiNr1' );
define( 'LOGGED_IN_SALT',   'Z8>1]-9$1B^~:BR%/*hqz%Y*b8$d)+fY[`9j{fG*VY~wjX<?lDl|o@8G><*/:c/U' );
define( 'NONCE_SALT',       'uE1z*XDJde!v!kDjHJzW::4Bni_W0rvB`L|ccOkM9`SLIe!drmh~-}uA*+2P2,$v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-config-local.php';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lalovers_a55' );

/** MySQL database username */
define( 'DB_USER', 'lalovers_a55' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CFBD8Ek9i1fwh0q2y75o3d4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eL+Pt=|CTYQhXhH|U(R[htJ`<u]2q VZ7M3DI@ztm%,+ORFe!B-~H$ssB~.UvYqu' );
define( 'SECURE_AUTH_KEY',  'e7yiSR#`@6iH{gEp:pQd]9~Sx:bI!w8Q@m uqYy9&&wUmrZv,6e(zw&:Hyy<-H+B' );
define( 'LOGGED_IN_KEY',    '(Td$>i|P=|{OCEMwu2,>[JUs2}(}!C-dESA75.c@&AXS9V,p#{}~3^-gLYq<VdfI' );
define( 'NONCE_KEY',        'E0rG/R1L02+uB*A34n:Z(:|JA/*^i|8]!3A.a1[#i:+kF^>yL0Ky5Pc+MGzLg?6T' );
define( 'AUTH_SALT',        '3Ijw$D1{xKMY~=nnJBs<gKQYlAFLcnltlgN:Wjq4$%>[?tNiY~G>l9|dL~DUGf(.' );
define( 'SECURE_AUTH_SALT', '508. -V.#XuY#^6y<jMLO,u}RXNwsg1l}m`UY%)#d+Bdu`mocq|0qU6zr?nknk6Z' );
define( 'LOGGED_IN_SALT',   ',pnav@oQDq<|,%D~}u}6:_b]`w:ZlL/PUaqB6n|Wk5[+rbgXFvPfd@:Hyg{_|=pK' );
define( 'NONCE_SALT',       'BM Q{|Vog-pL{b@cvw6[SC_ei2Wz^3Gr`=jGvvr--kAH0.2fi50&Lle}j`f7p>x(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a55_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

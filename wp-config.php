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
define( 'DB_NAME', 'id9619451_wp_f58d0a2380528e0e4eed3a2022224f8b' );

/** MySQL database username */
define( 'DB_USER', 'id9619451_wp_f58d0a2380528e0e4eed3a2022224f8b' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bfa6e5d5009aff307966d5e9dc78ee7f3b037498' );

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
define( 'AUTH_KEY',          'JN}*D*aR&fVht0=o&;yz?cX~D&!yH*);QgT!9dOe:<]C{$tiQn3k3#OiBI&soL=^' );
define( 'SECURE_AUTH_KEY',   'UL|2Ft9]m|i_=V?7FLhvzFxg<)LX`mlKUNO50`^4WEP(;B&_{E{%m~#pF=$dj.7-' );
define( 'LOGGED_IN_KEY',     '2jW@=E%0l5})>B`4vc0ja^m2G<OzC ]9b#UBWNi@7g`DjFib<>zc{)-3V|%B/4(?' );
define( 'NONCE_KEY',         'p@{,Wml*!o=1AlsH?X$jZz <um(!1&|7}Q@Jt*p8|}S1w*aj%R2aE?>_B[J%*OlJ' );
define( 'AUTH_SALT',         '.T^#ja;mY%[:>/{T0H$&brmt24Ct#8r?Hqy{R0()x!|,%p+.E!2hS.ZO`v4G<+nN' );
define( 'SECURE_AUTH_SALT',  '8dR20Rb^Mzs}37L/FJHL@pe}Qs.8^>*T,w&LNap.2+c/dW(lQ[{:dE_}wdU!jVu&' );
define( 'LOGGED_IN_SALT',    'JjVZP.C[X/^?4^]Q E7dHBy2q3N[Xu!Gd/[o&WKw@-HlhvE9n?q/T](JAU2nv4pM' );
define( 'NONCE_SALT',        'cVPvBDJM<3Wwtt{^OWfe5X5|DoYBk:u^`Ie@4(]ry`x+D_)U]+M]R}b6}aom/Djo' );
define( 'WP_CACHE_KEY_SALT', 'tm=:Nn.2S~+L$XOu*b]eCaub}UFOkQ@7@mzr|NNi~d}2KrQf4Ob7|_Mhye_eNm/}' );

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

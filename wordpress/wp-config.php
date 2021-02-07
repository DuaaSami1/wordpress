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
define( 'DB_NAME', 'ustore' );

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
define( 'AUTH_KEY',         '=i.q*jM$cbivTs`=y7yS*VHpcWbGTU|+x}`@A )tS(;%pbaTbVg{>Nfjl7Ps2<3I' );
define( 'SECURE_AUTH_KEY',  'LDLWL.N5HdCr!xztFOt&F SA`n^e`1B2J3{HQImxiT{xGDS,F;tBSi<Ia]2n~nnv' );
define( 'LOGGED_IN_KEY',    'M-%kYg^1~fWFXQ{4l.VEEVY^SsH^./gq]DWth5i?7Xddr]]+wg4MHbHU9TZ&B0_3' );
define( 'NONCE_KEY',        '?VwQ#F#]]^8xrlDU9h9(?GUTH6N?Fg>0ffq2&am.nDR&^CyWyRE>|.!AywRljx4,' );
define( 'AUTH_SALT',        'CG{cL{pyuWmz*vvpfL6iVle<oix4wYVEzv6,6i$x0d!IRPuWY[p)zP!bKx8}UiH5' );
define( 'SECURE_AUTH_SALT', 'NPC8^(h_oz[!#Yfrs<CY&@!,uh;!w;e$@I7DHS],A_xWv?)sc}T986ukF>KK[]Rt' );
define( 'LOGGED_IN_SALT',   ' Zl4f9Qn_8_YEXJv#U@#>U>+NtP[P*@Q7CLk(qb Jn()1sKrj8xOP*p^7/%[LqE{' );
define( 'NONCE_SALT',       'm:X/j~{wNoe[Og%zcEd:68_{e_J*kmg^]9NhL5>Q2daT6rYU@<YaRjl%MICch(} ' );

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
define('WP_Memory_Limit','256M');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'elancommerce' );

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
define( 'AUTH_KEY',         '3WjCoe_w0yyv+*qRM1CXaG*kk4GyZc@vc g^NBb}EagY)rj/5i1_Y zyKM;.)pUs' );
define( 'SECURE_AUTH_KEY',  '64#=tiXbI7L7NSXqr47<^c1b[4,Z^?|5EicaoZ=dxG9;nRk[<]Y@fp#_N8@%Nei-' );
define( 'LOGGED_IN_KEY',    'qZLPV+yW]8;wl.cZuWI{x,KG_/pu$>%]e6_]UNOtrq5l>WiGU@j?yMZ6 Cq{Xx|x' );
define( 'NONCE_KEY',        '<euGeLo8qiW!BiM(a,]@>h/W@OPvv>]=KPtj/p%jqJTA0??%yLe!7VVK9^K~CL+O' );
define( 'AUTH_SALT',        'I;+y%<t/k`RjR$Sjh)i;iJJyua^nVI7J#,*dO4PJezd|{MCr 6?<q.@@Qf+|:Sp9' );
define( 'SECURE_AUTH_SALT', 'MW^^]r*i/96QNrE Y{j!$zn[/EP6o+&GQhf{zM.ZVl+q9GTg#12*SsL`S+/4n2I@' );
define( 'LOGGED_IN_SALT',   ' f#(oAv;W^4.Q9F7#Q(FK&Z1:!Hv9ss>3+;}|.^C@&x{IzjqPtU[xCttf9~/{< y' );
define( 'NONCE_SALT',       'j/[-G5A[y>Ho!NQ3Sk&&t;/yl$|)sT8<0FY(7H}S^18r-_et=QhR.1SjgDkG&XT&' );

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

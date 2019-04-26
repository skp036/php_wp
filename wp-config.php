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
define( 'DB_NAME', 'faq_dash' );

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
define( 'AUTH_KEY',         '@?)JZMW9$%6lC<:}~x2rm!y~{iWnDW=@rQA}3J$Z;XStgZhhl,,|[jzN~vlsw%/>' );
define( 'SECURE_AUTH_KEY',  'C~F{,4#OP9mAue0K^3]|drAf;hC*zF5a6T*R;;bp<^F4vT4y;*o?OAv!L%po!>;*' );
define( 'LOGGED_IN_KEY',    'mewL/pyN5Pp4B*z0G{LbjA=695Z ;7lQ 7.O-Mc$zFi+?.C%.l_tHhynHtX!]A<e' );
define( 'NONCE_KEY',        ':ragZ5:|XJAiu`=)>B8k;e{;Z|PC4xX1!{OUeC*eDA=g1S$%+:R7=H! Zp$h[W3:' );
define( 'AUTH_SALT',        'OQmS_Ido>@^tdjN}qc-+|>|Z,;Efemq` Bu>nX7T[^=[jYXgHvO9Xr4{bWOK?.9m' );
define( 'SECURE_AUTH_SALT', 'vKv`eL|FKLCST9<H]q5L~cc2zZPrzeV4_a0ME2c=>JHhNL.Nl{SQ5V*m4cloXIvN' );
define( 'LOGGED_IN_SALT',   '*u]MIMNcrQN)+SmB0A{eCyAP(]x*N7cE(LOJ)NiASt?U/R;zNKmpd,h~o5pEean6' );
define( 'NONCE_SALT',       'jbdI[V$@^~KP?=~d wj/a?oG0a85C(F1ZVhE9mB`V]Q>^LYGbIUYe2b2QM~As*`]' );

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

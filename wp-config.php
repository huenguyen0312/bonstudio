<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bonstudio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'IFIbAWTOlcJIQA0Bp+DUq$2(d>R;2l-U/glMdI^Z+|V<-f(IJs{{bE[ CyykzK3!' );
define( 'SECURE_AUTH_KEY',  '5~*43?h=:{zAl] x[;=Vw{4Wfyr~a#E5ow*EYF3M0r_Q7Ms9` #c!]]U^%r]}~%V' );
define( 'LOGGED_IN_KEY',    'b5:tzi<It30W S:,iN3FH?RS6o*FLkXLmP>HYlQD%&/aqO;x[*qGVVFy#HlRxo  ' );
define( 'NONCE_KEY',        '.xa_bKi)}9{/J$4Wu#!)&#s;[|SO>7De@hvv0`23GF=b4HS59LLt{Y[&fM`5|h/2' );
define( 'AUTH_SALT',        'USkzNagT.7b$M|/XGIDHO]1_@XwD{$BB:$a-T>`A@eJ51NPk9<8/&6igc|@IRMeG' );
define( 'SECURE_AUTH_SALT', 'fIR]{nA=k?dA%n_[&K-^q12cdht-qIopO~>H2Eb3BCv9`w2TB0Ws%3^7nq_7x:,A' );
define( 'LOGGED_IN_SALT',   '@9y1(mBb*A96p.A*xK>osl_K]UD;mdU9cc;*O013CBy9b-ue5XCvhj<h34Q>G.Se' );
define( 'NONCE_SALT',       'n}g5fleoQ1]{)IP?R:z`:i q;aOx6jz=;EX>?%jgf`^03]M5[M1dK;NNkC)d.=XD' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define('DB_NAME', 'shoes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Dhruvil');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')g4 eXW^A_D%5kQg(8x*Z/<yIhN] ZpaukTQp7CE*`}ad!69GHc_IX;*#99(<idX');
define('SECURE_AUTH_KEY',  '+)lFFd7ae_XBC$~d]]Z6JR%.p-@#9Fv@Q?K;;o;lFv[#tFq@Q1:AMvqZGcjQ-Y7P');
define('LOGGED_IN_KEY',    'M=pbfws{csjq+,VY4J9FeOT G<%UC~[ex+ sEj;#3f!oU54-ZmmdZ5crF^ceeo4@');
define('NONCE_KEY',        '-pc?K kvcdR^|Pm,gvKA&;#6`m4U??PIM%$TmTiQ.XCFOOa]0QH.sFC^{~S;wmW~');
define('AUTH_SALT',        'RY`Zs;b>Ykxp<HDv[J:jMekU@PJ7}wKqKeE{=vG1Iz9Pd%-M4hdxW~ws%,EXv];{');
define('SECURE_AUTH_SALT', '?g0jF&O*CF;*fiLSQPJ}Swyy-hkC%Rtfmwx=AmB!WO$-r7?xY+:a;?{pS$Knfk$U');
define('LOGGED_IN_SALT',   'YEe5`0}4on)PTM2lVLoVy~54d}qxDD@EVK[JZpmiwr^5`d@MeEpKg}44{cwCi~rJ');
define('NONCE_SALT',       'DPq6:jGTfW|!x&{Eq/+kDdzaF1]1mix)k+ AwMhh`Ve@)U k=nce6^k<1&KK,GN>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

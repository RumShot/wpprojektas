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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@oec.g][P-JLt@Pi8?95sC Rn5lM+<#>=G&0a[T3A@E=fV^g.nZ$65<2;is[+ xb');
define('SECURE_AUTH_KEY',  'yH*TxU08/1@)=` q+Pv`lx?~6OLGFk]I3?6RE-q68ae_69jSBltri~jE*tr17}3M');
define('LOGGED_IN_KEY',    'fYq[XH?$ b*{j2$4v28Tv9mSM1Q]!mfoOSRS@  4y@[AeJ.}A/Q<>Y)@jKy7>%# ');
define('NONCE_KEY',        ';$`}EocoIb]@QysHj!w:Njsq1:z3>~6:.@b.&p5^H#@TcV ?|Z~FGGdF(|)BrSWV');
define('AUTH_SALT',        '7M(J){g|z-J[aMf31~-}.;xjzk=v^a2Sh^O/(?]M up{Qiw``XJ[q.M^p3I0L>+F');
define('SECURE_AUTH_SALT', 'yk8N}k9U%^C[n.v)tZ;kO`i`IM5<]G|T@<VOzX!s1U3uJeqr[j,eJ0;9UICl)aMN');
define('LOGGED_IN_SALT',   'MA!..p(6UL]X^qCp}Bu|66hQ jIa,_ecP(e,ysxzUmhM63=/8<@@&V*8$7p=]Z=n');
define('NONCE_SALT',       'i5S2%s8Dai:pv|$UKU84NgF.&bLGdBr2n,Ma^33d;YKQn%(}9+cIW3&w/gEN0_AI');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

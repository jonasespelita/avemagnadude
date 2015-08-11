<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q5OPbM7@=ddW:`e4|J~}.r[xI-@e>1GTG(AsYV|{+c2|t@L`H@[;jp@{?NP}JRjR');
define('SECURE_AUTH_KEY',  '-y7kjLe*Khr%luCit-+tyX+EBW:;G&}l~<W$g a=2J83JK[/P#Gqi$g,{rqrR}nC');
define('LOGGED_IN_KEY',    'gn6:*Mz@Pr}*,ex2W0FZ!3R5B+Snk8t;(h4&uT]/9K+PF%, &Gf-Vw69oC0Af#YD');
define('NONCE_KEY',        'Ev{-]1U-;Q,x/-xY}e7}DE#E5C-n!iYC}V[s9Bxpn;$[lxP!W7|-.6<v.nj>932f');
define('AUTH_SALT',        '8ufD9S0%3TJ+,&%h=x=&!R.E5$T6brT_QNO$l NI |c[^jU1eqD-MD-9_3b}g.Zb');
define('SECURE_AUTH_SALT', 'SXi-ckg[,=B|~I{dU.-jgiKe_,9Rlo0_EcMwJ%z~jKZ]o#qNgsw}9Gn`;|AF0Yu~');
define('LOGGED_IN_SALT',   '6!N->x^%Zws6u~}+yKOHO2:/}:K}5{.UI+_kpVwdp+}1z~60$[-:1LZ*R_R|pGtP');
define('NONCE_SALT',       's#;erGB&QxdQ`H$C+{M!!MuNH@T#M>/_ .n|4-Bvp0coNi|H7sVn?WB4u-ais2Nc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

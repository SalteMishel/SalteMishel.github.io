<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'saltkawaiimishel');

/** MySQL database username */
define('DB_USER', 'saltemishel');

/** MySQL database password */
define('DB_PASSWORD', 'j$VH$*2mT6%637g%&hk!#FSAD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '.|L0*Z.&mDyjH!u*B:A{J2Mz.zi#;?-+(}l[! -oy.pNR=>#NxTMfU{2*q7.--yT');
define('SECURE_AUTH_KEY',  '~$RrJO}{g@H8nKXJNq!}h]3Asoe.9n/s_1(_t7M-Fw-hz+-[yITsKM]|et #ykaV');
define('LOGGED_IN_KEY',    '+Yl{v{XKlec3zb_7_%$ <Hcs9$|52fuaA.-E<<_E*-A3`~Q]XoN,^}4@8f-!n+Xh');
define('NONCE_KEY',        'bz-_rDL|D8w*J^+~-42SZM?G_5<]s`w52#V[(L^.]{feI4E+DqXxqfir[JW|J?]f');
define('AUTH_SALT',        '%|A}F7hxmcSH;wxD@Dh@o@EXc9)(*dbJV kbd-$w(3 7OQ-;EIJbOT+wJ5NojJgV');
define('SECURE_AUTH_SALT', '{*3nUD+o+(OE+IwQzwHJ)][QWwPaaL R2[:`lb-3:To.^*Jbe,w-RWp)TCZ:(~-U');
define('LOGGED_IN_SALT',   '`tOFr/I7ybH=&?s6d(36CvJn$DUcL)rE3*b_gO24R_9h33xdX.-bTWPMWhv3=mwh');
define('NONCE_SALT',       'OY<-6}SM|.G;7fzTCg=At {mL7M TbNga(9oFbC$mwcDGQq[s#|ET+sg9YbP0lE$');

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

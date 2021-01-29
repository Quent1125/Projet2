<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db817641933' );

/** MySQL database username */
define( 'DB_USER', 'dbo817641933' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CdwFlaBdWwSeKyMHVlTz' );

/** MySQL hostname */
define( 'DB_HOST', 'db817641933.hosting-data.io' );

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
define( 'AUTH_KEY',          ' }OXPIGmh*#l43tC{FzK]r0-{UXBOvt5UJh0;vLLe$93WvYkVRAmSAUN[&}#]1q^' );
define( 'SECURE_AUTH_KEY',   '&=<*e*+aj34o2oE>!$dO;.03,kbM2O1fwK*=3gjbl4E_lj8H1I6fq+p}<vDEE2te' );
define( 'LOGGED_IN_KEY',     'JYT$5^RS3N*FU=00Zl5}XKxYq{D,F40E:o{kX)mI).c [_j933sFP,+[M<dx!a.R' );
define( 'NONCE_KEY',         'L><@|wB1X7fnBmn73JoNv8lH@<)<^R>DuXlZuoonIo~%W+P8<ioBp.I lFu9>?~%' );
define( 'AUTH_SALT',         '(TWK269[gH=>+?b/#<o.hO.p41OuASYti;woBkwHlF*tFh`0Tt=!MX,oyLk-{H~3' );
define( 'SECURE_AUTH_SALT',  'P9!9ZzN;SUkRY=rJ4=x{H9r-6If2H /UT&wA9e:*T7dwmp`K{R|wre578IC4 aX ' );
define( 'LOGGED_IN_SALT',    'J!g/fuOEzIVc.IC^y@AeyQc|{RJ@Rreg~!x03^O7 ia__^Xl+;5xJi6%t6D@WKGN' );
define( 'NONCE_SALT',        '@nq5]*J/] *Zg3 3pi1v`-*NdKDqsB`y<:toSNDlM<kZ,*7}BJMjRAFmQRg= ]a_' );
define( 'WP_CACHE_KEY_SALT', '22>a#S?eAnjDk#K!QFe9%s2KU24*_#_&S=><!L|f3G:_4;mA1Xf!bO{}0]$;6Vjf' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eSJOD';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

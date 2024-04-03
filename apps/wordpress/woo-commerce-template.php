<?php

declare(strict_types=1);

require_once __DIR__ . "/../../vendor/autoload.php";

use maarky\Option\Type\String\Option;

// Load Dotenv globally
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();

// ** Database settings ** //
/** The name of the database for WordPress */
define('DB_NAME', Option::create(getenv("MYSQL_DATABASE"))->getOrElse("none"));

/** Database username */
define('DB_USER', Option::create(getenv("MYSQL_USER"))->getOrElse("none"));

/** Database password */
define('DB_PASSWORD', Option::create(getenv("MYSQL_PASSWORD"))->getOrElse("none"));

/** Database hostname */
define('DB_HOST', Option::create(getenv("MYSQL_HOST"))->getOrElse("mysql"));

/** Database charset to use in creating database tables. */
define('DB_CHARSET', Option::create(getenv("MYSQL_CHARSET"))->getOrElse("utf8mb4"));

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
if (empty(getenv("AUTH_KEY")) || empty(getenv("SECURE_AUTH_KEY")) || empty(getenv("LOGGED_IN_KEY"))
|| empty(getenv("NONCE_KEY")) || empty(getenv("AUTH_SALT")) || empty(getenv("SECURE_AUTH_SALT"))
|| empty(getenv("LOGGED_IN_SALT")) || empty(getenv("NONCE_SALT"))) {
    throw new Exception(
        "Some authentication unique keys and/or salts are missing! Check your 'Wordpress Auth Config' in your .env file"
        );
}

define( 'AUTH_KEY',         Option::create(getenv("AUTH_KEY"))->get() );
define( 'SECURE_AUTH_KEY',  Option::create(getenv("SECURE_AUTH_KEY"))->get() );
define( 'LOGGED_IN_KEY',    Option::create(getenv("LOGGED_IN_KEY"))->get() );
define( 'NONCE_KEY',        Option::create(getenv("NONCE_KEY"))->get() );
define( 'AUTH_SALT',        Option::create(getenv("AUTH_SALT"))->get() );
define( 'SECURE_AUTH_SALT', Option::create(getenv("SECURE_AUTH_SALT"))->get() );
define( 'LOGGED_IN_SALT',   Option::create(getenv("LOGGED_IN_SALT"))->get() );
define( 'NONCE_SALT',       Option::create(getenv("NONCE_SALT"))->get() );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define(
    'WP_DEBUG',
    filter_var(Option::create(getenv("WP_DEBUG"))->getOrElse(false), FILTER_VALIDATE_BOOLEAN)
);

/* Add any custom values between this line and the "stop editing" line. */
define(
    "WP_HOME",
    Option::create(getenv("WP_SITEURL"))->getOrElse("http://127.0.0.1:8080")
);
define(
    "WP_SITEURL",
    Option::create(getenv("WP_SITEURL"))->getOrElse("http://127.0.0.1:8080")
);

/**
 * CURL Option Defaults
 */

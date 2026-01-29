<?php

use Dotenv\Dotenv;

use function Brw\Wp\env;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));

$dotenv->safeLoad();

$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'APP_URL']);

define('DB_NAME', env('DB_NAME'));
define('DB_USER', env('DB_USER'));
define('DB_PASSWORD', env('DB_PASS'));
define('DB_HOST', env('DB_HOST'));
define('DB_CHARSET', env('DB_CHARSET', 'utf8'));
define('DB_COLLATE', env('DB_COLLATE'));

define('AUTH_KEY', env('AUTH_KEY'));
define('SECURE_AUTH_KEY', env('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', env('LOGGED_IN_KEY'));
define('NONCE_KEY', env('NONCE_KEY'));
define('AUTH_SALT', env('AUTH_SALT'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', env('LOGGED_IN_SALT'));
define('NONCE_SALT', env('NONCE_SALT'));
define('WP_CACHE_KEY_SALT', env('WP_CACHE_KEY_SALT'));

$table_prefix = env('DB_PREFIX', 'wp_');

if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', env('APP_DEBUG', false));
}

define('WP_HOME', rtrim(env('APP_URL', '/')));
define('WP_SITEURL', WP_HOME . '/admin');
define('WP_CONTENT_DIR', __DIR__ . '/app');
define('WP_CONTENT_URL', WP_HOME . '/app');

# custom config
define('WP_ENVIRONMENT_TYPE', env('APP_ENV', 'production'));
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);
define('WP_AUTO_UPDATE_CORE', false);
define('AUTOMATIC_UPDATER_DISABLED', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));

$envData = $dotenv->safeLoad();

$dotenv->required(['APP_URL', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD'])->notEmpty();

foreach ($envData as $key => $value) {
    if (!defined($key)) {
        define($key, $value);
    }
}

$table_prefix = $_ENV['DB_PREFIX'] ?? 'wp_';

if (! defined('WP_DEBUG')) {
    define('WP_DEBUG', $_ENV['APP_DEBUG'] ?? false);
}

define('WP_HOME', rtrim($_ENV['APP_URL'], '/'));
define('WP_SITEURL', WP_HOME . '/admin');
define('WP_CONTENT_DIR', __DIR__ . '/app');
define('WP_CONTENT_URL', WP_HOME . '/app');

/* */
define('WP_ENVIRONMENT_TYPE', $_ENV['APP_ENV'] ?? 'production');
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

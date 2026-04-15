<?php

use Env\Env;

require_once __DIR__ . '/../vendor/autoload.php';

Env::$options |= Env::USE_ENV_ARRAY;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));

$env = $dotenv->safeLoad();

$dotenv->required(['APP_URL', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD'])->notEmpty();

$app_url = rtrim($env['APP_URL'], '/');

$table_prefix = $env['DB_PREFIX'] ?? 'wp_';

$required_vars = [
    'WP_DEBUG'                   => $env['APP_DEBUG'] ?? false,
    'WP_HOME'                    => $app_url,
    'WP_SITEURL'                 => $app_url . '/admin',
    'WP_CONTENT_URL'             => $app_url . '/app',
    'WP_CONTENT_DIR'             => __DIR__ . '/app',
    'WP_ENVIRONMENT_TYPE'        => $env['APP_ENV'] ?? 'production',
    'WP_DEFAULT_THEME'           => 'looma',
    'DISALLOW_FILE_EDIT'         => true,
    'DISALLOW_FILE_MODS'         => true,
    'WP_AUTO_UPDATE_CORE'        => false,
    'AUTOMATIC_UPDATER_DISABLED' => true,
    'ABSPATH'                    => __DIR__ . '/',
];

foreach (array_merge($required_vars, $env) as $key => $value) {
    if (!defined($key)) {
        define($key, $value);
    }
}

require_once ABSPATH . 'wp-settings.php';

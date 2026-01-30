<?php

/**
 * Plugin Name:       Looma
 * Plugin URI:        https://benrutlandweb.co.uk
 * Description:       Fully version controlled WordPress framework.
 * Version:           0.0.1
 * Author:            Ben Rutland Web
 * Author URI:        https://benrutlandweb.co.uk
 * Update URI:        https://benrutlandweb.co.uk
 * Text Domain:       looma
 * Domain Path:       /lang
 * Requires PHP:      8.4
 * Requires at least: 6.9
 */

use Looma\Foundation\Application;

$app = new Application(get_theme_root() . '/looma');

$app->boot();

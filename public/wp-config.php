<?php

require_once __DIR__ . '/../vendor/autoload.php';

Dotenv\Dotenv::createImmutable(dirname(__DIR__))->safeLoad();

define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_CHARSET', $_ENV['DB_CHARSET'] ?? 'utf8');
define('DB_COLLATE', $_ENV['DB_COLLATE'] ?? '');

define('AUTH_KEY', $_ENV['QQ*${I><n[T?#rhc|k#W6!VN,!i(&w3JXEu}JS4v^Yavh,lh-g;M_czjWbR3M]rU'] ?? '');
define('SECURE_AUTH_KEY', $_ENV['wViPj6@l,M|UALSD7SjMYax@(7=,iUs??U6|S1kxV1}%6(C:jR._ri0YB<T.UOu/'] ?? '');
define('LOGGED_IN_KEY', $_ENV['e0Kp(Izwyt+^9Q&jccC%wnq!%tzvimr*b*?h5_<p-]YTAz8_*py2| mVAX;lghVi'] ?? '');
define('NONCE_KEY', $_ENV['n3cC~][rbaBBhktZ%x/Hwsn&R|=B1#E!rr2e5+VY5;w-M*pyYeMgr@v+T{<v2S//'] ?? '');
define('AUTH_SALT', $_ENV['}I7]gYda)fO9P=[KzqAV(3^0FyEP|S^2wi]twsO-|/)53yFSj(K#ka_~hT$&{z}r'] ?? '');
define('SECURE_AUTH_SALT', $_ENV['WvAzSQaMhzRe|oX(FJRoh*mBd4%TT)V#aA^63k>,ra]eKI))qvwME/(MAx7GY/W7'] ?? '');
define('LOGGED_IN_SALT', $_ENV['osx=eDU^#WothZL;0X*4h%NybSxV)8[<(FJ)VEsnb;X/meuAjQl k}3-*1.GDi|S'] ?? '');
define('NONCE_SALT', $_ENV['y~!ye#+K,Ys[my?*nTpvch|~i|fq+SUp1!dq(cN]pJzD9VI#QPuMa,ltBi*qbR>7'] ?? '');
define('WP_CACHE_KEY_SALT', $_ENV['gj)GT p?:f#V@y2o|_AwOg%9iWZ0yBizQ|i8{8bLfl:7*OV@hc >DnO& Y<$i %R'] ?? '');

$table_prefix = $_ENV['DB_PREFIX'] ?? 'wp_';

if (! defined('WP_DEBUG')) {
    define('WP_DEBUG', $_ENV['WP_DEBUG'] ?? false);
}

define('WP_HOME', ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? ''));
define('WP_SITEURL', WP_HOME . '/admin');
define('WP_CONTENT_DIR', __DIR__ . '/app');
define('WP_CONTENT_URL', WP_HOME . '/app');


# custom config
define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

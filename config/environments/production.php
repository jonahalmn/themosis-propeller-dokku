<?php

/*----------------------------------------------------*/
// Production config
/*----------------------------------------------------*/
// Database
// define('DB_NAME', 'themosisdb');
// define('DB_USER', getenv('DOKKU_MARIADB_THEMOSISDB_ENV_MYSQL_USER'));
// define('DB_PASSWORD', getenv('DOKKU_MARIADB_THEMOSISDB_ENV_MYSQL_PASSWORD'));
// define('DB_HOST', getenv('DOKKU_MARIADB_THEMOSISDB_PORT_3306_TCP_ADDR'));

$url = getenv('DATABASE_URL');
$components = parse_url($url);

if ($components) {
    $host = $components['host'];
    $username = $components['user'];
    $password = $components['pass'];
    $dbname = substr($components['path'], 1);
    $port = $components['port'];

    define('DB_NAME', $dbname);
    define('DB_USER', $username);
    define('DB_PASSWORD', $password);
    define('DB_HOST', $host);
}

// WordPress URLs
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

// Jetpack
define('JETPACK_DEV_DEBUG', false);

// Encoding
define('THEMOSIS_CHARSET', 'UTF-8');

// Development
define('SAVEQUERIES', false);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);

// Themosis framework
define('THEMOSIS_ERROR', false);
define('BS', false);

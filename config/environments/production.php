<?php

/*----------------------------------------------------*/
// Production config
/*----------------------------------------------------*/
// Database

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
define('DB_HOST', $host ? $host : 'localhost');
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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);

// Themosis framework
define('THEMOSIS_ERROR', false);
define('BS', false);

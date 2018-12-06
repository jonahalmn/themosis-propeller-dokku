<?php

/*----------------------------------------------------*/
// Production config
/*----------------------------------------------------*/
// Database
define('DB_NAME', getenv('DOKKU_MARIADB_THEMOSISDB_NAME'));
define('DB_USER', getenv('DOKKU_MARIADB_THEMOSISDB_ENV_MYSQL_USER'));
define('DB_PASSWORD', getenv('DOKKU_MARIADB_THEMOSISDB_ENV_MYSQL_PASSWORD'));
define('DB_HOST', getenv('DOKKU_MARIADB_THEMOSISDB_PORT_3306_TCP_ADDR'));

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

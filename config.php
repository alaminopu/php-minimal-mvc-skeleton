<?php

/**
 * Configuration for: Error reporting
 */
define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}


// URL Constants
define('URL_PUBLIC_FOLDER', '/');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/**
* Configuration for: Database
* This is the place where you define your database credentials, database type etc.
*/
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_name');
define('DB_USER', 'db_user');
define('DB_PASS', 'db_pass');
define('DB_CHARSET', 'utf8');

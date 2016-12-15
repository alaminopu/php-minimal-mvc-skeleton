<?php

/**
 * Minimal PHP MVC Project
 * @author Md. Al-Amin
 *
 */

// Project path
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

// Application path
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

// Library path
define('LIBRARY', ROOT . 'libs' . DIRECTORY_SEPARATOR);

// Includes path
define('INCLUDES', ROOT . 'includes' . DIRECTORY_SEPARATOR);


// Loading config file.
require ROOT . 'config.php';


// loading helpers
// require LIBRARY . 'helpers.php';


// load application class
require APP . 'core/application.php';
require APP . 'core/controller.php';



// start the application
$app = new Application();
<?php


// Project constants
define('PROJECT_NAME', 'Blog');

define('DEFAULT_CONTROLLER', 'posts');
define('DEBUG', true);

// Load app
require 'system/classes/Application.php';
//new object
$app = new Application;

<?php
	
require_once __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$app = new \Slim\App([
	'debug' => true, 
	'settings' => require __DIR__ . '/../config/settings.php'
]);

// Register routes
require __DIR__ . '/routes.php';

return $app;
<?php
echo "eh... built it!!!!!!!!!!!!!!!!!";
echo "composer test";
echo "final composer test";

require 'vendor/autoload.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$app->run();
?>

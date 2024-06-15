<?php

require_once('autoload.php');

$homeController = new \App\Http\Controllers\HomeController();
echo $homeController->index();
echo "<br>";
echo $homeController->listProduct();
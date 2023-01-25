<?php



declare(strict_types = 1);

require "config.php";
require APP . "autoload.php";


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Content-type: application/json; charset: UTF-8");

use Controllers\ProductController;

$controller = new ProductController();
$controller->processRequest($_SERVER['REQUEST_METHOD']);
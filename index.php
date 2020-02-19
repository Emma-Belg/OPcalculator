<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

session_start();

//include all your model files here
require 'Model/User.php';
require 'Model/products.php';
require 'Model/SelectButton.php';
//include all your controllers here
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_GET, $_POST);

$productsObj = new HomepageController();
$productsObj->jsonToObject("products.json");

$customerObj = new HomepageController();
$customerObj->jsonToObject("customers.json");

/*$controller->getCustomers();
$controller->getProducts();*/
if(isset($_SESSION)){
    $_SESSION['customerObj'] = $customerObj->jsonToObject("customers.json");;
    $_SESSION['productObj'] = $productsObj->jsonToObject("products.json");
}

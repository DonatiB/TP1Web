<?php
require_once("ControllerCars/controllerCars.php");

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'home';
}

$paramsURL = explode('/', $action);

$controllerCars = new ControllerCars();

switch($paramsURL[0]){
    case 'home':
        $controllerCars->home();
    break;
    case 'brand':
        $controllerCars->byBrand($paramsURL[1]);       
    break;
    case 'description':
        $controllerCars->descriptionByCar($paramsURL[1]);       
    break;
    case 'deleteCar':
        $controllerCars->deleteCar($paramsURL[1], $paramsURL[2]);       
    break;
    case 'soldCar':
        $controllerCars->soldCar($paramsURL[1], $paramsURL[2]);       
    break;
    default:
       echo "No funca bro";
    break;
}
<?php
require_once("ControllerCars/controllerCars.php");

if(!empty($_POST['action'])){
    $action = $_POST['action'];
}else{
    $action = 'home';
}

$paramsURL = explode('/', $action);

$controllerCars = new ControllerCars();

switch($paramsURL[0]){
    case 'home':
        $controllerCars->home();
    break;
    default:
       echo "No funca bro";
    break;
}
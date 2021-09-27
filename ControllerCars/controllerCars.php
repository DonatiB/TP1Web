<?php
require_once("ModelCars/modelCars.php");
require_once("ViewCars/viewCars.php");
require_once("libs/converterEuro.php");

class ControllerCars{

    private $model;
    private $view;
    function __construct()
    {
        $this->model = new ModelCars;
        $this->view = new ViewCars;
        $this->converter = new ConverterEuro;

    }

    function home(){
        $allCars = $this->model->getCars();
        $this->view->viewHome($allCars);
    }

    function byBrand($brand){
        $carsBrand = $this->model->getCarsBrand($brand);
        $brandTitle = $this->model->getBrandTitle($brand);
        $this->view->carsByBrand($carsBrand, $brandTitle);
    }

    function descriptionByCar($carDescription){
        $carDescription = $this->model->descriptionByCarDB($carDescription);
        $this->view->viewDescription($carDescription);
    }

    function deleteCar($brand, $car, $delete){
        $this->model->deleteCarDB($brand, $car ,$delete);
        $this->view->viewBrandLocation($brand);
    }

    function soldCar($brand, $sold){
        $this->model->soldCarDB($brand, $sold);
        $this->view->viewBrandLocation($brand);        
    }

    function onSaleCar($brand, $sold){
        $this->model->onSaleCarDB($brand, $sold);
        $this->view->viewBrandLocation($brand);
    }

    function createCar(){
        //verificamos si lo creamos vendido o no, y lo guardamos como booleanos
        if(!isset($_POST['sold'])){
            $sold = 0;   
        }else{
            $sold = 1;
        }
        //guardamos el valor que viene por euro para enviarlo al conversor  
        $euro = $_POST['Euro'];
        $dollar = $this->converter->converterDollar($euro);
        $peso = $this->converter->converterPeso($euro);
        $yen = $this->converter->converterYen($euro);

        $this->model->createCarDB($_POST['Car'], $_POST['Brand'], $_POST['Year'], $_POST['Description'], $sold, $euro, $dollar, $peso, $yen);    
        $this->view->viewHomeLocation();
    }

    function saveLogo(){
        if(isset($_FILES['photo'])){
            //retenemos toda la informacion
            $typeFile = $_FILES['photo']['type'];
            $nameFile = $_FILES['photo']['name'];
            $sizeFile = $_FILES['photo']['size'];
            $description = $_POST['description'];
            $brand = $_POST['brand'];
            //extraemos los binarios de la img
            $uploadedImg = fopen($_FILES['photo']['tmp_name'], 'r');
            $biImg = fread($uploadedImg, $sizeFile);
            
            $this->model->saveLogoDB($brand, $nameFile, $biImg, $typeFile, $description);
            $this->view->viewHomeLocation();
        }
    }
}
<?php
require_once("ModelCars/modelCars.php");
require_once("ViewCars/viewCars.php");
require_once("converterEuro.php");

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

    function deleteCar($brand, $delete){
        $this->model->deleteCarDB($brand, $delete);
        $this->view->viewHomeLocation($brand);
    }

    function soldCar($brand, $sold){
        $this->model->soldCarDB($brand, $sold);
        $this->view->viewHomeLocation($brand);        
    }

    function onSaleCar($brand, $sold){
        $this->model->onSaleCarDB($brand, $sold);
        // $marca = $this->model->getOnlyBrand($brand);
        // foreach($marca as $item){
        //     $item->Brand = $brand;
        // }
        // $this->view->viewHomeLocation($brand);
        $this->view->viewHomeLocation($brand);
    }

    function createCar(){
        //verificamos si lo creamos vendido o no, y lo guardamos como booleanos
        if(isset($_POST['sold'])){
            $sold = 0;   
        }else{
            $sold = 1;
        }
        //guardamos el valor que viene por euro para enviar la variable 
        $euro = $_POST['Euro'];
        $dollar = $this->converter->converterDollar($euro);
        $peso = $this->converter->converterPeso($euro);
        $yen = $this->converter->converterYen($euro);

        $this->model->createCarDB($_POST['Car'], $_POST['Brand'], $_POST['Year'], $_POST['Description'], $sold, $euro, $dollar, $peso, $yen);    
        header("Location: ".BASE_URL."home");
    }

}
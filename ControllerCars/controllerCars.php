<?php
require_once("ModelCars/modelCars.php");
require_once("ViewCars/viewCars.php");

class ControllerCars{

    private $model;
    private $view;
    function __construct()
    {
        $this->model = new ModelCars;
        $this->view = new ViewCars;
    }

    function home(){
        $allCars = $this->model->getCars();
        $this->view->viewHome($allCars);
    }
    function byBrand($brand){
        $carsBrand = $this->model->getCarsBrand($brand);
        $brandTitle = $this->model->getOnlyBrand($brand);
        $this->view->carsByBrand($carsBrand, $brandTitle);
    }
}
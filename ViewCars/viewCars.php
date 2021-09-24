<?php
require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class ViewCars{

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function viewHomeLocation($brand){
        header("Location: ".BASE_URL."brand/$brand");
    }
    function viewHome($allCars){
        $this->smarty->assign('allCars', $allCars);
        $this->smarty->display('templates/home.tpl');
    }
    function carsByBrand($carsBrand, $brandTitle){
        $this->smarty->assign('carsBrand', $carsBrand);
        $this->smarty->assign('title', $brandTitle);
        $this->smarty->display('templates/carsBrand.tpl');
    }
    function viewDescription($carDescription){
        $this->smarty->assign('carDescription', $carDescription);
        $this->smarty->display('templates/carDescription.tpl');
    }
}
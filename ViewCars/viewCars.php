<?php
require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class ViewCars{

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function viewHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function viewBrandLocation($brand){
        header("Location: ".BASE_URL_BRAND."/$brand");
    }

    function viewHome($allCars){     
        $arregloImg = [];
        foreach($allCars as $images){
            $image = $images->Image;
            $imagendecodificada = base64_encode($image);
            array_push($arregloImg, $imagendecodificada);
        }

        $this->smarty->assign('allCars', $allCars);
        $this->smarty->assign('arregloImg', $arregloImg);
        $this->smarty->display('templates/home.tpl');
    }

    function carsByBrand($carsBrand, $brandTitle){
        $this->smarty->assign('title', $brandTitle);
        $this->smarty->assign('carsBrand', $carsBrand);
        $this->smarty->display('templates/carsBrand.tpl');
    }

    function viewDescription($carDescription){
        $this->smarty->assign('carDescription', $carDescription);
        $this->smarty->display('templates/carDescription.tpl');
    }
}
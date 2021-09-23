<?php
require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class ViewCars{

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function viewHome($allCars){
        $this->smarty->assign('allCars', $allCars);
        $this->smarty->display('templates/home.tpl');
    }
}
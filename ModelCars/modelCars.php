<?php

class ModelCars{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=japonesecars;charset=utf8', 'root', '');
    }

    //test run, bring all the cars
    function getCars(){
        $query = $this->db->prepare('SELECT Brand FROM cars GROUP BY Brand');
        $query->execute();
        $allCars = $query->fetchAll(PDO::FETCH_OBJ);
        return $allCars;
    }
    function getCarsBrand($brand){
        $query = $this->db->prepare('SELECT * FROM cars WHERE Brand =?');
        $query->execute(array($brand));
        $carsBrand = $query->fetchAll(PDO::FETCH_OBJ);
        return $carsBrand;
    }

    //I only bring the brand of the car to put it as a title
    function getOnlyBrand($brand){
        $query = $this->db->prepare('SELECT Brand FROM cars WHERE Brand =? LIMIT 1');
        $query->execute(array($brand));
        $brand = $query->fetchAll(PDO::FETCH_OBJ);
        return $brand;
    }

}
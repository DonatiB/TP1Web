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

    function descriptionByCarDB($carDescription){
        $query = $this->db->prepare(
            'SELECT c.Car, c.Brand, c.Year, c.Description, c.Sold, p.Euro, p.Dollar, p.Peso, p.Yen
            FROM `cars` c
            INNER JOIN `Price` p
            ON c.Car = p.Car 
            WHERE c.ID_car = ?'
        );
        $query->execute(array($carDescription));
        $carDescription = $query->fetchAll(PDO::FETCH_OBJ);
        return $carDescription;

    }

    // function deleteCarDB($delete){
    //     $query = $this->db->prepare('SELECT FROM cars WHERE Brand =? LIMIT 1');
    // }

}
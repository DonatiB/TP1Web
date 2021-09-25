<?php

class ModelCars{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=japonesecars;charset=utf8', 'root', '');
    }

    //test run, bring all the cars
    function getCars(){
        // $query = $this->db->prepare('SELECT Brand FROM cars GROUP BY Brand');
        $query = $this->db->prepare(
            'SELECT c.Brand, l.Image
            FROM `cars` c
            INNER JOIN `logo` l
            ON c.Brand = l.Brand 
            GROUP BY c.Brand');
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
    
    function getBrandTitle($brand){
        $query = $this->db->prepare('SELECT Brand FROM cars WHERE Brand =? LIMIT 1');
        $query->execute(array($brand));
        $brandTitle = $query->fetchAll(PDO::FETCH_OBJ);
        return $brandTitle;
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

    function deleteCarDB($brand, $car, $delete){
        $queryCar = $this->db->prepare("DELETE FROM cars WHERE Brand=? AND ID_car=?");
        $queryPrice = $this->db->prepare("DELETE FROM Price WHERE Car=?");
        $queryCar->execute(array($brand, $delete));
        $queryPrice->execute(array($car));
    }

    function soldCarDB($brand, $sold){
        $query = $this->db->prepare("UPDATE cars SET Sold=0 WHERE Brand=? AND ID_car=?");
        $query->execute(array($brand, $sold));
    }
    function onSaleCarDB($brand, $sold){
        $query = $this->db->prepare("UPDATE cars SET Sold=1 WHERE Brand=? AND ID_car=?");
        $query->execute(array($brand, $sold));
    }

    function createCarDB($Car, $Brand, $Year, $Description, $sold, $euro, $dollar, $peso, $yen){
        $queryPrice = $this->db->prepare('INSERT INTO `Price`(`Car`, `Euro`, `Dollar`, `Peso`, `Yen`) VALUES (?, ?, ?, ?, ?)');
        $queryCar = $this->db->prepare('INSERT INTO `cars`(`Car`, `Brand`, `Year`, `Description`, `Sold`) VALUES (?, ? ,? ,?, ?)');      
        $queryPrice->execute(array($Car, $euro, $dollar, $peso, $yen));
        $queryCar->execute(array($Car, $Brand, $Year, $Description, $sold));
    }

    function saveLogoDB($brand, $name, $biImg, $type, $description){
        $query = $this->db->prepare('INSERT INTO `logo`(`Brand`, `Name`, `Image`, `Type`, `Description`) VALUE(?, ?, ?, ?, ?)');
        $query->execute(array($brand, $name, $biImg, $type, $description));
    }
}
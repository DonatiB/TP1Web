<?php

class ModelCars{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=japonesecars;charset=utf8', 'root', '');
    }

    function getCars(){
        $query = $this->db->prepare('SELECT * FROM cars');
        $query->execute();
        $allCars = $query->fetchAll(PDO::FETCH_OBJ);
        return $allCars;
    }
}
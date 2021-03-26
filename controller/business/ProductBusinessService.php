<?php
/*
* product Business Service class
* This class is used for business operations. It utilzes the ProductDataService class to interact with the DB
*/
require __DIR__ . '\\..\\..\\Autoloader.php';

class ProductBusinessService {
    /* returns an array of all products stored within DB */
    public function getAllProducts(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getAllProducts();
    }

    /* returns an array of all vendors stored within DB */
    public function getAllVendors(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getAllVendors();
    }

    /* returns an array of all store locations stored within DB */
    public function getAllLocations(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getAllLocations();
    }

    /* Returns a connection to the Database */
    private function getConnection(){
        $connection = new Database();
        return $connection->getConnection();
    }
}

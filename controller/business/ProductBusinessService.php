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

    /* Returns a count of all products stored in db */
    public function getProductCount(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getProductCount();
    }

    /* returns an array of all products with less than 10 quantity stored within DB */
    public function getLowQuantProducts(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getLowQuantProducts();
    }

    /* returns an array of all vendors stored within DB */
    public function getAllVendors(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getAllVendors();
    }

    /* Returns a count of all vendors stored in db */
    public function getVendorCount(){
        $connection = $this->getConnection();
        $service = new ProductDataService($connection);
        return $service->getVendorCount();
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

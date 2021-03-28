<?php
require __DIR__ . '\\..\\..\\Autoloader.php';

class EmployeeBusinessService{

    /* returns an array of all employees stored within DB */
    public function getAllEmployees(){
        $connection = $this->getConnection();
        $service = new EmployeeDataService($connection);
        return $service->getAllEmployees();
    }

    /* Returns a count of all employees stored in db */
    public function getEmployeeCount(){
        $connection = $this->getConnection();
        $service = new EmployeeDataService($connection);
        return $service->getEmployeeCount();
    }

    /* Returns a connection to the Database */
    private function getConnection(){
        $connection = new Database();
        return $connection->getConnection();
    }

}
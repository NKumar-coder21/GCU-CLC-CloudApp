<?php
/*
* User Business Service class
* This class is used for business operations. It utilzes the UserDataService class to interact with the DB
*/
require __DIR__ . '\\..\\..\\Autoloader.php';

class UserBusinessService {

    /*Compares user provided credentials with those stored within the DB */
    /* Returns user ID on success and -1 on failure */
    public function authenticate($username, $password){
        $connection = $this->getConnection();
        $service = new UserDataService($connection);
        return $service->authenticate($username, $password);
    }

    /* returns an array of all users stored within DB */
    public function getAllUsers(){
        $connection = $this->getConnection();
        $service = new UserDataService($connection);
        return $service->getAllUsers();
    }

    /* Returns a connection to the Database */
    private function getConnection(){
        $connection = new Database();
        return $connection->getConnection();
    }
}
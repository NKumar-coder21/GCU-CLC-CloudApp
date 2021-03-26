<?php

class Database {
    /*Connection information is entered here */
    private $dbServer = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "root";
    private $dbName = "markets-management";

    /* Returns a connection to the DB, or returns connection error on failure */
    function getConnection() {
        $connection = new mysqli($this->dbServer, $this->dbUsername, $this->dbPassword, $this->dbName);

        if($connection->connect_error) {
            die("Connection Failed: " . $connection->connect_error);
        }
        else{
            return $connection;
        }
    }
}
?>
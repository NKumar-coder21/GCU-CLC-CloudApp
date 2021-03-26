<?php

class UserDataService {
    
    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    /* Compares credentials with information stored in the DB
        Returns user ID on success, and -1 on failure. */
    public function authenticate($username, $password){

        $sql = "SELECT user.ID, user.username, user.password 
        FROM user 
        WHERE username = ? AND password = ?";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $username, $password);
                $stmt->fetch();
                $id = $ID;
                $stmt->free_result();
                $stmt->close();
                return $id;
            }
            else{
                $stmt->free_result();
                $stmt->close();
                return -1;
            }
        }
        else{
            $stmt->free_result();
            $stmt->close();
            return -1;
        }
    }

    /* returns an array of all users stored within DB */
    public function getAllUsers(){
        $sql = "SELECT * FROM user";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $username, $password);
                $users = array();
                $index = 0;
                while($stmt->fetch()){
                    $users[$index] = array(
                        "ID" => $ID,
                        "username" => $username,
                        "password" => $password
                    );
                    ++$index;
                }
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return $users;
            }
            else{
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return -1;
            }
        }
        else{
            $stmt->free_result();
            $stmt->close();
            $this->connection->close();
            return -1;
        }
    }





}
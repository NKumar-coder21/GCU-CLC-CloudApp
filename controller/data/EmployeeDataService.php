<?php

require __DIR__ . '\\..\\..\\Autoloader.php';

class EmployeeDataService{

    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    /* returns an array of all employees stored within DB */
    public function getAllEmployees(){
        $sql = "SELECT * FROM employees";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $employee_name, $employee_shift, $employee_position, $employee_salary, $employee_start_date);
                $employees = array();
                $index = 0;
                while($stmt->fetch()){
                    $employees[$index] = array(
                        "ID" => $ID,
                        "employee_name" => $employee_name,
                        "employee_shift" => $employee_shift,
                        "employee_position" => $employee_position,
                        "employee_salary" => $employee_salary,
                        "employee_start_date" => $employee_start_date
                    );
                    ++$index;
                }
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return $employees;
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

    /* Returns a count of all employees stored in db */
    public function getEmployeeCount(){
        $sql = "SELECT COUNT(*) as count FROM employees";
        $result = $this->connection->query($sql);
        $count = $result->fetch_assoc();
        return $count['count'];
    }
}
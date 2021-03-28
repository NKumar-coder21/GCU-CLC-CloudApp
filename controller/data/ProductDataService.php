<?php

class ProductDataService {
    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    /* returns an array of all products stored within DB */
    public function getAllProducts(){
        $sql = "SELECT * FROM products";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $product_name, $product_location, $product_vendor, $product_quant);
                $products = array();
                $index = 0;
                while($stmt->fetch()){
                    $products[$index] = array(
                        "ID" => $ID,
                        "product_name" => $product_name,
                        "product_location" => $product_location,
                        "product_vendor" => $product_vendor,
                        "product_quant" => $product_quant
                    );
                    ++$index;
                }
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return $products;
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

    /* Returns a count of all products stored in db */
    public function getProductCount(){
        $sql = "SELECT COUNT(*) as count FROM products";
        $result = $this->connection->query($sql);
        $count = $result->fetch_assoc();
        return $count['count'];
    }

    /* returns an array of all products with less than 10 quantity stored within DB */
    public function getLowQuantProducts(){
        $sql = "SELECT * FROM `products` WHERE products.product_quant < 10";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $product_name, $product_location, $product_vendor, $product_quant);
                $products = array();
                $index = 0;
                while($stmt->fetch()){
                    $products[$index] = array(
                        "ID" => $ID,
                        "product_name" => $product_name,
                        "product_location" => $product_location,
                        "product_vendor" => $product_vendor,
                        "product_quant" => $product_quant
                    );
                    ++$index;
                }
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return $products;
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

    /* returns an array of all vendors stored within DB */
    public function getAllVendors(){
        $sql = "SELECT * FROM vendors";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $vendor_name, $vendor_address, $vendor_representative, $vendor_representative_phone);
                $vendors = array();
                $index = 0;
                while($stmt->fetch()){
                    $vendors[$index] = array(
                        "ID" => $ID,
                        "vendor_name" => $vendor_name,
                        "vendor_address" => $vendor_address,
                        "vendor_representative" => $vendor_representative,
                        "vendor_representative_phone" => $vendor_representative_phone
                    );
                    ++$index;
                }
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return $vendors;
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

    /* Returns a count of all vendors stored in db */
    public function getVendorCount(){
        $sql = "SELECT COUNT(*) as count FROM vendors";
        $result = $this->connection->query($sql);
        $count = $result->fetch_assoc();
        return $count['count'];
    }

    /* returns an array of all store locations stored within DB */
    public function getAllLocations(){
        $sql = "SELECT * FROM store_locations";

        if($stmt = $this->connection->prepare($sql)){
            $stmt->execute();
            $stmt->store_result();
            $num_rows = $stmt->num_rows;
            if($num_rows > 0){
                $stmt->bind_result($ID, $location_name);
                $store_locations = array();
                $index = 0;
                while($stmt->fetch()){
                    $store_locations[$index] = array(
                        "ID" => $ID,
                        "location_name" => $location_name
                    );
                    ++$index;
                }
                $stmt->free_result();
                $stmt->close();
                $this->connection->close();
                return $store_locations;
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
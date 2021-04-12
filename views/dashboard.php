<?php
session_start();
//check if the user is logged in, if not go back to login screen
if (isset($_SESSION["sessionID"])) {
    require "../controller/Database.ref.php"; ?>
<?php require "template/header.php"; ?>
<div></div>
<section role="main" class="container-fluid mt-3 mb-5">
    <div class="container-fluid">
        <div class="row">
            <!--Main info content-->
            <div class="col-md-12">
                <div class="card text-center mb-5" style="color: green;">
                    <div class="card-header bg-dark text-white">
                        <h1 class="display-4">Summary Overview</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <?php
                                            $ProductQuery = "SELECT * FROM products";
                                            $ProductResult = mysqli_query($connection, $ProductQuery);
                                            $ProductNum = mysqli_num_rows($ProductResult); ?>
                                        <h3 class="display-6"><?php echo $ProductNum ?></h3>
                                        <!--Count of products from DB-->
                                        <h4><i class="fas fa-box-open"></i> PRODUCTS</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <?php
                                            $LowProductQuery = "SELECT * FROM products WHERE product_quant <= 45";
                                            $LowProductResult = mysqli_query($connection, $LowProductQuery);
                                            $LowProductNum = mysqli_num_rows($LowProductResult); ?>
                                        <h3 class="display-6"><?php echo $LowProductNum ?></h3>
                                        <!--Count of products (that has less than the number 25 for qty) from DB-->
                                        <h4><i class="fas fa-exclamation-triangle"></i> ITEMS LOW QTY.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <?php
                                            $VendorQuery = "SELECT * FROM vendors";
                                            $VendorResult = mysqli_query($connection, $VendorQuery);
                                            $VendorNum = mysqli_num_rows($VendorResult); ?>
                                        <h3 class="display-6"><?php echo $VendorNum ?></h3>
                                        <!--Count of vendors from DB-->
                                        <h4><i class="fas fa-industry"></i> SUPPLIERS</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <?php
                                            $EmployeeQuery = "SELECT * FROM employees";
                                            $EmployeeResult = mysqli_query($connection, $EmployeeQuery);
                                            $EmployeeNum = mysqli_num_rows($EmployeeResult); ?>
                                        <h3 class="display-6"><?php echo $EmployeeNum ?></h3>
                                        <!--Count of employees from DB-->
                                        <h4><i class="fas fa-users"></i> EMPLOYEES</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sub info content-->
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h2><i class="fas fa-users"></i> NEWEST EMPLOYEES</h3>
                            <!--The last 10 employees from DB (name and shift are shown)-->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive-md">
                                <table id="employeeTable" class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Shift</th>
                                        </tr>
                                    </thead>
                                    <!-- SQL QUERY & DATA HERE ONTO TABLE -->
                                    <tbody>
                                        <?php
                                            $join = "SELECT employees.employee_name, employees.employee_shift FROM employees 
                                            ORDER BY employees.employee_name DESC LIMIT 10";
                                            $result = mysqli_query($connection, $join);
                                            if ($result) {
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($employee = mysqli_fetch_assoc($result)) {
                                            ?>
                                        <tr>
                                            <td><?php echo $employee['employee_name'] ?></td>
                                            <td><?php echo $employee['employee_shift'] ?></td>
                                        </tr>
                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h2><i class="fas fa-exclamation-triangle"></i> LOW QUANTITY ITEMS</h3>
                            <!--List of products (less than 20 qty) from DB-->

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table id="productTable" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Location in Store</th>
                                        <th scope="col">Provided Supplier</th>
                                        <th scope="col">QTY</th>
                                    </tr>
                                </thead>
                                <!-- SQL QUERY & DATA HERE ONTO TABLE -->
                                <tbody>
                                    <?php
                                        $join = "SELECT products.SKU, products.product_name, products.product_quant, store_locations.location_name, vendors.vendor_name
                                FROM products
                                INNER JOIN store_locations ON products.product_location = store_locations.ID
                                INNER JOIN vendors ON products.product_vendor = vendors.ID
                                WHERE products.product_quant <=45";
                                        $result = mysqli_query($connection, $join);
                                        if ($result) {
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($product = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <tr>
                                        <td><?php echo $product['SKU'] ?></td>
                                        <td><?php echo $product['product_name'] ?></td>
                                        <td><?php echo $product['location_name'] ?></td>
                                        <td><?php echo $product['vendor_name'] ?></td>
                                        <td><?php echo $product['product_quant'] ?></td>
                                    </tr>
                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php require "template/footer.php"; ?>
<?php
} else {
    //Messager code
    $file = basename(__FILE__, '.php');
    require_once "../controller/logginglog.php";
    $message = new logginglog();

    $message->newErrorMessage($file, "USER HAS TRY TO ACCESS " . $file . " WITH NO SESSION STARTED! REDIRECTING USER...");
    header("Location: ../index.php");
    exit();
}
?>

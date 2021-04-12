<?php
session_start();
//check if the user is logged in, if not go back to login screen
if (isset($_SESSION["sessionID"])) {
    require "../controller/Database.ref.php"; ?>
<?php require "template/header.php"; ?>
<div class="container-fluid mt-3 mb-5">
    <!--Main content-->
    <div class="col-md-12">
        <div class="card text-center">
            <div class="card-body">
                <div class="table-responsive-md">
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
                                INNER JOIN vendors ON products.product_vendor = vendors.ID";
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

<script>
$(document).ready(function() {
    $('#productTable').DataTable({
        "pagingType": "numbers",
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "No records match your search term",
            "info": "Page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });
});
</script>
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

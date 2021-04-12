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
                    <table id="vendorTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Supplier's Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Representative Name</th>
                                <th scope="col">Phone #</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <!-- SQL QUERY & DATA HERE ONTO TABLE -->
                        <tbody>
                            <?php
                                $join = "SELECT * FROM vendors";
                                $result = mysqli_query($connection, $join);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($vend = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td><?php echo $vend['vendor_name'] ?></td>
                                <td><?php echo $vend['vendor_address'] ?></td>
                                <td><?php echo $vend['vendor_representative'] ?></td>
                                <td><?php echo $vend['vendor_representative_phone'] ?></td>
                                <td>
                                    <a href="../controller/editvendor.php?id=<?php echo $vend['ID'] ?>"
                                        style="color:blue"> EDIT</a>
                                </td>
                                <td>
                                    <a href="../controller/deletevendor.php?id=<?php echo $vend['ID'] ?>"
                                        style="color:red"> DELETE</a>
                                </td>
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
    $('#vendorTable').DataTable({
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
    require "../controller/logginglog.php";
    $message = new logginglog();

    $message->newWarningMessage($file, "USER HAS TRY TO ACCESS" . $file . " WITH NO SESSION STARTED! REDIRECTING USER...");
    header("Location: ../index.php");
    exit();
}
?>

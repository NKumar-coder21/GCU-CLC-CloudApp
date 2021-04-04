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
                    <table id="employeeTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID #</th>
                                <th scope="col">Name</th>
                                <th scope="col">Shift</th>
                                <th scope="col">Position</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <!-- SQL QUERY & DATA HERE ONTO TABLE -->
                        <tbody>
                            <?php
                                $join = "SELECT employees.ID, employees.employee_name, employees.employee_shift, store_locations.location_name
                                    FROM employees
                                    INNER JOIN store_locations 
                                    ON employees.employee_position = store_locations.ID";
                                $result = mysqli_query($connection, $join);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($employee = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td><?php echo $employee['ID'] ?></td>
                                <td><?php echo $employee['employee_name'] ?></td>
                                <td><?php echo $employee['employee_shift'] ?></td>
                                <td><?php echo $employee['location_name'] ?></td>
                                <td>
                                    <a href="../controller/editemployee.php?id=<?php echo $employee['ID'] ?>"
                                        style="color:blue"> EDIT</a>
                                </td>
                                <td>
                                    <a href="../controller/deleteemployee.php?id=<?php echo $employee['ID'] ?>"
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
    $('#employeeTable').DataTable({
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
    header("Location: ../index.php");
    exit();
}
?>

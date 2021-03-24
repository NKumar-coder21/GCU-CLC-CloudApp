<?php require "template/header.php"; ?>
<div class="container-fluid mt-3 mb-5">
    <!--Main content-->
    <div class="col-md-12">
        <div class="card text-center">
            <div class="card-header" style="background-color:#EE000C; color: white">
                <h3 class="display-6"><i class="fas fa-box-open"></i> PRODUCTS</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive-md">
                    <table id="productTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SKU</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Location in Store</th>
                                <th scope="col">Provided Vendor</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Edit/Delete</th>
                            </tr>
                        </thead>
                        <!-- SQL QUERY & DATA HERE ONTO TABLE -->
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

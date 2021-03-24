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
                                        <h3 class="display-6"> 12</h3>
                                        <!--Count of products from DB-->
                                        <h4><i class="fas fa-box-open"></i> PRODUCTS</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="display-6">14</h3>
                                        <!--Count of products (that has less than the number 20 for qty) from DB-->
                                        <h4><i class="fas fa-exclamation-triangle"></i> ITEMS LOW QTY.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="display-6">50</h3>
                                        <!--Count of vendors from DB-->
                                        <h4><i class="fas fa-industry"></i> VENDORS</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="display-6">30</h3>
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
                            <!--The last 10 employees from DB (at least name, shift, and hired date are shown)-->
                    </div>
                    <div class="card-body">
                        <div class="row">

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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "template/footer.php"; ?>

<!DOCTYPE html>
<?php
$selected_page = basename($_SERVER['PHP_SELF']);
?>
<html>

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <title>Fast Fresh Foods | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
        </script>
    </head>

    <body class="d-flex flex-column min-vh-100" style=" background-color: #ebede7;">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php"><img style="height: 80px; width: 180px; object-fit:cover;"
                        src="../img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="<?php if ($selected_page == 'dashboard.php') echo 'active'; ?> nav-link"
                            aria-current="page" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a class="<?php if ($selected_page == 'products.php') echo 'active'; ?> nav-link"
                            href="products.php"><i class="fas fa-box-open"></i> Products</a>
                        <a class="<?php if ($selected_page == 'vendors.php') echo 'active'; ?> nav-link"
                            href="vendors.php"><i class="fas fa-industry"></i> Vendors</a>
                        <a class="<?php if ($selected_page == 'employees.php') echo 'active'; ?> nav-link"
                            href="employees.php"><i class="fas fa-users"></i> Employees</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <span class="navbar-text"><b>Welcome, Admin!</b></span>
                        <a class="nav-link" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

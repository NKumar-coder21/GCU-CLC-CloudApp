<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Fast Fresh Foods | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body style="background-color: #ebede7;">
        <div class="container-flex">
            <div class="container p-4">
                <div class="row align-items-center">
                    <div class="panel col-md-7">
                        <img class="panel-image img-fluid" src="img/img1.jpg"
                            style="width: 7in; object-fit:cover; border-radius:30px">
                    </div>
                    <div class="col-md-5">
                        <div class="form-block">
                            <div class="mb-4 text-center">
                                <img class="img-fluid" src="img/logo.png" style="object-fit:cover;">
                                <hr style="width: 80%; margin:auto;">
                            </div>
                            <!--Form for sign in here-->
                            <!-- controller must ONLY check that Admin is logged in -->
                            <form action="./controller/data/LoginDirect.php" method="POST">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name='username' class="form-control" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name='password' class="form-control" id="password">
                                </div>
                                <input type="submit" value="Log In" name='submit' class="btn btn-success mt-4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

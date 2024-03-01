<?php
    require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
   <?php 
    require_once("header.php");
   ?>
    <div class="container-fluid min-vh-100" style=" width: 60vw;">
        <div class="row mt-5">
            <div class="col-12">
                <?php 
                    if(isset($_GET['login_fail'])){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Error!
                        </div>
                        <?php
                    }
                    if(isset($_GET['reg_success'])){
                        ?>
                        <div class="alert alert-success" role="alert">
                            Registration Success!
                        </div>
                        <?php
                    }
                 ?>
                <div class="col-6 mx-auto">
                    <form class="border-2"  style="font-size: 1.2em;" action="toLogin.php" method="post">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Login:</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="text" name="login" class="form-control border-2" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Password:</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="password" name="password" class="form-control border-2">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn btn-success mb-4">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("footer.php"); ?>
</body>
</html>
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
    <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x: hidden;">
    <?php require_once("header.php") ?>
    <div class="container min-vh-100" style=" width: 60%;">
        <div class="row">
            <div class="col-12">
                <div class="col-6 mx-auto">
                    <?php 
                        if(isset($_GET['error_password_length'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    Minimum password length - 8 characters
                                </div>
                                <?php
                        }
                        if(isset($_GET['error_no_digit'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    Password must contain numbers
                                </div>
                                <?php
                        }
                        if(isset($_GET['error_no_symbol'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    The password must contain special characters
                                </div>
                                <?php
                        }if(isset($_GET['error_no_uppercase'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    The password must contain an uppercase character
                                </div>
                                <?php
                        }
                        if(isset($_GET['error_no_lowercase'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    The password must contain an lowercase character
                                </div>
                                <?php
                        }if(isset($_GET['error_password_mismatch'])){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    Password isnt confirmed! Try again!
                                </div>
                                <?php
                        }
                     ?>
                    <form class="mt-5" style="font-size: 1.2em;" action="toRegister.php" method="post">
                        <div class="row mt-3">
                            <div class="col-6">
                                <label>First name:</label>
                            </div>
                            <div class="col-6">
                                <label>Second name:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <input type="text" name="name" class="form-control border-2" required>
                            </div>
                            <div class="col-6">
                                <input type="text" name="name" class="form-control border-2" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Login:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" name="login" class="form-control border-2" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Password:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="password" name="password" class="form-control border-2" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Confirm password:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="password" name="confirm_password" class="form-control border-2" required>
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col-12">
                                <button class="btn btn-success mb-4">Sign up</button>
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
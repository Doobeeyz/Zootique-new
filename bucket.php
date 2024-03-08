<!DOCTYPE html>
<?php
    require_once("db.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Veterinary Medicalplies Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x: hidden;">
    <?php 
        require_once("header.php");
     ?>
    <div class="container-xl">
        <div class="row">
    <div class="col-12">
    
        <div class="container-lg">
            <div id="recc">
                <h2 class="text-center mb-4"></h2>
                <ul>
                    <li>
                    <?php 
                    for ($i=0; $i < 3 ; $i++) { 
                            
                    ?>
                        <div class="card mb-3" style="min-width: 930px;">
                          <div class="row ">
                            <div class="col-md-2">
                              <img src="..." class="img-fluid rounded-start" style="max-width: 150px; max-height: 180px;">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Название товара</h5>
                                <p class="card-text">Описание товара</p>
                                <b>Цена</b>
                              </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <div class="mt-auto mb-4">
                                    <p class="text-center">1</p>
                                    <button class="btn btn-outline-dark" disabled data-bs-toggle="button">-</button>
                                    <button class="btn btn-outline-dark" disabled data-bs-toggle="button">+</button>
                                </div>
                            </div>
                          </div>
                        </div>
                    <?php } ?>
                </ul>   
            </div>
        </div>
    </div>
</div>
</div>

</div>
        <?php 
            require_once("footer.html")
         ?>
</body>
</html>

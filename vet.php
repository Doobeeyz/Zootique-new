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
    <div>
        <div id="hero" style="box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.2);">
            <div id="hero_text">
                <h1>Добро пожаловать</h1>
                <p>Мы предоставляет наиболее удобный и доступный способ покупки товаров для ваших любимца. Наш магазин располагает широким ассортиментом качественных и проверенных специалистами кормов и угощений, а так же аксессуаров на любую погоду и все случаи жизни.</p>
                <a href="#recc" class="btn btn-success mb-4">Перейти к товарам</a>
            </div>
        </div>
        <div style="box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.2);">
        <div class="container-lg">
            <div id="recc">
                <h2 class="text-center mb-4">Мы рекомендуем</h2>
                <ul>
                    <li>
                    <?php 
                    for ($i=0; $i < 4 ; $i++) { 
                            
                    ?>
                        <a href="#">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        </div>
        <div class="container-lg">
            <div id="recc">
                <h2 class="text-center mb-4">Новые товары</h2>

                <ul>
                    <li>
                    <?php 
                    for ($i=0; $i < 8 ; $i++) { 
                            
                    ?>
                        <a href="#">
                            <div class="card mb-4" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>   
            </div>
            <div class="text-center mb-4">
                <a href="catalog.php">Больше товаров</a>
            </div>
        </div>
        <?php 
            require_once("footer.php")
         ?>
    </div>
    <footer>
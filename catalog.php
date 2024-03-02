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
            <div class="col-2" style="box-shadow: 12px 0 24px rgba(0, 0, 0, 0.1);">
                <div class="filter-block mt-5">
                    <h4 class="mb-4">Фильтры</h4>
                    <label for="price">Цена от:</label><br>
                    <div id="price" class="row">
                        <div class="col-12">
                            <input id="minPrice" class="col-10"><br>
                            <label for="maxPrice">До:</label><br>
                            <input id="maxPrice" class="col-10"><br>
                        </div>
                    </div>
                    <label for="category" class="mt-3">Тип товара:</label><br>
                    <select id="category" name="category" class="mb-4">
                        <option value="1">Все</option>
                        <option value="2">Корма</option>
                        <option value="3">Медицина</option>
                        <option value="4">Игрушки</option>
                    </select><br>
                    <label for="animal">Животное:</label><br>
                    <select id="animal" name="animal" class="mb-4">
                        <option value="1">Все</option>
                        <option value="2">Кошка</option>
                        <option value="3">Собака</option>
                        <option value="4">Другое</option>
                    </select><br>
                    
                    
                </div>
            </div>

    <div class="col-10">
    
        <div class="container-lg">
            <div id="recc">
                <h2 class="text-center mb-4"></h2>
                <ul>
                    <li>
                    <?php 
                    for ($i=0; $i < 15 ; $i++) { 
                            
                    ?>
                        <a href="#">
                            <div class="card mb-4" style="width: 12rem; height: 20rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Описание товара</p>
                                    <b>Цена</b>
                                </div>
                            </div>
                        </a>
                    </li>
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
    

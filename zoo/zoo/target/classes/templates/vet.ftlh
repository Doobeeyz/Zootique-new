<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Zootique</title>
    <link rel="stylesheet" href="../resources/static/css/style.css">
    <style>
        body {
            overflow-x: hidden;
        }

        #hero {
            background-image: url('https://www.proplan.ru/sites/default/files/styles/image_1920x767/public/2020-10/kak-igrat-s-sobakoi.jpg?itok=QsXQ1gOv');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #hero_text {
            position: relative;
            z-index: 1;
            padding-left: 7vw;
            padding-right: 5vw;
        }

        #hero::before {
            content: '';
            position: absolute;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        #hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        #hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }


        .recc {
            padding: 2rem;
        }

        .recc ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            justify-content: space-between;
        }

        .recc li {
            margin-bottom: 2rem;
        }

        .recc img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .recc h3 {
            font-size: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        .recc p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .recc a {
            text-decoration: none;
        }
    </style>
</head>
<body style="overflow-x: hidden;">
    <header id="header"> 
    <div class="" style=" z-index: 2;">
        <div class="row">
            <div class="col-12 bg-dark">
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <div class="container-fluid">
                        <a class="navbar-brand" style="font-size: 1.5rem;" href="/">Zootique</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="/">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="productsUser">Весь каталог</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="bucket">Корзина</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">  
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="login">Войти</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration">Регистрация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="profile">Профиль</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page">Выйти</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
    <div>
        <div id="hero">
            <div id="hero_text">
                <h1>Добро пожаловать</h1>
                <p>Мы предоставляем наиболее удобный и доступный способ покупки товаров для ваших любимцев. Наш магазин располагает широким ассортиментом качественных и проверенных специалистами кормов и угощений, а так же аксессуаров на любую погоду и все случаи жизни.</p>
                <a href="products" class="btn btn-success mb-4">Перейти к товарам</a>
            </div>
        </div>
        <div style="box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.2);">
        <div class="container-lg">
            <div class="recc">
                <h2 class="text-center mb-4">Мы рекомендуем</h2>
                <ul class="card-list"></ul>


                <style>
                    .card-list {
                        display: flex;
                        flex-wrap: wrap;
                        list-style: none;
                        justify-content: space-between;
                        }

                    .card {
                        width: 18rem;
                        margin-right: 10px;
                    }
                </style>
            <ul>
            <#list products as product><li>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${product.title}</h5>
                        <p class="card-text">${product.price} ₸</p>
                        <a href="/product/${product.id}" class="btn btn-success">Перейти к товару</a>
                    </div>
                </div></li>
            <#else>
                <h3>Товаров нет</h3>
            </#list>
            </ul>
            </div>
        </div>
        </div>

    <div class="container-fluid bg-dark py-3" style="margin-bottom: auto;">
        <div class="row mt-3">
            <div class="">
                <p class="text-light">
                    Контакты:
                </p>
            </div>
        </div>
    </div>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="../../../../../demo2/src/main/resources/static/css/style.css" rel="stylesheet">
    <style>
        .footer{
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body style="overflow-x: hidden; overflow-y: hidden">
    <header>
        <div class="" style=" z-index: 2;">
            <div class="row">
                <div class="col-12 bg-dark">
                    <nav class="navbar navbar-expand-lg navbar-dark ">
                        <div class="container-fluid">
                            <a class="navbar-brand" style="font-size: 1.5rem;" href="#">Zootique</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="/">Главная</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="products">Весь каталог</a>
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
    <div class="container" style="width: 60%;">
        <div class="row min-vh-100"  style="box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);">
            <div class="mt-5" style="font-size: 1.2em;" >
            <div class="col-12">
                <div class="col-8 mx-auto"> 
                    <div class="row mt-5">

                        <div class="col-8 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <label>Имя:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" name="firstName" class="form-control border-2" value="${user.name}" readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Номер телефона:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" name="login" class="form-control border-2" value="${user.numberPhone}" readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Эл. почта:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" name="login" class="form-control border-2" value="${user.email}" readonly>
                            </div>
                        </div>
                            <div class="row mt-4">
                                <div class="col-6 mx-auto">
                                    <button type="button" class="btn btn-success">Изменить пароль</button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6 mx-auto">
                                    <button type="button" class="btn btn-success">Добавить номер&nbsp;</button>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-3 footer" style="position: fixed;">
        <div class="row mt-3">
                <div class="">
                    <p class="text-light">
                        Контакты:
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 
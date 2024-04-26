<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="../../../../../demo2/src/main/resources/static/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container-fluid bg-dark py-3" style="z-index: 2;">
        <div class="row">
            <div class="col-12 bg-dark">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" style="font-size: 1.5rem;" href="vet.ftlh">Zootique</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="vet.ftlh">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="catalog.html">Весь каталог</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="bucket.html">Корзина</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="login.html">Войти</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.html">Регистрация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="profile.html">Профиль</a>
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
<div class="container-fluid bg-light">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>                    </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="height: 80vh; margin: auto;" src="https://resources.cdn-kaspi.kz/img/m/p/h3c/h43/64523094065182.jpg?format=gallery-medium" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="height: 80vh; margin: auto;" src="https://resources.cdn-kaspi.kz/img/m/p/h7e/h48/64523096719390.jpg?format=gallery-medium" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-4" style="height: auto; box-shadow: 24px 0 12px rgba(0, 0, 0, 0.1);">
            <h2 class="m-3">${product.title}</h2>
            <h3 class="m-3">${product.description}</h3>
            <ul class="m-3">
                <li>Город: ${product.city}</li>
                <li>Производитель: ${product.author}</li>
                <li>материал: текстиль</li>
            </ul>


            <h3 class="m-3"><b>${product.price} ₸</b></h3>
            <button type="button" class="btn btn-success m-3">В корзину</button>
            <form action="/product/delete/${product.id}" method="post">
                <input type="submit" class="btn btn-danger" value="Удалить товар"/>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark py-3" style="margin-bottom: auto;">
    <div class="row mt-3">
        <div class="col-12">
            <p class="text-light">
                Контакты:
            </p>
        </div>
    </div>
</div>
</body>
</html>
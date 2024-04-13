<!DOCTYPE html>
<html>
<head>
    <title>Zoo shop</title>
    <link href="../static/css/style.css" th:href="@{/css/style.css}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
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
                                    <a class="nav-link" aria-current="page" href="products">Весь каталог</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/bucket">Корзина</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/login">Войти</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/registration">Регистрация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/profile">Профиль</a>
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
<body style="overflow-x: hidden; overflow-y: hidden">
<div class="row px-3"  style="height: 100vh">
    <div class="col-2" id="filters" style="box-shadow: 12px 0 24px rgba(0, 0, 0, 0.1);">
        <div class="filter-block mt-5">
            <form action="/products" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="title" class="form-control" aria-describedby="button-addon2">
                    <input type="submit" class="btn btn-outline-secondary" id="button-addon2" value="Поиск">
                </div>
            </form>
            <h3>Создать новый товар</h3>
            <form action="/product/create" method="post">
                Название объявления: <input type="text" class="form-control"  name="title"/><br>
                Описание объявления: <input type="text" class="form-control" name="description"/><br>
                Цена: <input type="number" class="form-control" name="price"/><br>
                Город: <input type="text" class="form-control" name="city"/><br>
                Продавец: <input type="text" class="form-control" name="author"/><br>
                <input type="submit" value="Добавить товар"/>
            </form>
        </div>
    </div>
    <div class="col-10 px-0" id="products-container" style="height: calc(100vh - 78px); overflow-y: auto;">
        <div class="container-lg">
            <div class="recc">
                <h2 class="text-center mb-4"></h2>
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
            </div>
        </div>
    </div>
</div>



</body>
</html>
<header>
    <div class="" style=" z-index: 2;">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <div class="container-fluid">
                        <a class="navbar-brand" style="font-size: 1.5rem;" href="#">Zootique</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="vet.php">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="catalog.php">Весь каталог</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                                <?php
                                if(!isset($_SESSION['id'])){
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="login.php">Войти</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="registration.php">Регистрация</a>
                                    </li>
                                    <?php } else {?>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"><?=$_SESSION['name']?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"><?=$_SESSION['lastname']?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="profile.php">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                                    </li>
                                    <?php } ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

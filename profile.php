<?php
session_start();

require('config/db_config.php');



?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Профиль</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Личная информация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Мои объявления</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container mt-5 d-flex">

                    <div class="card p-3 w-100">

                        <div class="d-flex align-items-center">

                            <div class="image">
                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155">
                            </div>

                            <div class="ml-3 w-100">

                                <h4 class="mb-0 mt-0"><?= $_SESSION['user']['first_name'] . $_SESSION['user']['last_name'] ?></h4>
                                <span>Администратор</span>

                                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

                                    <div class="d-flex flex-column">
                                        <span class="articles">Объявлений</span>
                                        <span class="number1">38</span>
                                    </div>

                                    <div class="d-flex flex-column">
                                        <span class="followers">Найдено животных</span>
                                        <span class="number2">980</span>
                                    </div>

                                    <div class="d-flex flex-column">
                                        <span class="rating">Передержек</span>
                                        <span class="number3">8.9</span>
                                    </div>
                                </div>

                                <div class="button mt-2 d-flex flex-row align-items-center">
                                    <button class="btn btn-sm btn-outline-primary w-100">Перейти к объявлениям</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        </div>
                    </div>
                </div>

                <?php require('components/footer.php') ?>

</body>

</html>
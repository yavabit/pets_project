<?php
session_start();
require('config/db_config.php');

$sql = "SELECT * FROM `announcements`";
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Animal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
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
    <?php require('components/header.php') ?>

    <div class="container">
        <h3>Какой-то заголовок</h3>

        <div class="filters">
            <form action="">
                <div class="form_filters">
                    <div class="filter-item type">
                        <div class="single-element-widget mt-10">
                            <h4 class="">Тип объявления</h4>
                            <div class="default-select" id="default-select_type">
                                <select class="nice-select open">
                                    <option value="found">Нашли</option>
                                    <option value="1">Потерялись</option>
                                    <option value="1">Нужна передержка</option>
                                </select>
                                <!-- <div class="nice-select open" tabindex="0"><span class="current">Все</span>
                                <ul class="list">
                                    <li data-value=" 1" class="option selected focus">Все</li>
                                    <li data-value="1" class="option">Spanish</li>
                                    <li data-value="1" class="option">Arabic</li>
                                    <li data-value="1" class="option">Portuguise</li>
                                    <li data-value="1" class="option">Bengali</li>
                                </ul>
                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="filter-item type">
                        <div class="single-element-widget mt-10">
                            <h4 class="">Вид животного</h4>
                            <div class="default-select" id="default-select_type">
                                <select class="nice-select open">
                                    <option value="found">Собаки</option>
                                    <option value="1">Кошки</option>
                                </select>
                                <!-- <div class="nice-select open" tabindex="0"><span class="current">Все</span>
                                <ul class="list">
                                    <li data-value=" 1" class="option selected focus">Все</li>
                                    <li data-value="1" class="option">Spanish</li>
                                    <li data-value="1" class="option">Arabic</li>
                                    <li data-value="1" class="option">Portuguise</li>
                                    <li data-value="1" class="option">Bengali</li>
                                </ul>
                            </div> -->
                            </div>
                        </div>
                    </div>

                </div>
                <button class="button rounded-0 primary-bg text-white w-30 btn_1 boxed-btn" type="submit">Показать</button>
                <div class="filter-item search">
                        <div class="single-element-widget mt-10">
                            <div class="relative">
                                <div class="absolute top-4 left-3">
                                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                                </div>
                                <input type="text" class="h-14 w-96 pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search anything...">
                                <div class="absolute top-2 right-2">

                                    <button class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">Search</button>

                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>

        <div class="pets-items">
            <?php foreach ($rows as $row) : ?>
                <div class="pets-item">
                    <div class="img-block">
                        <img src="<?= $row['img_url'] ?>" alt="">
                    </div>
                    <div class="pet-ad-type">
                        Пропала <?= $row['pet_type'] ?>
                    </div>
                    <div class="address">
                        <i></i>
                        <p><?= $row['address'] ?></p>
                    </div>
                    <div class="comment">
                        <p><?= $row['comment'] ?></p>
                    </div>
                    <div class="item_btn">
                        <a href="">Подробнее</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <?php require('components/footer.php') ?>

</body>

</html>
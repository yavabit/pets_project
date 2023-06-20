<?php
session_start();
require('config/db_config.php');

if (isset($_POST['order_type']) && isset($_POST['pet_type'])) {
    $sql = "SELECT * FROM `announcements`";
} else {
    $sql = "SELECT * FROM `announcements`";
}

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
<script>
    var b = document.getElementById('overlay');

    function swa() {
        b.style.visibility = 'visible';
        b.style.opacity = '1';
        b.style.transition = 'all 0.7s ease-out 0s';
    }

    function swa2() {
        b.style.visibility = 'hidden';
        b.style.opacity = '0';
    }
</script>

<body>
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Список нуждающихся животных</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="filters">
            <form action="">
                <div class="filter-item search">
                    <div class="single-element-widget mt-10">
                        <div class="relative">
                            <div class="absolute top-4 left-3">
                                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                            </div>
                            <input type="text" class="h-14 w-96 pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                            placeholder="Найти объявление..."
                            id="search_input">
                            <div class="absolute top-2 right-2">
                                <button class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">Поиск</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-show">
                    <div class="form_filters">
                        <div class="filter-item type">
                            <div class="single-element-widget mt-10">
                                <h4 class="">Тип объявления</h4>
                                <div class="default-select" id="default-select_type">
                                    <select class="custom-select" name='order_type'>
                                        <option value="lost">Пропала</option>
                                        <option value="found">Найдена</option>
                                        <option value="overexposure">Требуется передержка</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="filter-item type">
                            <div class="single-element-widget mt-10">
                                <h4 class="">Вид животного</h4>
                                <div class="default-select" id="default-select_type">
                                    <select class="custom-select" name='pet_type'>
                                        <option value="dog">Собака</option>
                                        <option value="cat">Кошка</option>
                                        <option value="other">Другое</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="boxed-btn3 btn-show" id="setFiltersBtn">Показать</button>
                </div>
                <a href="form-ads.php" class="boxed-btn3 btn-show" type="">Подать объявление</a>
        </div>
        </form>
    </div>

    <div class="pets-items">
        <?php foreach ($rows as $row) : ?>
            <div class="pets-item" id="<?= $row['id'] ?>">
                <div class="img-block">
                    <img src="<?= $row['img_url'] ?>" alt="">
                </div>
                <div class="pet-ad-type">
                    <?= $row['order_type'], " ", $row['pet_type'] ?>
                </div>
                <div class="address">
                    <i></i>
                    <p><?= $row['address'] ?></p>
                </div>
                <div class="comment">
                    <p><?= $row['comment'] ?></p>
                </div>
                <div class="item_btn">
                    <button type="button" class="btn btn-light"><a href="#iw-modal">Подробнее</a></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pets-items">
        <?php for ($i = 0; $i < 30; $i++) : ?>
            <div class="pets-item" id="<?= $i ?>">
                <div class="img-block">
                    <img src="" alt="">
                </div>
                <div class="pet-ad-type">

                </div>
                <div class="address">
                    <i></i>
                    <p></p>
                </div>
                <div class="comment">
                    <p>1342</p>
                </div>
                <div class="item_btn">
                    <button type="button" class="btn btn-light"><a href="#iw-modal">Подробнее</a></button>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    </div>

    <?php require('components/footer.php') ?>

    <!---Разметка для модального окна---->
    <div id="iw-modal" class="iw-modal">
        <div class="wrapper">
            <div class="product-img">
                <img src="/img/pets_ads/такса.jpg" alt="" height="420" width="316">
            </div>
            <div class="product-info">
                <div class="product-text">
                    <a href="#close" title="Закрыть" class="iw-close">×</a>
                    <h1>Пропала Собака</h1>
                    <h2>Старый Оскол, ул. Ровенская дом 97</h2>
                    <p>
                        Порода: Такса<br>
                        Пол: Мужской<br>
                        Кличка: Кнопа<br>
                        Окрас: Черный<br>
                        Контактный номер: +7(951)767-24-37<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!---END-Разметка для модального окна---->
    <script>
        $('#setFiltersBtn').click(function(e) {
            e.preventDefault();
            console.log($('select[name=order_type]').val());
            console.log($('select[name=pet_type]').val());
            $('.whirly-loader').addClass('visible');

            $.ajax({
                url: '/pets.php',
                method: 'post',
                data: {
                    order_type: $('select[name=order_type]').val(),
                    pet_type: $('select[name=pet_type]').val()
                },
                success: function(data) {
                    //alert(data);
                    $('.whirly-loader').removeClass('visible');
                }
            });
        })


        $('#search_input').on('input', function() {
            text = $('#search_input').val();
            let cards = document.querySelectorAll('.pets-item');
            //console.log(cards);
            cards.forEach(function(item) {
                if($('#'+item.id+' .comment').text().includes(text) ||
                    $('#'+item.id+' .pet-ad-type').text().includes(text) ||
                    $('#'+item.id+' .address').text().includes(text)) {

                    $('#'+item.id).css('display','block')

                } else $('#'+item.id).css('display','none')
            })
        });

    </script>
</body>

</html>
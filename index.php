<?php
    session_start();
    require('config/db_config.php');

    $sql = "SELECT * FROM `announcements`";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $query = mysqli_query($link, "SELECT COUNT(*) FROM `announcements`"); 
    $count = mysqli_fetch_row($query)[0];
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


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="slider_text">
                            <h3>Мы помогаем <br> <span>Вашим питомцам</span></h3>

                            <div class="btns_header_banner">
                                <a href="contact.html" class="boxed-btn4">Я нашел</a>
                                <a href="contact.html" class="boxed-btn4">Я потерял</a>
                                <a href="contact.html" class="boxed-btn4">Передержка</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="img/banner/dog.png" alt="">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Три простых шага</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_1.png" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Заполните простую форму</h3>
                            <p>Разместите объявление о пропаже, находке или требуемой передержке питомца абсолютно бесплатно</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_2.png" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Мы оповестим волонтеров о необходимой помощи</h3>
                            <p>Наши друзья и сотрудники оказывают своевременную помощь вашим любимым питомцам</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_3.png" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Найдите друг друга</h3>
                            <p>Благотворительным фондом "Умка" помощь оказана уже свыше 10000 питомцам и эта цифра ежедневно растёт</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- adapt_area_start  -->
    <div class="adapt_area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="adapt_help">
                        <div class="section_title">
                            <h3><span>Хотите помочь</span>
                                нуждающимся животным?</h3>
                            <p>Заполните заявку на вступление в штат волонтеров и наши сотрудники свяжутся с вами для дальнейшей работы.</p>
                            <a href="contact.html" class="boxed-btn3">Станьте волонтером</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="adapt_about">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="img/adapt_icon/1.png" alt="">
                                    <div class="adapt_content">
                                        <h3 class="counter">100</h3>
                                        <p>Волонтеров</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="img/adapt_icon/3.png" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter">100</span>+</h3>
                                        <p>Найдено животных</p>
                                    </div>
                                </div>
                                <div class="single_adapt text-center">
                                    <img src="img/adapt_icon/2.png" alt="">
                                    <div class="adapt_content">
                                        <h3 class="counter"><?=$count?></h3>
                                        <p>Объявлений</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- adapt_area_end  -->

    <!-- testmonial_area_start  -->
    <div class="testmonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="textmonial_active owl-carousel">
                        <?php foreach($rows as $row): ?>
                            <div class="testmonial_wrap">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="test_thumb">
                                    <img src="<?= $row['img_url'] ?>" alt="" class="round">
                                    </div>
                                    <div class="test_content">
                                        <h4><?=$row['order_type']," ", $row['pet_type'] ?></h4>
                                        <span><?=$row['address']?></span>
                                        <p><?= $row['comment'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/testmonial/1.png" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Jhon Walker</h4>
                                    <span>Head of web design</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/testmonial/1.png" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Jhon Walker</h4>
                                    <span>Head of web design</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- testmonial_area_end  -->

    <div class="contact_anipat anipat_bg_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>Остались вопросы?</h3>
                            <p>Мы готовы на них с радостью ответить.<br> Спасибо, что Вы с нами!</p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="contact.php" class="boxed-btn4">Связаться</a>
                            <p>или  <a href="#"> +7(951)-767-24-37</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('components/footer.php') ?>

</body>

</html>
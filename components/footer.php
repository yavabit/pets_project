 <!-- footer_start  -->
 <footer class="footer">
     <div id="sticky-header" class="main-header-area">
         <div class="container">
             <div class="">
                 <div class="main-menu  d-none d-lg-block">
                     <ul class="nav justify-content-center">
                         <li class="nav-item">
                             <img class="icon" src="img/icons/1.svg" alt="">
                             <a class="nav-link" href="index.php">Главная</a>
                         </li>
                         <li class="nav-item">
                             <img class="icon" src="img/icons/2.svg" alt="">
                             <a class="nav-link" href="about.php">О нас</a>
                         </li>
                         <li class="nav-item">
                             <img class="icon" src="img/icons/3.svg" alt="">
                             <a class="nav-link" href="pets.php">Животные</a>
                         </li>
                         <li class="nav-item">
                             <img class="icon" src="img/icons/4.svg" alt="">
                             <a class="nav-link" href="blog.html">Новости</a>
                         </li>
                         <li class="nav-item">
                             <img class="icon" src="img/icons/5.svg" alt="">
                             <a class="nav-link" href="profile.php">Профиль</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div class="whirly-loader"></div>
 <!-- footer_end  -->

 <!-- auth  -->
 <? require($_SERVER['DOCUMENT_ROOT'] . '/auth.php') ?>

 <?php if (isset($_SESSION['user'])) : ?>
     <div class="login-form">
         <!-- <h4 class="widget_title">Необходимо войти</h4> -->
         <a class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
         type="submit" href="<?= $url ?>?<?= urldecode(http_build_query($params)) ?>">
             Войти через VK
         </a>
     </div>
     <div class="dark-bg"></div>
 <?php endif; ?>

 <!-- JS here -->
 <script src="js/vendor/modernizr-3.5.0.min.js"></script>
 <script src="js/vendor/jquery-1.12.4.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/isotope.pkgd.min.js"></script>
 <script src="js/ajax-form.js"></script>
 <script src="js/waypoints.min.js"></script>
 <script src="js/jquery.counterup.min.js"></script>
 <script src="js/imagesloaded.pkgd.min.js"></script>
 <script src="js/scrollIt.js"></script>
 <script src="js/jquery.scrollUp.min.js"></script>
 <script src="js/wow.min.js"></script>
 <script src="js/nice-select.min.js"></script>
 <script src="js/jquery.slicknav.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/plugins.js"></script>
 <script src="js/gijgo.min.js"></script>

 <!--contact js-->
 <script src="js/contact.js"></script>
 <script src="js/jquery.ajaxchimp.min.js"></script>
 <script src="js/jquery.form.js"></script>
 <script src="js/jquery.validate.min.js"></script>
 <script src="js/mail-script.js"></script>

 <script src="js/main.js"></script>
 <script>
     $('#datepicker').datepicker({
         iconsLibrary: 'fontawesome',
         disableDaysOfWeek: [0, 0],
         //     icons: {
         //      rightIcon: '<span class="fa fa-caret-down"></span>'
         //  }
     });
     $('#datepicker2').datepicker({
         iconsLibrary: 'fontawesome',
         icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

     });
     var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
 </script>
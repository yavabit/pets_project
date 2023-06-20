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

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" action="/action_page.php">
  <h1>Новое объявление</h1>
  <!-- One "tab" for each step in the form: -->
    <div class="tab"> 
        <div class="radio-form">
            <label class="radio-control">
                <input type="radio" name="money"/>
                <span class="radio-input">
                    <img src="img/form_icon/1.png" alt="">
                    <span>Собака</span>
                </span>
            </label>
            <label class="radio-control">
                <input type="radio" name="money" checked="checked" />
                <span class="radio-input">
                    <img src="img/form_icon/2.png" alt="">
                    <span>Кошка</span>
                </span>
            </label>
            <label class="radio-control">
                <input type="radio" name="money" />
                <span class="radio-input">
                    <img src="img/form_icon/3.png" alt="">
                    <span>Другое</span>
                </span>
            </label>  
        </div>
        <div><h3>Тип объявления:</h3>
            <div>
                <label class="myradio">
                    <input class="myradio__default" type="radio" name="Radio input" checked>
                    <span class="myradio__new"></span>
                    <span class="myradio__descr">Пропала</span>
                </label>
                <label class="myradio">
                    <input class="myradio__default" type="radio" name="Radio input" checked>
                    <span class="myradio__new"></span>
                    <span class="myradio__descr">Нашлась</span>
                </label>
                <label class="myradio">
                    <input class="myradio__default" type="radio" name="Radio input" checked>
                    <span class="myradio__new"></span>
                    <span class="myradio__descr">Требуется передержка</span>
                </label>
            </div>
        </div>
    </div>
    <div class="tab"><h3>Порода:</h3>
        <p><input placeholder="Порода" oninput="this.className = ''" name="dd" list="breed"></p>
        <h3>Кличка:</h3>
        <p><input placeholder="Кличка" oninput="this.className = ''" name="name"></p>
        <h3>Окрас:</h3>
        <p><input placeholder="Окрас" oninput="this.className = ''" name="color"></p>
        <h3>Фотография:</h3>
        <p><input placeholder="Сделать загрузку фото" oninput="this.className = ''" name="img_url"></p>
        <h3>Пол:</h3>
        <label class="myradio">
            <input class="myradio__default" type="radio" name="sex" checked>
            <span class="myradio__new"></span>
            <span class="myradio__descr">Мужской</span>
        </label>
        <label class="myradio">
            <input class="myradio__default" type="radio" name="Radio input" checked>
            <span class="myradio__new"></span>
            <span class="myradio__descr">Женский</span>
        </label>
    </div>
  <div class="tab"><h3>Контактный телефон</h3>
    <p><input placeholder="+7(900)000-00-00" oninput="this.className = ''" name="phone_number"></p>
    <h3>Адрес:</h3>
    <p><input placeholder="Адрес..." oninput="this.className = ''" name="addres"></p>
    <h3>Дата:</h3>
    <p><input placeholder="" oninput="this.className = ''" name="date" input type="date"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Назад</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Далее</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Отправить";
  } else {
    document.getElementById("nextBtn").innerHTML = "Далее";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>





    <?php require('components/footer.php') ?>
</body>

</html>
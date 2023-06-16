<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css">
  <!--<script src="Date_menu.js" defer></script>
  <script src="Contact.js" defer></script>	
  
  <link href="./scss/ContactSlider.css" rel="stylesheet" type="text/css">
  <script src="jQuery/jquery.js" type="text/javascript"></script>
	<script src="jQuery/mobilyslider.js" type="text/javascript"></script>
	<script src="jQuery/init.js" type="text/javascript"></script>
-->
  <title> Контакт </title>

</head>

<body>
@include('include.header')

@vite(['resources/js/Date_menu.js'])
  <br></br>

	<div class="b-popup" id="popup1">
		<div class="b-popup-content">
			<div class="slider">
				<p id="mesInp"></p>
			</div>
		</div>
	</div>

  <form name="form" method=post action=mailto:poltorak5671@gmail.com id="form"
    novalidate>
    <div class ="form">
        <label for="SNP">Фио:&emsp;</label>
        <input name="SNP" type=text maxlength=30 class="colortext"placeholder="Введите ФИО" id="fio">
				<div id="error1" class="errorMes"></div>
    </div>
    <br></br>
    <div class ="form">
       Пол: Ж
        <input name="pol" id="polJ" type=radio class="colortext"> &emsp; М
        <input name="pol" id="polM" type=radio class="colortext">
    </div>
    <br></br>
    <div class ="form" >
      <label for="mail">
        E-mail:&emsp;    
        <input type="email" id="email" name="mail" required minlength="8" placeholder="Введите email" class="colortext">
				<div id="error4" class="errorMes"></div>
      </label>
    </div>
    <br></br>
    <div class ="form">
      Возраст:&emsp; 
      <select name="age" id="age" class="colortext">
        <option> меньше 15
        <option selected> от 16 до 20
        <option> от 21 до 30
        <option> больше 30
        <option> больше 40
      </select>
    </div>
    <br></br>
    <div class ="form" >
      <label for="phone">&emsp;Телефон&emsp;</label>
      <input name="phone" id="numb" class="colortext" type="tel" placeholder="+7(978) . . . ." required>
      <div id="error3" class="errorMes"></div>
    </div>
    <br></br>
    <div class ="form">
       Выберите дату: <input class="colortext" type="date" name="calendar" id ="dataBorn"> 
				<div id="error2" class="errorMes"></div>
    </div>
<br></br>
    <div align="center" width="100%">
      <button class="buttonSend c-button" type="submit" style="margin-left:10px" id="buttSend">Отправить</button>
      <button class="buttonClean c-button" type="reset" style="margin-left:90px" id="buttClear">Очистить</button>
    </div>
  </form>

  @include('include.footer')
 
  <script>
    window.onload = function(){
	n = sessionStorage.getItem("contact");
	n++
	sessionStorage.setItem("contact", n);

	m = localStorage.getItem("contact");
	m++
	localStorage.setItem("contact", m);
}
    /*
    function checkform(form) {
      var sendbtn = document.getElementById('submit');
      var checkBoxes = form.querySelectorAll('input[type="checkbox"]');
      let selectedItems = [];
      checkBoxes.forEach(item => {
        if (item.checked) {
          selectedItems.push(item);
        }
      });
      var inputs = form.getElementsByTagName('input');
      for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute('required')) {
          if (inputs[i].value == "" || (selectedItems.length < 2 && checkBoxes.length > 0)) {
            alert("Пожалуйста, заполните все необходимые поля!");
            if (inputs[i].value == "") {
              inputs[i].focus();
            }
            else {
              checkBoxes[2].focus();
            }
            return false;
          }
        }
      }
      if (checkSNP(document.getElementById('SNP').value) == false) {
        return false;
      }
      return true;
    }

    function checkSNP(SNP) {
      var check = [];
      check = SNP.split(" ");
      if (check.length == 3) {
        return true;
      }
      else {
        alert("Неправильно заполнено поле 'ФИО' !");
        return false;
      }
    }

    function onlyNumbers(str) {
      return /^\d+$/.test(str);
    }

    function getCountOfDigits(str) {
      return str.replace(/[^0-9]/g, '').length;
    }

    //----------------------------------------------------------------------------------------------------------



    function checkPhone(form) {
      var phone = document.getElementById('phone').value;
      var digitsonly = phone.substring(1, phone.length);
      var count = getCountOfDigits(digitsonly);
      if (phone[0] == '+' && (phone[1] == '3' || phone[1] == '7') && onlyNumbers(digitsonly) == true && count >= 9 && count <= 11) {
        return true;
      }
      else {
        alert("Неправильно заполнено поле 'Телефон'! Номер телефона может начинаться только с комбинации '+3' или '+7'! Также в номере телефона разрешается использовать только цифры!");
        return false;
      }
    }*/
  </script>

</body>

</html>
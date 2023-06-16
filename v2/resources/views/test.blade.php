<!DOCTYPE html>

<head>
  <meta charset="utf-8">
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css">
  <title> Тест </title>
</head>

<body>
@include('include.header')

@vite(['resources/js/Date_menu.js','resources/js/History.js'])


  <form name ="form" method=post action=mailto:poltorak5671@gmail.com  id="form" onsubmit="return checkform(this)" novalidate>
    <pre> </pre>
    <dir align="center">
      <h3> Тест по теме: Теория вероятности и математическая статистика </h3>
    </dir>
    <dir>
      <label for="FIO">&emsp; Фамилия, имя&emsp;</label>
      <input name="FIO" type=text maxlength=30 class="colortext_test" >
    </dir>
    <dir>
      <label for="Mail">&emsp; E-mail &emsp;</label>
      <input name="Mail" type=text maxlength=30 class="colortext_test" >
    </dir>
    <dir>
      <label for="RandEvent">&emsp; Случайное событие - это &emsp;</label>
      <input name="RandEvent" id ="RandEvent" type=text maxlength=30 class="colortext_test" >
    </dir>

    <div style="margin-left:62px">Из 500 деталей на складе 10 оказались бракованными. Какова вероятность взять исправную
      деталь?
      <p>
        <input type="checkbox" name="option1" value="a1" class="colortext_test"  >&emsp;0,68
        <Br>
        <input type="checkbox" name="option2" value="a2" class="colortext_test" >&emsp;0,02
        <Br>
        <input type="checkbox" name="option3" value="a3" class="colortext_test" >&emsp;0,3
        <Br>
      </p>
    </div>

    <div style="margin-left:62px">
      <p> Математическая статистика - это </p>
      <SELECT name="Groups" class="colortext_test">
        <OPTGROUP label="Верно">
          <OPTION value="41"> Верно только 1
          <OPTION value="42"> Верно только 2
          <OPTION value="43"> Верны оба суждения
          <OPTION value="44"> Неверны оба суждения
        </OPTGROUP>
        <OPTGROUP LABEL="Определения" class="colortext_test">
          <OPTION value="51"> Раздел математики, разрабатывающий методы регистрации, описания и анализа данных
            наблюдений и экспериментов.
          <OPTION value="52"> В зависимости от математической природы конкретных результатов наблюдений статистика
            математическая делится на статистику чисел.
          <OPTION value="53"> Наука, разрабатывающая математические методы систематизации и использования статистических
            данных для научных и практических выводов
        </OPTGROUP>

      </SELECT>
    </div>
    <br></br>
    <div>
      <button class="buttonSend c-button" type="submit" style="margin-left:62px">Отправить</button>
      <button class="buttonClean c-button" type="reset" style="margin-left:62px">Очистить</button>
    </div>
  </form>


  <per> </per>
  @include('include.footer')


  <script>
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
        if(inputs[i].hasAttribute('required')){
            if(inputs[i].value == ""||( selectedItems.length < 2  && checkBoxes.length > 0)){ 
                alert("Пожалуйста, заполните все необходимые поля!");
                if(inputs[i].value == "")
                {
                    inputs[i].focus();
                }
                else{
                    checkBoxes[2].focus();
                }
                return false;
            }
        }
    }    
    if(checkRandEvent(document.getElementById('RandEvent').value) == false)
    {
        return false;
    }
    return true;
}

    function checkRandEvent(){
	var rand = document.getElementById("RandEvent").value;
	  if (!isNaN(rand))
	    alert("Введенно число!");
}

window.onload = function(){
	n = sessionStorage.getItem("test");
	n++
	sessionStorage.setItem("test", n);

	m = localStorage.getItem("test");
	m++
	localStorage.setItem("test", m);
}


    </script>

</body>

</html>
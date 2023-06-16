<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <!--<script src="Date_menu.js" defer></script>
    <script src="History.js" defer></script>-->
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap-grid.css"
     rel="stylesheet">
    <title> Главная страница </title>
</head>

<body>
        @vite(['resources/scss/app.scss', 'resources/css/app.css','resources/js/Date_menu.js'])
        @vite(['resources/scss/app.scss', 'resources/css/app.css','resources/js/History.js'])
@include('include.header')
<per></per>
    <article>
        <p align="center"> Суровцева Наталья Юрьевна; группа ИС\б-20-1-о
        <div align="center">
            <img src="img/realme.jpg" width="400" height="400" alt="Фото утеряно :(" ISMAP>
        </div>
        <p align="center"> Лабораторная работа №1 "Исследование возможностей языка разметки гипертекстов HTML и
            каскадных таблиц стилей CSS"
        <pre> </pre>
    </article>
    <per>
    </per>
    @include('include.footer')
    <script>

window.onload = function(){
    n = sessionStorage.getItem("main");
    n++
    sessionStorage.setItem("main", n);

    m = localStorage.getItem("main");
    m++
    localStorage.setItem("main", m);
}

    </script>
</body>

</html>


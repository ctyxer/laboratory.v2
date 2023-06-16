<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @vite(['resources/css/app.css', 'resources/js/Date_menu.js'])
    <link rel="icon" href="{{ asset('img/icon.ico') }}" type="image/x-icon">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap-grid.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="OffMenu">
        <h3 style="float:left"> Меню </h3>
        <div style="float:right"id="current_date_time_block"></div>
    </div>

    <nav>
        <a href="{{ route('welcome') }}">Главная</a> &emsp;
        <a href="{{ route('about_me') }}">Обо мне</a> &emsp;
        <a href="{{ route('hobby') }}">Хобби</a> &emsp;
        <a href="{{ route('study') }}">Учеба</a> &emsp;
        <a href="{{ route('album') }}">Фотоальбом</a> &emsp;
        <a href="{{ route('contact') }}">Контакт</a> &emsp;
        <a href="{{ route('test.index') }}">Тест</a> &emsp;
        <a href="{{ route('history') }}">История посещения</a> &emsp;
        <a href="{{ route('guest.book.index') }}">Гостевая книга</a> &emsp;
    </nav>

    @yield('content')

    <script>
        window.onload = function() {
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

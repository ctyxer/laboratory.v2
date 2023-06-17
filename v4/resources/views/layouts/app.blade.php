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
        <div style="float:right" id="current_date_time_block" class="ml-2"></div>
        @guest
            <a href="{{ route('auth.register.index') }}" class=' text-rose-700 border-rose-600 rounded p-1 float-right m-1 mt-0'>Зарегестрироваться</a>

            <a href="{{ route('auth.login.index') }}" class=' text-rose-700 border-rose-600 rounded p-1 float-right m-1 mt-0'>Войти</a>
        @endguest

        @auth
            <form action="{{ route('auth.logout') }}" class=' border-rose-600 rounded p-1 float-right m-1 mt-0'
                method="POST">
                @csrf
                <input type="submit" value="Выйти">
            </form>

            <p class=' border-rose-600 rounded p-1 float-right m-1 mt-0'>{{ auth()->user()->full_name }}</p>
        @endauth
    </div>

    <nav>
        <a href="{{ route('welcome') }}">Главная</a> &emsp;
        <a href="{{ route('about_me') }}">Обо мне</a> &emsp;
        <a href="{{ route('hobby') }}">Хобби</a> &emsp;
        <a href="{{ route('study') }}">Учеба</a> &emsp;
        <a href="{{ route('album') }}">Фотоальбом</a> &emsp;
        <a href="{{ route('contact') }}">Контакт</a> &emsp;
        <a href="{{ route('test.index') }}">Тест</a> &emsp;
        <a href="{{ route('blog.index') }}">Мой блог</a> &emsp;
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

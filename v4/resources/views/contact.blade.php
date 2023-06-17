@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    <form name="form" method=post action=mailto:poltorak5671@gmail.com id="form" novalidate>
        <div class="form">
            <label for="SNP">Фио:&emsp;</label>
            <input name="SNP" type=text maxlength=30 class="colortext"placeholder="Введите ФИО" id="fio">
            <div id="error1" class="errorMes"></div>
        </div>
        <br></br>
        <div class="form">
            Пол: Ж
            <input name="pol" id="polJ" type=radio class="colortext"> &emsp; М
            <input name="pol" id="polM" type=radio class="colortext">
        </div>
        <br></br>
        <div class="form">
            <label for="mail">
                E-mail:&emsp;
                <input type="email" id="email" name="mail" required minlength="8" placeholder="Введите email"
                    class="colortext">
                <div id="error4" class="errorMes"></div>
            </label>
        </div>
        <br></br>
        <div class="form">
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
        <div class="form">
            <label for="phone">&emsp;Телефон&emsp;</label>
            <input name="phone" id="numb" class="colortext" type="tel" placeholder="+7(978) . . . ." required>
            <div id="error3" class="errorMes"></div>
        </div>
        <br></br>
        <div class="form">
            Выберите дату: <input class="colortext" type="date" name="calendar" id="dataBorn">
            <div id="error2" class="errorMes"></div>
        </div>
        <br></br>
        <div align="center" width="100%">
            <button class="buttonSend c-button" type="submit" style="margin-left:10px" id="buttSend">Отправить</button>
            <button class="buttonClean c-button" type="reset" style="margin-left:90px" id="buttClear">Очистить</button>
        </div>
    </form>

@endsection

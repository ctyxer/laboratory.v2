@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    <form name="form" method='POST' action='{{ route('contact.store') }}' id="form">
        @csrf
        <div class="form">
            <label for="full_name">Фио:</label>
            <input name="full_name" id="full_name" type=text maxlength=30 class="colortext"placeholder="Введите ФИО">
        </div>
        @error('full_name')
            <span class="text-red-500 text-sm block font-bold ml-[400px]">{{ $message }}</span>
        @enderror

        <br></br>
        <div class="form">
            Пол: Ж
            <input name="sex" id="polJ" type=radio class="colortext" value="1"> М
            <input name="sex" id="polM" type=radio class="colortext" value="2">
        </div>
        @error('sex')
            <span class="text-red-500 text-sm block font-bold ml-[400px]">{{ $message }}</span>
        @enderror

        <br></br>
        <div class="form">
            <label for="mail">
                E-mail:
                <input type="email" id="email" name="mail" minlength="8" placeholder="Введите email"
                    class="colortext">
                <div id="error4" class="errorMes"></div>
            </label>
        </div>
        @error('email')
            <span class="text-red-500 text-sm block font-bold ml-[400px]">{{ $message }}</span>
        @enderror

        <br></br>
        <div class="form">
            Возраст:
            <select name="age" id="age" class="colortext">
                <option> меньше 15
                <option selected> от 16 до 20
                <option> от 21 до 30
                <option> больше 30
                <option> больше 40
            </select>
        </div>
        @error('age')
            <span class="text-red-500 text-sm block font-bold ml-[400px]">{{ $message }}</span>
        @enderror

        <br></br>
        <div class="form">
            <label for="phone">Телефон</label>
            <input name="phone" id="numb" class="colortext" type="tel" placeholder="+7(978) . . . .">
            <div id="error3" class="errorMes"></div>
        </div>
        @error('phone')
            <span class="text-red-500 text-sm block font-bold ml-[400px]">{{ $message }}</span>
        @enderror

        <br></br>
        <div class="form">
            Выберите дату: <input class="colortext" type="date" name="date" id="dataBorn">
            <div id="error2" class="errorMes"></div>
        </div>
        @error('date')
            <span class="text-red-500 text-sm block font-bold ml-[400px]">{{ $message }}</span>
        @enderror

        <br></br>
        <div align="center" width="100%">
            <button class="buttonSend c-button" type="submit" style="margin-left:10px" id="buttSend">Отправить</button>
            <button class="buttonClean c-button" type="reset" style="margin-left:90px" id="buttClear">Очистить</button>
        </div>
    </form>

@endsection

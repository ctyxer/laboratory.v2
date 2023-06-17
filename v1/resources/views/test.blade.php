@extends('layouts.app')

@section('title', 'Мой блог')

@section('content')

    @if (Session::has('message'))
        <div class="border-2 border-green-600 rounded-xl translation hover:bg-green-500 duration-300 m-8 p-3 text-green-600">
            <p class="font-bold text-lg">Успешно. Ваши баллы: {{ Session::get('message') }} (макс. 3)</p>
        </div>
    @endif

    <form name="form" method='POST' action='{{ route('test.store') }}' id="form">
        @csrf
        <dir align="center">
            <h3> Тест по теме: Теория вероятности и математическая статистика </h3>
        </dir>
        <dir>
            <label for="full_name">Фамилия, имя</label>
            <input name="full_name" id="full_name" type=text maxlength=30
                class="colortext_test border-2 rounded-md border-rose-400 block" value="{{ old('full_name') }}">
            @error('full_name')
                <span class="text-red-500 text-sm block font-bold">{{ $message }}</span>
            @enderror

        </dir>
        <dir>
            <label for="email">E-mail</label>
            <input name="email" id="email" type='text' maxlength=30
                class="colortext_test border-2 rounded-md border-rose-400 block" value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-sm block font-bold">{{ $message }}</span>
            @enderror
        </dir>
        <dir>
            <label for="question_1">Случайное событие - это</label>
            <textarea name="question_1" id="question_1" class="colortext_test border-2 rounded-md border-rose-400 block"
                cols="90">
@if (old('question_1'))
{{ old('question_1') }}
@endif
</textarea>
            @error('question_1')
                <span class="text-red-500 text-sm block font-bold">{{ $message }}</span>
            @enderror
        </dir>

        <dir>
            <div class="mb-2">Из 500 деталей на складе 10 оказались бракованными. Какова вероятность взять исправную
                деталь?
                <div>
                    <input type="radio" name="question_2" value="0.98" id="question_21"
                        class="colortext_test inline-block">
                    <label for="question_21">0.98</label>
                </div>

                <div>
                    <input type="radio" name="question_2" value="0.02" id="question_22"
                        class="colortext_test inline-block">
                    <label for="question_22">0.02</label>
                </div>

                <div>
                    <input type="radio" name="question_2" value="0.3" id="question_23"
                        class="colortext_test inline-block">
                    <label for="question_23">0.3</label>
                </div>

                @error('question_2')
                    <span class="text-red-500 text-sm block font-bold">{{ $message }}</span>
                @enderror
            </div>
        </dir>

        <dir>
            <p> Математическая статистика - это </p>
            <SELECT name="question_3" class="colortext_test block">
                <OPTGROUP label="Верно">
                    <OPTION value="1"> Верно только 1
                    <OPTION value="2"> Верно только 2
                    <OPTION value="3"> Верны оба суждения
                    <OPTION value="4"> Неверны оба суждения
                </OPTGROUP>
                <OPTGROUP LABEL="Определения" class="colortext_test block">
                    <OPTION value="51"> Раздел математики, разрабатывающий методы регистрации, описания и анализа
                        данных
                        наблюдений и экспериментов.
                    <OPTION value="52"> В зависимости от математической природы конкретных результатов наблюдений
                        статистика
                        математическая делится на статистику чисел.
                    <OPTION value="53"> Наука, разрабатывающая математические методы систематизации и использования
                        статистических
                        данных для научных и практических выводов
                </OPTGROUP>

            </SELECT>
            @error('question_3')
                <span class="text-red-500 text-sm block font-bold">{{ $message }}</span>
            @enderror
        </dir>
        <dir>
            <button class="buttonSend c-button" type="submit">Отправить</button>
            <button class="buttonClean c-button" type="reset">Очистить</button>
        </dir>
    </form>

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
                if (inputs[i].hasAttribute('required')) {
                    if (inputs[i].value == "" || (selectedItems.length < 2 && checkBoxes.length > 0)) {
                        alert("Пожалуйста, заполните все необходимые поля!");
                        if (inputs[i].value == "") {
                            inputs[i].focus();
                        } else {
                            checkBoxes[2].focus();
                        }
                        return false;
                    }
                }
            }
            if (checkRandEvent(document.getElementById('RandEvent').value) == false) {
                return false;
            }
            return true;
        }

        function checkRandEvent() {
            var rand = document.getElementById("RandEvent").value;
            if (!isNaN(rand))
                alert("Введенно число!");
        }
    </script>

@endsection

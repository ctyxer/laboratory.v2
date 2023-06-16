@extends('layouts.app')

@section('title', 'Гостевая книга')

@section('content')
    <p class="m-6 font-bold text-4xl text-center">Гостевая книга</p>
    <p class="m-6 font-bold text-3xl text-center">Оставить сообщение</p>
    <div class="mx-[20%]">
        <form action="{{ route('guest.book.store') }}" method="POST">
            @csrf
            <div class="my-4">
                <label for="full_name" class="block">Введите
                    ФИО</label>
                <input type="text" name="full_name"
                    class="w-full border-2 border-rose-400 
                        rounded focus:outline-none"
                    value="{{ old('full_name') }}">
                @error('full_name')
                    <span class="text-red-500 text-sm ml-4">{{ $message }}</span>
                @enderror

            </div>

            <div class="my-4">
                <label for="email" class="block">Электронная почта</label>
                <input type="text" name="email"
                    class="w-full border-2 border-rose-400 
                        rounded focus:outline-none"
                    placeholder="example@email.com" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="my-4">
                <label for="message" class="block">Текст отзыва</label>
                <textarea name="message" id="message" cols="30" rows="10"
                    class="w-full border-2 border-rose-400 rounded
                        focus:border-rose-400 focus:outline-none">{{ old('message') }}</textarea>
                @error('message')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <input type="submit" value="Отправить" class='btn-default m-0'>
        </form>

        <div>
            <p class="m-6 font-bold text-3xl text-center mt-12">Оставленные сообщения</p>
            <a href="{{ route('guest.book.download.index') }}">Загрузить гостевую книгу</a>
            @if (count($messages))
                @foreach ($messages as $message)
                    <div class="bg-rose-100 border-rose-300 border-4 rounded-lg p-3 h-min m-2">
                        <p class="font-bold">{{ $message->full_name }}</p>
                        {{ $message->message }}
                    </div>
                @endforeach
            @else
                <p class="m-6 font-bold text-xl text-center mt-12">Тут пусто... Но это легко исправить!</p>
            @endif
        </div>
    </div>
@endsection

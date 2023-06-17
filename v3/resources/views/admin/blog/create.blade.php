@extends('layouts.app')

@section('title', 'Редактор блога')

@section('content')

    <div class="mx-[30%] max-lg:mx-[10%]">
        @include('layouts.message')

        <p class="font-bold text-4xl mx-auto w-fit m-6">Редактор блога</p>

        <a href="{{ route('admin.blog.download.create') }}" class="btn-default m-0">Загрузить CSV файл</a>
        

        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-4">
                <label for="title" class="block">Заголовок</label>
                <input type="text" name="title"
                    class="w-full  border-rose-400 rounded focus:outline-none
                    @error('title') border-red-400 @enderror"
                    value="{{ old('title') }}">
            </div>

            <div class="my-4">
                <label for="image" class="block">Изображение</label>
                <input type="file" name="image" class="w-full  bg-white border-rose-400 rounded focus:outline-none @error('image') border-red-400 @enderror">
            </div>

            <div class="my-4">
                <label for="description" class="block">Текст сообщения</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="w-full  border-rose-400 rounded focus:border-rose-400 focus:outline-none 
                    @error('description') border-red-400 @enderror">{{ old('description') }}</textarea>
            </div>
            <input type="submit" value="Загрузить" class="btn-default m-0">
        </form>
    </div>
@endsection

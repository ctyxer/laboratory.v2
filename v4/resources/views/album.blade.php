@extends('layouts.app')

@section('title', 'Фтоальбом')

@section('content')
    <div class="block mb-10">
        <img src="{{ asset('img/AlbumPhotos/кот.jpg') }}" title="котик" width="200" height="200" class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/бокал.jpg') }}" title="бокал" width="200" height="200" class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/в шаре.jpg') }}" title="в шаре" width="200" height="200"
            class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/маленький.jpg') }}" title="маленький" width="200" height="200"
            class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/мечтает.jpg') }}" title="мечтает" width="200" height="200"
            class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/мокрый.jpg') }}" title="мокрый" width="200" height="200"
            class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/наелся.jpg') }}" title="наелся" width="200" height="200"
            class="inline-block">
        <img src="{{ asset('img/AlbumPhotos/сидит.jpg') }} "title="сидит" width="200" height="200"
            class="inline-block">
    </div>
@endsection

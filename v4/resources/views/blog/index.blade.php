@extends('layouts.app')

@section('title', 'Мой блог')

@section('content')

    <div class="mx-[20%] max-lg:mx-[10%]">
        <p class="font-bold text-4xl mx-auto w-fit m-6">Мой блог</p>

        <div class="space-y-4 my-2">
            @foreach ($posts as $post)
                <div class="bg-rose-100 border-rose-300 border-4 rounded-lg p-3 h-min max-w-xs break-inside-avoid-column inline-block hover:cursor-pointer"
                    onclick="window.location.href = '{{ route('blog.show', [$post]) }}'">
                    @if ($post->image_path != null)
                        <img src="{{ asset($post->image_path) }}" title="{{ $post->title }}" class="rounded h-auto" />
                    @endif
                    <div class="mt-2">
                        <p class="font-bold m-1">{{ $post->title }}</p>
                        <p class="m-1">{{ $post->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-fit m-2">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

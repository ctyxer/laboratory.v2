<div>
    @foreach ($comments->get() as $comment)
        <div class="bg-rose-200 border-rose-300  rounded-lg p-3 h-min my-2 w-full">
            <p class="font-bold">{{ $comment->author()->full_name }}</p>
            {{ $comment->text }}
        </div>
    @endforeach
</div>

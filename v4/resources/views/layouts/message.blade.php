@if (Session::has('statusMessage'))
    <div class=" rounded-lg p-2 m-2 mx-auto w-fit">
        <p class="m-1 font-bold text-2xl w-fit">{{ Session::get('statusMessage') }}</p>
        @if (Session::has('statusSubMessage'))
            <p class="m-1 text-lg">{{ Session::get('statusSubMessage') }}</p>
        @endif
    </div>
@endif

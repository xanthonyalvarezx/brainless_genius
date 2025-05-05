<div class="container container--narrow">
    {{-- create conditional for login / register based on auth --}}

    @if (auth()->check())
        <div>
            LOGIN
        </div>
    @else
        <div>
            REGISTER
        </div>
    @endif
</div>
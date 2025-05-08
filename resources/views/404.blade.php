<x-notfound>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    @endpush

    <div class="main-content container">
        <h1>404</h1>
        <img class="main-image" src="{{ asset('images/brainless_logo-removebg-preview (1).png') }}" alt="">
        <p class="main-text">
            Looks like you lost your brain!
        </p>
        <p class="main-text">
            <a href="/"> Click Here!</a>, to get back to where ya left it!
        </p>
    </div>
</x-notfound>

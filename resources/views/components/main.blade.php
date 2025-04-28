<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainless Genius | {{ $title }} </title>
    @livewireScripts
    @livewireStyles
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>
{{-- header start --}}
<header>
    <div class="d-flex justify-content-center">
        <div class="container d-flex banner-top w-75 mt-4">
            <div class="d-flex flex-column justify-content-center align-items-center w-25">
                <span class="mt-3 text-white fw-2 text-center">Brainless Genius
                    <img src="{{ asset('images/brainless_logo-removebg-preview (1).png') }}" alt=""
                        width="275px">
                </span>
            </div>
            {{-- nav starts --}}
            <nav class="container d-flex align-items-center nav-bar ">
                <ul class="d-flex nav-list justify-content-between  w-100 px-3">
                    <li class="nav-item">
                        <a class="active" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact">CONTACT</a>
                    </li>
                </ul>
            </nav>
            {{-- nav stops --}}
        </div>
    </div>

</header>
{{-- HEADER END --}}
@if (session()->has('success'))
    <div class="container container--narrow">
        <div class="alert alert-success text-center">{{-- Success Alert from server --}}
            {{ session('success') }}
        </div>
    </div>
@elseif(session()->has('error'))
    <div class="container container--narrow">
        <div class="alert alert-danger text-center">{{-- Error Alert from server --}}
            {{ session('error') }}
        </div>
    </div>
@endif
{{ $slot }}
{{-- footer start --}}

<footer class="text-center m-0 my-3">
    <p> © 2025 Brainless Genius. Made with 💡 and ☕.</p>
</footer>

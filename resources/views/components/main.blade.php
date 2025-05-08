<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Brainless Genius | {{ $title }} </title>
    @livewireScripts
    @livewireStyles
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>
{{-- header start --}}

<body>
    <header>
        <div class=" d-flex justify-content-center">
            <div class="d-flex banner-top  p-5">
                <div class="d-flex flex-column justify-content-center align-items-center w-25">
                    <span class=" banner-text text-white  text-center">Brainless Genius
                        <img class="logo-image" src="{{ asset('images/brainless_logo-removebg-preview (1).png') }}"
                            alt="brainless genius web development logo">
                    </span>
                </div>
                {{-- nav starts --}}
                <nav class="container d-flex align-items-center nav-bar ">
                    <ul class="d-flex nav-list justify-content-between  w-100 px-3">
                        <li class="nav-item">
                            <a class=" nav-link active" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="/about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="/contact">CONTACT</a>
                        </li>
                    </ul>
                </nav>
                {{-- nav stops --}}
                <div class="admin-login-link">
                    <a href="/login">Admin Login</a>
                </div>
            </div>
        </div>
    </header>
    {{-- HEADER END --}}
    <main>
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
    </main>
</body>
<footer class="text-center m-0 my-3">
    <p> © 2025 Brainless Genius. Made with 💡 and ☕.</p>
</footer>
{{-- footer start --}}

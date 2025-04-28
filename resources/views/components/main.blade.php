<!DOCTYPE html>
<html lang="en">

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

<body>
    <nav class="container nav-bar">
        <ul class="d-flex nav-list justify-content-between">
            <li class="nav-item text-dark">
                <a href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a href="/about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="/contact">CONTACT</a>
            </li>

        </ul>
    </nav>
    @if (session()->has('success'))
        <div class="container container--narrow">
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        </div>
    @elseif(session()->has('error'))
        <div class="container container--narrow">
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        </div>
    @endif
    {{ $slot }}
</body>
<footer class="footer-div text-center">
    © 2025 Brainless Genius. Made with 💡 and ☕.
</footer>

</html>

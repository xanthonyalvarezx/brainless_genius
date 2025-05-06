<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css
">
    @livewireScripts
    @livewireStyles
    @vite(['resources/css/app.css'])
    @stack('styles')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <title>Brainless Genius | Admin Dashboard</title>
</head>

<body>
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
</body>

</html>

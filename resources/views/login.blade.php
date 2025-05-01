<x-main title="Login">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div class="container container--narrow">

        <div class="card p-4 shadow-lg roundness-lg text-center mt-4">
            <h1>Admin Login</h1>
            <form class="d-flex flex-column align-items-center" action="/adminLogin">
                <input class="mb-3" type="text" name="email" class="login-input" placeholder="Email">
                <input class="mb-3" type="password" name="password" class="login-input" placeholder="Password">
                <button class="px-3 text-light text-center" type="submit">Login</button>
            </form>
        </div>
    </div>
</x-main>
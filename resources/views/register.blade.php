<x-main title='Register'>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div class="container container--narrow">
        <div class='card d-flex justify-content-center align-items-center mt-5 shadow-lg py-3'>
            <h1>Register New Admin</h1>
            <form class="d-flex flex-column w-25 border-none" action="/registerAdmin">
                <input class="mt-3 roundness-lg shadow-md" name="name" type="text" placeholder="Name">
                @error('name')
                    <p class="m-0 small alert alert-danger sahadow-sm">{{ $message }}</p>
                @enderror
                <input class="mt-3 roundness-lg shadow-md" name="email" type="text" placeholder="Email">
                @error('email')
                    <p class="m-0 small alert alert-danger sahadow-sm">{{ $message }}</p>
                @enderror
                <input class="mt-3 roundness-lg shadow-md" name="password" type="text" placeholder="Password">
                @error('password')
                    <p class="m-0 small alert alert-danger sahadow-sm">{{ $message }}</p>
                @enderror
                <input class="mt-3 roundness-lg shadow-md" name="password_confirmation" type="text"
                    placeholder="Confirm Password">
                <button type="submit" class=" mt-3">Register</button>
            </form>

        </div>
    </div>
</x-main>
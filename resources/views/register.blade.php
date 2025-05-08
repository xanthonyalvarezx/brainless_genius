<x-dash title='Register'>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/.css') }}">
    @endpush
    <div class="container container--narrow">
        <a class="text-danger" href="/dashboard/messages/new"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                height="30" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z" />
                <path fill-rule="evenodd"
                    d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
            </svg></a>
        <div class='card d-flex justify-content-center align-items-center mt-5 shadow-lg py-3'>
            <h1>Register New Admin</h1>
            <form class="d-flex flex-column w-25 border-none" action="/registerAdmin" method="POST">
                @csrf
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
</x-dash>

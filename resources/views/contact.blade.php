<x-main title="Contact">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div class=" container main-container d-flex flex-column align-items-center justify-content-center">
        <h1>Contact Us</h1>
        <div class="card shadow-lg rounded-lg">
            <livewire:createmessage />
        </div>
    </div>
</x-main>

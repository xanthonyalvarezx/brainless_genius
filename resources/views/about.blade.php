{{-- adds dynamic title to the main layout --}}
<x-main title="about">
    {{-- Pushes custom styles to the main layout -> needs its own css  --}}
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    @endpush
    <div class=" container main-container d-flex flex-column align-items-center ">
        <h1 class="my-3 heading-text">Meet the team</h1>

        <div class="text-card-top card shadow-lg">
            <div class="card-inner-wrapper">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien
                        vitae
                        pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu
                        aenean
                        sed
                        diam
                        urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa
                        nisl
                        malesuada
                        lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad
                        litora
                        torquent
                        per conubia nostra inceptos himenaeos.
                    </p>
                </div>
                <div class="card-image"><img src="https://placehold.co/400" alt=""></div>
            </div>
        </div>
        <div class="text-card-bottom card shadow-lg">
            <div class="card-inner-wrapper">
                <div class="card-image"><img src="https://placehold.co/400" alt=""></div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien
                        vitae
                        pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu
                        aenean
                        sed
                        diam
                        urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa
                        nisl
                        malesuada
                        lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad
                        litora
                        torquent
                        per conubia nostra inceptos himenaeos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-main>

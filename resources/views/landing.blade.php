<x-main title="Home">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div class=" container  main-container d-flex flex-column align-items-center ">

        <div class="center-content d-flex w-100 justify-content-between mt-5">
            <div class="d-flex flex-column center-content-left mr-5">
                <div class="left-text">
                    <h5><a href="about">ABOUT US</a></h5>
                    We're a team of experienced web developers dedicated to creating high-quality websites that meet
                    your business needs
                </div>
                <div class=" mx-5">
                    <hr>
                </div>
                <div class="left-text">
                    <h5><a href="contact">CONTACT US</a></h5>
                    Get in touch with us for your web development needs
                </div>
                <div class=" mx-5">
                    <hr>
                </div>
                <div class="left-text">
                    <h5><a href="">PLACEHOLDER</a></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae
                        pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean
                        sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa
                        nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti
                        sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.</p>
                </div>
            </div>
            <div class=" center-content-right w-50">
                <div class="d-lg-flex">
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 mt-3 text-center ">
                        <img class="w-50 my-3" src={{ asset('images/iconmonstr-browser-lined.svg') }} alt="">
                        <div class="container">
                            <h4>Full Customization</h4>
                        </div>
                    </div>
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 my-3 text-center">
                        <img class="my-3 w-50" src={{ asset('images/iconmonstr-smartphone-16.svg') }} alt="">
                        <div class="container">
                            <h4>Responsive Design</h4>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex">
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 mt-3 text-center ">
                        <img class="w-50 my-3 " src={{ asset('images/iconmonstr-browser-lined.svg') }} alt="">
                        <div class="container">
                            <h4>Long Term Maintenence</h4>
                        </div>
                    </div>
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 my-3 text-center">
                        <img class="w-50 my-3 " src={{ asset('images/iconmonstr-magnifier-lined.svg') }} alt="">
                        <div class="container">
                            <h4>Enhanced SEO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>

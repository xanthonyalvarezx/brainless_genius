<x-main title="Home">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div class=" container main-container d-flex flex-column align-items-center ">
        <div class="center-content  mt-5">
            <div class=" ">
                <div class="left-text">
                    <h5><a href="about">ABOUT US</a></h5>
                    We are a small team of dedicated web developers specializing in the LAMP stack, committed to
                    building powerful, scalable
                    web applications that exceed our clients' expectations. With a strong focus on CRMs, CMS platforms,
                    e-commerce
                    solutions, RBAC (Role-Based Access Control) systems, and custom administrative tools, we bring both
                    technical expertise
                    and a passion for problem-solving to every project. Our goal is to create intuitive, reliable, and
                    future-ready products
                    tailored to meet—and surpass—customer needs.
                </div>
                <div class="">
                    <hr>
                </div>
                <div class="left-text">
                    <h5><a href="contact">CONTACT US</a></h5>
                    Get in touch with us for your web development and needs
                </div>
                <div class="">
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
            <div class="center-content-right pr-1">
                <div class="d-flex">
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 mt-3 text-center ">
                        <img class=" mt-3 mb-1" src={{ asset('images/iconmonstr-browser-lined.svg') }} alt="">
                        <div class="container">
                            <p>Full Customization</p>
                        </div>
                    </div>
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 my-3 text-center">
                        <img class="mt-3 mb-1 " src={{ asset('images/iconmonstr-smartphone-16.svg') }} alt="">
                        <div class="container">
                            <p>Responsive Design</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 mt-3 text-center ">
                        <img class=" mt-3 mb-1 " src={{ asset('images/iconmonstr-browser-lined.svg') }} alt="">
                        <div class="container">
                            <p>Long Term Maintenence</p>
                        </div>
                    </div>
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 my-3 text-center">
                        <img class=" mt-3 mb-1" src={{ asset('images/iconmonstr-magnifier-lined.svg') }} alt="">
                        <div class="container">
                            <p>Enhanced SEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>

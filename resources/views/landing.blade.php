<x-main title="Home">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
    <div class=" container main-container d-flex flex-column align-items-center ">
        <div class="center-content  mt-5">
            <div class=" ">
                <div class="left-text">
                    <h5><a href="about">ABOUT US</a></h5>
                    We are a small team of dedicated web developers specializing in the LAMP stack. We're committed to
                    building powerful, scalable web applications that exceed our clients' expectations. With a strong
                    focus on CRMs, CMS platforms, e-commerce solutions, RBAC (Role-Based Access Control) systems, and
                    custom administrative tools, we bring both technical expertise and a passion for problem-solving to
                    every project. Our goal is to create intuitive, reliable, and future-ready products tailored to
                    meet—and surpass—customer needs.
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
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-window-fullscreen card-icon" viewBox="0 0 16 16">
                                <path
                                    d="M3 3.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                                <path
                                    d="M.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5zM1 5V2h14v3zm0 1h14v8H1z" />
                            </svg></i></span>
                        <div class="container">
                            <p>Full Customization</p>
                        </div>
                    </div>
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 my-3 text-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-layout-wtf card-icon" viewBox="0 0 16 16">
                                <path
                                    d="M5 1v8H1V1zM1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm13 2v5H9V2zM9 1a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 13v2H3v-2zm-2-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1zm12-1v2H9v-2zm-6-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z" />
                            </svg></span>
                        <div class="container">
                            <p>Responsive Design</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 mt-3 text-center ">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gear card-icon" viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                            </svg></span>
                        <div class="container">
                            <p>Long Term Maintenence</p>
                        </div>
                    </div>
                    <div
                        class="card shadow-lg d-flex flex-column align-items-center service-card mx-2 my-3 text-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search card-icon " viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg></span>
                        <div class="container">
                            <p>Enhanced SEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>

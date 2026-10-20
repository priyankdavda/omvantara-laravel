@extends('layouts.app')

@section('content')

    <!-- Hero Banner -->
    {{--  <div class="section-hero">
        <div class="hero-image"></div>
        <div class="container">
            <div class="content-wrap text-center">
                <div class="sub fw-semibold effectFade fadeUp">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.53252 12.0966C3.75106 11.5025 4.59108 11.5025 4.81645 12.0966L5.54037 14.0567C5.60866 14.2411 5.75891 14.3913 5.9433 14.4596L7.90335 15.1835C8.49751 15.4021 8.49751 16.2421 7.90335 16.4674L5.9433 17.1914C5.75891 17.2597 5.60866 17.4099 5.54037 17.5943L4.81645 19.5543C4.59791 20.1485 3.75789 20.1485 3.53252 19.5543L2.8086 17.5943C2.74031 17.4099 2.59006 17.2597 2.40566 17.1914L0.44562 16.4674C-0.14854 16.2489 -0.14854 15.4089 0.44562 15.1835L2.40566 14.4596C2.59006 14.3913 2.74031 14.2411 2.8086 14.0567L3.53252 12.0966Z" fill="url(#paint0_linear_580_105)"/>
                        <path d="M3.53252 12.0966C3.75106 11.5025 4.59108 11.5025 4.81645 12.0966L5.54037 14.0567C5.60866 14.2411 5.75891 14.3913 5.9433 14.4596L7.90335 15.1835C8.49751 15.4021 8.49751 16.2421 7.90335 16.4674L5.9433 17.1914C5.75891 17.2597 5.60866 17.4099 5.54037 17.5943L4.81645 19.5543C4.59791 20.1485 3.75789 20.1485 3.53252 19.5543L2.8086 17.5943C2.74031 17.4099 2.59006 17.2597 2.40566 17.1914L0.44562 16.4674C-0.14854 16.2489 -0.14854 15.4089 0.44562 15.1835L2.40566 14.4596C2.59006 14.3913 2.74031 14.2411 2.8086 14.0567L3.53252 12.0966Z" fill="url(#paint1_linear_580_105)"/>
                        <path d="M11.4068 0.670991C11.7346 -0.223664 12.9981 -0.223664 13.3259 0.670991L14.7874 4.61157C14.8898 4.89157 15.1152 5.11011 15.3952 5.21938L19.3358 6.68088C20.2304 7.00869 20.2304 8.27214 19.3358 8.59995L15.3952 10.0614C15.1152 10.1639 14.8967 10.3893 14.7874 10.6693L13.3259 14.6098C12.9981 15.5045 11.7346 15.5045 11.4068 14.6098L9.94534 10.6693C9.8429 10.3893 9.61753 10.1707 9.33752 10.0614L5.39694 8.59995C4.50229 8.27214 4.50229 7.00869 5.39694 6.68088L9.33752 5.21938C9.61753 5.11694 9.83607 4.89157 9.94534 4.61157L11.4068 0.670991Z" fill="url(#paint2_linear_580_105)"/>
                        <path d="M11.4068 0.670991C11.7346 -0.223664 12.9981 -0.223664 13.3259 0.670991L14.7874 4.61157C14.8898 4.89157 15.1152 5.11011 15.3952 5.21938L19.3358 6.68088C20.2304 7.00869 20.2304 8.27214 19.3358 8.59995L15.3952 10.0614C15.1152 10.1639 14.8967 10.3893 14.7874 10.6693L13.3259 14.6098C12.9981 15.5045 11.7346 15.5045 11.4068 14.6098L9.94534 10.6693C9.8429 10.3893 9.61753 10.1707 9.33752 10.0614L5.39694 8.59995C4.50229 8.27214 4.50229 7.00869 5.39694 6.68088L9.33752 5.21938C9.61753 5.11694 9.83607 4.89157 9.94534 4.61157L11.4068 0.670991Z" fill="url(#paint3_linear_580_105)"/>
                        <defs>
                            <linearGradient id="paint0_linear_580_105" x1="10.2993" y1="-1.30435" x2="21.6031" y2="11.1057" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#555D64"/>
                                <stop offset="1" stop-color="#292C2E"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_580_105" x1="10.0034" y1="0" x2="10.0034" y2="20" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#EA2B16"/>
                                <stop offset="1" stop-color="#FF3B26"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_580_105" x1="10.2993" y1="-1.30435" x2="21.6031" y2="11.1057" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#555D64"/>
                                <stop offset="1" stop-color="#292C2E"/>
                            </linearGradient>
                            <linearGradient id="paint3_linear_580_105" x1="10.0034" y1="0" x2="10.0034" y2="20" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#EA2B16"/>
                                <stop offset="1" stop-color="#FF3B26"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    Omvantara Agency
                </div>
                <div class="title text-display-2 effectFade fadeRotateX">
                    <span class="title1 fw-semibold text-gradient-1">Smart Web Solutions </span>
                    <br>
                    <div class="title2 d-flex gap-20 justify-content-center flex-wrap">
                        <span class="fw-semibold text-gradient-1">Businesses</span>
                        <div class="title-icon">
                            <div class="box"></div>
                            <div class="title-icon-wrap">
                                <img class="img-1 img-transform-3" src="{{ asset('assets/images/item/hero-1.svg') }}" alt="">
                                <img class="img-2 img-transform-3" src="{{ asset('assets/images/item/hero-2.svg') }}" alt="">
                                <img class="img-3 img-transform-3" src="{{ asset('assets/images/item/hero-3.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text effectFade fadeUp">
                    Omvantara builds fast scalable websites for businesses improving visibility </br> engaging customers and driving consistent online growth conversions effectively
                </p>
                <div class="bot-btns effectFade fadeRotateX">
                    <a href="{{ url('/service') }}" class="tf-btn">Get Started</a>
                    <a href="#pricing" class="tf-btn-2">Request Free Quote</a>
                </div>
            </div>
        </div>
        <a href="#about" class="scroll-more">
            <span class="fw-semibold link1">Scroll for more</span>
            <i class="icon icon-long-arrow-alt-down-solid"></i>
        </a>
    </div>  --}}
    <!-- /Hero Banner -->

    <!-- Hero Banner -->
    <div class="section-hero">
        <div class="hero-image">
            <video class="" muted autoplay loop playsinline>
                <source src="{{ asset('assets/images/video/hero.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="content-wrap text-center">
                <div class="sub fw-semibold effectFade fadeUp">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.53252 12.0966C3.75106 11.5025 4.59108 11.5025 4.81645 12.0966L5.54037 14.0567C5.60866 14.2411 5.75891 14.3913 5.9433 14.4596L7.90335 15.1835C8.49751 15.4021 8.49751 16.2421 7.90335 16.4674L5.9433 17.1914C5.75891 17.2597 5.60866 17.4099 5.54037 17.5943L4.81645 19.5543C4.59791 20.1485 3.75789 20.1485 3.53252 19.5543L2.8086 17.5943C2.74031 17.4099 2.59006 17.2597 2.40566 17.1914L0.44562 16.4674C-0.14854 16.2489 -0.14854 15.4089 0.44562 15.1835L2.40566 14.4596C2.59006 14.3913 2.74031 14.2411 2.8086 14.0567L3.53252 12.0966Z" fill="url(#paint0_linear_580_105)"/>
                        <path d="M3.53252 12.0966C3.75106 11.5025 4.59108 11.5025 4.81645 12.0966L5.54037 14.0567C5.60866 14.2411 5.75891 14.3913 5.9433 14.4596L7.90335 15.1835C8.49751 15.4021 8.49751 16.2421 7.90335 16.4674L5.9433 17.1914C5.75891 17.2597 5.60866 17.4099 5.54037 17.5943L4.81645 19.5543C4.59791 20.1485 3.75789 20.1485 3.53252 19.5543L2.8086 17.5943C2.74031 17.4099 2.59006 17.2597 2.40566 17.1914L0.44562 16.4674C-0.14854 16.2489 -0.14854 15.4089 0.44562 15.1835L2.40566 14.4596C2.59006 14.3913 2.74031 14.2411 2.8086 14.0567L3.53252 12.0966Z" fill="url(#paint1_linear_580_105)"/>
                        <path d="M11.4068 0.670991C11.7346 -0.223664 12.9981 -0.223664 13.3259 0.670991L14.7874 4.61157C14.8898 4.89157 15.1152 5.11011 15.3952 5.21938L19.3358 6.68088C20.2304 7.00869 20.2304 8.27214 19.3358 8.59995L15.3952 10.0614C15.1152 10.1639 14.8967 10.3893 14.7874 10.6693L13.3259 14.6098C12.9981 15.5045 11.7346 15.5045 11.4068 14.6098L9.94534 10.6693C9.8429 10.3893 9.61753 10.1707 9.33752 10.0614L5.39694 8.59995C4.50229 8.27214 4.50229 7.00869 5.39694 6.68088L9.33752 5.21938C9.61753 5.11694 9.83607 4.89157 9.94534 4.61157L11.4068 0.670991Z" fill="url(#paint2_linear_580_105)"/>
                        <path d="M11.4068 0.670991C11.7346 -0.223664 12.9981 -0.223664 13.3259 0.670991L14.7874 4.61157C14.8898 4.89157 15.1152 5.11011 15.3952 5.21938L19.3358 6.68088C20.2304 7.00869 20.2304 8.27214 19.3358 8.59995L15.3952 10.0614C15.1152 10.1639 14.8967 10.3893 14.7874 10.6693L13.3259 14.6098C12.9981 15.5045 11.7346 15.5045 11.4068 14.6098L9.94534 10.6693C9.8429 10.3893 9.61753 10.1707 9.33752 10.0614L5.39694 8.59995C4.50229 8.27214 4.50229 7.00869 5.39694 6.68088L9.33752 5.21938C9.61753 5.11694 9.83607 4.89157 9.94534 4.61157L11.4068 0.670991Z" fill="url(#paint3_linear_580_105)"/>
                        <defs>
                            <linearGradient id="paint0_linear_580_105" x1="10.2993" y1="-1.30435" x2="21.6031" y2="11.1057" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#555D64"/>
                                <stop offset="1" stop-color="#292C2E"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_580_105" x1="10.0034" y1="0" x2="10.0034" y2="20" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#EA2B16"/>
                                <stop offset="1" stop-color="#FF3B26"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_580_105" x1="10.2993" y1="-1.30435" x2="21.6031" y2="11.1057" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#555D64"/>
                                <stop offset="1" stop-color="#292C2E"/>
                            </linearGradient>
                            <linearGradient id="paint3_linear_580_105" x1="10.0034" y1="0" x2="10.0034" y2="20" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="#EA2B16"/>
                                <stop offset="1" stop-color="#FF3B26"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    Omvantara Agency
                </div>
                <div class="title text-display-2 effectFade fadeRotateX">
                    <span class="title1 fw-semibold text-gradient-1">Smart Web Solutions </span>
                    <br>
                    <div class="title2 d-flex gap-20 justify-content-center flex-wrap">
                        <span class="fw-semibold text-gradient-1"> for Businesses</span>
                        <div class="title-icon">
                            <div class="box"></div>
                            <div class="title-icon-wrap">
                                <img class="img-1 img-transform-3" src="{{ asset('assets/images/item/hero-1.svg') }}" alt="">
                                <img class="img-2 img-transform-3" src="{{ asset('assets/images/item/hero-2.svg') }}" alt="">
                                <img class="img-3 img-transform-3" src="{{ asset('assets/images/item/hero-3.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text effectFade fadeUp">
                    Omvantara builds fast scalable websites for Indian businesses improving visibility engaging <br> customers and driving consistent online growth conversions effectively.
                </p>
                <div class="bot-btns effectFade fadeRotateX">
                    <a href="{{ url('/service') }}" class="tf-btn">Get Started</a>
                    <a href="#pricing" class="tf-btn-2">Request Free Quote</a>
                </div>
            </div>
        </div>
        <a href="#about" class="scroll-more">
            <span class="fw-semibold link1">Scroll for more</span>
            <i class="icon icon-long-arrow-alt-down-solid"></i>
        </a>
    </div>
    <!-- /Hero Banner -->

    <!-- section-about-us -->
    <div class="section-about-us flat-spacing" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section">
                        <div class="heading-sub fw-semibold effectFade fadeUp">About Us</div>
                        <div class="heading-title text-gradient-2 effectFade fadeRotateX">Innovative Web Experiences,<br> Built to Scale Your Business</div>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6 lg-mb-24">
                    <div class="col-left">
                        <div class="position-relative z-5">
                            <div class="sub text-white">
                                <span class="dot"></span>
                                Available for worldwide project
                            </div>
                            <h5 class="title fw-semibold text-white">Open for startups and growing brands ,  <span class="text-brand">Delivering Globally</span></h5>
                            <a href="{{ url('/contact') }}" class="tf-btn">Start a Project</a>
                        </div>
                        <img class="effectFade fadeRotateX" src="{{ asset('assets/images/item/earth.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div class="review-box mb-24">
                        <div class="desc fw-semibold text-body-1">Helping 120+ startups and businesses launch faster with Omvantara digital solutions focused <br> on performance conversions scalability and long term business growth</div>
                        <div class="d-flex justify-content-between flex-wrap align-items-end gap-12">
                            <div class="">
                                <div class="d-flex gap-4 text mb-10">
                                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6792 18.3019L18.1887 16.9057L20.4906 24L12.6792 18.3019ZM25.3585 9.13208H15.6604L12.6792 0L9.69811 9.13208H0L7.84906 14.7925L4.86792 23.9245L12.717 18.2641L17.5472 14.7925L25.3585 9.13208Z" fill="#219653"/>
                                    </svg>
                                    Trustpilot
                                </div>
                                <div class="d-flex gap-2">
                                    @for ($i = 0; $i < 5; $i++)
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" fill="#3F3F46"/>
                                        <path d="M11.9996 16.4114L15.6496 15.4341L17.1746 20.4001L11.9996 16.4114ZM20.3996 9.99255H13.9746L11.9996 3.6001L10.0246 9.99255H3.59961L8.79961 13.9548L6.82461 20.3473L12.0246 16.385L15.2246 13.9548L20.3996 9.99255Z" fill="white"/>
                                    </svg>
                                    @endfor
                                </div>
                            </div>
                            <div class="counter text-neutral-200">
                                <span class="number" data-speed="1500" data-to="120" data-inviewport="yes">10</span><span>+</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-quotes effectFade fadeRotateX">
                        <div class="image">
                            <img src="{{ asset('assets/images/section/quotes-1.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icon mb-8">
                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.9375 20V10.3597C12.9375 7.72182 13.824 5.51559 15.5969 3.74101C17.4177 1.91847 19.8854 0.671463 23 0V6.40288C21.8021 6.78657 21.0115 7.26619 20.6281 7.84173C20.2448 8.3693 20.0292 9.04077 19.9813 9.85612H23V20H12.9375ZM0 20V10.3597C0 7.72182 0.886459 5.51559 2.65938 3.74101C4.48021 1.91847 6.94792 0.671463 10.0625 0V6.40288C8.9125 6.78657 8.12187 7.26619 7.69062 7.84173C7.30729 8.3693 7.09167 9.04077 7.04375 9.85612H10.0625V20H0Z" fill="#E4E4E7"/>
                                </svg>
                            </div>
                            <div class="text-body-1 fw-semibold desc">Clean design fast delivery and real results exactly what we needed from Omvantara for scaling our ecommerce business online.</div>
                            <div class="cite">
                                <div class="name text-body-3 fw-semibold">Ava Collins</div>
                                <div class="line"></div>
                                <div class="sub text-body-3">Co-Founder | D2C Brand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section-about-us -->

    <!-- section-partner -->
    <div class="section-partner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-wrap">
                        <p class="text-secondary text fw-semibold">Trusted by 100+ <br> top-tier brands</p>
                        <div class="infiniteSlide_tech_main d-grid">
                            <div class="infiniteSlide infiniteSlide_partner" data-clone="5">
                                @for ($i = 1; $i <= 6; $i++)
                                    <img src="{{ asset('assets/images/partner/partner-' . $i . '.svg') }}" alt="">
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section-partner -->

    <div class="box-white">
        <!-- section-services -->
        <div id="services" class="section-services flat-spacing">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-4 col-lg-6">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="col-left">
                                <div class="heading-section mb-48">
                                    <div class="heading-sub fw-semibold effectFade fadeUp">Services</div>
                                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">Services That Drive  <br> Real Results</div>
                                </div>
                                <p class="effectFade fadeUp">Omvantara delivers web development app development SEO and design services that generate leads increase conversions and scale business growth consistently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="accordion-faq_list" id="accordion-services">
                            @php
                                $services = [
                                    ['id' => 1, 'title' => 'Web Development', 'num' => '(01)', 'img' => 'service-1.jpg', 'text' => 'Omvantara builds fast secure scalable websites using modern technologies ensuring better performance user experience higher engagement and increased conversion rates for businesses.', 'tags' => [' Custom Websites', 'Responsive Design', 'E-commerce Development'], 'show' => true],
                                    ['id' => 2, 'title' => 'App Development', 'num' => '(02)', 'img' => 'service-2.jpg', 'text' => 'Omvantara develops powerful mobile and web applications delivering seamless user experiences improving engagement boosting retention and supporting long term business growth strategies.', 'tags' => ['Android & iOS Apps', 'Web Applications', 'App Maintenance'], 'show' => false],
                                    ['id' => 3, 'title' => 'SEO', 'num' => '(03)', 'img' => 'service-3.jpg', 'text' => 'Omvantara provides SEO services improving search engine rankings driving organic traffic increasing visibility and generating high quality leads for sustainable business growth online.', 'tags' => ['On-Page SEO', 'Technical SEO', 'Link Building'], 'show' => false],
                                    ['id' => 4, 'title' => 'Graphic Design', 'num' => '(04)', 'img' => 'service-4.jpg', 'text' => 'Omvantara creates visually engaging graphic designs strengthening brand identity attracting audience attention and improving marketing performance across digital platforms effectively.', 'tags' => ['Social Media Creatives', 'Branding Design', 'Marketing Materials'], 'show' => false],
                                    ['id' => 5, 'title' => 'UI / UX Design', 'num' => '(05)', 'img' => 'service-4.jpg', 'text' => 'Omvantara designs intuitive user experiences improving usability increasing engagement enhancing satisfaction and guiding users toward conversions across websites and applications.', 'tags' => ['User Research', 'Wireframing', 'Prototyping'], 'show' => false],
                                ];
                            @endphp
                            @foreach ($services as $service)
                            <div class="accordion-faq_item effectFade fadeUp" role="presentation">
                                <div class="accordion-action services-image-btn {{ $service['show'] ? 'active-img' : 'collapsed' }}"
                                    data-img="{{ asset('assets/images/section/' . $service['img']) }}"
                                    data-bs-target="#faq-{{ $service['id'] }}" role="button"
                                    data-bs-toggle="collapse" aria-controls="faq-{{ $service['id'] }}"
                                    aria-expanded="{{ $service['show'] ? 'true' : 'false' }}">
                                    <div class="accordion-title">
                                        {{ $service['title'] }}
                                        <div class="text-body-1 num">{{ $service['num'] }}</div>
                                    </div>
                                </div>
                                <div id="faq-{{ $service['id'] }}" class="collapse {{ $service['show'] ? 'show' : '' }}" data-bs-parent="#accordion-services">
                                    <div class="accordion-content">
                                        <div class="text-body-3 text-neutral-300 text">{{ $service['text'] }}</div>
                                        <div class="list-tags">
                                            @foreach ($service['tags'] as $tag)
                                                <a href="#" class="tags-item fw-semibold">{{ $tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="services-image effectFade fadeUp">
                        <img src="{{ asset('assets/images/section/service-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- /section-services -->

        <!-- section-featured-works -->
        {{--  <div id="works" class="section-featured-works flat-spacing pt-0">
            <div class="container">
                <div class="heading-section mb-0">
                    <div class="heading-sub fw-semibold mx-auto effectFade fadeUp">Featured Works</div>
                </div>
                <div class="featured-works-list position-relative">
                    @php
                        $works = [
                            ['img' => 'featured-works-1.jpg', 'title' => 'Support Copilot for SaaS', 'desc' => 'Draft replies and pulls account context; reduced first-response time by 38%.', 'deliverables' => 'AI strategy, AI UX flows, LLM agent, RAG', 'industry' => 'SaaS', 'dots' => [true, false, false, false], 'extra' => 'no-div'],
                            ['img' => 'featured-works-2.jpg', 'title' => 'Underwriting Risk Copilot', 'desc' => 'Built a triage assistant to summarize claims; cut manual review time by 42%.', 'deliverables' => 'Use-case mapping, Prompt & UI patterns', 'industry' => 'Fintech', 'dots' => [false, true, false, false], 'extra' => ''],
                            ['img' => 'featured-works-3.jpg', 'title' => 'Clinical Note Summarizer', 'desc' => 'Clinic-lobby assistant answering pre-visit questions; decreased front-desk calls by 28%.', 'deliverables' => 'PHI-safe RAG, HIPAA-aligned workflows', 'industry' => 'Healthcare', 'dots' => [false, false, true, false], 'extra' => ''],
                            ['img' => 'featured-works-4.jpg', 'title' => 'Catalog Intelligence Engine', 'desc' => 'Launched a shopping copilot that understands attributes; raised add-to-cart by 12%.', 'deliverables' => 'Data cleaning & embeddings', 'industry' => 'Ecommerce/Retail', 'dots' => [false, false, false, true], 'extra' => ''],
                        ];
                    @endphp
                    @foreach ($works as $work)
                    <div>
                        <div class="featured-works-item {{ $work['extra'] }} effectFade fadeUp">
                            <div class="image main-mouse-hover">
                                <img src="{{ asset('assets/images/section/' . $work['img']) }}" alt="">
                                <a href="{{ url('/work-single') }}" class="tf-mouse view-project h6">
                                    View Project
                                    <i class="icon icon-arrow-top-right"></i>
                                </a>
                            </div>
                            <div class="content">
                                <div class="pagi-dot">
                                    @foreach ($work['dots'] as $active)
                                        <span class="{{ $active ? 'active' : '' }}"></span>
                                    @endforeach
                                </div>
                                <div class="bot">
                                    <h4 class="heading fw-semibold">{{ $work['title'] }}</h4>
                                    <div class="grid-text">
                                        <div class="item">
                                            <div class="title text-secondary">DESCRIPTION</div>
                                            <div class="text-body-3 fw-semibold">{{ $work['desc'] }}</div>
                                        </div>
                                        <div class="item">
                                            <div class="title text-secondary">DELIVERABLES</div>
                                            <div class="fw-semibold text-body-3">{{ $work['deliverables'] }}</div>
                                        </div>
                                        <div class="item">
                                            <div class="title text-secondary">INDUSTRY</div>
                                            <div class="fw-semibold text-body-3">{{ $work['industry'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>  --}}
        <!-- /section-featured-works -->

        <!-- section-process -->
        <div class="section-process flat-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="process-heading h-100">
                            <div class="heading-section mb-80">
                                <div class="heading-sub fw-semibold effectFade fadeUp">Process</div>
                                <div class="heading-title text-gradient-3 effectFade fadeRotateX">From Idea <br> to Growth</div>
                            </div>
                            <div class="group-btn-slider">
                                <div class="nav-prev-swiper"><i class="icon icon-angle-left-solid"></i></div>
                                <div class="nav-next-swiper"><i class="icon icon-angle-right-solid"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="process-slide">
                            <div dir="ltr" class="swiper tf-swiper swiper-box-shadow" data-preview="1.78" data-tablet="2" data-mobile-sm="1" data-mobile="1"
                                data-loop="false" data-center="false" data-space-lg="24" data-space-md="24" data-space="30">
                                <div class="swiper-wrapper">
                                    @php
                                        $processes = [
                                            ['icon' => 'icon-search-solid', 'title' => 'Strategy & Planning', 'text' => 'Omvantara defines goals analyzes audience and creates effective digital strategies ensuring strong foundation for web development app development and SEO success.', 'time' => '2–4 DAYS', 'num' => '01'],
                                            ['icon' => 'icon-bolt-solid', 'title' => 'Design & Development', 'text' => 'Omvantara designs user friendly interfaces and develops high performance websites applications and creatives tailored to meet business needs and growth objectives.', 'time' => '1-3 WEEKS', 'num' => '02'],
                                            ['icon' => 'icon-user-check-solid-1', 'title' => 'Validate & Evals', 'text' => 'Omvantara launches projects optimizes SEO performance improves conversions and continuously enhances digital solutions to achieve long term business growth.', 'time' => 'ONGOING', 'num' => '03'],
                                        ];
                                    @endphp
                                    @foreach ($processes as $process)
                                    <div class="swiper-slide">
                                        <div class="process-card">
                                            <i class="icon {{ $process['icon'] }}"></i>
                                            <div class="content">
                                                <h4 class="title fw-semibold">{{ $process['title'] }}</h4>
                                                <p class="text text-secondary">{{ $process['text'] }}</p>
                                            </div>
                                            <div class="bot">
                                                <div class="time fw-semibold">{{ $process['time'] }}</div>
                                                <div class="number">
                                                    <span class="text-neutral-400">{{ $process['num'] }}</span>
                                                    <span class="text-neutral-200">/03</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /section-process -->

        <!-- section-benefits -->
        <div class="section-benefits flat-spacing pt-0">
            <div class="container">
                <div class="heading-section center mb-70">
                    <div class="heading-sub fw-semibold effectFade fadeUp">Benefits</div>
                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">Why Choose Us</div>
                </div>
                <div class="row mb-24">
                    <div class="col-lg-7">
                        <div class="benefits-box benefits-progress">
                            <div class="benefits-progress-inner">
                                @php
                                    $metrics = [
                                        ['icon' => 'icon-bullseye-solid', 'label' => 'Outcome Over Output', 'progress' => 60],
                                        ['icon' => 'icon-tachometer-alt-solid', 'label' => 'Performance-Driven Approach', 'progress' => 45],
                                        ['icon' => 'icon-shield-alt-solid', 'label' => 'Secure & Scalable Solutions', 'progress' => 55],
                                        ['icon' => 'icon-coins-solid', 'label' => 'Design That Converts', 'progress' => 60],
                                    ];
                                @endphp
                                @foreach ($metrics as $metric)
                                <div class="benefits-progress-item">
                                    <div class="progress-line" data-progress="{{ $metric['progress'] }}"></div>
                                    <div class="progress-text fw-semibold">
                                        <i class="icon {{ $metric['icon'] }}"></i>
                                        {{ $metric['label'] }}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="content">
                                <h6 class="fw-semibold title">Outcome over Output</h6>
                                <p class="text text-secondary">Omvantara focuses on measurable results increasing traffic improving engagement<br> boosting conversions and delivering real business impact beyond just design and development services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="benefits-box benefits-step effectFade fadeUp">
                            <div class="benefits-step-inner">
                                <div class="line-step"></div>
                                <div class="step-item"><i class="icon icon-check-solid"></i></div>
                                <div class="step-item"><i class="icon icon-check-solid"></i></div>
                                <div class="step-item"><i class="icon icon-check-solid"></i></div>
                            </div>
                            <div class="content">
                                <h6 class="fw-semibold title">Performance-Driven Approach</h6>
                                <p class="text text-secondary">Omvantara ensures websites apps and campaigns are optimized for speed SEO and user experience delivering maximum performance and efficiency consistently.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="benefits-box benefits-secure">
                            <div class="benefits-secure-inner text-center">
                                <img src="{{ asset('assets/images/item/benefits-1.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="fw-semibold title">Secure & Scalable Solutions</h6>
                                <p class="text text-secondary">Omvantara builds secure scalable digital platforms that grow with your business ensuring reliability performance and protection against potential security risks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="benefits-box benefits-design">
                            <div class="benefits-design-inner">
                                <img class="item-img-1" src="{{ asset('assets/images/item/benefits-2.svg') }}" alt="">
                                <img class="item-img-2 rightleft" src="{{ asset('assets/images/item/benefits-3.png') }}" alt="">
                                <img class="item-img-3 updown" src="{{ asset('assets/images/item/benefits-4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="fw-semibold title">Design That Converts</h6>
                                <p class="text text-secondary">Omvantara creates UI UX designs that engage users build trust improve interactions and convert visitors into loyal customers effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /section-benefits -->

        <!-- section-features -->
        <div class="section-features flat-spacing pt-0">
            <div class="container">
                <div class="heading-section center mb-64">
                    <div class="heading-sub fw-semibold effectFade fadeUp">Features</div>
                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">Why Businesses Choose Omvantara</div>
                </div>
            </div>
            <div class="position-relative">
                <div class="container z-5">
                    <div class="features-wrap justify-content-between">
                        <div class="features-col col-left lg-mb-24">
                            @php
                                $featuresLeft = [
                                    ['icon' => 'icon-robot-solid', 'title' => 'Results Driven Approach', 'text' => 'Omvantara focuses on measurable outcomes improving traffic conversions and revenue ensuring every digital solution delivers real business impact and consistent growth.'],
                                    ['icon' => 'icon-clipboard-check-solid', 'title' => 'High Performance Solutions', 'text' => 'Omvantara delivers high performance websites and applications optimized for speed responsiveness efficiency and seamless user experience across all devices.'],
                                    ['icon' => 'icon-book-solid', 'title' => 'Secure Scalable Systems', 'text' => 'Omvantara builds secure scalable systems ensuring smooth performance business growth and protection from security threats while maintaining reliability and efficiency.'],
                                ];
                            @endphp
                            @foreach ($featuresLeft as $feature)
                            <div class="features-item effectFade fadeUp">
                                <i class="icon {{ $feature['icon'] }}"></i>
                                <h6 class="title fw-semibold">{{ $feature['title'] }}</h6>
                                <p class="text-secondary">{{ $feature['text'] }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="features-center flex-shrink">
                            <img src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="">
                        </div>
                        <div class="features-col col-right">
                            @php
                                $featuresRight = [
                                    ['icon' => 'icon-user-check-solid', 'title' => 'User Focused Design', 'text' => 'Omvantara designs user focused interfaces improving usability enhancing engagement guiding users toward actions and increasing overall customer satisfaction.'],
                                    ['icon' => 'icon-shield-alt-solid', 'title' => 'SEO Growth Strategy', 'text' => 'Omvantara implements SEO strategies improving rankings driving targeted traffic increasing visibility and generating consistent leads for business growth online.'],
                                    ['icon' => 'icon-plug-solid', 'title' => 'End To End Service', 'text' => 'Omvantara provides end to end digital solutions covering strategy design development SEO and marketing supporting business growth at every stage.'],
                                ];
                            @endphp
                            @foreach ($featuresRight as $feature)
                            <div class="features-item effectFade fadeUp" data-delay="0.1">
                                <i class="icon {{ $feature['icon'] }}"></i>
                                <h6 class="title fw-semibold">{{ $feature['title'] }}</h6>
                                <p class="text-secondary">{{ $feature['text'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="side-line-main d-none d-lg-block wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 mx-auto">
                                <div class="side-line-wrap">
                                    <div class="link-break-line left">
                                        <div class="link-break-line">
                                            <span class="item top"></span>
                                            <span class="item bottom"></span>
                                        </div>
                                    </div>
                                    <div class="link-break-center">
                                        <span class="simu-electric left"></span>
                                        <span class="simu-electric right"></span>
                                    </div>
                                    <div class="link-break-line right">
                                        <span class="item top"></span>
                                        <span class="item bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /section-features -->
    </div>

    <!-- section-tools -->
    <div class="section-tools flat-spacing">
        @for ($i = 1; $i <= 6; $i++)
            <img class="img-{{ $i }} img-grow-{{ $i }}" src="{{ asset('assets/images/item/item-' . ($i + 3) . '.svg') }}" alt="">
        @endfor
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-8 text-center">
                    <div class="heading-section center mb-48">
                        <div class="heading-sub fw-semibold effectFade fadeUp">Tools</div>
                        <div class="heading-title text-gradient-3 effectFade fadeRotateX">We work with powerful AI tools</div>
                    </div>
                    <div class="text effectFade fadeUp">
                        We design, build, and evaluate with a modern AI stack—LLMs, vector search, orchestration, and observability—so your features are fast, reliable, and secure.
                    </div>
                    <a href="{{ url('/contact') }}" class="tf-btn effectFade fadeRotateX">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /section-tools -->

    <div class="box-black">
        <div class="light-box"></div>
        <img class="light-top" src="{{ asset('assets/images/item/light-top.png') }}" alt="">
        <img class="light-bot" src="{{ asset('assets/images/item/light-bot.png') }}" alt="">

        <!-- section-team -->
        {{--  <div class="section-team flat-spacing">
            <div class="container">
                <div class="heading-section center mb-64">
                    <div class="heading-sub fw-semibold style-1 effectFade fadeUp">Team Members</div>
                    <div class="heading-title text-white effectFade fadeRotateX">The Squad Shipping <br> Your AI</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8 lg-mb-24">
                        <div class="team-item h-100 effectFade fadeUp">
                            <div class="image">
                                <img src="{{ asset('assets/images/team/team-1.jpg') }}" alt="">
                            </div>
                            <a href="#" class="name h6 fw-semibold">Ava Collins</a>
                            <div class="sub text-body-1">Aigocy's Design Lead</div>
                            <div class="tf-social justify-content-center">
                                <a href="#" class="social-item"><i class="icon icon-twitter-x"></i></a>
                                <a href="#" class="social-item"><i class="icon icon-linkedin-in"></i></a>
                                <a href="#" class="social-item"><i class="icon icon-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 lg-mb-24">
                        @php
                            $teamSmall1 = [
                                ['img' => 'team-2.jpg', 'name' => 'Noah Reed', 'sub' => 'ML/Agent Lead. Builds domain agents'],
                                ['img' => 'team-3.jpg', 'name' => 'Lucas Hayes', 'sub' => 'Solutions Architect. Connects AI to your stack'],
                            ];
                        @endphp
                        @foreach ($teamSmall1 as $index => $member)
                        <div class="team-item style-1 {{ $index === 0 ? 'mb-24' : '' }} effectFade fadeUp">
                            <div class="top">
                                <div class="image"><img src="{{ asset('assets/images/team/' . $member['img']) }}" alt=""></div>
                                <div class="tf-social justify-content-center">
                                    <a href="#" class="social-item"><i class="icon icon-github"></i></a>
                                    <a href="#" class="social-item"><i class="icon icon-linkedin-in"></i></a>
                                </div>
                            </div>
                            <a href="#" class="name text-body-1 fw-semibold">{{ $member['name'] }}</a>
                            <div class="sub">{{ $member['sub'] }}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4 col-md-6">
                        @php
                            $teamSmall2 = [
                                ['img' => 'team-4.jpg', 'name' => 'Jordan Brooks', 'sub' => 'Data Engineer. Secure access policies'],
                                ['img' => 'team-5.jpg', 'name' => 'Erin Park', 'sub' => 'MLOps Engineer. Productionizes with CI/CD'],
                            ];
                        @endphp
                        @foreach ($teamSmall2 as $index => $member)
                        <div class="team-item style-1 {{ $index === 0 ? 'mb-24' : '' }} effectFade fadeUp" data-delay="0.1">
                            <div class="top">
                                <div class="image"><img src="{{ asset('assets/images/team/' . $member['img']) }}" alt=""></div>
                                <div class="tf-social justify-content-center">
                                    <a href="#" class="social-item"><i class="icon icon-github"></i></a>
                                    <a href="#" class="social-item"><i class="icon icon-linkedin-in"></i></a>
                                </div>
                            </div>
                            <a href="#" class="name text-body-1 fw-semibold">{{ $member['name'] }}</a>
                            <div class="sub">{{ $member['sub'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>  --}}
        <!-- /section-team -->

        <!-- section-statistic -->
        <div class="section-statistic">
            <div class="line"></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="heading-section mb-48">
                            <div class="heading-sub fw-semibold style-1 effectFade fadeUp">Statistic</div>
                            <div class="heading-title text-white effectFade fadeRotateX">Human-centered <br> AI, built for <br> production</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="statistic-slider">
                            <div class="text text-body-1 text-neutral-400 effectFade fadeUp">
                                We shipped our first copilot in 7 weeks and cut support tickets by 31%. The eval dashboards made every decision obvious.
                            </div>
                            <div class="swiper swiper-progressbar">
                                <div class="group-slider effectFade fadeUp">
                                    <div class="progress-bar">
                                        <div class="progress-fill" id="progressBar"></div>
                                    </div>
                                    <div class="group-btn-slider">
                                        <div class="btn-slider progressbar-prev"><i class="icon icon-angle-left-solid"></i></div>
                                        <div class="btn-slider progressbar-next"><i class="icon icon-angle-right-solid"></i></div>
                                    </div>
                                </div>
                                <div class="swiper-wrapper effectFade fadeUp">
                                    @php
                                        $stats = [
                                            ['label' => 'OUR GROWTH', 'number' => '230', 'prefix' => 'K'],
                                            ['label' => 'UPTIME FOR KEY FLOWS', 'number' => '95', 'prefix' => '%'],
                                            ['label' => 'ON TIME DELIVERY', 'number' => '99', 'prefix' => '%'],
                                        ];
                                    @endphp
                                    @foreach ($stats as $stat)
                                    <div class="swiper-slide">
                                        <div class="title fw-semibold text-body-1">{{ $stat['label'] }}</div>
                                        <div class="statistic-number">
                                            <span class="number text-white fw-semibold">{{ $stat['number'] }}</span>
                                            <span class="prefix text-brand">{{ $stat['prefix'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /section-statistic -->

        <!-- section-awards -->
        {{--  <div class="section-awards flat-spacing">
            <div class="container">
                <div class="heading-section center mb-48">
                    <div class="heading-sub fw-semibold style-1 mb-0 effectFade fadeUp">Awards</div>
                </div>
                <div class="d-grid gap-16">
                    @php
                        $awards = [
                            ['img' => 'partner-7.svg', 'title' => 'Innovation in AI', 'text' => 'Underwriting Risk Copilot (Fintech)', 'year' => '2025', 'delay' => ''],
                            ['img' => 'partner-8.svg', 'title' => 'Best AI Product Design', 'text' => 'Support Copilot (SaaS)', 'year' => '2025', 'delay' => '0.1'],
                            ['img' => 'partner-9.svg', 'title' => 'Data & AI Excellence', 'text' => 'Clinical Note Summarizer (Healthcare)', 'year' => '2024', 'delay' => '0.2'],
                            ['img' => 'partner-10.svg', 'title' => 'Innovation in AI', 'text' => 'Underwriting Risk Copilot (Fintech)', 'year' => '2024', 'delay' => '0.3'],
                        ];
                    @endphp
                    @foreach ($awards as $award)
                    <div class="awards-item effectFade fadeUp" @if($award['delay']) data-delay="{{ $award['delay'] }}" @endif>
                        <div class="image"><img src="{{ asset('assets/images/partner/' . $award['img']) }}" alt=""></div>
                        <div class="title text-body-1 text-white">{{ $award['title'] }}</div>
                        <div class="text text-body-1 text-white">{{ $award['text'] }}</div>
                        <div class="year text-body-1 text-neutral-400">/ {{ $award['year'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>  --}}
        <!-- /section-awards -->

        <!-- section-testimonials -->
        <div class="section-testimonials flat-spacing pt-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="col-left">
                            <div class="heading-section mb-48">
                                <div class="heading-sub fw-semibold style-1 effectFade fadeUp">Testimonials</div>
                                <div class="heading-title text-white effectFade fadeRotateX">What Our <br> Clients Says</div>
                            </div>
                            <div class="swiper-testimonial_wrap effectFade fadeUp">
                                <div dir="ltr" class="swiper tf-swiper swiper-testimonial">
                                    <div class="swiper-wrapper">
                                        @php
                                            $testimonials = [
                                                ['type' => 'stars', 'text' => 'We shipped our first copilot in 7 weeks and cut support tickets by 31%. The eval dashboards made every decision obvious.', 'name' => 'Elena Ruiz', 'role' => "Cantos SaaS's VP Product"],
                                                ['type' => 'quote', 'text' => 'SSO/SAML and RBAC landed smoothly. Latency stayed &lt;300 ms on p95—huge win for our agents.', 'name' => 'Marcus Tan', 'role' => "VectorPay's CTO"],
                                                ['type' => 'quote', 'text' => 'The best partner for agentic work. Multi-step planning, tool use, and audit trails—done right the first time.', 'name' => 'David Kim', 'role' => "Northway's Ecommerce Director"],
                                            ];
                                        @endphp
                                        @foreach ($testimonials as $tes)
                                        <div class="swiper-slide">
                                            <div>
                                                <div class="top-icon d-flex gap-4">
                                                    @if ($tes['type'] === 'stars')
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <i class="icon icon-star-solid"></i>
                                                        @endfor
                                                    @else
                                                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9375 20V10.3597C12.9375 7.72182 13.824 5.51559 15.5969 3.74101C17.4177 1.91847 19.8854 0.671463 23 0V6.40288C21.8021 6.78657 21.0115 7.26619 20.6281 7.84173C20.2448 8.3693 20.0292 9.04077 19.9813 9.85612H23V20H12.9375ZM0 20V10.3597C0 7.72182 0.886459 5.51559 2.65938 3.74101C4.48021 1.91847 6.94792 0.671463 10.0625 0V6.40288C8.9125 6.78657 8.12187 7.26619 7.69062 7.84173C7.30729 8.3693 7.09167 9.04077 7.04375 9.85612H10.0625V20H0Z" fill="#FD3A25"/>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div class="text-body-1 text-white desc">{!! $tes['text'] !!}</div>
                                                <div class="cite">
                                                    <img class="line-left" src="{{ asset('assets/images/item/line-1.png') }}" alt="">
                                                    <div class="name text-body-3 text-neutral-400 fw-semibold">{{ $tes['name'] }}</div>
                                                    <div class="line"></div>
                                                    <div class="sub text-body-3 text-neutral-400">{{ $tes['role'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="group-slider">
                                    <div class="group-btn-slider">
                                        <div class="btn-slider nav-prev-swiper testimonials-prev"><i class="icon icon-angle-left-solid"></i></div>
                                        <div class="btn-slider nav-next-swiper testimonials-next"><i class="icon icon-angle-right-solid"></i></div>
                                    </div>
                                    <div class="testimonials-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div dir="ltr" class="swiper sw-main-image effectFade fadeUp">
                            <div class="swiper-wrapper">
                                @for ($i = 1; $i <= 3; $i++)
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('assets/images/section/tes-' . $i . '.jpg') }}" alt="">
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /section-testimonials -->
    </div>

    <!-- section-pricing -->
    {{--  <div id="pricing" class="section-pricing flat-spacing">
        <div class="container">
            <div class="heading-section mb-80">
                <div class="heading-sub fw-semibold effectFade fadeUp">Pricing Plans</div>
                <div class="heading-title text-gradient-3 gap-8 effectFade fadeRotateX">
                    From pilot to enterprise <br>
                    <div class="h-8 d-none d-lg-block"></div>
                    clear scope, transparent costs <br>
                    <div class="h-8 d-none d-lg-block"></div>
                    <input type="checkbox" id="pricingSwitch" class="tf-switch-check" checked>&nbsp;annually.
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 lg-mb-24">
                    <div class="pricing-item h-100 effectFade fadeRotateX">
                        <div class="top d-flex gap-12 align-items-center">
                            <div class="d-flex gap-8 align-items-center">
                                <i class="icon icon-user-friends-solid fs-24"></i>
                                <div class="fw-semibold text">Starter Plan</div>
                            </div>
                            <div class="line"></div>
                            <div class="fw-semibold text-secondary">For startups</div>
                        </div>
                        <div class="heading">
                            <div class="d-flex gap-14 align-items-end">
                                <div class="price-number fw-bold" data-month="1000" data-year="9900">$9,900</div>
                                <h6 class="price-per">/ year</h6>
                            </div>
                            <a href="{{ url('/contact') }}" class="tf-btn">Get Started</a>
                        </div>
                        <div class="line"></div>
                        <div class="content">
                            <div>
                                <div class="title fw-semibold mb-4">What's included</div>
                                <div class="text fw-semibold">Prove value in two weeks with a clickable UX, tech spike, and a clear go/no-go roadmap.</div>
                            </div>
                            <ul class="list-text type-check">
                                <li><i class="icon icon-check-solid"></i> Discovery workshop</li>
                                <li><i class="icon icon-check-solid"></i> Opportunity brief</li>
                                <li><i class="icon icon-check-solid"></i> Clickable UX</li>
                                <li><i class="icon icon-check-solid"></i> 1 data source & 1 integration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pricing-item h-100 style-black effectFade fadeRotateX" data-delay="0.1">
                        <div class="top d-flex gap-12 align-items-center">
                            <div class="d-flex gap-8 align-items-center">
                                <i class="icon icon-building fs-24"></i>
                                <div class="fw-semibold text">Enterprise Plan</div>
                            </div>
                            <div class="line"></div>
                            <div class="fw-semibold text-neutral-400">For organisations</div>
                        </div>
                        <div class="heading">
                            <div class="d-flex gap-14 align-items-end">
                                <div class="price-number fw-bold" data-month="1700" data-year="19900">$19,900</div>
                                <h6 class="price-per">/ year</h6>
                            </div>
                            <a href="{{ url('/contact') }}" class="tf-btn">Get Started</a>
                        </div>
                        <div class="line"></div>
                        <div class="content">
                            <div>
                                <div class="title fw-semibold mb-4">What's included</div>
                                <div class="text fw-semibold">Compliance-ready delivery for complex orgs—multi-env releases, canaries, and change management.</div>
                            </div>
                            <ul class="list-text type-check">
                                <li><i class="icon icon-check-solid"></i> Everything in Starter</li>
                                <li><i class="icon icon-check-solid"></i> CI/CD, tracing, alerts, guardrails</li>
                                <li><i class="icon icon-check-solid"></i> Full eval dashboard</li>
                                <li><i class="icon icon-check-solid"></i> 3 data source & 3 integration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- /section-pricing -->

    <!-- section-faqs -->
    <div class="section-faqs flat-spacing pt-0">
        <div class="container">
            <div class="heading-section center mb-64">
                <div class="heading-sub fw-semibold effectFade fadeUp">FAQs</div>
                <div class="heading-title text-gradient-3 effectFade fadeRotateX">Frequently Asked <br>Questions</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-asked" id="accordion-asked">
                        @php
                            $faqs = [
                                ['id' => 1, 'question' => "What services does Omvantara provide?",'answer'=>"Omvantara offers web development app development SEO services UI UX design and graphic design helping businesses improve online presence generate leads and growth.",'open' => true],
                                ['id' => 2, 'question' => 'How long does Omvantara take to complete projects?', 'answer' => 'Omvantara completes most web development and app development projects within 2 to 6 weeks depending on requirements features and customization needs.', 'open' => false],
                                ['id' => 3, 'question' => 'Does Omvantara provide SEO with website development?', 'answer' => 'Omvantara includes SEO best practices with websites and offers dedicated SEO services to improve rankings traffic and lead generation effectively.', 'open' => false],
                                ['id' => 4, 'question' => 'Can Omvantara redesign existing websites or applications?', 'answer' => 'Omvantara redesigns websites and applications improving design performance speed and SEO to enhance user experience and increase conversions.', 'open' => false],
                                ['id' => 5, 'question' => 'Does Omvantara work with startups and small businesses?', 'answer' => 'Omvantara works with startups small businesses and enterprises providing scalable digital solutions tailored to different business goals and budgets.', 'open' => false],
                                ['id' => 6, 'question' => 'Will Omvantara websites be mobile friendly and fast?', 'answer' => 'Omvantara builds responsive fast loading websites optimized for all devices ensuring seamless user experience and better engagement.', 'open' => false],
                                ['id' => 7, 'question' => 'Does Omvantara provide ongoing support and maintenance?','answer' => 'Omvantara offers ongoing support maintenance updates and optimization ensuring websites and applications run smoothly and stay updated.', 'open' => false],
                            ];
                        @endphp
                        @foreach ($faqs as $index => $faq)
                        <div class="accordion-asked-item effectFade fadeRotateX" @if($index > 0) data-delay="{{ $index * 0.1 }}" @endif>
                            <div class="accordion-asked-title" id="asked{{ $faq['id'] }}">
                                <button class="accordion-button text-body-1 fw-semibold {{ !$faq['open'] ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq['id'] }}"
                                    aria-expanded="{{ $faq['open'] ? 'true' : 'false' }}" aria-controls="collapse{{ $faq['id'] }}">
                                    {{ $faq['question'] }}
                                    <span class="right-icon"></span>
                                </button>
                            </div>
                            <div id="collapse{{ $faq['id'] }}" role="region" class="accordion-collapse collapse {{ $faq['open'] ? 'show' : '' }}"
                                aria-labelledby="asked{{ $faq['id'] }}" data-bs-parent="#accordion-asked">
                                <div class="accordion-body">{{ $faq['answer'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section-faqs -->

    <!-- section-contact -->
    <div id="contact" class="flat-spacing pt-0">
        <div class="section-contact">
            <div class="contact-image">
                <img src="{{ asset('assets/images/section/contact-image-bg.jpg') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-left">
                            <div class="heading-section mb-48">
                                <div class="heading-sub fw-semibold effectFade fadeUp">Contact</div>
                                {{--  <div class="heading-title text-gradient-3 effectFade fadeRotateX">Let's Build <br> Intelligent Things</div>  --}}
                                <div class="heading-title text-gradient-3 effectFade fadeRotateX">Let's Build </div>
                            </div>
                            <div>
                                <div class="contact-item mb-20 effectFade fadeRotateX">
                                    <i class="icon icon-envelope-solid"></i>
                                    <div class="content">
                                        <div class="title fw-semibold mb-2">E-mail address</div>
                                        <div class="text">info@omvantara.com</div>
                                    </div>
                                </div>
                                <div class="contact-item effectFade fadeRotateX" data-delay="0.1">
                                    <i class="icon icon-headset-solid"></i>
                                    <div class="content">
                                        <div class="title fw-semibold mb-2">Phone number</div>
                                        <div class="text">+91 8469933455</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-contact" action="{{ route('submit.contact') }}" method="POST">
                            @csrf
                            <h4 class="heading fw-semibold">Fill this form below</h4>
                            <fieldset class="mb-21">
                                <label class="fw-semibold text-body-3 mb-20">Your Name</label>
                                <input type="text" name="name" placeholder="Enter your full name" required>
                            </fieldset>
                            <fieldset class="mb-21">
                                <label class="fw-semibold text-body-3 mb-20">Your Phone</label>
                                <input type="text" name="phone" placeholder="Enter your phone number">
                            </fieldset>
                            <fieldset class="mb-21">
                                <label class="fw-semibold text-body-3 mb-20">Your Email</label>
                                <input type="email" name="email" placeholder="Enter your email address">
                            </fieldset>
                            <fieldset class="mb-18">
                                <label class="fw-semibold text-body-3 mb-0">Details</label>
                                <textarea name="message"></textarea>
                            </fieldset>
                            {{--  <div class="attachment d-flex gap-8 align-items-center">
                                <i class="icon icon-paperclip-solid fs-24"></i>
                                <div class="fw-semibold text-body-3">Add an Attachment</div>
                            </div>  --}}
                            <button type="submit" class="tf-btn w-100">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section-contact -->

@endsection

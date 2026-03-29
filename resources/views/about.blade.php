@extends('layouts.app')

@section('content')

    <!-- Hero Banner -->
    <div class="section-hero">
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
                    <span class="title1 fw-semibold text-gradient-1">Building Digital Solutions </span>
                    <br>
                    <div class="title2 d-flex gap-20 justify-content-center flex-wrap">
                        <span class="fw-semibold text-gradient-1">That Drive Growth</span>
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
                    Omvantara delivers web development, SEO and app development services helping <br> businesses across India grow faster, improve visibility and achieve long term success.
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
                        <div class="heading-title text-gradient-2 effectFade fadeRotateX">Empowering Businesses <br> Through Digital Innovation</div>
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
                        <div class="desc fw-semibold text-body-1">Our mission is to deliver innovative digital solutions that help businesses grow online improve performance increase conversions and achieve sustainable success</div>
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
                            <div class="text-body-1 fw-semibold desc">Great results, fast delivery, and a smooth experience with Omvantara.</div>
                            <div class="cite">
                                <div class="name text-body-3 fw-semibold">Rahul Sharma</div>
                                {{--  <div class="line"></div>  --}}
                                {{--  <div class="sub text-body-3">Co-Founder | D2C Brand</div>  --}}
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
        <!-- section-core-values -->
        <div class="section-features flat-spacing">
            <div class="container">
                <div class="heading-section center mb-64">
                    <div class="heading-sub fw-semibold effectFade fadeUp">Core Values</div>
                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">Our Core Values</div>
                </div>
                <div class="row">
                    @php
                        $coreValues = [
                            [
                                'title' => 'Innovation',
                                'delay' => '',
                                'text' => 'Omvantara continuously adopts new technologies and creative strategies to deliver modern digital solutions that help businesses stay competitive and achieve long term growth online.',
                                'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_2230_475" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="38" height="38"><path d="M1.66602 1.66683H38.3327V38.3335H1.66602V1.66683Z" fill="white"/></mask><g mask="url(#mask0_2230_475)"><path d="M30.5527 3.23727C32.7492 2.67731 35.1046 2.36572 37.6168 2.38362C37.6347 4.89586 37.3232 7.25133 36.7632 9.44775" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.3852 29.6918H16.3844L12.1577 30.8813L9.11914 27.8427L10.3087 23.616V23.6153" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.11888 33.9197C8.27956 34.7583 2.38281 37.6172 2.38281 37.6172C2.38281 37.6172 5.24167 31.7204 6.08027 30.8811C6.9196 30.0418 8.27956 30.0418 9.11888 30.8811C9.9582 31.7204 9.9582 33.0804 9.11888 33.9197Z" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.3721 18.6279C19.6963 16.9522 19.6963 14.2272 21.3721 12.5514C23.0479 10.8757 25.7728 10.8757 27.4486 12.5514C29.1244 14.2272 29.1244 16.9522 27.4486 18.6279C25.7728 20.3037 23.0479 20.3037 21.3721 18.6279Z" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M36.7631 9.44775H36.7624C35.1905 9.39189 33.6365 8.76376 32.4362 7.56422C31.2367 6.36396 30.6086 4.80992 30.5527 3.23805V3.23727" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.9033 22.0962L13.3457 26.6538" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M23.4945 27.9998C24.9118 30.4626 24.5673 33.6631 22.4618 35.7686L17.9043 31.211" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.78802 22.0962L4.23047 17.5386C6.33594 15.4332 9.53568 15.0887 11.9992 16.5053" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M33.1197 17.2099C32.8403 16.9305 32.8403 16.4766 33.1197 16.1971C33.3991 15.9177 33.8531 15.9177 34.1325 16.1971C34.4118 16.4766 34.4118 16.9305 34.1325 17.2099C33.8531 17.4893 33.3991 17.4893 33.1197 17.2099Z" fill="white"/><path d="M36.7623 9.44748C36.3637 11.0125 35.8394 12.497 35.2188 13.8999" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M32.0012 19.4878C29.3782 23.1357 26.2324 25.972 23.4729 27.9709C21.1719 29.6388 19.1394 30.7238 17.9041 31.2114L8.78906 22.0963C9.27812 20.8582 10.3632 18.8257 12.0296 16.5262C15.5939 11.6069 21.8171 5.4624 30.5527 3.23812" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
                            ],
                            [
                                'title' => 'Quality',
                                'delay' => '0.1',
                                'text' => 'We maintain high standards in every project ensuring websites applications and designs are reliable efficient and deliver exceptional performance for our clients consistently.',
                                'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1659 25.2949C22.1659 26.6188 21.1569 27.6919 19.9124 27.6919H14.9512" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M31.426 28.1045L33.9418 26.3729C35.1353 25.6399 35.5442 24.0166 34.8551 22.747C34.1661 21.4775 32.64 21.0425 31.4464 21.7755L24.8808 25.8076C24.2426 26.1996 23.5185 26.4059 22.7815 26.4059H21.9099C22.0736 26.0737 22.1668 25.696 22.1668 25.2949C22.1668 23.971 21.1578 22.8978 19.9133 22.8978H12.0913C10.3674 22.8978 8.9069 24.0944 8.40175 25.749L3.84559 31.8169C3.03922 32.8908 3.20396 34.4568 4.21358 35.3145L7.12661 37.7894C8.13623 38.6472 9.60835 38.4719 10.4148 37.398L13.2396 33.636C13.9635 32.6719 15.0605 32.7609 16.2204 32.7609L23.9412 32.7608C24.3725 32.7608 24.7962 32.64 25.1696 32.4106L29.2866 29.577" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.101 4.15918C13.1913 5.29274 12.6445 6.7282 12.6445 8.28346C12.6445 10.3529 13.5948 12.201 15.0836 13.4138C15.8951 14.0756 16.3658 15.0664 16.3658 16.1133V16.7603" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.7849 20.3893H16.7366C16.0051 20.3893 15.4121 19.7963 15.4121 19.0648V18.0315C15.4121 17.3 16.0051 16.707 16.7366 16.707H21.7849C22.5164 16.707 23.1094 17.3 23.1094 18.0315V19.0648C23.1094 19.7963 22.5164 20.3893 21.7849 20.3893Z" stroke="white" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            ],
                            [
                                'title' => 'Integrity',
                                'delay' => '',
                                'text' => 'Omvantara believes in transparency honesty and clear communication building long term relationships with clients by delivering what we promise with complete accountability.',
                                'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1895 28.9348L23.1151 29.4692" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.49414 20.8641L8.07857 22.3563C8.15584 22.4008 8.2546 22.3744 8.29921 22.2971L12.953 14.2366C12.9976 14.1593 12.9711 14.0606 12.8939 14.016L10.3094 12.5238" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.504 20.8641L31.9195 22.3563C31.8423 22.4008 31.7435 22.3744 31.6989 22.2971L27.0451 14.2366C27.0005 14.1593 27.027 14.0606 27.1042 14.016L29.6887 12.5238" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            ],
                            [
                                'title' => 'Growth',
                                'delay' => '0.1',
                                'text' => 'We focus on continuous improvement helping businesses scale faster through performance driven digital solutions that increase visibility engagement and conversions effectively.',
                                'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.8738 10.7766C10.9812 9.90656 11.4737 8.39069 12.7072 8.21144L16.0583 7.72454C16.5481 7.65335 16.9716 7.34569 17.1906 6.90183L18.6892 3.8653C19.2408 2.74754 20.8348 2.74754 21.3863 3.8653L22.885 6.90183C23.104 7.34569 23.5275 7.65335 24.0173 7.72454L27.3683 8.21144C28.6019 8.39069 29.0944 9.90656 28.2018 10.7766L25.777 13.1402C25.4225 13.4857 25.2608 13.9835 25.3446 14.4713L25.917 17.8089C26.1276 19.0374 24.8381 19.9743 23.7349 19.3942L20.7376 17.8185C20.2994 17.5882 19.7761 17.5882 19.338 17.8185L16.3407 19.3942C15.2374 19.9743 13.948 19.0374 14.1586 17.8089L14.7311 14.4713C14.8148 13.9835 14.6531 13.4857 14.2986 13.1402L13.1646 12.0348" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            ],
                        ];
                    @endphp

                    @foreach ($coreValues as $index => $value)
                    <div class="col-md-6 {{ $index < 2 ? 'mb-24' : ($index === 2 ? 'md-mb-24' : '') }}">
                        <div class="features-item style-2 h-100 effectFade fadeRotateX" @if($value['delay']) data-delay="{{ $value['delay'] }}" @endif>
                            <div class="icon">{!! $value['icon'] !!}</div>
                            <h4 class="title fw-semibold">{{ $value['title'] }}</h4>
                            <p class="text-secondary">{{ $value['text'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /section-core-values -->
    </div>

    <!-- section-tools -->
    <div class="section-tools v2 flat-spacing">
        <div class="tool-wrap text-center">
            <div class="heading-section center mb-48">
                <div class="heading-sub fw-semibold effectFade fadeUp">Tools</div>
                <div class="heading-title text-gradient-3 effectFade fadeRotateX">We work with <br> powerful AI tools</div>
            </div>
            <div class="text effectFade fadeUp">
                We design, build, and evaluate with a modern AI stack—LLMs, vector <br> search, orchestration, and observability—so your features are fast, <br> reliable, and secure.
            </div>
            <div class="position-relative tool-image-box">
                @for ($i = 1; $i <= 6; $i++)
                    <img class="img-item img-item-{{ $i }}" src="{{ asset('assets/images/section/tool-' . $i . '.svg') }}" alt="">
                @endfor
                <div class="image-center flex-shrink">
                    <img src="{{ asset('assets/images/section/tool-center.svg') }}" alt="">
                </div>
                <div class="side-line">
                    <svg data-viewbox-desktop="0 0 302 157" data-viewbox-mobile="0 0 300 100" class="line-1" width="300" height="157" viewBox="0 0 302 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="line-path" d="M301 157V130C301 121.716 294.284 115 286 115H16C7.71572 115 0.999992 108.284 0.999992 100V0" stroke="white" stroke-width="2" fill="none"/>
                        <circle r="4" fill="#FD3A25"><animateMotion dur="2.5s" repeatCount="indefinite" path="M301 157V130C301 121.716 294.284 115 286 115H16C7.71572 115 0.999992 108.284 0.999992 100V0"/></circle>
                    </svg>
                    <svg data-viewbox-desktop="0 0 260 2" data-viewbox-mobile="0 0 250 2" class="line-2" width="260" height="2" viewBox="0 0 260 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M260 1H0" stroke="white" stroke-width="2" fill="none"/>
                        <circle r="4" fill="#FD3A25"><animateMotion dur="2.5s" repeatCount="indefinite" path="M260 1H0"/></circle>
                    </svg>
                    <svg data-viewbox-desktop="0 0 302 159" data-viewbox-mobile="0 0 300 100" class="line-3" width="302" height="159" viewBox="0 0 302 159" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M301 0V29C301 37.2843 294.284 44 286 44H16C7.71572 44 0.999992 50.7157 0.999992 59V159" stroke="white" stroke-width="2" fill="none"/>
                        <circle r="4" fill="#FD3A25"><animateMotion dur="2.5s" repeatCount="indefinite" path="M301 0V29C301 37.2843 294.284 44 286 44H16C7.71572 44 0.999992 50.7157 0.999992 59V159"/></circle>
                    </svg>
                    <svg data-viewbox-desktop="0 0 302 156" data-viewbox-mobile="0 0 300 100" class="line-4" width="302" height="156" viewBox="0 0 302 156" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 156V130C1 121.716 7.71573 115 16 115H286C294.284 115 301 108.284 301 100V0" stroke="white" stroke-width="2" fill="none"/>
                        <circle r="4" fill="#FD3A25"><animateMotion dur="2.5s" repeatCount="indefinite" path="M1 156V130C1 121.716 7.71573 115 16 115H286C294.284 115 301 108.284 301 100V0"/></circle>
                    </svg>
                    <svg data-viewbox-desktop="0 0 260 3" data-viewbox-mobile="0 0 260 3" class="line-5" width="260" height="3" viewBox="0 0 260 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1.05908H260" stroke="white" stroke-width="2.11844" fill="none"/>
                        <circle r="3" fill="#FD3A25"><animateMotion dur="2.5s" repeatCount="indefinite" path="M0 1.05908H260"/></circle>
                    </svg>
                    <svg data-viewbox-desktop="0 0 302 155" data-viewbox-mobile="0 0 300 100" class="line-6" width="302" height="155" viewBox="0 0 302 155" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 0V25C1 33.2843 7.71573 40 16 40H286C294.284 40 301 46.7157 301 55V155" stroke="white" stroke-width="2" fill="none"/>
                        <circle r="4" fill="#FD3A25"><animateMotion dur="2.5s" repeatCount="indefinite" path="M1 0V25C1 33.2843 7.71573 40 16 40H286C294.284 40 301 46.7157 301 55V155"/></circle>
                    </svg>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="tf-btn effectFade fadeRotateX">Get Started</a>
        </div>
    </div>
    <!-- /section-tools -->

    <div class="box-black">
        <div class="light-box"></div>
        <img class="light-top" src="{{ asset('assets/images/item/light-top.png') }}" alt="">
        <img class="light-bot" src="{{ asset('assets/images/item/light-bot.png') }}" alt="">

        <!-- section-team -->
        <div class="section-team flat-spacing">
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
                            <div class="sub text-body-1">Aigocys Design Lead</div>
                            <div class="tf-social justify-content-center">
                                <a href="#" class="social-item"><i class="icon icon-twitter-x"></i></a>
                                <a href="#" class="social-item"><i class="icon icon-linkedin-in"></i></a>
                                <a href="#" class="social-item"><i class="icon icon-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 lg-mb-24">
                        @php
                            $teamCol2 = [
                                ['img' => 'team-2.jpg', 'name' => 'Noah Reed', 'sub' => 'ML/Agent Lead. Builds domain agents'],
                                ['img' => 'team-3.jpg', 'name' => 'Lucas Hayes', 'sub' => 'Solutions Architect. Connects AI to your stack'],
                            ];
                        @endphp
                        @foreach ($teamCol2 as $i => $member)
                        <div class="team-item style-1 {{ $i === 0 ? 'mb-24' : '' }} effectFade fadeUp">
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
                            $teamCol3 = [
                                ['img' => 'team-4.jpg', 'name' => 'Jordan Brooks', 'sub' => 'Data Engineer. Secure access policies'],
                                ['img' => 'team-5.jpg', 'name' => 'Erin Park', 'sub' => 'MLOps Engineer. Productionizes with CI/CD'],
                            ];
                        @endphp
                        @foreach ($teamCol3 as $i => $member)
                        <div class="team-item style-1 {{ $i === 0 ? 'mb-24' : '' }} effectFade fadeUp" data-delay="0.1">
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
        </div>
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
        <div class="section-awards flat-spacing">
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
        </div>
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

    <!-- section-faqs -->
    <div class="section-faqs flat-spacing">
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
                                ['id' => 1, 'question' => "Who is Omvantara?",'answer'=>"Omvantara is a web development company in India providing SEO services app development UI UX design and digital solutions helping businesses build strong online presence and grow faster.", 'open' => true],
                                ['id' => 2, 'question' => 'What makes Omvantara different from other agencies?', 'answer' => 'Omvantara focuses on performance driven strategies combining web development SEO and design to deliver measurable results increase conversions and support long term business growth.', 'open' => false],
                                ['id' => 3, 'question' => 'What industries does Omvantara work with?', 'answer' => 'Omvantara works with startups small businesses and enterprises across multiple industries delivering customized digital solutions based on specific business goals and target audience needs.', 'open' => false],
                                ['id' => 4, 'question' => 'What is Omvantara mission and vision?', 'answer' => 'Omvantara mission is to deliver innovative digital solutions while vision focuses on becoming a trusted web development and SEO partner for businesses across India.', 'open' => false],
                                ['id' => 5, 'question' => 'Does Omvantara work with international clients?', 'answer' => 'Yes Omvantara works with clients globally delivering web development SEO and app development services while maintaining quality communication and performance standards.', 'open' => false],
                                ['id' => 6, 'question' => 'How experienced is the Omvantara team?', 'answer' => 'Omvantara team consists of skilled developers designers and SEO experts with experience in delivering high performance digital solutions for various industries and business sizes.', 'open' => false],
                                ['id' => 7, 'question' => 'Why should I choose Omvantara for my business?', 'answer' => 'Omvantara provides scalable secure and performance focused digital solutions helping businesses improve visibility generate leads and achieve consistent online growth effectively.', 'open' => false],
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
                                <div class="heading-title text-gradient-3 effectFade fadeRotateX">Let's Build <br> Intelligent Things</div>
                            </div>
                            <div>
                                <div class="contact-item mb-20 effectFade fadeRotateX">
                                    <i class="icon icon-envelope-solid"></i>
                                    <div class="content">
                                        <div class="title fw-semibold mb-2">E-mail address</div>
                                        <div class="text">hello@youraiagency.com</div>
                                    </div>
                                </div>
                                <div class="contact-item effectFade fadeRotateX" data-delay="0.1">
                                    <i class="icon icon-headset-solid"></i>
                                    <div class="content">
                                        <div class="title fw-semibold mb-2">Phone number</div>
                                        <div class="text">+1 (647) 555 0172</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="form-contact effectFade fadeUp" action="{{ url('/contact') }}" method="POST">
                            @csrf
                            <h4 class="heading fw-semibold">Fill this form below</h4>
                            <fieldset class="mb-21">
                                <label class="fw-semibold text-body-3 mb-20">Your Name</label>
                                <input type="text" name="name" placeholder="Enter your full name" required>
                            </fieldset>
                            <fieldset class="mb-21">
                                <label class="fw-semibold text-body-3 mb-20">Your Phone</label>
                                <input type="text" name="phone" placeholder="Enter the e-mail" required>
                            </fieldset>
                            <fieldset class="mb-18">
                                <label class="fw-semibold text-body-3 mb-0">More About The Project</label>
                                <textarea name="message"></textarea>
                            </fieldset>
                            <div class="attachment d-flex gap-8 align-items-center">
                                <i class="icon icon-paperclip-solid fs-24"></i>
                                <div class="fw-semibold text-body-3">Add an Attachment</div>
                            </div>
                            <button type="submit" class="tf-btn w-100">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section-contact -->

@endsection

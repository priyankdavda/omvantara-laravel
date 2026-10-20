@extends('layouts.app')

@section('content')

    <!-- Hero Banner -->
    <div class="section-hero v1">
        <div class="hero-image"></div>
        <div class="container">
            <div class="content-wrap text-center">
                <div class="title text-display-2 effectFade fadeRotateX">
                    <span class="title1 fw-semibold text-gradient-1">Our Complete </span>
                    <br>
                    <div class="title2 d-flex gap-20 justify-content-center flex-wrap">
                        <span class="fw-semibold text-gradient-1">Digital Services</span>
                        <div class="title-icon">
                            <div class="box"></div>
                            <div class="title-icon-wrap">
                                <img src="{{ asset('assets/images/item/item-13.svg') }}" alt="" class="img-1 img-transform-3">
                                <img src="{{ asset('assets/images/item/item-14.svg') }}" alt="" class="img-2 img-transform-3">
                                <img src="{{ asset('assets/images/item/item-15.svg') }}" alt="" class="img-3 img-transform-3">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text effectFade fadeUp">
                    Omvantara provides end to end digital services including development SEO and design solutions <br> helping businesses scale faster improve performance and increase conversions.
                </p>
            </div>
        </div>
    </div>
    <!-- /Hero Banner -->

    <!-- section-services -->
    <div id="services" class="section-services flat-spacing">
        <div class="container">
            <div class="top">
                <div class="heading-section center mb-48">
                    <div class="heading-sub fw-semibold effectFade fadeUp">Services</div>
                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">End-to-End Services</div>
                </div>
                {{--  <p class="text text-center effectFade fadeUp">We turn ambiguous AI ideas into production features your users trust—combining strategy, <br> design, engineering, and rigorous evaluation.</p>  --}}
            </div>
            <div class="accordion-faq_list gap-32" id="accordion-services">
                @php
                    $services = [
                        [
                            'id'   => 1,
                            'title' => 'Web Development',
                            'img'  => 'service-5.jpg',
                            'text' => 'Omvantara offers custom web development services building fast secure scalable websites optimized for performance user experience SEO and higher conversion rates.',
                            'tags' => ['Custom Development (Laravel / PHP)', 'E-commerce Website Development', 'Shopify Store Development', 'WordPress Website Development', 'Magento Development', 'API Development', 'Website Maintenance & Optimization'],
                            'num'  => '01',
                            'open' => true,
                        ],
                        [
                            'id'   => 2,
                            'title' => 'App Development',
                            'img'  => 'service-6.jpg',
                            'text' => 'Omvantara develops scalable mobile applications for Android and iOS delivering seamless performance better engagement and user friendly experiences for business growth.',
                            'tags' => ['Android / iOS Apps', 'Hybrid Apps (Flutter)', 'API Integration', 'App Maintenance'],
                            'num'  => '02',
                            'open' => false,
                        ],
                        [
                            'id'   => 3,
                            'title' => 'SEO',
                            'img'  => 'service-7.jpg',
                            'text' => 'Omvantara provides SEO services improving Google rankings driving organic traffic increasing visibility and generating high quality leads for long term business growth.',
                            'tags' => ['On-Page SEO', 'Technical SEO', 'Keyword Research','Local SEO'],
                            'num'  => '03',
                            'open' => false,
                        ],
                        [
                            'id'   => 4,
                            'title' => 'Graphic Design',
                            'img'  => 'service-8.jpg',
                            'text' => 'Omvantara creates professional graphic designs enhancing brand identity attracting audience attention and improving marketing performance across digital platforms effectively.',
                            'tags' => ['Logo Design', 'Social Media Creatives', 'Banner & Poster Design'],
                            'num'  => '04',
                            'open' => false,
                        ],
                        [
                            'id'   => 5,
                            'title' => 'UI / UX Design',
                            'img'  => 'service-4.jpg',
                            'text' => 'Omvantara designs user friendly UI UX experiences improving usability engagement and conversions across websites and applications for better customer satisfaction.',
                            'tags' => ['Website UI', 'App UI', 'Wireframes & Prototypes'],
                            'num'  => '05',
                            'open' => false,
                        ],
                    ];
                @endphp

                @foreach ($services as $service)
                <div class="accordion-faq_item style-1 effectFade fadeRotateX" role="presentation">
                    <div class="accordion-action {{ !$service['open'] ? 'collapsed' : '' }}"
                        data-bs-target="#faq-{{ $service['id'] }}" role="button"
                        data-bs-toggle="collapse"
                        aria-controls="faq-{{ $service['id'] }}"
                        aria-expanded="{{ $service['open'] ? 'true' : 'false' }}">
                        <div class="accordion-title">
                            {{ $service['title'] }}
                            <i class="icon icon-arrow-top-right"></i>
                        </div>
                    </div>
                    <div id="faq-{{ $service['id'] }}" class="collapse {{ $service['open'] ? 'show' : '' }}" data-bs-parent="#accordion-services">
                        <div class="accordion-content">
                            <div class="image">
                                <img src="{{ asset('assets/images/section/' . $service['img']) }}" alt="">
                            </div>
                            <div class="content">
                                <div class="text-body-3 text-neutral-300 text">{{ $service['text'] }}</div>
                                <div class="list-tags">
                                    @foreach ($service['tags'] as $tag)
                                        <a href="#" class="tags-item fw-semibold">{{ $tag }}</a>
                                    @endforeach
                                </div>
                                <div class="text-body-1 num">{{ $service['num'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /section-services -->

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
        <!-- section-process -->
        <div class="section-process flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="process-heading h-100">
                            <div class="heading-section mb-80">
                                <div class="heading-sub fw-semibold effectFade fadeUp">Process</div>
                                <div class="heading-title text-gradient-3 effectFade fadeRotateX">Our Working Process</div>
                            </div>
                            <div class="group-btn-slider">
                                <div class="nav-prev-swiper"><i class="icon icon-angle-left-solid"></i></div>
                                <div class="nav-next-swiper"><i class="icon icon-angle-right-solid"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="process-slide">
                            <div dir="ltr" class="swiper tf-swiper swiper-box-shadow"
                                data-preview="1.78" data-tablet="1.78" data-mobile-sm="1.5" data-mobile="1.2"
                                data-loop="false" data-center="false"
                                data-space-lg="24" data-space-md="24" data-space="15">
                                <div class="swiper-wrapper">
                                    @php
                                        $processes = [
                                            ['icon' => 'icon-search-solid',       'title' => 'Strategy & Planning',   'text' => 'We analyze business goals define target audience and create a clear strategy for successful web development SEO and digital growth.', 'time' => '3-7 DAYS',  'num' => '01'],
                                            ['icon' => 'icon-bolt-solid',          'title' => 'Design & Development',          'text' => 'We design user friendly interfaces and develop high performance websites applications and digital solutions tailored to your business requirements.',                'time' => '1-2 WEEKS', 'num' => '02'],
                                            ['icon' => 'icon-user-check-solid-1',  'title' => 'Launch & Optimization',   'text' => 'We launch projects optimize SEO performance improve conversions and continuously enhance digital solutions for long term business growth.', 'time' => '1 WEEKS',   'num' => '03'],
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
                                                {{--  <div class="time fw-semibold">{{ $process['time'] }}</div>  --}}
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

        {{--  <!-- section-pricing -->
        <div id="pricing" class="section-pricing flat-spacing pt-0">
            <div class="container">
                <div class="heading-section mb-80">
                    <div class="heading-sub fw-semibold effectFade fadeUp">Pricing Plans</div>
                    <div class="heading-title text-gradient-3 gap-8 d-grid effectFade fadeRotateX">
                        <span>From pilot to enterprise</span>
                        <span>clear scope, transparent costs</span>
                        <div class="d-flex align-items-center gap-24 flex-wrap">
                            <input type="checkbox" id="pricingSwitch" class="tf-switch-check" checked>
                            annually.
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $plans = [
                            [
                                'style'    => '',
                                'icon'     => 'icon-user-friends-solid',
                                'name'     => 'Starter Plan',
                                'for'      => 'For startups',
                                'forClass' => 'text-secondary',
                                'month'    => '1000',
                                'year'     => '9900',
                                'price'    => '$9,900',
                                'desc'     => 'Prove value in two weeks with a clickable UX, tech spike, and a clear go/no-go roadmap.',
                                'features' => ['Discovery workshop', 'Opportunity brief', 'Clickable UX', '1 data source & 1 integration'],
                                'delay'    => '',
                            ],
                            [
                                'style'    => 'style-black',
                                'icon'     => 'icon-building',
                                'name'     => 'Enterprise Plan',
                                'for'      => 'For organisations',
                                'forClass' => 'text-neutral-400',
                                'month'    => '1700',
                                'year'     => '19900',
                                'price'    => '$19,900',
                                'desc'     => 'Compliance-ready delivery for complex orgs—multi-env releases, canaries, and change management.',
                                'features' => ['Everything in Starter', 'CI/CD, tracing, alerts, guardrails', 'Full eval dashboard', '3 data source & 3 integration'],
                                'delay'    => '0.1',
                            ],
                        ];
                    @endphp
                    @foreach ($plans as $plan)
                    <div class="col-lg-6 {{ $loop->first ? 'lg-mb-24' : '' }}">
                        <div class="pricing-item h-100 {{ $plan['style'] }} effectFade fadeRotateX" @if($plan['delay']) data-delay="{{ $plan['delay'] }}" @endif>
                            <div class="top d-flex gap-12 align-items-center">
                                <div class="d-flex gap-8 align-items-center">
                                    <i class="icon {{ $plan['icon'] }} fs-24"></i>
                                    <div class="fw-semibold text">{{ $plan['name'] }}</div>
                                </div>
                                <div class="line"></div>
                                <div class="fw-semibold {{ $plan['forClass'] }}">{{ $plan['for'] }}</div>
                            </div>
                            <div class="heading">
                                <div class="d-flex gap-14 align-items-end">
                                    <div class="price-number fw-bold" data-month="{{ $plan['month'] }}" data-year="{{ $plan['year'] }}">{{ $plan['price'] }}</div>
                                    <h6 class="price-per">/ year</h6>
                                </div>
                                <a href="{{ url('/contact') }}" class="tf-btn">Get Started</a>
                            </div>
                            <div class="line"></div>
                            <div class="content">
                                <div>
                                    <div class="title fw-semibold mb-4">What is included</div>
                                    <div class="text fw-semibold">{{ $plan['desc'] }}</div>
                                </div>
                                <ul class="list-text type-check">
                                    @foreach ($plan['features'] as $feature)
                                    <li><i class="icon icon-check-solid"></i> {{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /section-pricing -->  --}}
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
                                ['id' => 1, 'question' => "What services does Omvantara provide?", 'answer' => "Omvantara offers web development app development SEO services UI UX design and graphic design helping businesses improve online presence generate leads and growth.", 'open' => true],
                                ['id' => 2, 'question' => 'How long does Omvantara take to complete projects?',                    'answer' => "Omvantara completes most web development and app development projects within 2 to 6 weeks depending on requirements features and customization needs.", 'open' => false],
                                ['id' => 3, 'question' => 'Does Omvantara provide SEO with website development?',               'answer' => "Omvantara includes SEO best practices with websites and offers dedicated SEO services to improve rankings traffic and lead generation effectively.", 'open' => false],
                                ['id' => 4, 'question' => 'Can Omvantara develop custom websites and applications?',     'answer' => "Yes Omvantara builds custom websites and applications using modern technologies ensuring scalability performance security and business specific functionality requirements.", 'open' => false],
                                ['id' => 4, 'question' => 'Does Omvantara provide ongoing support and maintenance?',     'answer' => "Omvantara offers ongoing maintenance updates and support ensuring websites applications and SEO performance remain optimized and up to date.", 'open' => false],
                                ['id' => 4, 'question' => 'Is Omvantara suitable for startups and small businesses?',     'answer' => "Omvantara works with startups small businesses and enterprises providing scalable digital solutions tailored to different budgets and business goals.", 'open' => false],
                            ];
                            $faqAnswer = "A clear problem statement, success metrics, access to sample data, and a stakeholder who can make decisions. We'll run a kickoff workshop to align scope.";
                        @endphp
                        @foreach ($faqs as $index => $faq)
                        <div class="accordion-asked-item effectFade fadeRotateX" @if($index > 0) data-delay="{{ $index * 0.1 }}" @endif>
                            <div class="accordion-asked-title" id="asked{{ $faq['id'] }}">
                                <button class="accordion-button text-body-1 fw-semibold {{ !$faq['open'] ? 'collapsed' : '' }}"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq['id'] }}"
                                    aria-expanded="{{ $faq['open'] ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $faq['id'] }}">
                                    {{ $faq['question'] }}
                                    <span class="right-icon"></span>
                                </button>
                            </div>
                            <div id="collapse{{ $faq['id'] }}" role="region"
                                class="accordion-collapse collapse {{ $faq['open'] ? 'show' : '' }}"
                                aria-labelledby="asked{{ $faq['id'] }}" data-bs-parent="#accordion-asked">
                                <div class="accordion-body">{{ $faqAnswer }}</div>
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

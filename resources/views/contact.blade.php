@extends('layouts.app')

@section('content')

    <!-- Hero Banner -->
    <div class="section-hero v1">
        <div class="hero-image"></div>
        <div class="container">
            <div class="content-wrap text-center">
                <div class="title text-display-2 effectFade fadeRotateX">
                    <span class="title1 fw-semibold text-gradient-1">Smart Web Solutions </span>
                    <br>
                    <div class="title2 d-flex gap-20 justify-content-center flex-wrap">
                        <span class="fw-semibold text-gradient-1">for Businesses</span>
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
                    Omvantara builds fast scalable websites for Indian businesses improving visibility engaging <br> customers and driving consistent online growth conversions effectively.
                </p>
            </div>
        </div>
    </div>
    <!-- /Hero Banner -->

    <!-- section-contact -->
    <div id="contact" class="flat-spacing">
        <div class="section-contact p-0">
            <div class="container">

                {{-- Contact Info Cards --}}
                <div class="row mb-60">
                    @php
                        $contactInfo = [
                            ['icon' => 'icon-envelope-solid', 'title' => 'E-mail address', 'value' => 'info@omvantara.com', 'href' => 'mailto:info@omvantara.com', 'delay' => ''],
                            ['icon' => 'icon-headset-solid',  'title' => 'Phone number',   'value' => '+91 7405650340',      'href' => 'tel:+917405650340',              'delay' => '0.1'],
                            ['icon' => 'icon-map-marker-solid','title' => 'Our Location',  'value' => 'Vadodara, Gujarat, India','href' => '',                             'delay' => '0.2'],
                        ];
                    @endphp
                    @foreach ($contactInfo as $info)
                    <div class="col-md-4 {{ !$loop->last ? 'md-mb-24' : '' }}">
                        <div class="box-contact-item text-center effectFade fadeUp" @if($info['delay']) data-delay="{{ $info['delay'] }}" @endif>
                            <i class="icon {{ $info['icon'] }}"></i>
                            <h6 class="title fw-semibold">{{ $info['title'] }}</h6>
                            @if($info['href'])
                                <a class="text" href="{{ $info['href'] }}">{{ $info['value'] }}</a>
                            @else
                                <p class="text">{{ $info['value'] }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Contact Form & Info --}}
                <div class="row">
                    <div class="col-lg-6 lg-mb-24">
                        <div class="col-left p-0">
                            <div class="mb-24">
                                <div class="heading-section mb-48">
                                    <div class="heading-sub fw-semibold effectFade fadeUp">Contact</div>
                                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">
                                        Let's Build <br> Intelligent Things
                                    </div>
                                </div>
                                <p class="text effectFade fadeUp">
                                    combining creativity, technology, and strategy to craft solutions that think, adapt, and inspire. Connect with us to turn visionary ideas into meaningful, data-driven realities.
                                </p>
                            </div>
                            <div class="tf-social-1 gap-24 effectFade fadeRotateX">
                                <a href="https://x.com/" target="_blank" class="text-body-1 fw-semibold">
                                    Twitter / X
                                    <div class="social-item"><i class="icon icon-twitter-x"></i></div>
                                </a>
                                <a href="https://www.facebook.com/" target="_blank" class="text-body-1 fw-semibold">
                                    Facebook
                                    <div class="social-item"><i class="icon icon-facebook-f"></i></div>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-body-1 fw-semibold">
                                    Instagram
                                    <div class="social-item"><i class="icon icon-instagram"></i></div>
                                </a>
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

    <!-- Google Map -->
    <div class="wg-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.6968912671647!2d73.17588497672426!3d22.31015630875683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8b0d1d96b7b%3A0x58a04bbe95a81681!2sAlkapuri%2C%20Vadodara%2C%20Gujarat%20390007!5e0!3m2!1sen!2sin!4v1775078667106!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        {{--  <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317859.6089702069!2d-0.075949!3d51.508112!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760349331f38dd%3A0xa8bf49dde1d56467!2sTower%20of%20London!5e0!3m2!1sen!2sus!4v1719221598456!5m2!1sen!2sus"
            height="660"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>  --}}
    </div>
    <!-- /Google Map -->

    <!-- section-faqs -->
    <div class="section-faqs flat-spacing">
        <div class="container">
            <div class="heading-section center mb-64">
                <div class="heading-sub fw-semibold effectFade fadeUp">FAQs</div>
                <div class="heading-title text-gradient-3 effectFade fadeRotateX">
                    Frequently Asked <br>Questions
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-asked" id="accordion-asked">
                        @php
                            $faqs = [
                                ['id' => 1, 'question' => "What's the typical timeline from idea to v1?", 'open' => true],
                                ['id' => 2, 'question' => 'What do we need to start?',                    'open' => false],
                                ['id' => 3, 'question' => 'Which models/stack do you use?',               'open' => false],
                                ['id' => 4, 'question' => 'Are model/API costs included in pricing?',     'open' => false],
                            ];
                            $faqAnswer = "A clear problem statement, success metrics, access to sample data, and a stakeholder who can make decisions. We'll run a kickoff workshop to align scope.";
                        @endphp
                        @foreach ($faqs as $index => $faq)
                        <div class="accordion-asked-item effectFade fadeRotateX" @if($index > 0) data-delay="{{ $index * 0.1 }}" @endif>
                            <div class="accordion-asked-title" id="asked{{ $faq['id'] }}">
                                <button class="accordion-button text-body-1 fw-semibold {{ !$faq['open'] ? 'collapsed' : '' }}"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq['id'] }}"
                                    aria-expanded="{{ $faq['open'] ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $faq['id'] }}">
                                    {{ $faq['question'] }}
                                    <span class="right-icon"></span>
                                </button>
                            </div>
                            <div id="collapse{{ $faq['id'] }}" role="region"
                                class="accordion-collapse collapse {{ $faq['open'] ? 'show' : '' }}"
                                aria-labelledby="asked{{ $faq['id'] }}"
                                data-bs-parent="#accordion-asked">
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

@endsection

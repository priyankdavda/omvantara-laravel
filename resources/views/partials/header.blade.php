<!-- Header -->
<header class="tf-header header2">
    <div class="header-inner">
        <a href="{{ url('/') }}" class="logo-site">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
        </a>
        <div class="box-navigation">
            <ul class="nav-menu-main">
                <li class="menu-item has-child">
                    <a href="#" class="item-link link1 active">Home</a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{ url('/') }}" class="item-link link1 active">Home Gradient</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ url('/home-v2') }}" class="item-link link1">Home Animated</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/about') }}" class="item-link link1">About</a>
                </li>
                <li class="menu-item has-child">
                    <a href="#" class="item-link link1">Services</a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{ url('/service') }}" class="item-link link1">Services</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ url('/service-single') }}" class="item-link link1">Services single</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item has-child">
                    <a href="#" class="item-link link1">Works</a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{ url('/work') }}" class="item-link link1">Works</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ url('/work-single') }}" class="item-link link1">Works single</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item has-child">
                    <a href="#" class="item-link link1">Blog</a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{ url('/blog-standard') }}" class="item-link link1">Blog standard</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ url('/blog-two-columns') }}" class="item-link link1">Blog grid 2</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ url('/blog-three-columns') }}" class="item-link link1">Blog grid 3</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{ url('/blog-single') }}" class="item-link link1">Blog single</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/contact') }}" class="item-link link1">Contact</a>
                </li>
            </ul>
        </div>
        <a href="{{ url('/contact') }}" class="tf-btn d-lg-flex d-none">
            Start a Project
        </a>
        <a href="#" class="tf-btn open-mb-menu mobile-menu d-lg-none d-flex">
            <i class="icon icon-grip-lines-solid"></i>
        </a>
    </div>
</header>
<!-- /Header -->

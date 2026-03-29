<!-- Mobile Menu -->
<div class="offcanvas-menu">
    <div class="offcanvas-content">
        <div class="container h-100">
            <div class="offcanvas-content_wrapin">
                <div class="canvas_head">
                    <a href="{{ url('/') }}" class="logo-site">
                        <i class="icon icon-davies-logo"></i>
                    </a>
                    <div class="btn-mobile-menu close-mb-menu text-caption link">
                        <i class="icon icon-close"></i>
                        CLOSE
                    </div>
                </div>
                <div class="canvas_center">
                    <ul class="nav-ul-mb" id="mobile-menu">
                        <li>
                            <div class="item">
                                <div class="has-sub-menu">
                                    <a href="#dropdown-menu-index" class="mb-menu-link text-display-1 collapsed" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="dropdown-menu-index">
                                        <span class="text">Home</span>
                                    </a>
                                    <div id="dropdown-menu-index" class="collapse" data-bs-parent="#mobile-menu">
                                        <ul class="sub-nav-menu">
                                            <li><a href="{{ url('/') }}" class="sub-nav-link text-white">Home Gradient</a></li>
                                            <li><a href="{{ url('/home-v2') }}" class="sub-nav-link text-white">Home Animated</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="{{ url('/about') }}" class="mb-menu-link text-display-1">
                                    <span class="text">About</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="has-sub-menu">
                                    <a href="#dropdown-menu-1" class="mb-menu-link text-display-1 collapsed" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="dropdown-menu-1">
                                        <span class="text">Works</span>
                                    </a>
                                    <div id="dropdown-menu-1" class="collapse" data-bs-parent="#mobile-menu">
                                        <ul class="sub-nav-menu">
                                            <li><a href="{{ url('/work') }}" class="sub-nav-link text-white">Works</a></li>
                                            <li><a href="{{ url('/work-single') }}" class="sub-nav-link text-white">Works Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="has-sub-menu">
                                    <a href="#dropdown-menu-2" class="mb-menu-link text-display-1 collapsed" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="dropdown-menu-2">
                                        <span class="text">Services</span>
                                    </a>
                                    <div id="dropdown-menu-2" class="collapse" data-bs-parent="#mobile-menu">
                                        <ul class="sub-nav-menu">
                                            <li><a href="{{ url('/service') }}" class="sub-nav-link text-white">Services</a></li>
                                            <li><a href="{{ url('/service-single') }}" class="sub-nav-link text-white">Services Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="has-sub-menu">
                                    <a href="#dropdown-menu-3" class="mb-menu-link text-display-1 collapsed" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="dropdown-menu-3">
                                        <span class="text">Blog</span>
                                    </a>
                                    <div id="dropdown-menu-3" class="collapse" data-bs-parent="#mobile-menu">
                                        <ul class="sub-nav-menu">
                                            <li><a href="{{ url('/blog-standard') }}" class="sub-nav-link text-white">Blog Standard</a></li>
                                            <li><a href="{{ url('/blog-two-columns') }}" class="sub-nav-link text-white">Blog Grid 2</a></li>
                                            <li><a href="{{ url('/blog-three-columns') }}" class="sub-nav-link text-white">Blog Grid 3</a></li>
                                            <li><a href="{{ url('/blog-single') }}" class="sub-nav-link text-white">Blog Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="{{ url('/contact') }}" class="mb-menu-link text-display-1">
                                    <span class="text">Contact</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="canvas_foot">
                    <div class="left">
                        <a href="mailto:aigocy@gmail.com" class="text-caption text-neutral-200">aigocy@gmail.com</a>
                        <p class="text-caption text-neutral-200">
                            CUP <span class="clock"></span>
                        </p>
                    </div>
                    <div class="right">
                        <a href="#" class="tf-link-icon text-caption text-neutral-200">
                            <i class="icon icon-arrow-top-right"></i>
                            TWITTER (X)
                        </a>
                        <a href="#" class="tf-link-icon text-caption text-neutral-200">
                            <i class="icon icon-arrow-top-right"></i>
                            DRIBBBLE
                        </a>
                        <a href="#" class="tf-link-icon text-caption text-neutral-200">
                            <i class="icon icon-arrow-top-right"></i>
                            LINKEDIN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Mobile Menu -->

<!-- Left Bar -->
<div class="tf-left-bar">
    <a class="btn-setting-color" data-bs-toggle="offcanvas" href="#settingColorMenu">
        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.0015 7.50004C11.1115 7.50004 10.2415 7.76396 9.50144 8.25843C8.76142 8.7529 8.18464 9.4557 7.84405 10.278C7.50346 11.1002 7.41434 12.005 7.58797 12.8779C7.76161 13.7509 8.19019 14.5527 8.81953 15.182C9.44886 15.8114 10.2507 16.2399 11.1236 16.4136C11.9965 16.5872 12.9013 16.4981 13.7236 16.1575C14.5458 15.8169 15.2487 15.2401 15.7431 14.5001C16.2376 13.7601 16.5015 12.8901 16.5015 12C16.5003 10.8069 16.0258 9.66308 15.1821 8.81943C14.3385 7.97579 13.1946 7.50128 12.0015 7.50004ZM12.0015 15C11.4082 15 10.8281 14.8241 10.3348 14.4945C9.84145 14.1648 9.45693 13.6963 9.22987 13.1481C9.00281 12.5999 8.9434 11.9967 9.05915 11.4148C9.17491 10.8328 9.46063 10.2983 9.88019 9.87872C10.2997 9.45916 10.8343 9.17344 11.4162 9.05769C11.9982 8.94193 12.6014 9.00134 13.1496 9.2284C13.6977 9.45547 14.1663 9.83998 14.4959 10.3333C14.8256 10.8267 15.0015 11.4067 15.0015 12C15.0015 12.7957 14.6854 13.5588 14.1228 14.1214C13.5602 14.684 12.7972 15 12.0015 15Z" fill="#fff"/>
        </svg>
    </a>
</div>
<!-- /Left Bar -->

<!-- Setting Color -->
<div class="offcanvas offcanvas-end offcanvas-color" id="settingColorMenu">
    <div class="offcanvas-content">
        <span class="icon-close-popup" data-bs-dismiss="offcanvas">
            <i class="icon-close"></i>
        </span>
        <div class="canvas-header">
            <h3 class="fw-semibold text-white">Configuration</h3>
        </div>
        <div class="canvas-body">
            <h6 class="title fw-semibold text-white">COLORS</h6>
            <div class="settings-color list-choose mb-24">
                <button type="button" class="choose-item link-no-action active"></button>
                <button type="button" class="choose-item link-no-action"></button>
                <button type="button" class="choose-item link-no-action"></button>
                <button type="button" class="choose-item link-no-action"></button>
                <button type="button" class="choose-item link-no-action"></button>
                <button type="button" class="choose-item link-no-action"></button>
                <button type="button" class="choose-item link-no-action"></button>
                <button type="button" class="choose-item link-no-action"></button>
            </div>
            <h6 class="title fw-semibold text-white">CUSTOM CURSOR</h6>
            <div>
                <input type="checkbox" id="cursor" class="tf-switch-check style-small">
            </div>
        </div>
    </div>
</div>
<!-- /Setting Color -->

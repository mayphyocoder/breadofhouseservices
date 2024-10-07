<header id="masthead" class="header cmt-header-style-01">
    <div class="top_bar  cmt-textcolor-white clearfix" style="background-color:#f59b39;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <a href="mailto:info@breadofhouseservices.com">
                                info@breadofhouseservices.com
                            </a>
                        </div>

                        <div class="cmt-right-span pl-20">
                            <div class="layer-content">
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <a href="tel:09 44 33 66 713">
                                        09 44 33 66 713
                                    </a>
                                    <a href="tel:09 750 115 074">
                                        09 750 115 074
                                    </a>
                                    <a href="tel:09 510 8194">
                                        09 510 8194
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner cmt-stickable-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-navigation d-flex flex-row align-items-center">

                            <div class="site-branding">
                                <a class="home-link" href="{{ route('home') }}" title="BOHS" rel="home">
                                    <img style="width: 100%;" class="img-center"
                                        src="{{ asset('data/company/logo.jpg') }}" alt="logo-img">
                                </a>
                            </div>

                            <div class="d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->

                                <nav class="main-menu menu-mobile" id="menu" style="margin-left: 100px;">
                                    <ul class="menu">
                                        <li class="mega-menu-item active nav-item">
                                            <a href="{{ route('home') }}"
                                                style="font-size:14px;color:#f59b39; font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Home
                                            </a>
                                        </li>

                                        <li class="mega-menu-item active nav-item">
                                            <a href="{{ route('about.index') }}"
                                                style="font-size:14px;color:#f59b39; font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                About Us
                                            </a>
                                        </li>

                                        <li class="mega-menu-item" hidden>
                                            <a href="#" class="mega-menu-link"
                                                style="font-size:14px;color:#f59b39;font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                About Us
                                            </a>
                                            <ul class="mega-submenu">
                                                <li>
                                                    <a href="{{ route('about.index') }}" style="font-size:15px;">
                                                        Our Company
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('ceo_message') }}" style="font-size:15px;">
                                                        MD's Message
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('team') }}" style="font-size:15px;">
                                                        Our Expert Teams
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="mega-menu-item active nav-item">
                                            <a href="{{ route('about.index') }}"
                                                style="font-size:14px;color:#f59b39; font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Job Vacancies
                                            </a>
                                        </li>

                                        <li class="mega-menu-item" hidden>
                                            <a href="#" class="mega-menu-link"
                                                style="font-size:14px;color:#f59b39;font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Our Services
                                            </a>
                                            <ul class="mega-submenu">
                                                @foreach ($countries as $country)
                                                    <li>
                                                        <a href="{{ route('job.show', $country->id) }}">
                                                            {{ $country->country ?? '' }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item active nav-item">
                                            <a href="{{ route('cv.index') }}"
                                                style="font-size:14px;color:#f59b39; font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Submit CV
                                            </a>
                                        </li>


                                        <li class="mega-menu-item active nav-item">
                                            <a href="{{ route('employer.index') }}"
                                                style="font-size:14px;color:#f59b39; font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Employers Form
                                            </a>
                                        </li>

                                        <li class="mega-menu-item" hidden>
                                            <a href="#" class="mega-menu-link"
                                                style="font-size:14px;color:#f59b39;font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                JOB SEEKERS
                                            </a>
                                            <ul class="mega-submenu">
                                                <li>
                                                    <a href="{{ route('cv.index') }}">
                                                        Job Apply
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('employer.index') }}">
                                                        Employers Form
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item active nav-item">
                                            <a href="{{ route('activities.index') }}"
                                                style="font-size:14px;color:#f59b39; font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Activities Gallery
                                            </a>
                                        </li>

                                        <li class="mega-menu-item" hidden>
                                            <a href="#" class="mega-menu-link"
                                                style="font-size:14px;color:#f59b39;font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Activities Gallery
                                            </a>
                                            <ul class="mega-submenu">
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <a href="{{ route('activities.show', $category->id) }}">
                                                            {{ $category->title ?? '' }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item active">
                                            <a href="{{ route('contact.index') }}"
                                                style="font-size:14px;color:#f59b39;font-family:livvic,sans-serif;font-weight:bold;font-size: 15px;">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

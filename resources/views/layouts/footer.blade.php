<footer class="footer cmt-bgcolor-darkgrey widget-footer clearfix">
    <div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text mr-25 clearfix">
                        <h3 class="widget-title">About Us</h3>
                        <div class="textwidget widget-text">
                            <p style="text-align: justify">
                                ”Kaung Sithi”, a leading Manpower Recruiting Agency based in Myanmar, licensed and
                                authorized by the Ministry of Labor, Employment and Social Security of Myanmar. We are
                                the outstanding supplier of quality manpower to different parts of the world.
                            </p>
                        </div>
                        <div class="cmt-horizontal_sep mt-25 mb-30">
                        </div>
                        <div class="social-icons circle">
                            <ul class="list-inline cmt-textcolor-skincolor">
                                <li class="social-facebook"><a class="tooltip-top" target="_blank" href="https://www.facebook.com/profile.php?id=100076539696572&mibextid=LQQJ4d"
                                        data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#"
                                        data-tooltip="twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                <li class="social-instagram"><a class="tooltip-top" target="_blank" href="#"
                                        data-tooltip="Google"><i class="ti ti-google"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#"
                                        data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Quick Link</h3>
                        <ul id="menu-footer-quick-links">
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
                        
                        
                        <ul class="footer-list py-5">
                            <h6 class="widget-title">
                                Site visitor
                            </h6>
                            <p style="color: white">
                                Total Visitors: {{ number_format($totalCount) }} <br>
                                Today: {{ number_format($todayCount) }} <br>
                                This Week: {{ number_format($ThisWeek) }} <br>
                                This Month: {{ number_format($currentMonthCount) }}<br>
                                This Year: {{ number_format($currentYearCount) }} <br>
                            </p>
                        </ul>
                        
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Our Services</h3>
                        <ul id="menu-footer-quick-links">
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget contact_map clearfix">
                        <h3 class="widget-title">Useful Links</h3>
                        <ul class="widget_contact_wrapper">

                            <li>
                                <i class="cmt-textcolor-skincolor fa fa-map-marker"></i>
                                Yangon, Myanmar
                            </li>

                            <li>
                                <i class="cmt-textcolor-skincolor fa fa-envelope"></i>
                                <a href="mailto:info@kaungsithi.com ">
                                    info@kaungsithi.com
                                </a>
                            </li>

                            <li>
                                <i class="cmt-textcolor-skincolor fa fa-phone"></i>
                                <a href="tel:+959 674676499">
                                        +959 674676499,
                                    </a>
                                    <br>
                                    <a href="tel:09792983899">
                                        +959 792 983 899
                                    </a>
                            </li>
                        </ul>
                        <br>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                            nonce="PosYNXjc"></script>

                        <div class="fb-page"
                            data-href="https://www.facebook.com/profile.php?id=100076539696572&mibextid=LQQJ4d"
                            data-tabs="timeline" data-width="" data-height="200" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/profile.php?id=100076539696572&mibextid=LQQJ4d"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/profile.php?id=100076539696572&mibextid=LQQJ4d">Facebook</a>
                            </blockquote>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="second-footer">
        <div class="container">
            <div class="row no-gutters">

                <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <aside class="widget widget-text">
                        <div class="featured-icon-box icon-align-before-content">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="mailto:info@kaungsithi.com">info@kaungsithi.com</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Drop Us a Line</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <aside class="widget widget-text cmt-bgcolor-skincolor">
                        <div class="featured-icon-box icon-align-before-content">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>+959 674676499 </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Call Us Now!</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <aside class="widget widget-text">
                        <div class="featured-icon-box icon-align-before-content">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>
                                        Yangon, Myanmar
                                    </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Get Direction</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom-footer-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <span>Copyright © 2024&nbsp;
                            <a href="#">Bread Of House Services</a>.
                            All rights reserved.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--footer end-->

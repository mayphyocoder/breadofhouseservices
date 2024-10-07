@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="cmt-row pt-0 mt-60 res-991-mt-0 cmt-bgcolor-grey clearfix py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mt_60 res-991-mt-0">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div
                                class="featured-icon-box icon-align-before-content cmt-bgcolor-darkgrey icon-ver_align-top style6">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="ti ti-email"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Email Address</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            <a href="mailto:info@breadofhouseservices.com">
                                                info@breadofhouseservices.com
                                            </a>
                                            <br><br><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div
                                class="featured-icon-box icon-align-before-content cmt-bgcolor-skincolor icon-ver_align-top style6">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="ti ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Our Address</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            No.(216), Ground Floor, 35th St, (Upper Block) Kyauktada, Yangon , Myanmar
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div
                                class="featured-icon-box icon-align-before-content cmt-bgcolor-darkgrey icon-ver_align-top style6">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>
                                            Phone
                                        </h5>
                                    </div>
                                    <div class="featured-desc">
                                        <a href="tel:+09 - 44 33 66 713">
                                            09 - 44 33 66 713 </a>
                                        <br>
                                        <a href="tel:09 - 750 115 074">
                                            09 - 750 115 074 </a>
                                        <br>
                                        <a href="tel:09 - 510 8194">
                                            09 - 510 8194
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="spacing-7 mt-0">
                        <div class="row">

                            <div class="col-lg-12">
                                <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                                    autocomplete="off" id="create-form">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form_item wow fadeInUp2 mb-3" data-wow-delay=".1s">
                                                <span class="input_title" style="color: black;">Full Name</span>
                                                <div class="position-relative">
                                                    <input id="input_user" type="text" name="name"
                                                        placeholder="Write Your Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_item wow fadeInUp2 mb-3" data-wow-delay=".2s">
                                                <span class="input_title" style="color: black;">Email Address</span>
                                                <div class="position-relative">
                                                    <input id="input_email" type="email" name="email"
                                                        placeholder="Write Your Email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_item wow fadeInUp2 mb-3" data-wow-delay=".2s">
                                                <span class="input_title" style="color: black;">Subject</span>
                                                <div class="position-relative">
                                                    <input id="input_email" type="text" name="subject"
                                                        placeholder="Write Your Subject">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form_item wow fadeInUp2 mb-3" data-wow-delay=".3s">
                                                <span class="input_title" style="color: black;">Phone Number</span>
                                                <div class="position-relative">
                                                    <input id="input_phone" type="tel" name="phone"
                                                        placeholder="Write Your Phone Number">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form_item wow fadeInUp2 mb-3" data-wow-delay=".4s">
                                                <span class="input_title" style="color: black;">Leave A Message</span>
                                                <textarea name="message" placeholder="Write Your Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button
                                                class="submit cmt-btn cmt-btn-size-lg cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark w-100"
                                                type="submit">
                                                Submit!
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection

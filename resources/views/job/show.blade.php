@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <div class="cmt-row sidebar cmt-sidebar-left cmt-bgcolor-white clearfix">
        <div class="container">
            <div class="row">

                <div
                    class="col-lg-4 ttm-col-bgcolor-yes cmt-bg cmt-left-span cmt-bgcolor-grey mt_80 pt-60 mb_80 pb-60 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>

                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </aside>

                    <aside class="widget widget-contact">
                        <center>
                            <img class="img-fluid" src="{{ asset('data/contact.jpeg') }}" alt="single_12"
                                style="padding: 10px;" />
                        </center>
                        <div class="cmt-col-bgcolor-yes cmt-bgcolor-skincolor cmt-bg pt-20 pl-20 pr-20 pr-20 pb-20">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <p class="mb-10" style="text-align: justify">
                                    Let’s talk
                                </p>
                                <h4><i class="flaticon-call mr-3"></i>+959 792 983 899</h4>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-8 content-area">

                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">
                                Available Job in
                                <strong>
                                    {{ $c->country ?? '' }}
                                </strong>
                            </h2>
                        </div>
                    </div>

                    <div class="blog-nav">
                        @foreach ($jobs as $job)
                            <div class="blog-nav_item">
                                <div
                                    class="d-flex align-items-center featured-imagebox featured-imagebox-post style2 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail">
                                        <img src="{{ $job->photo }}" alt="image_not_found"
                                            style="width: 100%; height: 120px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-top cmt-post-link">
                                            <div class="post-meta">
                                                <span class="cmt-meta-line tags-links">
                                                    <i class="fa fa-comments"></i>
                                                    Available Job in {{ $job->country->country ?? '' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5>
                                                <a href="">
                                                    {{ $job->title ?? '' }}
                                                </a>
                                            </h5>
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

@endsection

@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="cmt-row blog_row-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">
                                Activities
                                <strong>
                                    Gallery
                                </strong>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-12">
                            <div class="featured-imagebox featured-imagebox-post style4">
                                <div class="cmt-post-thumbnail featured-thumbnail">
                                    <img src="{{ $image }}" alt="image_not_found"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 10px;">
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-header">
                                        <div class="post-title featured-title">
                                            <h5>
                                                {{ $activity->title ?? '' }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>
                                            {!! $activity->description ?? '' !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>

        </div>
    </section>

@endsection

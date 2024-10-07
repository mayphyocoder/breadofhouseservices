@extends('layouts.main')
@section('content')
    <section class="cmt-row grid-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="small_title text-center">Our Team Member</h4>
                </div>

                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-team bor_rad_5">
                            <div class="cmt-team-box-view-overlay">
                                <div class="featured-iconbox cmt-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter">
                                                <a href="#">
                                                    <i class="ti ti-twitter-alt"></i>
                                                </a>
                                            </li>
                                            <li class="social-facebook">
                                                <a href="#">
                                                    <i class="ti ti-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social-instagram">
                                                <a href="#">
                                                    <i class="ti ti-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-thumbnail">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="width: 100%; height: 280px; background-size: top; object-fit: cover;">
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5>
                                        {{ $team->name ?? '' }}
                                    </h5>
                                </div>
                                <div class="team-position">
                                    {{ $team->position ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@extends('layouts.main')
@section('content')
    <section class="cmt-row cmt-team-single-contents clearfix">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-5">
                    <div class="left-content pr-20 res-991-pr-0 res-991-pb-40">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/team-member/team-img01.jpg') }}"
                            alt="team-img" />
                        <div class="content-info pt-25 pl-25 pr-25 pb-25 box-shadow">
                            <div class="content-header mb-20">
                                <h4 class="mb-0">
                                    Mr. _______________
                                </h4>
                                <i>
                                    Managing Director
                                </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="right-content">
                        <h4>
                            MD's Message
                        </h4>
                        <p style="color: black; font-size: 18px; text-align: justify;">
                            As the Managing Director of Kaung Sithi Co., Ltd., I am honored to welcome you to our dynamic
                            and purpose-driven organization. At Kaung Sithi, we believe in the transformative power of
                            international employment – the ability to connect skilled individuals with promising career
                            opportunities worldwide.
                            <br><br>
                            Our journey is guided by a vision to create a world where individuals not only find employment
                            opportunities abroad but also embark on a journey of personal and professional growth. We
                            understand the significance of meaningful work, and our commitment is to facilitate a seamless
                            and rewarding experience for both our clients and the talented professionals we represent.
                            <br><br>
                            In today's interconnected world, the demand for skilled and dedicated professionals transcends
                            borders. Kaung Sithi Co., Ltd. stands as a bridge, connecting aspirations with opportunities.
                            Our mission is to be your trusted partner on this journey, providing comprehensive and ethical
                            services that empower you to build a successful career beyond geographical boundaries.

                            <br><br>
                            Best Regards!
                            <br>
                            Mr. __________
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

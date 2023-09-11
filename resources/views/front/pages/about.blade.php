@extends('front.app')
@section('content')
    <div class="page about">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">About Us</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>About Us</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        {{--about us section start--}}
        <section class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="left h-100 d-flex align-items-center">
                            <div>
                                <div class="title">About Our Destry Store</div>
                                <div class="text-1">We believe that every project existing in digital world is a result
                                    of
                                    an idea and every idea has a cause.
                                </div>
                                <div class="text-2">
                                    For this reason, our each design serves an idea. Our strength in design is reflected
                                    by
                                    our name, our care for details. Our specialist won't be afraid to go extra miles
                                    just to
                                    approach near perfection. We don't require everything to be perfect, but we need
                                    them to
                                    be perfectly cared for. That's a reason why we are willing to give contributions at
                                    best. Not a single detail is missed out under Billey's professional eyes.The amount
                                    of
                                    dedication and effort equals to the level of passion and by.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img">
                            <img src="{{asset('images/about-banner.webp')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--about us section end--}}

        {{--feature section start--}}
        <section class="feature" style="background-image: url('{{asset('images/about_feature_bg.webp')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('images/feature-icon-2.webp')}}" alt="">
                            </div>
                            <div class="text">
                                <div class="title">FREE SHIPPING</div>
                                <div class="desc">Erat metus sodales eget dolor consectetuer, porta ut purus at et
                                    alias, nulla ornare velit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('images/feature-icon-3.webp')}}" alt="">
                            </div>
                            <div class="text">
                                <div class="title">SUPPORT 24/7</div>
                                <div class="desc">Erat metus sodales eget dolor consectetuer, porta ut purus at et
                                    alias, nulla ornare velit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('images/feature-icon-4.webp')}}" alt="">
                            </div>
                            <div class="text">
                                <div class="title">MONEY RETURN</div>
                                <div class="desc">Erat metus sodales eget dolor consectetuer, porta ut purus at et
                                    alias, nulla ornare velitB
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('images/feature-icon-1.webp')}}" alt="">
                            </div>
                            <div class="text">
                                <div class="title">ORDER DISCOUNT</div>
                                <div class="desc">Erat metus sodales eget dolor consectetuer, porta ut purus at et
                                    alias, nulla ornare velit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--feature section end--}}

        {{--service section start--}}
        <section class="service">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="item">
                            <div class="title">What Do We Do</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor
                                sit amet conse ctetur.
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <div class="title">Our Mission</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor
                                sit amet conse ctetur.
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <div class="title">History of Us</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor
                                sit amet conse ctetur.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--service section end--}}

        {{--brand section start--}}
        <section class="brand">
            <div class="container">
                <div class="content">
                    <div class="img">
                        <img src="{{asset('images/brand-1.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

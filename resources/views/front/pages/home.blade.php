@extends('front.app')
@section('content')
    <div class="page home">
        {{--hero section start--}}
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <section class="hero" style="background-image: url('{{asset('images/slide-2.webp')}}')">
                        <div class="container">
                            <div class="content" data-aos="fade-up">
                                <div class="title">
                                    Fashion New<br> Collection
                                </div>
                                <div class="desc">Up to 30% off selected Product</div>
                                <button class="btn btn-theme">shop now</button>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide">
                    <section class="hero" style="background-image: url('{{asset('images/slide-3.webp')}}')">
                        <div class="container">
                            <div class="content" data-aos="fade-up">
                                <div class="title">
                                    Trend Fashion<br> Collection
                                </div>
                                <div class="desc">Up to 70% off selected Product</div>
                                <button class="btn btn-theme">shop now</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        {{--hero section end--}}

        {{--feature section start--}}
        <section class="feature" data-aos="fade-up">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
                            <div class="item">
                                <div class="icon">
                                    <img src="{{asset('images/feature-icon-2.webp')}}" alt="">
                                </div>
                                <div class="text">
                                    <div class="title">FREE SHIPPING</div>
                                    <div class="desc">Free shipping on all order</div>
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
                                    <div class="desc">Support 24 hours a day</div>
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
                                    <div class="desc">Back guarantee under 5 days</div>
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
                                    <div class="desc">On every order over $150</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--feature section end--}}

        {{--discount section start--}}
        <section class="discount">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="item" data-aos="fade-right">
                            <a href="" class="img">
                                <img src="{{asset('images/banner-4.webp')}}" alt="">
                            </a>
                            <div class="info">
                                <div class="sub-title">Up to <span>50%</span> off</div>
                                <div class="title">Office Dress</div>
                                <button class="btn btn-theme">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item" data-aos="fade-left">
                            <a href="" class="img">
                                <img src="{{asset('images/banner-5.webp')}}" alt="">
                            </a>
                            <div class="info">
                                <div class="sub-title">Up to <span>40%</span> off</div>
                                <div class="title">All Products</div>
                                <button class="btn btn-theme">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--discount section end--}}

        {{--product tabs section start--}}
        <section class="product-tabs">
            <div class="container">
                <div class="tab-buttons" data-aos="fade-up">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-new-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-new" type="button" role="tab"
                                    aria-controls="pills-new" aria-selected="true">New Arrivals
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-best-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-best" type="button" role="tab"
                                    aria-controls="pills-best" aria-selected="false">Best Sellers
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-sale-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-sale" type="button" role="tab"
                                    aria-controls="pills-sale" aria-selected="false">Sale Items
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane fade show active" id="pills-new" role="tabpanel"
                         aria-labelledby="pills-new-tab" tabindex="0">
                        <div class="best products">
                            <div class="swiper product-tabs-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-best" role="tabpanel"
                         aria-labelledby="pills-best-tab" tabindex="0">
                        <div class="new products">
                            <div class="swiper product-tabs-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-sale" role="tabpanel"
                         aria-labelledby="pills-sale-tab" tabindex="0">
                        <div class="sale products">
                            <div class="swiper product-tabs-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product new">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                        <div class="product sold">
                                            <div class="img">
                                                <a href="" class="d-block">
                                                    <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                                </a>
                                                <div class="actions">
                                                    <a href="" class="action">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-search"></i>
                                                    </a>
                                                    <a href="" class="action">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" class="category">Studio Design</a>
                                            <a href="" class="title">Brother Hoddies in Grey</a>
                                            <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                <span class="star">(4)</span>
                                            </div>
                                            <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
                                            <button class="btn cart-btn">add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--product tabs section end--}}

        {{--offer section start--}}
        <section class="offer" data-aos="fade-up">
            <div class="container">
                <div class="banner">
                    <img src="{{asset('images/big-banner.webp')}}" alt="">
                </div>
            </div>
        </section>
        {{--offer section end--}}

        {{--product list start--}}
        <section class="product-list" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="item">
                            <div class="header">
                                <div class="title">best offer</div>
                            </div>
                            <div class="swiper best-offer-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <div class="header">
                                <div class="title">new products</div>
                            </div>
                            <div class="swiper new-product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item">
                            <div class="header">
                                <div class="title">best seller</div>
                            </div>
                            <div class="swiper best-seller-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="products">
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each">
                                                <div class="img">
                                                    <img class="first-img" src="{{asset('images/5.webp')}}" alt="">
                                                    <img class="second-img" src="{{asset('images/6.webp')}}" alt="">
                                                </div>
                                                <div class="info">
                                                    <a href="" class="title">Make Thing Happen T-Shirt</a>
                                                    <div class="price">$66.50 <span>$70.55</span></div>
                                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--product list end--}}

        {{--feature product section start--}}
        <section class="feature-product" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="product">
                            <a href="" class="img">
                                <img src="{{asset('images/banner-1.webp')}}" alt="">
                            </a>
                            <div class="info">
                                <div class="sub-title">Sun Hat</div>
                                <div class="title">
                                    Get Offer <br> For Summer
                                </div>
                                <button class="btn btn-theme">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="product">
                            <a href="" class="img">
                                <img src="{{asset('images/banner-2.webp')}}" alt="">
                            </a>
                            <div class="info">
                                <div class="sub-title">Ladies Bag</div>
                                <div class="title">
                                    Buy One <br> Get One Free
                                </div>
                                <button class="btn btn-theme">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="product">
                            <a href="" class="img">
                                <img src="{{asset('images/banner-3.webp')}}" alt="">
                            </a>
                            <div class="info">
                                <div class="sub-title">Smart Watch</div>
                                <div class="title">
                                    20% Off <br> Smart Watch
                                </div>
                                <button class="btn btn-theme">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--feature product section end--}}

        {{--daily deals section start--}}
        <section class="daily-deals">
            <div class="container">
                <div class="header" data-aos="fade-up">
                    <div class="header-title">Daily Deals</div>
                    <div class="tab-buttons">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-new-daily-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-new-daily" type="button" role="tab"
                                        aria-controls="pills-new-daily" aria-selected="true">New Arrivals
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-best-daily-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-best-daily" type="button" role="tab"
                                        aria-controls="pills-best-daily" aria-selected="false">Best Sellers
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sale-daily-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-sale-daily" type="button" role="tab"
                                        aria-controls="pills-sale-daily" aria-selected="false">Sale Items
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-new-daily" role="tabpanel"
                         aria-labelledby="pills-new-daily-tab" tabindex="0">
                        <div class="products new">
                            <div class="row">
                                <div class="swiper daily-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-aos="fade-right">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-left">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-best-daily" role="tabpanel"
                         aria-labelledby="pills-best-daily-tab" tabindex="0">
                        <div class="products best">
                            <div class="row">
                                <div class="swiper daily-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-aos="fade-right">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-left">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-sale-daily" role="tabpanel"
                         aria-labelledby="pills-sale-daily-tab" tabindex="0">
                        <div class="products sale">
                            <div class="row">
                                <div class="swiper daily-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-aos="fade-right">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-left">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product">
                                                <div class="thumbnail">
                                                    <a href="">
                                                        <img src="{{asset('images/1.webp')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="alert-title">Hurry up! offer ends in:</div>
                                                    <div class="clock">
                                                        <div class="day">
                                                            <div class="number">108</div>
                                                            <div class="text">Days</div>
                                                        </div>
                                                        <div class="hour">
                                                            <div class="number">05</div>
                                                            <div class="text">Hours</div>
                                                        </div>
                                                        <div class="min">
                                                            <div class="number">34</div>
                                                            <div class="text">Min</div>
                                                        </div>
                                                        <div class="sec">
                                                            <div class="number">04</div>
                                                            <div class="text">Sec</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="category">Studio Design</a>
                                                    <a href="" class="title">Brother Hoddies in Grey</a>
                                                    <div class="rating">
                                                        <span>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="star">(4)</span>
                                                    </div>
                                                    <div class="price"><span class="new">$38.50</span><span class="old">$42.85</span></div>
                                                    <button class="btn cart-btn">add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--daily deals section end--}}
        {{--brand section start--}}
        <section class="brand" data-aos="fade-up">
            <div class="container">
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-1.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-2.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-3.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-4.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-5.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-1.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-2.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-3.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-4.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{{asset('images/brand-5.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--brand section end--}}

        {{--blog section start--}}
        <section class="blog">
            <div class="container">
                <div class="heading-title" data-aos="fade-up">Latest Blog</div>
                <div class="row" data-aos="fade-up">
                    <div class="col-4">
                        <div class="single-blog">
                            <div class="img">
                                <img src="{{asset('images/blog1.webp')}}" alt="">
                            </div>
                            <div class="date">By : <span>Admin</span> 14 Jul 2023</div>
                            <a href="" class="title">Some Winter Collections</a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod
                                tempo
                            </div>
                            <button class="btn btn-theme">read more</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="single-blog">
                            <div class="img">
                                <img src="{{asset('images/blog2.webp')}}" alt="">
                            </div>
                            <div class="date">By : <span>Admin</span> 14 Jul 2023</div>
                            <a href="" class="title">Some Winter Collections</a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod
                                tempo
                            </div>
                            <button class="btn btn-theme">read more</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="single-blog">
                            <div class="img">
                                <img src="{{asset('images/blog3.webp')}}" alt="">
                            </div>
                            <div class="date">By : <span>Admin</span> 14 Jul 2023</div>
                            <a href="" class="title">Some Winter Collections</a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod
                                tempo
                            </div>
                            <button class="btn btn-theme">read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--blog section end--}}
    </div>
    <script>
        const slides = document.querySelectorAll('.daily-deals .swiper-slide');
        setInterval(()=>{
            let date = new Date("2023-12-31 23:59:59").getTime() - new Date().getTime()
            const days = date / (24*60*60*1000)
            const hours = (date % (24*60*60*1000)) / (60*60*1000)
            const minutes = ((date % (24*60*60*1000)) % (60*60*1000)) / (60*1000)
            const second = (((date % (24*60*60*1000)) % (60*60*1000)) % (60*1000)) / 1000
            slides.forEach((elem) => {
                elem.querySelector('.day .number').innerText = Math.floor(days);
                elem.querySelector('.hour .number').innerText = Math.floor(hours);
                elem.querySelector('.min .number').innerText = Math.floor(minutes);
                elem.querySelector('.sec .number').innerText = Math.floor(second);
            })
        }, 1000)
    </script>
@endsection

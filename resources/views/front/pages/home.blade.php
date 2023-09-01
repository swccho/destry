@extends('front.app')
@section('content')
    <div class="page home">
        {{--hero section start--}}
        <section class="hero" style="background-image: url('{{asset('images/slide-2.webp')}}')">
            <div class="container">
               <div class="content">
                   <div class="title">
                       Fashion New<br> Collection
                   </div>
                   <div class="desc">Up to 30% off selected Product</div>
                   <button class="btn btn-theme">shop now</button>
               </div>
            </div>
        </section>
        {{--hero section end--}}

        {{--feature section start--}}
        <section class="feature">
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
                        <div class="item">
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
                        <div class="item">
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
                <div class="tab-buttons">
                    <a href="javascript:void(0)" class="active">New Arrivals</a>
                    <a href="javascript:void(0)">Best Sellers</a>
                    <a href="javascript:void(0)">Sale Items</a>
                </div>
                <div class="tab-content">
                    <div class="new products" id="new-products">
                        <div class="row">
                            <div class="col-3 each">
                                <div class="product new">
                                    <div class="img">
                                        <a href="" class="d-block">
                                            <img src="{{asset('images/1.webp')}}" alt="">
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
                                    <div class="price">$38.50 <span>$42.85</span></div>
                                    <button class="btn cart-btn">add to cart</button>
                                </div>
                            </div>
                            <div class="col-3 each">
                                <div class="product new">
                                    <div class="img">
                                        <a href="" class="d-block">
                                            <img src="{{asset('images/1.webp')}}" alt="">
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
                                    <div class="price">$38.50 <span>$42.85</span></div>
                                    <button class="btn cart-btn">add to cart</button>
                                </div>
                            </div>
                            <div class="col-3 each">
                                <div class="product new">
                                    <div class="img">
                                        <a href="" class="d-block">
                                            <img src="{{asset('images/1.webp')}}" alt="">
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
                                    <div class="price">$38.50 <span>$42.85</span></div>
                                    <button class="btn cart-btn">add to cart</button>
                                </div>
                            </div>
                            <div class="col-3 each">
                                <div class="product sold">
                                    <div class="img">
                                        <a href="" class="d-block">
                                            <img src="{{asset('images/1.webp')}}" alt="">
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
                                    <div class="price">$38.50 <span>$42.85</span></div>
                                    <button class="btn cart-btn">add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--product tabs section end--}}

        {{--offer section start--}}
        <section class="offer">
            <div class="container">
                <div class="banner">
                    <img src="{{asset('images/big-banner.webp')}}" alt="">
                </div>
            </div>
        </section>
        {{--offer section end--}}

        {{--product list start--}}
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="item">
                            <div class="header">
                                <div class="title">best offer</div>
                            </div>
                            <div class="products">
                                <div class="each">
                                    <div class="img">
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                    <div class="col-4">
                        <div class="item">
                            <div class="header">
                                <div class="title">new products</div>
                            </div>
                            <div class="products">
                                <div class="each">
                                    <div class="img">
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                    <div class="col-4">
                        <div class="item">
                            <div class="header">
                                <div class="title">best seller</div>
                            </div>
                            <div class="products">
                                <div class="each">
                                    <div class="img">
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                                        <img src="{{asset('images/5.webp')}}" alt="">
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
                </div>
            </div>
        </section>
        {{--product list end--}}

        {{--feature product section start--}}
        <section class="feature-product">
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

        {{--brand section start--}}
        <section class="brand">
            <div class="container">
                <div class="logos">
                    <div class="img">
                        <img src="{{asset('images/2.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{--brand section end--}}

        {{--blog section start--}}
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="single-blog">
                            <div class="img">
                                <img src="{{asset('images/blog1.webp')}}" alt="">
                            </div>
                            <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                            <a href="" class="title">Some Winter Collections</a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                            <button class="btn btn-theme">read more</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="single-blog">
                            <div class="img">
                                <img src="{{asset('images/blog2.webp')}}" alt="">
                            </div>
                            <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                            <a href="" class="title">Some Winter Collections</a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                            <button class="btn btn-theme">read more</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="single-blog">
                            <div class="img">
                                <img src="{{asset('images/blog3.webp')}}" alt="">
                            </div>
                            <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                            <a href="" class="title">Some Winter Collections</a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                            <button class="btn btn-theme">read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--blog section end--}}
    </div>
@endsection

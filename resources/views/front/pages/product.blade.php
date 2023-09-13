@extends('front.app')
@section('content')
    <div class="page products">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Product</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Product</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}
        <section class="product-section">
            <div class="container">
                <div class="filter-section">
                    <div class="left">Showing 1–12 of 39 results</div>
                    <div class="right">
                        <div class="filter-by-number filter" onclick="openDropdown(event)">
                            <div class="title">Show 12</div>
                            <ul class="dropdown">
                                <li>
                                    <a href="javascript:void(0)" class="active" onclick="setFilter(event)">Show 24</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Show 12</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Show 15</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Show 30</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sorting-product filter" onclick="openDropdown(event)">
                            <div class="title">Sort by Default</div>
                            <ul class="dropdown">
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)" class="active">Sort by
                                        Default</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Sort by Popularity</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Sort by Rated</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Sort by Latest</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="setFilter(event)">Sort by Price</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid-options">
                            <div class="grid-col item active" onclick="setGrid(event, 'row')">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="grid-row item" onclick="setGrid(event, 'col')">
                                <i class="fa fa-th-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-items">
                    <div class="product-row active">
                        <div class="row">
                            <div class="col-3 each">
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                                <div class="product" data-aos="fade-up">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <div class="actions">
                                            <a href="{{route('front.wishlist')}}" class="action">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="action" onclick="openModal()">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                            <a href="{{route('front.compare')}}" class="action">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                        Design</a>
                                    <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother Hoddies
                                        in Grey</a>
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
                    <div class="product-col">
                        <div class="product" data-aos="fade-up">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-inline-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <a href="" class="action">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="content">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                            Design</a>
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother
                                            Hoddies in Grey</a>
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
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.
                                        </div>
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <div class="btn-group">
                                            <button class="btn wishlist-btn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn cart-btn">add to cart</button>
                                            <button class="btn compare-btn">
                                                <i class="fa fa-random"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product" data-aos="fade-up">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-inline-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <a href="" class="action">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="content">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                            Design</a>
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother
                                            Hoddies in Grey</a>
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
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.
                                        </div>
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <div class="btn-group">
                                            <button class="btn wishlist-btn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn cart-btn">add to cart</button>
                                            <button class="btn compare-btn">
                                                <i class="fa fa-random"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product" data-aos="fade-up">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-inline-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <a href="" class="action">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="content">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                            Design</a>
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother
                                            Hoddies in Grey</a>
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
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.
                                        </div>
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <div class="btn-group">
                                            <button class="btn wishlist-btn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn cart-btn">add to cart</button>
                                            <button class="btn compare-btn">
                                                <i class="fa fa-random"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product" data-aos="fade-up">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-inline-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <a href="" class="action">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="content">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                            Design</a>
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother
                                            Hoddies in Grey</a>
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
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.
                                        </div>
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <div class="btn-group">
                                            <button class="btn wishlist-btn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn cart-btn">add to cart</button>
                                            <button class="btn compare-btn">
                                                <i class="fa fa-random"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product" data-aos="fade-up">
                            <div class="row">
                                <div class="col-3">
                                    <div class="img">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="d-inline-block">
                                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                                            <img class="second-img" src="{{asset('images/product-tab-img-2.webp')}}" alt="">
                                        </a>
                                        <a href="" class="action">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="content">
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Studio
                                            Design</a>
                                        <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Brother
                                            Hoddies in Grey</a>
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
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.
                                        </div>
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <div class="btn-group">
                                            <button class="btn wishlist-btn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button class="btn cart-btn">add to cart</button>
                                            <button class="btn compare-btn">
                                                <i class="fa fa-random"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--pagination--}}
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrapper">
                            <div class="page-filter filter" onclick="openDropdown(event)">
                                <div class="title">Show span Per Page</div>
                                <ul class="dropdown">
                                    <li>
                                        <a href="javascript:void(0)" class="active" onclick="setFilter(event)">Show 12
                                            Per Page</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="setFilter(event)">Show 24 Per Page</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="setFilter(event)">Show 15 Per Page</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="setFilter(event)">Show 30 Per Page</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pagination-content d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--product modal--}}
        <div class="modal fade" tabindex="-1" id="ProductModal">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-6">
                                    <div class="left">
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="{{asset('images/1 (1).webp')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="{{asset('images/5 (1).webp')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="{{asset('images/1 (1).webp')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="{{asset('images/5 (1).webp')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- If we need navigation buttons -->
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="right">
                                        <div class="title">Sample product</div>
                                        <div class="price"><span class="new">$38.50 </span><span class="old">$42.85</span></div>
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
                                        <div class="model">SKU: 12345</div>
                                        <div class="desc">
                                            I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                            pain was born and I will give you a complete account of the system, and expound the
                                            actual teachings of the great explorer of the truth, the master-builder of human
                                            happiness.
                                        </div>
                                        <div class="size">
                                            Size:
                                            <a href="javacript:void(0)">S</a>
                                            <a href="javacript:void(0)">M</a>
                                            <a href="javacript:void(0)">L</a>
                                            <a href="javacript:void(0)">X</a>
                                        </div>
                                        <div class="colors">
                                            <span class="bg-danger color"></span>
                                            <span class="bg-dark color"></span>
                                            <span class="bg-primary color"></span>
                                            <span class="bg-warning color"></span>
                                        </div>
                                        <div class="type">
                                            Material:
                                            <a href="javacript:void(0)">Metal</a>
                                            <a href="javacript:void(0)">Resin</a>
                                            <a href="javacript:void(0)">Lather</a>
                                            <a href="javacript:void(0)">Polymer</a>
                                        </div>
                                        <div class="quantity">
                                            <a href="javascript:void(0)" class="dec">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <input type="text" class="form-control" value="0">
                                            <a href="javascript:void(0)" class="inc">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn cart-btn me-3">Add to cart</button>
                                            <button class="btn cart-btn">Add to wishlist</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const openDropdown = (e) => {
            const dropElem = e.target.closest('.filter').querySelector('.dropdown');
            const target = e.currentTarget;
            if (dropElem.classList.contains('active')) {
                dropElem.classList.remove('active');
                target.classList.remove('active');
            } else {
                dropElem.classList.add('active');
                target.classList.add('active');
            }
        }
        const setFilter = (e) => {
            const aTags = e.currentTarget.closest('.dropdown').querySelectorAll('li a');
            aTags.forEach((elem) => {
                elem.classList.remove('active');
            })
            e.currentTarget.classList.add('active')
            const target = e.currentTarget.innerText;
            e.target.closest('.filter').querySelector('.title').innerText = target
        }

        const setGrid = (e, type) => {
            const gridItems = e.currentTarget.closest('.grid-options').querySelectorAll('.item');
            gridItems.forEach(item => {
                item.classList.remove('active');
            })
            e.currentTarget.classList.add('active');
            const productRow = document.querySelector('.product-row');
            const productCol = document.querySelector('.product-col');
            if(type == 'col' && !productCol.classList.contains('active')){
                productRow.classList.remove('active')
                setTimeout(()=>{
                    productCol.classList.add('active')
                }, 300)
            }else{
                productCol.classList.remove('active')
                setTimeout(()=>{
                    productRow.classList.add('active')
                }, 300)
            }
        }

        const openModal = ()=>{
            const modal = new bootstrap.Modal('#ProductModal', {
                keyboard: false
            })
            modal.show()
        }

        window.addEventListener('click', (e) => {
            const filterName = document.querySelector('.filter-by-number');
            const sort = document.querySelector('.sorting-product');
            const page = document.querySelector('.page-filter');
            if (!filterName.contains(e.target)) {
                filterName.classList.remove('active');
                filterName.querySelector('.dropdown').classList.remove('active');
            }
            if (!sort.contains(e.target)) {
                sort.classList.remove('active');
                sort.querySelector('.dropdown').classList.remove('active');
            }
            if (!page.contains(e.target)) {
                page.classList.remove('active');
                page.querySelector('.dropdown').classList.remove('active');
            }
        })
    </script>
@endsection

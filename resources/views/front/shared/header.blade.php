<header>
    <div class="header-top">
        <div class="container">
            <div class="content">
                <div class="left">
                    <ul>
                        <li><a href="">English</a></li>
                        <li><a href="">USD</a></li>
                        <li><span>Call Us</span> <a href="">01234567</a></li>
                    </ul>
                </div>
                <div class="right">
                    Ends Monday: $100 off any dining table + 2 sets of chairs. <a href="">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="content">
                <a href="{{route('front.home')}}" class="logo">
                    <img src="{{asset('images/logo.webp')}}" alt="">
                </a>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="{{route('front.home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('front.product')}}">Products</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="javascript:void(0)">Pages <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li>
                                    <a href="{{route('front.about')}}">About</a>
                                </li>
                                <li>
                                    <a href="{{route('front.contact')}}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{route('front.faq')}}">Faq</a>
                                </li>
                                <li>
                                    <a href="{{route('front.not-found')}}">404 Error</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="{{route('front.blog')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('front.contact')}}">Contact</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="javascript:void(0)">Profile <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li>
                                    <a href="{{route('front.profile')}}">My Account</a>
                                </li>
                                <li>
                                    <a href="{{route('front.auth')}}">Login | Register</a>
                                </li>
                                <li>
                                    <a href="{{route('front.wishlist')}}">Wishlist</a>
                                </li>
                                <li>
                                    <a href="{{route('front.cart')}}">Cart</a>
                                </li>
                                <li>
                                    <a href="{{route('front.checkout')}}">Checkout</a>
                                </li>
                                <li>
                                    <a href="{{route('front.blog')}}">Compare</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="actions">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" onclick="openSearch()">
                                <i class="pe-7s-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('front.auth')}}">
                                <i class="pe-7s-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('front.wishlist')}}">
                                <i class="pe-7s-like"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="openCart()">
                                <i class="pe-7s-shopbag"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="search-container">
        <div class="container">
            <div class="search-field">
                <form class="w-100">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <a href="javascript:void(0)" class="close" onclick="closeSearch()"><i class="pe-7s-close"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="cart-container">
        <div class="cart-content">
            <div class="cart-title">Shopping Cart</div>
            <div class="products">
                <div class="product">
                    <div class="left">
                        <a href="{{route('front.product-single', ['id' => 1])}}" class="img">
                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                        </a>
                        <div class="info">
                            <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Make Thing Happen T-Shirt</a>
                            <div class="price">$66.50 <span>$70.55</span></div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="remove">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
                <div class="product">
                    <div class="left">
                        <a href="{{route('front.product-single', ['id' => 1])}}" class="img">
                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                        </a>
                        <div class="info">
                            <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Make Thing Happen T-Shirt</a>
                            <div class="price">$66.50 <span>$70.55</span></div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="remove">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
                <div class="product">
                    <div class="left">
                        <a href="{{route('front.product-single', ['id' => 1])}}" class="img">
                            <img class="first-img" src="{{asset('images/1.webp')}}" alt="">
                        </a>
                        <div class="info">
                            <a href="{{route('front.product-single', ['id' => 1])}}" class="title">Make Thing Happen T-Shirt</a>
                            <div class="price">$66.50 <span>$70.55</span></div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="remove">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </div>
            <div class="cart-bottom">
                <div class="sub-total mb-3">
                    <div>Subtotal</div>
                    <div>220$</div>
                </div>
                <div class="view-cart">
                    <a href="{{route('front.cart')}}" class="btn btn-theme2 mb-3">View cart</a>
                </div>
                <div class="checkout">
                    <a href="{{route('front.checkout')}}" class="btn btn-theme2">Checkout</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="close" onclick="closeCart()"><i class="pe-7s-close"></i></a>
        </div>
    </div>
    <a href="javascript:void(0)" class="scroll-top">
        <i class="fa-regular fa-arrow-up-long"></i>
    </a>
</header>

<script>
    const openSearch = ()=>{
        document.querySelector('.search-container').classList.add('active');
    }
    const closeSearch = ()=>{
        document.querySelector('.search-container').classList.remove('active');
    }
    const openCart = ()=>{
        document.querySelector('.cart-container').classList.add('active');
    }
    const closeCart = ()=>{
        document.querySelector('.cart-container').classList.remove('active');
    }
</script>

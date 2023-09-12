@extends('front.app')
@section('content')
    <div class="page product-single">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Single Product Gallery</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Single Product Gallery</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="left">
                            <div class="row">
                                <div class="col-6">
                                    <div class="img">
                                        <img src="{{asset('images/single-product-1.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="img">
                                        <img src="{{asset('images/single-product-1.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="img">
                                        <img src="{{asset('images/single-product-1.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="img">
                                        <img src="{{asset('images/single-product-1.webp')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
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
                            <div class="social-links">
                                <span>Share:</span>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-facebook-square"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-twitter-square"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-pinterest-square"></i>
                                </a>
                            </div>
                            <div class="policy">
                                <div class="each">
                                    <div class="icon">
                                        <i class="fa fa-check-square"></i>
                                    </div>
                                    <div class="text">Security Policy (Edit With Customer Reassurance Module)</div>
                                </div>
                                <div class="each">
                                    <div class="icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="text">Delivery Policy (Edit With Customer Reassurance Module)</div>
                                </div>
                                <div class="each">
                                    <div class="icon">
                                        <i class="fa fa-refresh"></i>
                                    </div>
                                    <div class="text">Return Policy (Edit With Customer Reassurance Module)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="header">
                        <a href="javascript:void(0)" class="active" onclick="showTabProducts(event, 'description')">Description</a>
                        <a href="javascript:void(0)" onclick="showTabProducts(event, 'reviews')">Reviews</a>
                        <a href="javascript:void(0)" onclick="showTabProducts(event, 'shipping-policy')">Shipping policy</a>
                        <a href="javascript:void(0)" onclick="showTabProducts(event, 'size-chart')">Size chart</a>
                    </div>
                    <div class="content">
                        <div class="each description active">
                            On the other hand, we denounce with righteous indignation and dislike men who
                            are so beguiled and demoralized by the charms of pleasure of the moment, so
                            blinded by desire, that they cannot foresee the pain and trouble that are bound
                            to ensue; and equal blame belongs to those who fail in their duty through
                            weakness of will, which is the same as saying through shrinking from toil and
                            pain. These cases are perfectly simple and easy to distinguish. In a free hour,
                            when our power of choice is untrammelled and when nothing prevents our being
                            able to do what we like best, every pleasure is to be welcomed and every pain
                            avoided. But in certain circumstances and owing to the claims of duty or the
                            obligations of business it will frequently occur that pleasures have to be
                            repudiated and annoyances accepted. The wise man therefore always holds in these
                            matters to this principle of selection: he rejects pleasures to secure other
                            greater pleasures, or else he endures pains to avoid worse pains.
                            <br> <br>
                            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                            cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                            repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                            necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                            recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut
                            reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                            asperiores repellat.
                        </div>
                        <div class="each reviews">
                            <div class="user">
                                <div class="avatar">
                                    <img src="{{asset('images/blog-person-1.webp')}}" alt="">
                                </div>
                                <div class="info">
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
                                    <div class="date">
                                        <span>Admin -</span>January 19, 2023
                                    </div>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in
                                        viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem
                                        commodo, eu dapibus libero interdum. Morbi convallis viverra erat,
                                        et aliquet orci congue vel. Integer in odio enim. Pellentesque in
                                        dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.
                                    </div>
                                </div>
                            </div>
                            <div class="review-text">
                                <div class="title">Add a review</div>
                                <div class="text">Your email address will not be published. Required fields are marked
                                    *
                                </div>
                            </div>
                            <div class="rating-text">
                                <div class="title">Your Rating</div>
                                <div class="rating-star">
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                    <span class="star">(2)</span>
                                </div>
                            </div>
                            <div class="contact-form">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Name*</label>
                                                <input type="text" name="name" id="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email">Email*</label>
                                                <input type="email" name="email" id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="comment">Comment</label>
                                                <textarea name="comment" id="comment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-theme">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="each shipping-policy">
                            <div class="title">Shipping policy for our store</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                            </div>
                            <ul class="list">
                                <li>1-2 business days (Typically by end of day)</li>
                                <li>30 days money back guaranty</li>
                                <li>24/7 live support</li>
                                <li>odio dignissim qui blandit praesent</li>
                                <li>luptatum zzril delenit augue duis dolore</li>
                                <li>te feugait nulla facilisi.</li>
                            </ul>
                            <div class="text mb-2">
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis
                                in iis qui facit eorum
                            </div>
                            <div class="text mb-2">
                                claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per
                            </div>
                            <div class="text">
                                seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                            </div>
                        </div>
                        <div class="each size-chart">
                            <div class="title">Size Chart</div>
                            <table class="table border mb-0">
                                <tbody>
                                <tr>
                                    <td class="cun-name"><span>UK</span></td>
                                    <td>18</td>
                                    <td>20</td>
                                    <td>22</td>
                                    <td>24</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>European</span></td>
                                    <td>46</td>
                                    <td>48</td>
                                    <td>50</td>
                                    <td>52</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>usa</span></td>
                                    <td>14</td>
                                    <td>16</td>
                                    <td>18</td>
                                    <td>20</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>Australia</span></td>
                                    <td>28</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>Canada</span></td>
                                    <td>24</td>
                                    <td>18</td>
                                    <td>14</td>
                                    <td>42</td>
                                    <td>36</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="heading-title">You Might Also Like</div>
                    <div class="product-items">
                        <div class="swiper single-product-slider">
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <button class="btn cart-btn">add to cart</button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <button class="btn cart-btn">add to cart</button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
                                        <button class="btn cart-btn">add to cart</button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
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
                                        <div class="price">$38.50 <span>$42.85</span></div>
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
        </section>
    </div>
    <script>
        const showTabProducts = (e, type) =>{
            const tabButtons = document.querySelectorAll('.product-tab .header a');
            tabButtons.forEach((elem) =>{
                if(elem.classList.contains('active')){
                    elem.classList.remove('active');
                }
            })
            e.target.classList.add('active');
            const tabContent = document.querySelectorAll('.product-tab .content .each');
            tabContent.forEach((elem) => {
                if(elem.classList.contains('active') && !elem.classList.contains(type)){
                    elem.classList.remove('active');
                }else if(!elem.classList.contains('active') && elem.classList.contains(type)){
                    setTimeout(()=>{
                        elem.classList.add('active')
                    }, 200)
                }
            })
        }
    </script>
@endsection

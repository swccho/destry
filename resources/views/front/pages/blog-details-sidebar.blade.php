@extends('front.app')
@section('content')
    <div class="page blog-details details-sidebar">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Blog Details</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Blog Details</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <section class="sidebar">
                        <div class="item search">
                            <div class="title">Search</div>
                            <div class="search-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <button class="btn btn-dark" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="item menu-categories">
                            <div class="title">Menu Categories</div>
                            <div class="menu">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Women
                                                <span>
                                                        <i class="fa fa-angle-down"></i>
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Men
                                                <span>
                                                        <i class="fa fa-angle-down"></i>
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                Kids
                                                <span>
                                                        <i class="fa fa-angle-down"></i>
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                Fashion
                                                <span>
                                                        <i class="fa fa-angle-down"></i>
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                Others
                                                <span>
                                                        <i class="fa fa-angle-down"></i>
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                    <li><a href="">Natural Cosmetic</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item menu">
                            <div class="title">Categories</div>
                            <div class="menu-item">
                                <ul>
                                    <li><a href="">All Product</a></li>
                                    <li><a href="">Best Seller (5)</a></li>
                                    <li><a href="">Featured (4)</a></li>
                                    <li><a href="">New Products (6)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item color">
                            <div class="title">Color</div>
                            <div class="content">
                                <div class="color-item">
                                    <input type="checkbox" id="colorItem1">
                                    <label for="colorItem1">Black (2)</label>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox" id="colorItem2">
                                    <label for="colorItem2">Red (6)</label>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox" id="colorItem3">
                                    <label for="colorItem3">Blue (8)</label>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox" id="colorItem4">
                                    <label for="colorItem4">Green (9)</label>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox" id="colorItem5">
                                    <label for="colorItem5">Pink (4)</label>
                                </div>
                            </div>
                        </div>
                        <div class="item tags">
                            <div class="title">Tags</div>
                            <div class="content">
                                <ul>
                                    <li><a href="">Men</a></li>
                                    <li><a href="">Women</a></li>
                                    <li><a href="">Fashion</a></li>
                                    <li><a href="">Watch</a></li>
                                    <li><a href="">Handmade</a></li>
                                    <li><a href="">Lather</a></li>
                                    <li><a href="">Fabrics</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item products">
                            <div class="title">Recent Products</div>
                            <div class="product-items">
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
                    </section>
                </div>
                <div class="col-8">
                    <section class="blog-content">
                        <div class="thumbnail">
                            <img src="{{asset('images/blog-thumbnail.webp')}}" alt="">
                        </div>
                        <div class="blog-title">Fashion for the Clueless</div>
                        <div class="publish-info">
                            By <a href="">Admin,</a>
                            May 21, 2023
                            <a href="">03 Comments</a>
                        </div>
                        <div class="text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration some form, by injected humour, or randomised words which don't look even slightly believable.
                            Ifyouare going to use a passage of Lorem Ipsum, you need to be sure there isanything embarrassing hidden
                            i the middletext.There are many variations of passages of Lorem Ipsum available, but the majority
                            hsuffered alteration in some form, by injected humour.
                        </div>
                        <div class="quote">
                            <div class="desc">
                                “Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed
                                rutrum at ante in lacinia. Maecenas dignissim lacus orci, a euismod ipsum ornare convallis. Morbi
                                tristique consectetur purus, quis cursus ante posuere nec. Cras quis pharetra ex. Cras vehicula
                                dignissim suscipit.”
                            </div>
                            <div class="author">- John Doe</div>
                        </div>
                        <div class="text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration some form, by injected humour, or randomised words which don't look even slightly
                            believable.
                        </div>
                        <div class="images">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{asset('images/blog-img-1.webp')}}" alt="">
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('images/blog-img-1.webp')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                            this the first true generator on the Internet. It uses a dictionary o first true generator on the
                            Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                        </div>
                        <div class="share-post">
                            <div class="header">
                                <div>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-long-arrow-left"></i>
                                        Older Post
                                    </a>
                                </div>
                                <div class="text-uppercase">
                                    share this article
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        Newer Post
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="links">
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="comments">
                            <div class="title">5 Comments</div>
                            <div class="comment">
                                <div class="img">
                                    <img src="{{asset('images/blog-person-1.webp')}}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        This book is a treatise on the theory of ethics, very popular during the Renaissance.
                                        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet
                                    </div>
                                    <div class="comment-footer">
                                        <div class="author">
                                            <a href="javascript:void(0)">Alex</a>
                                            <span>-August 30, 2023</span>
                                        </div>
                                        <a href="javascript:void(0)" class="reply-btn">
                                            <i class="fa fa-reply"></i> Reply
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment reply">
                                <div class="img">
                                    <img src="{{asset('images/blog-person-1.webp')}}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        This book is a treatise on the theory of ethics, very popular during the Renaissance.
                                        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet
                                    </div>
                                    <div class="comment-footer">
                                        <div class="author">
                                            <a href="javascript:void(0)">Alex</a>
                                            <span>-August 30, 2023</span>
                                        </div>
                                        <a href="javascript:void(0)" class="reply-btn">
                                            <i class="fa fa-reply"></i> Reply
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="title">Leave a comment</div>
                            <div class="contact-form">
                                <form>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="website" class="form-control" placeholder="Website">
                                    </div>
                                    <button class="btn btn-theme">Post comment</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

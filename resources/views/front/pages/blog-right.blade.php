@extends('front.app')
@section('content')
    <div class="page blog-sidebar right">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Blog Sidebar</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Sidebar</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        <section class="blog-sidebar-content">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <section class="blog">
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-blog">
                                        <div class="img">
                                            <img src="{{asset('images/blog2.webp')}}" alt="">
                                        </div>
                                        <div class="date">By : <span>Admin</span> 14 Jul 2023 </div>
                                        <a href="" class="title">Some Winter Collections</a>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</div>
                                        <a href="/" class="read-more">
                                            <span>read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{--pagination--}}
                        <div class="container">
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
                </div>
            </div>
        </section>
    </div>
@endsection

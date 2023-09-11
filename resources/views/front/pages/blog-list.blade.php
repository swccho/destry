@extends('front.app')
@section('content')
    <div class="page blog-list">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Blog</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Blog</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

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
                            <a href="/" class="read-more">read more</a>
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
                            <a href="/" class="read-more">read more</a>
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
                            <a href="/" class="read-more">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--blog section end--}}

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
@endsection

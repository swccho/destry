@extends('front.app')
@section('content')
    <div class="page blog-details">
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
@endsection

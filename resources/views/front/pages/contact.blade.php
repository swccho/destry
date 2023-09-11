@extends('front.app')
@section('content')
    <div class="page contact">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Contact Us</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Contact Us</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        {{--contact form section start--}}
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="contact-form">
                            <div class="heading-title">Get In Touch</div>
                            <form>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *"
                                           required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *"
                                           required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject *"
                                           required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <button class="btn btn-theme">send a message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="contact-info">
                            <div class="heading-title">
                                Contact Info
                            </div>
                            <div class="content">
                                <div class="each">
                                    <div class="icon">
                                        <i class="las la-map-marker"></i>
                                    </div>
                                    <div>
                                        <div class="title">Postal Address</div>
                                        <div class="sub-title">PO Box 123456, Street/Road <br> Country-State</div>
                                    </div>
                                </div>
                                <div class="each">
                                    <div class="icon">
                                        <i class="las la-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="title">Contact Us Anytime</div>
                                        <div class="sub-title">Mobile: 012 345 678 <br> Fax: 123 456 789</div>
                                    </div>
                                </div>
                                <div class="each">
                                    <div class="icon">
                                        <i class="las la-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="title">Support Overall</div>
                                        <div class="sub-title">Mobile: 012 345 678 <br> Fax: 123 456 789</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--conatact form section end--}}

        {{--map section start--}}
        <section class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29346.142769438375!2d89.21743359999999!3d23.160422399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1693913103775!5m2!1sen!2sbd"
                height="450" width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        {{--map section end--}}
    </div>
@endsection

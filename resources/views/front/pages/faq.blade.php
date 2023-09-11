@extends('front.app')
@section('content')
    <div class="page faq">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">FAQ</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>FAQ</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        {{--faq section start--}}
        <section class="faq-section">
            <div class="container">
                <div class="title">Below are frequently asked questions, you may find the answer for yourself</div>
                <div class="desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus
                    malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at
                    tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla
                    convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla
                    quis. Vivamus iaculis euismod dui.
                </div>
                <div class="content">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mauris congue euismod purus at semper. Morbi et vulputate massa?
                                    <span class="plus">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="minus">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu
                                    porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                    viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend
                                    lorem
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Donec mattis finibus elit ut tristique?
                                    <span class="plus">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="minus">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu
                                    porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                    viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend
                                    lorem
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Aenean elit orci, efficitur quis nisl at, accumsan?
                                    <span class="plus">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="minus">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu
                                    porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                    viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend
                                    lorem
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

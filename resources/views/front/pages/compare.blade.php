@extends('front.app')
@section('content')
    <div class="page compare">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Compare</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Compare</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        {{--faq section start--}}
        <section class="compare-section">
            <div class="container">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Product</th>
                            <td>
                                <div class="img">
                                    <img src="{{asset('images/1.webp')}}" alt="">
                                </div>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Men</a>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="name">Brother hoddies in
                                    gray</a>
                            </td>
                            <td>
                                <div class="img">
                                    <img src="{{asset('images/1.webp')}}" alt="">
                                </div>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Men</a>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="name">Brother hoddies in
                                    gray</a>
                            </td>
                            <td>
                                <div class="img">
                                    <img src="{{asset('images/1.webp')}}" alt="">
                                </div>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="category">Men</a>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="name">Brother hoddies in
                                    gray</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nulla, explicabo iste
                                    a rerum pariatur.
                                </div>
                            </td>
                            <td>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nulla, explicabo iste
                                    a rerum pariatur.
                                </div>
                            </td>
                            <td>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nulla, explicabo iste
                                    a rerum pariatur.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>
                                <div class="price">$95</div>
                            </td>
                            <td>
                                <div class="price">$95</div>
                            </td>
                            <td>
                                <div class="price">$95</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>Medium</td>
                            <td>Small</td>
                            <td>Large</td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td>In Stock</td>
                            <td>Stock Out</td>
                            <td>In Stock</td>
                        </tr>
                        <tr>
                            <th>Add to cart</th>
                            <td class="text-center">
                                <button class="btn btn-theme2">Add To Cart</button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-theme2">Add To Cart</button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-theme2">Add To Cart</button>
                            </td>
                        </tr>
                        <tr>
                            <th>Remove</th>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection

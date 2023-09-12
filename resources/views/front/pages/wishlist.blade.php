@extends('front.app')
@section('content')
    <div class="page wishlist">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Wishlist</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Wishlist</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        {{--faq section start--}}
        <section class="wishlist-section">
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Stock Status</th>
                            <th>Add to Cart</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{asset('images/1.webp')}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="title">
                                    Brother Hoddies In Grey
                                    <br>
                                    <span>S / Green</span>
                                </a>
                            </td>
                            <td class="price">
                                $95.00
                            </td>
                            <td class="stock">
                                In Stock
                            </td>
                            <td>
                                <button class="btn btn-theme">Add To Cart</button>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('images/1.webp')}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="title">
                                    Brother Hoddies In Grey
                                    <br>
                                    <span>S / Green</span>
                                </a>
                            </td>
                            <td class="price">
                                $95.00
                            </td>
                            <td class="stock">
                                In Stock
                            </td>
                            <td>
                                <button class="btn btn-theme">Add To Cart</button>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('images/1.webp')}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="title">
                                    Brother Hoddies In Grey
                                    <br>
                                    <span>S / Green</span>
                                </a>
                            </td>
                            <td class="price">
                                $95.00
                            </td>
                            <td class="stock">
                                In Stock
                            </td>
                            <td>
                                <button class="btn btn-theme">Add To Cart</button>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('images/1.webp')}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="title">
                                    Brother Hoddies In Grey
                                    <br>
                                    <span>S / Green</span>
                                </a>
                            </td>
                            <td class="price">
                                $95.00
                            </td>
                            <td class="stock">
                                In Stock
                            </td>
                            <td>
                                <button class="btn btn-theme">Add To Cart</button>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('images/1.webp')}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('front.product-single', ['id' => 1])}}" class="title">
                                    Brother Hoddies In Grey
                                    <br>
                                    <span>S / Green</span>
                                </a>
                            </td>
                            </td>
                            <td class="price">
                                $95.00
                            </td>
                            <td class="stock">
                                In Stock
                            </td>
                            <td>
                                <button class="btn btn-theme">Add To Cart</button>
                            </td>
                            <td>
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

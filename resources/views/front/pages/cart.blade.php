@extends('front.app')
@section('content')
    <div class="page cart">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Shopping Cart</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Shopping Cart</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        {{--faq section start--}}
        <section class="cart-section">
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>quantity</th>
                            <th>Total</th>
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
                                <div class="quantity">
                                    <a href="javascript:void(0)" class="dec">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <input type="text" class="form-control" value="0">
                                    <a href="javascript:void(0)" class="inc">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </td>
                            <td  class="price">
                                $95.00
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
                                <div class="quantity">
                                    <a href="javascript:void(0)" class="dec">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <input type="text" class="form-control" value="0">
                                    <a href="javascript:void(0)" class="inc">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </td>
                            <td  class="price">
                                $95.00
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
                                <div class="quantity">
                                    <a href="javascript:void(0)" class="dec">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <input type="text" class="form-control" value="0">
                                    <a href="javascript:void(0)" class="inc">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </td>
                            <td  class="price">
                                $95.00
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
                                <div class="quantity">
                                    <a href="javascript:void(0)" class="dec">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <input type="text" class="form-control" value="0">
                                    <a href="javascript:void(0)" class="inc">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </td>
                            <td  class="price">
                                $95.00
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="remove">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="coupon">
                    <div class="left">
                        <form action="">
                            <div class="form-content">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Coupon Code">
                                </div>
                                <button class="btn btn-theme2">Apply Coupon</button>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <button class="btn btn-theme2">Update Cart</button>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="content">
                        <div class="title">Cart Totals</div>
                        <div class="sub-total">
                            <div class="text">Sub Total</div>
                            <div class="amount">$230</div>
                        </div>
                        <div class="shipping">
                            <div class="text">Sub Total</div>
                            <div class="amount">$70</div>
                        </div>
                        <div class="total">
                            <div class="text">Total</div>
                            <div class="amount">$300</div>
                        </div>
                    </div>
                    <a  href="" class="btn btn-theme2">Proceed To Checkout</a>
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('front.app')
@section('content')
    <div class="page checkout">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Checkout</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Checkout</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}

        <section class="checkout-content">
            <div class="container">
                <div class="header-faq">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item return-customer">
                            <h2 class="accordion-header">
                                <span>Returning customer?</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseReturnCustomer" aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Click here to login
                                </button>
                            </h2>
                            <div id="collapseReturnCustomer" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="desc">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</div>
                                    <form>
                                        <div class="form-group">
                                            <label for="username">Username or email*</label>
                                            <input type="text" class="form-control" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password*</label>
                                            <input type="text" class="form-control" id="password">
                                        </div>
                                        <div class="remember-me">
                                            <div class="form-group">
                                                <input type="checkbox" class="d-none" id="rememberMe">
                                                <label for="rememberMe">Remember Me</label>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="forget">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item coupon-code">
                            <h2 class="accordion-header">
                                <span>Have a coupon?</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCouponCode" aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Click here to enter your code
                                </button>
                            </h2>
                            <div id="collapseCouponCode" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Coupon code">
                                            <button class="btn btn-theme2">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="billing-form">
                            <div class="title">Billing Details</div>
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="country-filter" onclick="openDropdown(event)">
                                                <div class="country-title">Bangladesh</div>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="javascript:void(0)" class="active"
                                                           onclick="setFilter(event)">London</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)"
                                                           onclick="setFilter(event)">Romania</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)"
                                                           onclick="setFilter(event)">French</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)"
                                                           onclick="setFilter(event)">Germany</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name*</label>
                                            <input type="text" class="form-control" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name*</label>
                                            <input type="text" class="form-control" id="last_name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address*</label>
                                            <input type="text" class="form-control" id="address">
                                            <input type="text" class="form-control"
                                                   placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="city">Town / City*</label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="city">State / Country*</label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="postcode">Postcode / Zip*</label>
                                            <input type="text" class="form-control" id="postcode">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email">Email Address*</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="phone">Phone*</label>
                                            <input type="text" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseCreateAccount"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                        <input type="checkbox" class="d-none" id="create_account">
                                                        <label for="create_account" class="bold-text">Create an
                                                            account?</label>
                                                    </button>
                                                </h2>
                                                <div id="collapseCreateAccount" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="desc">
                                                            Create an account by entering the information below. If you
                                                            are a returning customer please login at the top of the
                                                            page.
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Account password*</label>
                                                            <input type="text" class="form-control" id="password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseShip"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                        <input type="checkbox" class="d-none" id="ship">
                                                        <label for="ship" class="bold-text">Ship to a different address?</label>
                                                    </button>
                                                </h2>
                                                <div id="collapseShip" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="country-filter" onclick="openDropdown(event)">
                                                                        <div class="country-title">Bangladesh</div>
                                                                        <ul class="dropdown">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="active"
                                                                                   onclick="setFilter(event)">London</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)"
                                                                                   onclick="setFilter(event)">Romania</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)"
                                                                                   onclick="setFilter(event)">French</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)"
                                                                                   onclick="setFilter(event)">Germany</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="first_name">First Name*</label>
                                                                    <input type="text" class="form-control" id="first_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="last_name">Last Name*</label>
                                                                    <input type="text" class="form-control" id="last_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="address">Address*</label>
                                                                    <input type="text" class="form-control" id="address">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Apartment, suite, unit etc. (optional)">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="city">Town / City*</label>
                                                                    <input type="text" class="form-control" id="city">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="city">State / Country*</label>
                                                                    <input type="text" class="form-control" id="city">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="postcode">Postcode / Zip*</label>
                                                                    <input type="text" class="form-control" id="postcode">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="email">Email Address*</label>
                                                                    <input type="email" class="form-control" id="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="phone">Phone*</label>
                                                                    <input type="text" class="form-control" id="phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Order Notes</label>
                                            <textarea name="note" class="form-control"
                                                      placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="billing-details">
                            <div class="title">Your order</div>
                            <div class="history">
                                <ul>
                                    <li>
                                        <div class="text">Product</div>
                                        <div class="amount">TOTAL</div>
                                    </li>
                                    <li>
                                        <div class="text">Some Winter Collections <span>× 2</span></div>
                                        <div class="amount">£145.00</div>
                                    </li>
                                    <li>
                                        <div class="text">Small Scale Style <span>× 4</span></div>
                                        <div class="amount">£204.00</div>
                                    </li>
                                    <li>
                                        <div class="text bold-text">Cart-subtotal</div>
                                        <div class="amount">£349.00</div>
                                    </li>
                                    <li>
                                        <div class="text bold-text">Order Total</div>
                                        <div class="amount bold-text">£349.00</div>
                                    </li>
                                </ul>
                                </div>
                                <div class="faq-content">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    Direct Bank Transfer.
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                 data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment reference. Your order won’t be shipped until the funds
                                                    have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                    Cheque Payment.
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment reference. Your order won’t be shipped until the funds
                                                    have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    Paypal.
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment reference. Your order won’t be shipped until the funds
                                                    have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const openDropdown = (e) => {
            const dropElem = e.target.closest('.country-filter').querySelector('.dropdown');
            const target = e.currentTarget;
            if (dropElem.classList.contains('active')) {
                dropElem.classList.remove('active');
                target.classList.remove('active');
            } else {
                dropElem.classList.add('active');
                target.classList.add('active');
            }
        }

        const setFilter = (e) => {
            const aTags = e.currentTarget.closest('.dropdown').querySelectorAll('li a');
            aTags.forEach((elem) => {
                elem.classList.remove('active');
            })
            e.currentTarget.classList.add('active')
            const target = e.currentTarget.innerText;
            e.currentTarget.closest('.country-filter').querySelector('.country-title').innerText = target
        }

        window.addEventListener('click', (e) => {
            const countryFilter = document.querySelector('.country-filter');
            if (!countryFilter.contains(e.target)) {
                countryFilter.classList.remove('active');
                countryFilter.querySelector('.dropdown').classList.remove('active');
            }
        })
    </script>
@endsection

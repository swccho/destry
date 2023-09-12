@extends('front.app')
@section('content')
    <div class="page profile">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">My Account</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>My Account</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}
        <section class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="sidenav">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-dashboard" type="button" role="tab"
                                            aria-controls="pills-dashboard" aria-selected="true"><i
                                            class="fa fa-dashboard"></i> Home
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-orders-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-orders" type="button" role="tab"
                                            aria-controls="pills-orders" aria-selected="false"><i
                                            class="fa fa-cart-arrow-down"></i> Orders
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-download-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-download" type="button" role="tab"
                                            aria-controls="pills-download" aria-selected="false"><i
                                            class="fa fa-cloud-download"></i> Download
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-payment-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-payment" type="button" role="tab"
                                            aria-controls="pills-payment" aria-selected="false"><i
                                            class="fa fa-credit-card"></i> Payment Method
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-address" type="button" role="tab"
                                            aria-controls="pills-address" aria-selected="false"><i
                                            class="fa fa-map-marker"></i> Address
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-account-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-account" type="button" role="tab"
                                            aria-controls="pills-account" aria-selected="false"><i
                                            class="fa fa-user"></i> Account Details
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="{{route('front.auth')}}" class="nav-link">
                                        <i class="fa fa-sign-out"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="nav-content">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                     aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="title">Dashboard</div>
                                    <div class="content">
                                        Hello, <span>Alex Aya</span> (If Not <span>Aya !</span> <a href="{{'front.home'}}">Logout</a>)
                                        <br>
                                        From your account dashboard. you can easily check & view your recent orders,
                                        manage your shipping and billing addresses and edit your password and account
                                        details.
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-orders" role="tabpanel"
                                     aria-labelledby="pills-orders-tab" tabindex="0">
                                    <div class="title">Orders</div>
                                    <div class="content">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 12, 2023</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td>
                                                        <button class="btn btn-theme">View</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 12, 2023</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td>
                                                        <button class="btn btn-theme">View</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 12, 2023</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td>
                                                        <button class="btn btn-theme">View</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-download" role="tabpanel"
                                     aria-labelledby="pills-download-tab" tabindex="0">
                                    <div class="title">Orders</div>
                                    <div class="content">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>Aug 12, 2023</td>
                                                    <td>Yes</td>
                                                    <td>
                                                        <button class="btn btn-theme"><i class="fa fa-cloud-download me-1"></i> Download File</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                     aria-labelledby="pills-payment-tab" tabindex="0">
                                    <div class="title">Payment Method</div>
                                    <div class="content">
                                        You Can't Saved Your Payment Method yet.
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                     aria-labelledby="pills-address-tab" tabindex="0">
                                    <div class="title">Billing Address</div>
                                    <div class="content">
                                        <div class="name">
                                            Alex Aya
                                        </div>
                                        <br>
                                        <div class="text">
                                            1234 Market ##, Suite 900
                                            <br>
                                            Lorem Ipsum, ## 12345
                                            <br><br>
                                            Mobile: (123) 123-456789
                                        </div>
                                        <button class="btn btn-theme"><i class="fa fa-edit me-2"></i> Edit Address</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                     aria-labelledby="pills-account-tab" tabindex="0">
                                   <div class="account-form">
                                       <form>
                                           <div class="title">Account Details</div>
                                           <div class="content">
                                               <div class="row">
                                                   <div class="col-6">
                                                       <div class="form-group">
                                                           <label for="first_name">First Name</label>
                                                           <input type="text" class="form-control" id="first_name" placeholder="First Name">
                                                       </div>
                                                   </div>
                                                   <div class="col-6">
                                                       <div class="form-group">
                                                           <label for="last_name">Last Name</label>
                                                           <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                                                       </div>
                                                   </div>
                                                   <div class="col-12">
                                                       <div class="form-group">
                                                           <label for="display_name">Display Name</label>
                                                           <input type="text" class="form-control" id="display_name" placeholder="Display Name">
                                                       </div>
                                                   </div>
                                                   <div class="col-12">
                                                       <div class="form-group">
                                                           <label for="email_address">Email Address</label>
                                                           <input type="email" class="form-control" id="email_address" placeholder="Email Address">
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="password-title title">Password change</div>
                                           <div class="content">
                                               <div class="row">
                                                   <div class="col-12">
                                                       <div class="form-group">
                                                           <label for="current_password">Current Password</label>
                                                           <input type="password" class="form-control" id="current_password" placeholder="Current Password">
                                                       </div>
                                                   </div>
                                                   <div class="col-6">
                                                       <div class="form-group">
                                                           <label for="new_password">New Password</label>
                                                           <input type="password" class="form-control" id="new_password" placeholder="New Password">
                                                       </div>
                                                   </div>
                                                   <div class="col-6">
                                                       <div class="form-group">
                                                           <label for="confirm_password">Confirm Password</label>
                                                           <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <button class="btn btn-theme">Save changes</button>
                                       </form>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

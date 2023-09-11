@extends('front.app')
@section('content')
    <div class="page not-found">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">404 Error</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>404 Error</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}
        <section class="error-content">
            <div class="title">404</div>
            <div class="sub-title">OPPS! PAGE NOT BE FOUND</div>
            <div class="desc">
                Sorry but the page you are looking for does not exist, have been
                <br>
                removed, name changed or is temporarily unavailable.
            </div>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="search-icon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
                <a href="{{route('front.home')}}" class="btn btn-theme">Back to home page</a>
            </form>
        </section>
    </div>
@endsection

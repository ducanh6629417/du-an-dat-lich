@extends('layouts.home')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Dịch vụ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            <div class="row product-lists">
                @foreach ($models as $item)
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
<<<<<<< HEAD
                            <a href="{{route('detail-service')}}"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
=======
                            <a href="{{route('booking')}}"><img src="{{asset($item->image)}}" alt="{{asset($item->name)}}"></a>
>>>>>>> 8c1a9027be2af993538f027fcfa622a6e491d910
                        </div>
                        <h3>{{$item->name}}</h3>
                        <p class="product-price">
                            @if ($item->discount !='' || $item->discount != null)
                            <span>Giảm giá {{$item->discount}}%</span>
                            <p>
                            
                                <span> <span  style="color: #F28123;font-size: 1.5rem" >{{$item->priceDiscount}} đ</span> <span style="color: rgb(214, 211, 211) ;font-size: 1.5rem;text-decoration: line-through"> {{$item->price}} đ</span> </span>
                            </p>
                            @endif
                        </p>
                        <a href="{{route('booking')}}" class="cart-btn"> Đặt lịch</a>
                    </div>
                </div>
<<<<<<< HEAD

=======
                @endforeach
               
               
                {{-- <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/product-img-6.jpg" alt=""></a>
                        </div>
                        <h3>Strawberry</h3>
                        <p class="product-price"><span>Per Kg</span> 80$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div> --}}
>>>>>>> 8c1a9027be2af993538f027fcfa622a6e491d910
            </div>

            {{-- <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- end products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->
@endsection

@extends('layouts.home')
@section('content')
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <div class="hero-btns ">
                                @if(! auth()->user())
                                    <button data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn-booking btn">Đặt lịch
                                    </button>
                                @else
                                    <a href="{{route('booking')}}" class="btn-booking btn">Đặt lịch</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border: 1px solid #F28123 ">
                <div class="modal-body">
                    <a href="{{route('login')}}" class="btn btn-booking w-100 mt-2"> Đăng nhập (Bạn đã có tài khoản)</a>
                    <a href="{{route('register')}}" class="btn btn-booking w-100 mt-2">Đăng ký (Bạn chưa có tài khoản)</a>
                    <a href="{{route('booking')}}" class="btn btn-booking w-100 mt-2">Đặt lịch không cần tài khoản</a>
                </div>
                <div class="text-center p-3">
                    <button type="button" class="btn" data-dismiss="modal" style="border: 1px solid #F28123; color: #F28123">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- features list section -->
    <div class="container">
        <div class="feature-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="featured-text">
                            <h2 class="pb-3"><span class="orange-text">Về chúng tôi</span></h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                    <div class="list-box d-flex">
                                        <div class="list-icon">
                                            <img src="assets/img/icon.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Đặt lịch dễ dàng</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                    <div class="list-box d-flex">
                                        <div class="list-icon">
                                            <img src="assets/img/icon (1).jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Stylist chuyên nghiệp</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                    <div class="list-box d-flex">
                                        <div class="list-icon">
                                            <img src="assets/img/icon (2).jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Dịch vụ chất lượng cao</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="list-box d-flex">
                                        <div class="list-icon">
                                            <img src="assets/img/discount 1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Nhiều ưu đãi hàng tháng</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end features list section -->
    </div>
    <!-- product section 1 -->
    <div class="product-section mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                        </div>
                        <h3>Tóc nữ</h3>
                        <p class="product-price"><span>Ưu đãi</span> -30% </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a><img src="assets/img/products/product-img-2.jpg" alt=""></a>
                        </div>
                        <h3>Tóc nam</h3>
                        <p class="product-price"><span>Ưu đãi</span> 15% </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section 1 -->

    <!-- product section 2 -->
    <div class="product-section mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Dịch vụ</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($models as $item)
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('booking')}}"><img src="{{asset($item->image)}}"
                                                                    alt="{{asset($item->name)}}"></a>
                            </div>
                            <h3>{{$item->name}}</h3>
                            <p class="product-price">  @if ($item->discount !='' || $item->discount != null)
                                    <span>Giảm giá {{$item->discount}}%</span>
                            <p>
                                <span> <span style="color: #F28123;font-size: 1.5rem">{{number_format($item->priceDiscount ,0,',','.') }} đ </span> <span style="font-weight: bold;font-size: 20px">-</span>  <span
                                        style="color: rgb(214, 211, 211) ;font-size: 1.5rem;text-decoration: line-through"> {{number_format($item->price ,0,',','.') }} đ</span> </span>
                            </p>
                            @endif</p>
                            <a href="{{route('booking')}}" class="cart-btn"> Đặt lịch</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- end product section 2 -->


    <!-- advertisement section -->
    <div class="abt-section mb-100 mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://www.youtube.com/watch?v=Nt1HZ3ml0Xs" class="video-play-btn popup-youtube"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <h2><span class="orange-text">Mẫu tóc nổi bật</span></h2>
                        <p>Kiểu tóc side part vuốt rủ trở thành xu hướng “hot trend” trở lại dù không phải là kiểu tóc
                            mới xuất hiện, nó vẫn được giới trẻ theo đuổi.Thông thường kiểu side part cổ điển sẽ chú
                            trọng về những đường cắt gọn. Tuy nhiên, nếu bạn tóc mình trông hiện đại hơn thì có thể tỉa
                            bớt tóc cho mỏng đi hoặc tỉa layer phần mái. Đây là phong cách luôn nằm đầu danh sách kiểu
                            tóc được ưu chuộng nhất mọi thời đại.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->


    <!-- latest news -->
    <div class="latest-news pb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Tin tức</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html">
                            <div class="latest-news-bg news-bg-1"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html">
                            <div class="latest-news-bg news-bg-2"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-latest-news">
                        <a href="single-news.html">
                            <div class="latest-news-bg news-bg-3"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="news.html" class="boxed-btn">More News</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->

@endsection
@push('style')
    <style>
        .btn-booking {
            border: 1px solid #F28123;
            border-radius: 2px;
            outline: 0 !important;
            box-shadow: none !important;
            background: #F28123;
            color: white !important;
            width: 40%;
            padding: 15px 20px;
        }

        .btn-booking:hover {
            border: 1px solid #F28123;
            border-radius: 2px;
            outline: 0 !important;
            box-shadow: none !important;
            background: #FFFFFF;
            color: #F28123 !important;
            width: 40%;
            padding: 15px 20px;
        }
    </style>
@endpush

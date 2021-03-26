@extends('layout')
@section('content')
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider slider-1" style="background-image: url({{('public/frontend/image/slider/slider-bg.jpg')}})">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{('public/frontend/image/slider/kawasakiz1000.png')}}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">Siêu Motobike thách thức mọi giới hạn</h6>
                                    <img class="animated" src="{{('public/frontend/image/icon-img/bike.png')}}" alt="slider images">
                                </div>
                                <h2 class="animated">Kawasaki</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: url({{('public/frontend/image/slider/slider-bg.jpg')}})">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{('public/frontend/image/slider/ninjacartoon.png')}}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">Siêu Motobike thách thức mọi giới hạn</h6>
                                    <img class="animated" src="{{('public/frontend/image/icon-img/bike.png')}}" alt="slider images">
                                </div>
                                <h2 class="animated">Kawasaki</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: url({{('public/frontend/image/slider/slider-bg.jpg')}})">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{('public/frontend/image/slider/kawasakininja400.png')}}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">Siêu Motobike thách thức mọi giới hạn</h6>
                                    <img class="animated" src="{{('public/frontend/image/icon-img/bike.png')}}" alt="slider images">
                                </div>
                                <h2 class="animated">Kawasaki</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overview-area pt-135">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">
                                <h1><span>Kawasaki</span> Sport Bike </h1>
                                <h2>Đỉnh Cấp <span>Motobike Chất Lượng</span></h2>
                                <p><span>Kawasaki</span><br> Nơi thách thức mọi giới hạn của xe phân khối lớn, đỉnh cấp của sport bike luôn không làm chúng ta thất vọng.</p>
                                <div class="question-area">
                                    <h4>Nếu bạn có bất cứ thắt mắt điều gì xin liên hệ </h4>
                                    <div class="question-contact">
                                        <div class="question-icon">
                                            <i class="pe-7s-phone"></i>
                                        </div>
                                        <div class="question-content-number">
                                            <h6> 123456789</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-img">
                                <img class="tilter" src="{{('public/frontend/image/banner/kawasakiBanner.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-area pt-135 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{('public/frontend/image/banner/banner1.jpg')}}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>Mua Xe Mới</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{('public/frontend/image/banner/banner2.jpg')}}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>Đẳng Cấp Mới</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{('public/frontend/image/banner/banner3.jpg')}}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>Thách Thức Mới</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-area pb-190">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>Lựa Chọn Xe Bạn Yêu Thích</h2>
                        <p><span>Kawasaki</span> Nơi đáp ứng mọi nhu cầu về việc đam mê tốc độ cảu các loại xe phân khối lớn.</p>
                    </div>
                    <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" >
                            <h4>Xe Mới </h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active">
                            <div class="product-slider-active owl-carousel">

                                @foreach($all_product as $key => $product)
                                    <div class="product-wrapper-bundle">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <a href="">
                                                    <img src="public/upload/product/{{ $product->product_image }}" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2021</li>
                                                        <li>MotorBike</li>
                                                        <li>Pull</li>
                                                        <li>GOD</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2" title="Add To Cart" href="#">
                                                        <i class=" ti-shopping-cart"></i>
                                                    </a>
                                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class=" ti-zoom-in"></i>
                                                    </a>
                                                </div>
                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="">{{$product->product_name}}</a></h4>
                                                        <span>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Kawasaki</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url({{('public/frontend/image/banner/banner4.jpg')}})">
                <div class="container-fluid">
                    <div class="latest-product-slider owl-carousel">
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{('public/frontend/image/banner/banner5.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">Xe Mới <br>Thách Thức Mới</h2>
                                        <p class="animated"><span>Kawasaki</span> <br>Loại xe mang lại thách thức tốc độ mới luôn làm bạn cảm thách tốt hơn với mọi loại đường đi </p>
                                        <div class="latest-price">
                                            <h3 class="animated">Giá Chỉ <span>92.000.000 VNĐ</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">Chọn Xe Này Ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-col-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{('public/frontend/image/banner/banner6.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-col-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">Xe Mới <br>Thách Thức Mới</h2>
                                        <p class="animated"><span>Kawasaki</span> <br>Loại xe mang lại thách thức tốc độ mới luôn làm bạn cảm thách tốt hơn với mọi loại đường đi</p>
                                        <div class="latest-price">
                                            <h3 class="animated">Giá Chỉ <span>92.000.000 VNĐ</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">Chọn Xe Này Ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accessories-area pt-100 pb-100">
                <div class="container-fluid">
                </div>
            </div>

            <div class="testimonial-area pt-50 pb-110">
                <div class="container">
                    <div class="section-title-2 section-title-position">
                        <h2>Người Thử Thách</h2>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="{{('public/frontend/image/team/team1.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>Kawasaki</span> <br>Thách thức giới hạn tốc độ của các bạn ở mọi nơi trên TP.Hồ Chí Minh. Sẽ mang cho các bạn cảm giác mà chỉ có Kawasaki mới đem lại cho bạn</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Vincent Le</h4>
                                            <span>PHP Coder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="{{('public/frontend/image/team/team2.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> <br>Thách thức giới hạn tốc độ của các bạn ở mọi nơi trên TP.Hồ Chí Minh. Sẽ mang cho các bạn cảm giác mà chỉ có Kawasaki mới đem lại cho bạn</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Vincent Le</h4>
                                            <span>DevOps</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="newsletter-area">
                <div class="container">
                    <div class="newsletter-wrapper-all theme-bg-2">
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
                                <div class="newsletter-img bg-img" style="background-image: url({{('public/frontend/image/banner/newsletter-bg.png')}})">
                                    <img alt="image" src="{{('public/frontend/image/banner/newsletter-img.png')}}">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <h3>Đăng Ký</h3>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Nhập email Của bạn....." required>
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div style="    background-color: #001232;bottom: 0;cursor: pointer;display: inline-block;position: absolute;
                                                right: 0;transition: all 0.3s ease 0s; color:#ffffff;"><input type="submit" value="Đăng Ký" name="subscribe" class="button" style="padding-left:10px; padding-right:10px;color:#fff;"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
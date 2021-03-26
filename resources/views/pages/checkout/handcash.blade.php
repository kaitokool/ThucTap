@extends('layout')
@section('content')

    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('public/frontend/image/banner/banner4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Thanh Toán Thành Công</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a>
                    </li>
                        <li>Thanh Toán Thành Công</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="checkout-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3>Cảm Ơn Bạn Đã Đặt Hàng Tại Website Của Chúng Tôi.</h3>
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
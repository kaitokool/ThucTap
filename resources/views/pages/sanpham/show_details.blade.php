@extends('layout')
@section('content')

    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('public/frontend/image/banner/banner4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Chi Tiết Sản Phẩm</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a>
                    </li>
                        <li>Chi Tiết Sản Phẩm</li>
                </ul>
            </div>
        </div>
    </div>

@foreach($product_details as $key => $value)
    <div class="product-details-area fluid-padding-3 ptb-130">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-40">
                            <div class="product-details-large tab-content">
                                <div class="tab-pane active" id="pro-details1">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{URL::to('/public/upload/product/'.$value->product_image)}}">
                                            <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details2">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{URL::to('/public/upload/product/'.$value->product_image)}}">
                                            <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details3">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{URL::to('/public/upload/product/'.$value->product_image)}}">
                                            <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                                <a class="active" href="#pro-details1">
                                    <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                </a>
                                <a href="#pro-details2">
                                    <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                </a>
                                <a href="#pro-details3">
                                    <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            @csrf

                            <input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
                            <h2>{{$value->product_name}}</h2>
                            <div class="product-price">
                                <span>{{$value->product_price}} VNĐ</span>
                            </div>
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Giới Thiệu Sản Phẩm</h5>
                                <p>{!!$value->product_desc!!}</p>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="number" value="1" name="qty" min="1" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <button type="submit" class="btn-style cr-btn" style="width: 175px !important; height: 48px !important;"><span>add to cart</span></button>
                                </div>
                            </div>
                            <div class="product-categories">
                                <h5 class="pd-sub-title">Thể Loại Sản Phẩm</h5>
                                <ul>
                                    <li>
                                        <a href="#">{{$value->category_name}}</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper-all theme-bg-2">
            <div class="row">
                <div class="col-lg-5 col-12 col-md-12">
                    <div class="newsletter-img bg-img" style="background-image: url({{asset('public/frontend/image/banner/newsletter-bg.png')}})">
                        <img alt="image" src="{{asset('public/frontend/image/banner/newsletter-img.png')}}">
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
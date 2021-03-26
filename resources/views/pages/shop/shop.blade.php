@extends('layout')
@section('content')

    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('public/frontend/image/banner/banner4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Sản Phẩm</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a>
                    </li>
                    <li>Sản Phẩm</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-sidebar-area pr-60">
                        <div class="sidebar-widget pb-55">
                            <h3 class="sidebar-widget">Tìm Kiếm Sản Phẩm</h3>
                            <div class="sidebar-search">
                                <form action="{{URL::to('/tim-kiem/')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="keywords_submit" placeholder="Sản Phẩm Tìm Kiếm .....">
                                    <button name="search_items" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget pb-50">
                            <h3 class="sidebar-widget">Thể Loại Sản Phẩm</h3>
                            <div class="widget-categories">
                                <ul>
                                    @foreach($category as $key => $danhmuc)
                                        <li><a href="{{URL::to('/danh-muc/'.$danhmuc->category_id)}}">{{$danhmuc->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper">
                        <div class="grid-list-options">
                            <ul class="view-mode">
                                <li class="active"><a href="#product-grid" data-view="product-grid"><i class="pe-7s-albums"></i></a></li>
                                <li><a href="#product-list" data-view="product-list"><i class="pe-7s-menu"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-list-product-wrapper tab-content">
                        <div id="new-product" class="product-grid product-view tab-pane active">
                            <div class="row">
                                @foreach($all_product as $key => $product)
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
                                                    <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="">
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
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">{{$product->product_name}}</a></h2>
                                                <div class="product-price">
                                                    <span>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</span>
                                                </div>
                                                <p>{{$product->product_desc}}</p>
                                                <div class="shop-list-cart">
                                                    <a href=""><i class="ti-shopping-cart"></i> Thêm Giỏ Hàng</a>
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
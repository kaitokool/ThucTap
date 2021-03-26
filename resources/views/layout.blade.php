<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DemoThucTap</title>
        <meta name="description" content="FullDemoThucTap">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- all css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <link rel="stylesheet" href="{{asset('public/frontend/css/icofont.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/ie7.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/chosen.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/easyzoom.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
            <header>
                <div class="header-area transparent-bar ptb-55">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <p style="font-size: 32px;">VuGOD</p>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>Hãy liên hệ với chúng tôi qua: 123456789</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="{{asset('public/frontend/image/icon-img/menu.png')}}">
                                            <img class="s-close" alt="" src="{{asset('public/frontend/image/icon-img/menu-close.png')}}">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a></li>
                                                    <li>
                                                        <a href="{{URL::to('/shop/')}}">Shop</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="header-cart cart-small-device">
                                    <button class="icon-cart">
                                        <i class="pe-7s-cart"></i>
                                        <span class="count-style"></span>
                                        <span class="count-price-add"></span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <ul>

                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Tổng Tiền: <span>0</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a class="btn-style cr-btn" href="{{URL::to('/show-cart/')}}">Giỏ Hàng</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li>
                                                <a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/shop/')}}">Shop</a>
                                            </li>
                                        </ul>
                                    </nav>							
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="header-cart-wrapper">
                        <div class="header-cart">
                            <button class="icon-cart">
                                <i class="pe-7s-cart"></i>
                                <span class="count-style"></span>
                                <span class="count-price-add"></span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{asset('public/frontend/image/cart/kawasakiz650.png')}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                            <span>Price: $275</span>
                                            <span>Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{asset('public/frontend/image/cart/kawasakiz650.png')}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Demonissi Gori</a></h3>
                                            <span>Price: $275</span>
                                            <span class="qty">Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{asset('public/frontend/image/cart/kawasakiz650.png')}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Demonissi Gori</a></h3>
                                            <span>Price: $275</span>
                                            <span class="qty">Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>total: <span>$550.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a class="btn-style cr-btn" href="{{URL::to('/show-cart/')}}">Giỏ Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </header>

            @yield('content')

            <footer>
                <div class="footer-top pt-210 pb-98 theme-bg">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="">
                                            <img src="image/logo/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-about">
                                        <p><span>Website Quản Lý Motobike</span><br>Nơi Có thể thấy được các loại xe cực đẹp cực mạnh đến từ hãng Kawasaki</p>
                                        <div class="footer-support">
                                            <h5>Nếu Muốn Hỗ Trợ</h5>
                                            <span>Vui lòng liên hệ: 123456789</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30 pl-60">
                                    <div class="footer-widget-title">
                                        <h3>Các Trang</h3>
                                    </div>
                                    <div class="quick-links">
                                        <ul>
                                            <li><a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a></li>
                                            <li><a href="{{URL::to('/shop/')}}">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>Liên Hệ</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Địa Chỉ</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>Thành Phố Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Số Điện Thoại</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>123456789</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="image/quick-view/l1.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="image/quick-view/l2.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="image/quick-view/l3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                        <img src="image/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab">
                                        <img src="image/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab">
                                        <img src="image/quick-view/s3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Aerion Carbon Helmet</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
		
		<!-- all js here -->
        <script src="{{asset('public/frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/popper.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/ajax-mail.js')}}"></script>
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
    </body>
</html>

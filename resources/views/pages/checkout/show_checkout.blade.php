@extends('layout')
@section('content')

    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('public/frontend/image/banner/banner4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Kiểm Tra Thông Tin</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/trang-chu/')}}">Trang Chủ</a>
                    </li>
                        <li>Kiểm Tra Thông Tin</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="checkout-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="coupon-accordion">
                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password  <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row">			
                                        <input type="submit" value="Login" />
                                        <label>
                                            <input type="checkbox" />
                                             Remember me
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input type="text" placeholder="Coupon code" />
                                        <input type="submit" value="Apply Coupon" />
                                    </p>
                                </form>
                            </div>
                        </div>				
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-12 col-12">
                    <form action="{{URL::to('/save-checkout-customer')}}" method="POST" id="CheckoutCart">
                        @csrf
                        <div class="checkbox-form">
                            <h3>Điền thông tin gửi hàng</h3>
                            <div class="row">
                                {{-- <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select>
                                          <option value="volvo">bangladesh</option>
                                          <option value="saab">Algeria</option>
                                          <option value="mercedes">Afghanistan</option>
                                          <option value="audi">Ghana</option>
                                          <option value="audi2">Albania</option>
                                          <option value="audi3">Bahrain</option>
                                          <option value="audi4">Colombia</option>
                                          <option value="audi5">Dominican Republic</option>
                                        </select> 										
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email <span class="required">*</span></label>										
                                        <input type="text" name="shipping_email" class="shipping_email" placeholder="Điền email" />
                                    </div>
                                </div>  
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Họ và tên <span class="required">*</span></label>										
                                        <input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên người gửi" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ gửi hàng</label>
                                        <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ gửi hàng" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Số điện thoại <span class="required">*</span></label>										
                                        <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại"/>
                                    </div>
                                </div>
                                <div class="order-notes col-md-12">
                                    <div class="checkout-form-list mrg-nn">
                                        <label>Ghi chú đơn hàng của bạn</label>
                                        <textarea name="shipping_notes" class="shipping_notes" id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú đơn hàng của bạn" ></textarea>
                                    </div>									
                                </div>					
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Địa Chỉ Khác?</label>
                                        <input id="ship-box" type="checkbox" />
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">
                                    <div class="col-md-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select>
                                              <option value="volvo">bangladesh</option>
                                              <option value="saab">Algeria</option>
                                              <option value="mercedes">Afghanistan</option>
                                              <option value="audi">Ghana</option>
                                              <option value="audi2">Albania</option>
                                              <option value="audi3">Bahrain</option>
                                              <option value="audi4">Colombia</option>
                                              <option value="audi5">Dominican Republic</option>
                                            </select> 										
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>										
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>										
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">									
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>										
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>										
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>										
                                            <input type="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Phone  <span class="required">*</span></label>										
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>								
                                </div>
                            </div>													
                        </div>
                        <div class="order-button-payment">
                            <input type="submit" value="Gửi" form="CheckoutCart"/>
                        </div>
                    </form>
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
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

    <div class="product-cart-area pt-120 pb-130">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                        $content = Cart::content();
                    ?>

                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">products</th>
                                    <th class="product-price">products name</th>
                                    <th class="product-name">price</th>
                                    <th class="product-price" style="text-align: center;">quantity</th>
                                    <th class="product-quantity">total</th>
                                    <th class="product-subtotal" style="text-align: center;">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($content as $v_content)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href=""><img width="90" src="{{URL::to('public/upload/product/'.$v_content->options->image)}}" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">{{$v_content->name}}</a>
                                        </td>
                                        <td class="product-price"><span class="amount">{{number_format($v_content->price).' '.'vnđ'}}</span></td>
                                        <td class="product-quantity">
                                            <div class="quantity-range">
                                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST" style="text-align: -webkit-center;">
                                                    {{ csrf_field() }}
                                                    <input class="input-text qty text" name="cart_quantity" type="number" step="1" min="0" value="{{$v_content->qty}}" title="Qty" size="4">
                                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                                    <input type="submit" name="update_qty" class="btn-style cr-btn" value="Cập Nhật" style="display: flex;width: 150px;justify-content: center;margin-top: 5px;">
                                                </form>
                                            </div>
                                        </td>
                                        <?php
                                            $subtotal = $v_content->price * $v_content->qty;
                                        ?>
                                        <td class="product-subtotal"><?php echo number_format($subtotal).' '.'vnđ';?></td>
                                        <td class="product-cart-icon product-subtotal"><a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="ti-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="shop-total">
                        <h3>Tổng Thể</h3>
                        <ul>
                            <li>
                                Tổng
                                <span>{{Cart::total().' '.'vnđ'}}</span>
                            </li>
                            <li>
                                Thuế
                                <span>{{Cart::tax().' '.'vnđ'}}</span>
                            </li>
                            <li class="order-total">
                                Phí vận chuyển
                                <span>Free</span>
                            </li>
                            <li>
                                Thành Tiền
                                <span>{{Cart::total().' '.'vnđ'}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-btn text-center mb-15">
                        <a href="{{URL::to('/login-checkout/')}}">Thanh Toán</a>
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
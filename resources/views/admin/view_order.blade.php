@extends('admin_layout')
@section('admin_content')

<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                    </i>
                </div>
                <div>Thông tin Đơn Hàng
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<script type="text/javascript">alert("'.$message.'");</script>';
                        Session::put('message',null);
                    }
                ?>
                <div class="card-body"><h5 class="card-title">Thông tin đăng nhập</h5>
                    <table class="mb-0 table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$order_by_id->customer_name}}</td>
                                <td>{{$order_by_id->customer_phone}}</td>
                                <td>{{$order_by_id->customer_email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Thông tin vận chuyển hàng</h5>
                    <table class="mb-0 table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>Tên người vận chuyển</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Ghi chú</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$order_by_id->shipping_name}}</td>
                                <td>{{$order_by_id->shipping_address}}</td>
                                <td>{{$order_by_id->shipping_phone}}</td>
                                <td>{{$order_by_id->shipping_email}}</td>
                                <td>{{$order_by_id->shipping_notes}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Liệt kê chi tiết đơn hàng</h5>
                    <table class="mb-0 table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá sản phẩm</th>
                            <th>Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$order_by_id->product_name}}</td>
                                <td>{{$order_by_id->product_sales_quantity}}</td>
                                <td>{{number_format($order_by_id->product_price ,0,',','.')}} đ</td>
                                <td>{{$order_by_id->order_total}} đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
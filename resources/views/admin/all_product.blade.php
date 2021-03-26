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
                <div>Quản Lý Sản Phẩm
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
                <div class="card-body"><h5 class="card-title">Quản Lý Sản Phẩm</h5>
                    <table class="mb-0 table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Hình sản phẩm</th>
                            <th>Danh mục</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($all_product as $key => $pro)

                                <tr>
                                    <td>{{ $pro->product_name }}</td>
                                    <td>{{ $pro->product_quantity }}</td>
                                    <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
                                    <td><img src="public/upload/product/{{ $pro->product_image }}" height="131" width="100"></td>
                                    <td>{{ $pro->category_name }}</td>
                                    <td>
                                        <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                            <i class="far fa-edit text-success text-active"></i>
                                        </a>

                                        <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-times text-danger text"></i>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
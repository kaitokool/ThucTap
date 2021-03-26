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
                <div>Quản Lý Đơn Hàng
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
                <div class="card-body"><h5 class="card-title">Liệt kê đơn hàng</h5>
                    <table class="mb-0 table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>Thứ tự</th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày tháng đặt hàng </th>
                        </tr>
                        </thead>
                        <tbody>
                            @php 
                                $i = 0;
                            @endphp
                            @foreach($all_order as $key => $ord)
                                @php 
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ $ord->customer_name }}</td>
                                    <td>{{ $ord->order_total }}</td>
                                    <td>
                                        @if($ord->order_status==1)
                                            Đơn hàng mới
                                        @else 
                                            Đã xử lý
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/view-order/'.$ord->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-eye text-success text-active"></i>
                                        </a>

                                        <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này ko?')" href="{{URL::to('/delete-order/'.$ord->order_id)}}" class="active styling-edit" ui-toggle-class="">
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
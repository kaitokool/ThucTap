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
                <div>Danh Mục Sản Phẩm
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
                <div class="card-body"><h5 class="card-title">Danh Mục Sản Phẩm</h5>
                    <table class="mb-0 table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th>Tên Danh Mục</th>
                            <th>Mô Tả</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($all_category_product as $key => $cate_pro)
                                <tr>
                                    <td>{{ $cate_pro->category_name }}</td>
                                    <td>{{ $cate_pro->category_desc }}</td>
                                    <td>
                                        <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" ui-toggle-class="">
                                            <i class="far fa-edit text-success text-active"></i>
                                        </a> 

                                        <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" ui-toggle-class="">
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
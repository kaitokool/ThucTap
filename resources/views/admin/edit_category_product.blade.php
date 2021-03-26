@extends('admin_layout')
@section('admin_content')
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Danh Mục Sản Phẩm
                    <div class="page-title-subheading">Nhập Dữ Liệu Danh Mục Sản Phẩm
                    </div>
                </div>
            </div>  
        </div>
    </div>    

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Sửa Danh Mục Sản Phẩm</h5>
                    @foreach($edit_category_product as $key => $edit_value)
                    <form class="" role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                        {{ csrf_field() }}

                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tên Danh Mục Sản Phẩm</label>
                            <div class="col-sm-10">
                                <input name="category_product_name" id="exampleEmail" value="{{$edit_value->category_name}}" placeholder="Mời Điền Tên Vào" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Mô Tả</label>
                            <div class="col-sm-10">
                                <textarea name="category_product_desc" id="exampleText" class="form-control">{{$edit_value->category_desc}}</textarea>
                            </div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" name="update_category_product" class="btn btn-secondary">Cập Nhật Danh Mục</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
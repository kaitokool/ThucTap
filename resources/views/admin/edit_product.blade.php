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
                <div>Cập Nhật Sản Phẩm
                    <div class="page-title-subheading">Cập Nhật Sản Phẩm
                    </div>
                </div>
            </div>
        </div>
    </div>            

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Cập Nhật Sản Phẩm</h5>
                    @foreach($edit_product as $key => $pro)

                        <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-10"><input name="product_name" id="exampleEmail" placeholder="Tên sản phẩm" type="text" class="form-control" value="{{$pro->product_name}}"></div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">SL sản phẩm</label>
                                <div class="col-sm-10"><input name="product_quantity" id="exampleEmail" placeholder="Điền số lượng" type="text" class="form-control" value="{{$pro->product_quantity}}"></div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                                <div class="col-sm-10"><input name="product_price" id="exampleEmail" placeholder="Giá sản phẩm" type="text" class="form-control" value="{{$pro->product_price}}"></div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Hình ảnh sản phẩm</label>
                                <div class="col-sm-10"><input name="product_image" id="exampleFile" type="file" class="form-control-file">
                                    <small class="form-text text-muted">Nó nhẹ hơn một chút và dễ dàng chuyển sang dòng mới.</small>
                                    <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" height="131" width="100">
                                </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Mô tả sản phẩm</label>
                                <div class="col-sm-10"><textarea name="product_desc" style="resize: none"  rows="8" id="exampleText" class="form-control" placeholder="Mô tả sản phẩm">{{$pro->product_desc}}</textarea></div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Nội dung sản phẩm</label>
                                <div class="col-sm-10"><textarea name="product_content" style="resize: none"  rows="8" id="exampleText" class="form-control" placeholder="Nội dung sản phẩm">{{$pro->product_content}}</textarea></div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Danh mục sản phẩm</label>
                                <div class="col-sm-10">
                                    <select name="product_cate" id="exampleSelect" class="form-control">
                                        @foreach($cate_product as $key => $cate)
                                                @if($cate->category_id==$pro->category_id)
                                                    <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                                @else
                                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                                @endif
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" name="add_product" class="btn btn-secondary">Cập Nhật Sản Phẩm</button>
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
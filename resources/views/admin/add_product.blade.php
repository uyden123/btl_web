@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm product sản phẩm
                </header>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo '<span class="text-alert text-danger justify-content-center text-center">'.$message.'</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{ URL::to('/save-product') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên product</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên product">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug product</label>
                                <input type="text" name="slug_product" class="form-control" id="exampleInputEmail1" placeholder="Tên product">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gia product moi</label>
                                <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Tên product">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gia product cu</label>
                                <input type="text" name="product_price_old" class="form-control" id="exampleInputEmail1" placeholder="Tên product">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên product</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả product</label>
                                <textarea type="password" style="resize: none;" rows="5" name="product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả product"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Noi dung product</label>
                                <textarea type="password" style="resize: none;" rows="5" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Mô tả product"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Danh muc san pham</label>
                                <select name="cate_product" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate)
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                            <button type="submit" name="add_brand_product" class="btn btn-info">Thêm</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection

@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Upadte danh mục sản phẩm
                </header>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo '<span class="text-alert text-danger justify-content-center text-center">'.$message.'</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    @foreach($edit_category_product as $key => $edit_value)
                        <div class="position-center">
                            <form action="{{ URL::to('/update-category-product/'.$edit_value->category_id) }}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{ $edit_value->category_name }}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" value="{{ $edit_value->slug_category_product }}" name="slug_category_product" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea type="password" style="resize: none;" rows="5" name="category_product_desc" class="form-control" id="exampleInputPassword1">{{ $edit_value->category_desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select name="category_parent" class="form-control input-sm m-bot15">
                                        @if($edit_value->category_parent_id==0)
                                            <option value="0">---Danh muc cha---</option>
                                        @else
                                            <option value="0">{{ $edit_value->category_name }}</option>
                                            <option value="0">---Danh muc cha---</option>
                                        @endif
                                        @foreach($category as $key => $val)
                                            <option value="{{$val->category_id}}">{{$val->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="update_category_product" class="btn btn-info">Thêm</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
@endsection

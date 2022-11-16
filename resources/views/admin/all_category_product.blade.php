@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liệt kê danh mục sản phẩm
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Bulk action</option>
                            <option value="1">Delete selected</option>
                            <option value="2">Bulk edit</option>
                            <option value="3">Export</option>
                        </select>
                        <button class="btn btn-sm btn-default">Apply</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php
                    $message = Session::get('message');
                    if ($message){
                        echo '<span class="text-alert text-danger justify-content-center text-center">'.$message.'</span>';
                        Session::put('message', null);
                    }
                    ?>
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên danh mục</th>
                            <th>Thuoc danh mục</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th style="width:30px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_category_product as $key => $cate_pro)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{ $cate_pro->category_name }}</td>
                                <td>
                                    @if($cate_pro->category_parent_id==0)
                                        <p style="color: red">Danh muc cha</p>
                                    @else
                                        @foreach($all_category_product as $key => $cate_sub_pro)
                                            @if($cate_sub_pro->category_id==$cate_pro->category_parent_id)
                                                <p style="color: #1d2124">{{$cate_sub_pro->category_name}}</p>
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $cate_pro->slug_category_product }}</td>
                                <td>
                                <span class="text-ellipsis">
                                    @if ($cate_pro->category_status==0)
                                        <a href="{{ URL::to('/unactive-category-product/'.$cate_pro->category_id) }}"><i class="fa fa-thumbs-down" style="font-size: 18px; color: #1d2124"></i></a>
                                    @else
                                        <a href="{{ URL::to('/active-category-product/'.$cate_pro->category_id) }}"><i class="fa fa-thumbs-up" style="font-size: 18px; color: #4cae4c"></i></a>
                                    @endif
                                </span>
                                </td>
                                <td>
                                    <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active" style="font-size: 18px" ui-toggle-class="">
                                        <i class="fa fa-check text-success text-active"></i>
                                    </a>
                                    <a onclick="return confirm('may chac chu (-_-)')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active" style="font-size: 18px" ui-toggle-class="">
                                        <i class="fa fa-times text-danger text"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">

                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
@endsection

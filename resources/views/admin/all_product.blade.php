@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liệt kê sản phẩm
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
                            <th>Tên san pham</th>
                            <th>Slug</th>
                            <th>Hinh anh</th>
                            <th>Gia</th>
                            <th>Danh muc</th>
                            <th>Trạng thái</th>
                            <th style="width:30px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_product as $key => $pro)
                            <tr>
                                <td>{{ $pro->product_name }}</td>
                                <td><img src="public/upload/product/{{$pro->product_image}}" height="100px" width="100px"></td>
                                <td>{{ $pro->product_price }}</td>
                                <td>{{ $pro->category_name }}</td>
                                <td>
                                <span class="text-ellipsis">
                                    @if ($pro->product_status==0)
                                        <a href="{{ URL::to('/unactive-product/'.$pro->product_id) }}"><i class="fa fa-thumbs-down" style="font-size: 18px; color: #1d2124"></i></a>
                                    @else
                                        <a href="{{ URL::to('/active-product/'.$pro->product_id) }}"><i class="fa fa-thumbs-up" style="font-size: 18px; color: #4cae4c"></i></a>
                                    @endif
                                </span>
                                </td>
                                <td>
                                    <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active" style="font-size: 18px" ui-toggle-class="">
                                        <i class="fa fa-check text-success text-active"></i>
                                    </a>
                                    <a onclick="return confirm('may chac chu (-_-)')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active" style="font-size: 18px" ui-toggle-class="">
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

@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/dataTables.bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('public/backend/css/jquery.dataTables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">Quản lý đơn hàng</header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
                    <div class="box-body">
                        @include('components.errors')
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Thời gian đặt</th>
                                    <th>Tình trạng đơn hàng</th>
                                    <th>Cập nhật</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $key => $v_order)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{ $v_order->order_code }}</td>
                                    <td>{{ $v_order->created_at }}</td>
                                    <td>{{ $v_order->order_status }}</td>
                                    <td>
                                        <a href="{{URL::to('/view-order/'.$v_order->order_code)}}">
                                            <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/delete-order/'.$v_order->order_code)}}">
                                            <i style="font-size: 20px;" class="fa fa-trash" aria-hidden="false"></i>
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
    </section>
</div>
@endsection

@section('footerSection')
<script src="{{ asset('public/backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/backend/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $("#example1").DataTable();
</script>

@endsection
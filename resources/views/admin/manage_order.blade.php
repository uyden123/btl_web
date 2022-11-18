@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liệt kê đơn hàng
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
                            <th>STT</th>
                            <th>Ma don hang</th>
                            <th>Thoi gian dat</th>
                            <th>Tinh trang don hang</th>
                            <th>J do</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                        ?>
                        @foreach($order as $key => $v_order)
                            <?php
                            $i++;
                            ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{ $v_order->order_code }}</td>
                                <td>{{ $v_order->created_at }}</td>
                                <td>{{ $v_order->order_status }}</td>
                                <td>
                                    <a href="{{URL::to('/view-order/'.$v_order->order_code)}}" class="active" style="font-size: 18px" ui-toggle-class="">
                                        <i class="fa fa-eye text-success text-active"></i>
                                    </a>
                                    <a onclick="return confirm('may chac chu (-_-)')" href="{{URL::to('/delete-order/'.$v_order->order_code)}}" class="active" style="font-size: 18px" ui-toggle-class="">
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
@endsection

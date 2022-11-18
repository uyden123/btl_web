@extends('shop.shop')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/minh-style.css')}}">
@endsection

@section('content')
    <div class="checkout-area m-5">
        <div class="container wow fadeInUp" data-wow-delay=".1s">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="cart-wrapper checkout-wrapper">
                        <h5 class="text-uppercase">xem lai gio hang</h5>
                        <div class="table-content table-responsive">
                            <?php
                            $content = Cart::content();
                            ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Ảnh sản phẩm</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($content as $value_content)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#" class="img">
                                                <img src="{{URL::to('/public/upload/product/'.$value_content->options->image)}}" alt=" ">
                                            </a>
                                            <a href="{{URL::to('/delete-to-cart/'.$value_content->rowId)}}" class="product-remove"><i class="fal fa-times"></i></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$value_content->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{number_format($value_content->price).'đ'}}</span></td>
                                        <td class="product-quantity">
                                            <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                                                @csrf
                                                <input type="number" value="{{$value_content->qty}}" min="1" name="cart_quantity">
                                                <input type="hidden" value="{{$value_content->rowId}}" name="rowId_cart">
                                                <input type="submit" value="Cap nhat" name="update_qty" class="bg-white border border-2">
                                            </form>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">
                                            <?php
                                                $subtotal = $value_content->price * $value_content->qty;
                                                echo number_format($subtotal).'đ';
                                                ?>
                                        </span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h5 class="text-uppercase pt-4">chon hinh thuc thanh toan</h5>
                        <form action="{{URL::to('/order-place')}}" method="post">
                            @csrf
                        <ul style="list-style: none; margin-left: -30px">
                            <li>
                                <label><input name="payment_option" value="1" type="checkbox">CK</label>
                            </li>
                            <li>
                                <label><input name="payment_option" value="2" type="checkbox">Tiền mặt</label>
                            </li>
                        </ul>
                            <input type="submit" class="site-btn" style="float: right" value="ĐẶT HÀNG">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

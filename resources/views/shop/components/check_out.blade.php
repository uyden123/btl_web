<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Thanh toán</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/minh-style.css')}}">
</head>
<body>
<!-- body_wrap - start -->
<div>
    @include('components.header')

    <main>
        @include('components.breadcrumb')

        <div class="checkout-area m-5">
            <div class="container wow fadeInUp" data-wow-delay=".1s">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="cart-wrapper checkout-wrapper">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="checkout-top">
                                        <div class="tab-content" id="pdContent">
                                            <div class="tab-pane fade show active" id="pd-1" role="tabpanel" aria-labelledby="pd-1-tab">
                                                <div class="cart-form">
                                                    <form action="{{URL::to('/save-checkout-customer')}}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">

                                                                    <label for="name"> Họ và tên</label>
                                                                    <input type="text" name="shipping_name" id="name" placeholder="VD: Nguyễn Văn A">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="tel">Số điện thoại</label>
                                                                    <input type="tel" name="shipping_phone" id="tel" placeholder="VD: 0966 666 666">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="name">Địa chỉ</label>
                                                                    <input type="text" name="shipping_address" id=" name" placeholder="VD: Đường Nguyễn Bình Quận Lê Chân Hải Phòng">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" name="shipping_email" id="email" placeholder="Nhập địa chỉ mail">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="ainfo">Ghi chú</label>
                                                                    <textarea cols="5" name="shipping_desc" id="ainfo" placeholder="Vui lòng điền các lưu ý cần bổ sung cho đơn hàng"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-end">
                                                            <div class="col-xl-3 col-lg-7">
                                                                <div class="cart-total mt-100">
                                                                    <h2 class="title text-uppercase">Tổng tiền</h2>
                                                                    <div class="ct-sub">
                                                                        <span>Tổng tiền</span>
                                                                        <span>...VNĐ</span>
                                                                    </div>
                                                                    <div class="ct-sub ct-sub__total">
                                                                        <span>Thanh toán</span>
                                                                        <span>...VNĐ</span>
                                                                    </div>
                                                                    <input type="submit" class="site-btn" value="Thanh toán ngay">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<!-- body_wrap - end -->

@include('components.footer')

@include('components.js')

</body>
</html>

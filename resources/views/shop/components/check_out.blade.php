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
                                                    <form action="https://xpressrow.com/html/cafena/cafena/checkout.html">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">

                                                                    <label for="name"> Họ và tên*</label>
                                                                    <input type="text" name="name" id="name" placeholder="VD: Nguyễn Văn A">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="tel">Số điện thoại*</label>
                                                                    <input type="tel" name="tel" id="tel" placeholder="VD: 0966 666 666">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="name">Địa chỉ *</label>
                                                                    <input type="text" name="name" id=" name" placeholder="VD: Đường Nguyễn Bình Quận Lê Chân Hải Phòng">
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" name="email" id="email" placeholder="Nhập địa chỉ mail">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="ainfo">Ghi chú</label>
                                                                    <textarea name="ainfo" id="ainfo" placeholder="Vui lòng điền các lưu ý cần bổ sung cho đơn hàng"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pd-2" role="tabpanel" aria-labelledby="pd-2-tab">
                                                <div class="cart-form">
                                                    <form action="https://xpressrow.com/html/cafena/cafena/checkout.html">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="fname2">Họ và tên*</label>
                                                                    <input type="text" name="fname2" id="fname2" placeholder="Nhập Họ và tên">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="hname2">Địa chỉ *</label>
                                                                    <input type="text" name="hname2" id="hname2" placeholder="Nhập địa chỉ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="tel2">Số điện thoại</label>
                                                                    <input type="tel" name="tel2" id="tel2" placeholder="Nhập số điện thoại">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="email2">Email</label>
                                                                    <input type="email" name="email2" id="email2" placeholder="Nhập địa chỉ email">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="ainfo2">Ghi chú</label>
                                                                    <textarea name="ainfo2" id="ainfo2" placeholder="Nhập ghi chú quan trọng vào đây"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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
                                                <a href="checkout.html" class="site-btn">Thanh toán ngay</a>
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

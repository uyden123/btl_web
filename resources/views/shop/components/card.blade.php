
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Thanh toán</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')}}')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/minh-style.css')}}">

</head>
<body>
<!-- body_wrap - start -->
<div>
    @include('components.header')

    <main>

        @include('components.breadcrumb')

        <!-- cart area start -->
        <div class="cart-area pt-120 pb-120">
            <div class="container wow fadeInUp" data-wow-delay=".1s">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-wrapper">
                            <div class="table-content table-responsive">
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
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#" class="img">
                                                <img src="{{asset('public/frontend/images/shop/cafe_hat/cf-1.jpg')}}" alt=" ">
                                            </a>
                                            <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                        </td>
                                        <td class="product-name"><a href="#">Sản phẩm 1</a></td>
                                        <td class="product-price"><span class="amount"> 1 VNĐ</span></td>
                                        <td class="product-quantity">
                                            <input type="number" placeholder=" 0 ">
                                        </td>
                                        <td class="product-subtotal"><span class="amount">..VNĐ</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#" class="img">
                                                <img src="{{asset('public/frontend/images/shop/cafe_hat/cf_2.jpg')}}" alt=" ">
                                            </a>
                                            <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                        </td>
                                        <td class="product-name"><a href="#">Sản phẩm 2</a></td>
                                        <td class="product-price"><span class="amount">2 VNĐ</span></td>
                                        <td class="product-quantity">
                                            <input type="number" placeholder=" 0 ">
                                        </td>
                                        <td class="product-subtotal"><span class="amount">..VNĐ</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#" class="img">
                                                <img src="{{asset('public/frontend/images/shop/cafe_hat/cf_2.jpg')}}" alt=" ">
                                            </a>
                                            <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                        </td>
                                        <td class="product-name"><a href="#">Sản phẩm 3</a></td>
                                        <td class="product-price"><span class="amount">3 VNĐ</span></td>
                                        <td class="product-quantity">
                                            <input type="number" placeholder=" 0 ">
                                        </td>
                                        <td class="product-subtotal"><span class="amount">..VNĐ</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#" class="img">
                                                <img src="{{asset('public/frontend/images/shop/cafe_hat/cf_2.jpg')}}" alt=" ">
                                            </a>
                                            <a href="#" class="product-remove"><i class="fal fa-times"></i></a>
                                        </td>
                                        <td class="product-name"><a href="#">Sản phẩm 4</a></td>
                                        <td class="product-price"><span class="amount">4 VNĐ</span></td>
                                        <td class="product-quantity">
                                            <input type="number" placeholder=" 0 ">
                                        </td>
                                        <td class="product-subtotal"><span class="amount">..VNĐ</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-3 col-lg-7">
                        <div class="cart-total mt-100 m-lg-5">
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
        <!-- cart area end -->
    </main>

</div>
<!-- body_wrap - end -->

@include('components.footer')

@include('components.js')

</body>
</html>

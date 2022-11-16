<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Coffee shop</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')

</head>
<body>

@include('components.header')

<main>
    @include('components.breadcrumb')

    <!-- details_section - end
    ================================================== -->
    <section class="details_section shop_details sec_ptb_120 bg_default_gray">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-6 col-md-7">
                    <div class="details_image_wrap wow fadeInUp" data-wow-delay=".1s">
                        <img src="{{asset('public/frontend/images/shop/cafe_hat/cf-1.jpg')}}" class="space_img img_fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="details_content wow fadeInUp" data-wow-delay=".2s">
                        <div class="details_flex_title">
                            <h2 class="details_title text-uppercase">Cafe trung nguyên cao cấp</h2>
                        </div>
                        <div class="text-uppercase">
                            <span class="badge bg-secondary">Cafe hạt</span>
                        </div>
                        <h5 class="mt-2 mb-2">Tên chi tiết: Cà Phê Hạt Rang Mộc Trung Nguyên Legend Success 1 340g</h5>
                        <div class="details_price">
                            <span class="price_text"><del>650.000</del> /
                                <strong class="price_text_1">450.000
                                    <span class="text-uppercase badge bg-danger text-center align-items-center justify-content-center ">33,33% giảm</span>
                                </strong>
                            </span>
                        </div>
                        <div class="delivery mb-2">
                            <i class="fas fa-truck"></i>
                            Miễn phí vẫn chuyển toàn quốc
                        </div>
                        <ul class="btns_group ul_li">
                            <li>
                                <div class="quantity_input quantity_boxed">
                                    <h4 class="quantity_title text-uppercase">Số lượng:</h4>
                                    <form action="#">
                                        <button type="button" class="input_number_decrement">–</button>
                                        <input class="input_number" type="text" value="2">
                                        <button type="button" class="input_number_increment">+</button>
                                    </form>
                                </div>
                            </li>
                            <li><a class="btn btn_secondary text-uppercase ms-2" href="#!">Thêm vào giỏ hàng</a></li>
                        </ul>
                        <div class="details_wishlist_btn">
                        </div>
                        <div class="details_share_links">
                            <h4 class="list_title"><i class="fas fa-share"></i> Chia sẻ</h4>
                            <ul class="social_links social_icons ul_li">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image_similar_products wow fadeInUp" data-wow-delay=".1s">
                <div class="row ">
                    <h6 class="title_products">Ảnh sản phẩm</h6>
                    <div class="col-3">
                        <img class="img-fluid" src="{{asset('public/frontend/images/shop/cafe_hat/cf-1.jpg')}}">
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" src="{{asset('public/frontend/images/shop/cafe_hat/cf-1.jpg')}}">
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" src="{{asset('public/frontend/images/shop/cafe_hat/cf-1.jpg')}}">
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" src="{{asset('public/frontend/images/shop/cafe_hat/cf-1.jpg')}}">
                    </div>
                </div>
            </div>

            <div class="product_description_wrap wow fadeInUp" data-wow-delay=".1s">
                <div class="row">
                    <h6 class="title_products">Mô tả sản phẩm</h6>
                    <p>Cà Phê Hạt Rang Mộc Legend Success 1 Trung Nguyên - Cà phê mang đậm hương sắc Việt</p>
                    <p>
                        Nếu bạn là người sành cà phê thứ thiệt thì cà phê gói pha sẵn chắc chắn không đủ làm hài lòng khẩu vị của bạn bằng một ly cà phê phin đâu nhỉ? Sẽ thật tuyệt vời khi có cảm giác tự xay, tự pha và chờ đợi từng giọt cà phê tí tách trong chiếc phin nhỏ, và rồi được tận hưởng những nét đặc trưng của Cà Phê Hạt Mộc Legend Success 1 Trung Nguyên
                    </p>
                    <p>Chỉ chứa 2,5% hàm lượng Caffeine, cực phẩm này của Trung Nguyên là sự lựa chọn hoàn hảo cả về chất lượng, mùi vị và sắc màu.</p>
                    <p>Màu sắc: Màu nâu đặc trưng của sản phẩm, hạt rang chín đều, không cháy</p>
                    <p>
                        Mùi vị: Mùi thơm nồng của hạt arabica, đậm vị của hạt robusta, hương vị độc đáo, tròn vị, thể chất mạnh nhưng cân bằng, hậu vị ngọt dịu. Đó sẽ chính là hương vị tuyệt vời, mang lại nhiều cảm xúc và sự tinh tế giúp bạn khởi đầu một ngày mới thành công.
                    </p>
                    <p>Kiểu rang: Rang vừa – Medium roast</p>
                    <p>Trọng lượng tịnh: 340 gram</p>
                    <p>Hạn sử dụng: 24 tháng kể từ NSX</p>
                </div>
            </div>
        </div>
    </section>
    <!-- details_section - end
    ================================================== -->

</main>

@include('components.footer')

@include('components.js')

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Bài viết</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/blog.css')}}">
</head>

<body>
@include('components.header')

<!--body-main-section-->
<main>
    @include('components.breadcrumb')

    <!-- blog area start -->
    <div class="blog-area pt-120 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog__wrapper mt-none-30">
                        <article class="blog__post mt-30 wow fadeInUp" data-wow-delay=".1s">
                            <div class="thumb">
                                <img src="{{asset('public/frontend/images/blog/blog-post-1.jpg')}}" alt="">
                            </div>
                            <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                <li><a href="#0"><i class="fal fa-file"> Cafe</i></a></li>
                                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 25-10-2022</a></li>
                            </ul>
                            <div class="content mt-10">
                                <h2 class="title border-effect mb-10"><a href="blog-details.html">Trung Nguyên Legend có cơ hội đấu lại ông lớn Starbucks</a></h2>
                                <p>Không giống nhiều thị trường khác, ngành công nghiệp cà phê của Trung Quốc ít bị ảnh hưởng bởi đại dịch COVID-19. Điều này khiến cuộc chiến tranh giành thị phần của các thương hiệu cà...
                                </p>
                            </div>
                            <div class="bottom mt-35 d-flex align-items-center">
                                <a href="blog-details.html" class="site-btn">đọc thêm</a>
                            </div>
                        </article>
                        <article class="blog__post mt-30 wow fadeInUp" data-wow-delay=".1s">
                            <div class="thumb">
                                <img src="{{asset('public/frontend/images/blog/blog-post-2.jpg')}}" alt="">
                            </div>
                            <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                <li><a href="#0"><i class="fal fa-file"> Cafe</i></a></li>
                                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 25-10-2022</a></li>
                            </ul>
                            <div class="content mt-10">
                                <h2 class="title border-effect mb-10"><a href="blog-details.html">Giá cà phê tại Nhật Bản tăng cao</a></h2>
                                <p>Cà phê chỉ là một trong số nhiều mặt hàng khác tại Nhật Bản đã tăng giá trong suốt thời gian qua do lạm phát và đồng Yen suy yếu...
                                </p>
                            </div>
                            <div class="bottom mt-35 d-flex align-items-center">
                                <a href="blog-details.html" class="site-btn">đọc thêm</a>
                            </div>
                        </article>
                        <article class="blog__post mt-30 wow fadeInUp" data-wow-delay=".1s">
                            <div class="thumb">
                                <img src="{{asset('public/frontend/images/blog/blog-post-3.jpg')}}" alt="">
                            </div>
                            <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                <li><a href="#0"><i class="fal fa-file"> Cafe</i></a></li>
                                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 25-10-2022</a></li>
                            </ul>
                            <div class="content mt-10">
                                <h2 class="title border-effect mb-10"><a href="blog-details.html">Thị trường ngày 21/10: Giá cà phê chạm đáy 13 tháng, khí gas thấp nhất 7 tháng, quặng sắt, cao su cũng giảm</a></h2>
                                <p>Giá vàng tăng trong khi kim loại cơ bản hồi phục trong phiên 20/10. Tuy nhiên, các mặt hàng khác như dầu Brent, cao su, quặng sắt… đều đi xuống.
                                </p>
                            </div>
                            <div class="bottom mt-35 d-flex align-items-center">
                                <a href="blog-details.html" class="site-btn">đọc thêm</a>
                            </div>
                        </article>
                    </div>
                    <div class="cafena-pagination mt-60 wow fadeInUp" data-wow-delay=".1s">
                        <ul>
                            <li><a href="#"><span><i class="far fa-angle-double-left"></i></span></a></li>
                            <li><a href="#"><span>01</span></a></li>
                            <li><a href="#"><span class="current">02</span></a></li>
                            <li><a href="#"><span>03</span></a></li>
                            <li><a href="#"><span>...</span></a></li>
                            <li><a href="#"><span>10</span></a></li>
                            <li><a href="#"><span><i class="far fa-angle-double-right"></i></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar mt-none-30 wow fadeInUp" data-wow-delay=".1s">
                        <div class="widget mt-30">
                            <h2 class="title">Tìm kiếm</h2>
                            <form action="https://xpressrow.com/html/cafena/cafena/index.html" class="search-widget">
                                <input type="search" name="search" id="search" placeholder="Tìm kiếm bài viết">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget mt-30">
                            <h2 class="title">Danh mục bài viết</h2>
                            <ul>
                                <li class="cat-item"><a href="#0">Cafe</a> <span>04</span></li>
                                <li class="cat-item"><a href="#0">Tin tức</a> <span>06</span></li>
                                <li class="cat-item"><a href="#0">Chia sẻ</a> <span>08</span></li>
                                <li class="cat-item"><a href="#0">Pha chế</a> <span>10</span></li>
                                <li class="cat-item"><a href="#0">Bàn luận</a> <span>12</span></li>
                            </ul>
                        </div>
                        <div class="widget mt-30">
                            <h2 class="title">Bài viết mới</h2>
                            <div class="recent-posts">
                                <div class="item d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('public/frontend/images/blog/recent-posts/b-sm-1.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="rp-title border-effect"><a href="blog-details.html">Thị trường cà phê tại nước tỷ dân chỉ tăng chứ không có giảm</a></h5>
                                        <a href="#0" class="date"><i class="fal fa-calendar-alt"></i>  26-10-2022</a>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('public/frontend/images/blog/recent-posts/b-sm-2.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="rp-title border-effect"><a href="blog-details.html">Thị trường cà phê tại nước tỷ dân chỉ tăng chứ không có giảm</a></h5>
                                        <a href="#0" class="date"><i class="fal fa-calendar-alt"></i>  26-19-2022</a>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('public/frontend/images/blog/recent-posts/b-sm-3.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="rp-title border-effect"><a href="blog-details.html">Thị trường cà phê tại nước tỷ dân chỉ tăng chứ không có giảm</a></h5>
                                        <a href="#0" class="date"><i class="fal fa-calendar-alt"></i>  26-10-2022</a>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('public/frontend/images/blog/recent-posts/b-sm-4.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="rp-title border-effect"><a href="blog-details.html">Thị trường cà phê tại nước tỷ dân chỉ tăng chứ không có giảm</a></h5>
                                        <a href="#0" class="date"><i class="fal fa-calendar-alt"></i>  26-10-2002</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget mt-30">
                            <h2 class="title">Tag phổ biến</h2>
                            <div class="tagcloud">
                                <a href="#0">Cafe</a>
                                <a href="#0">Công thức</a>
                                <a href="#0">Pha chế</a>
                                <a href="#0">Hải phòng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
</main>
<!--body-main-section-->

@include('components.footer')
@include('components.js')
</body>

</html>

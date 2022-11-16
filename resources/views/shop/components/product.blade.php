@extends('shop.shop')
@section('content')
<!-- blog area start -->
<div class="shop_section pt-120 pb-105">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="shop-filter-wrapper d-flex justify-content-between align-items-center mb-30 wow fadeInUp" data-wow-delay=".1s">
                    <div class="col-xl-9 col-lg-6 col-md-6">
                        <div class="sf-left">
                            <div class="show-text">
                                <span class="d-inline-flex me-3">Lọc giá: </span>
                                <div class="form-check d-inline-flex me-3">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                                    <label class="form-check-label">Dưới 500K</label>
                                </div>
                                <div class="form-check d-inline-flex me-3" >
                                    <input class="form-check-input me-3" type="checkbox" id="check2" name="option1" value="something">
                                    <label class="form-check-label">Từ 500K - 1 triệu</label>
                                </div>
                                <div class="form-check d-inline-flex me-3">
                                    <input class="form-check-input" type="checkbox" id="check3" name="option1" value="something">
                                    <label class="form-check-label">Từ 1 triệu - 2 triệu</label>
                                </div>
                                <div class="form-check d-inline-flex me-3">
                                    <input class="form-check-input" type="checkbox" id="check4" name="option1" value="something">
                                    <label class="form-check-label">Trên 2 triệu</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="sf-right justify-content-end align-items-center">
                            <div class="sort-wrapper ml-45">
                                <select name="select" id="select">
                                    <option value="1">Xếp theo sản phẩm mới nhất</option>
                                    <option value="2">Xếp theo giá tăng dần</option>
                                    <option value="3">Xếp theo giá giảm dần</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="tab-content wow fadeInUp" data-wow-delay=".1s" id="shop-tabContent">
                    <div class="tab-pane fade show mt-none-30 active" id="shop-tab-1" role="tabpanel" aria-labelledby="shop-tab-1-tab">
                        <div class="row">
                            @foreach($category_by_id as $key => $product)
                            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                    <div class="pp__thumb pp__thumb--2 mt-35">
                                        <a class="item_image" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" class="space_img" alt="">
                                        </a>
                                    </div>
                                    <div class="pp__content pp__content--2 mt-25">
                                        <div class="pp__c-top d-flex align-items-center justify-content-center">
                                            <div class="pp__cat pp__cat--2">
                                                <a href="#">cà phê hạt</a>
                                            </div>
                                        </div>
                                        <h4 class="pp__title pp__title--2">
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a>
                                        </h4>
                                        <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                            <h6 class="label">Giá - </h6>
                                            <span class="price"> {{number_format($product->product_price).'đ'}} / <span class="regular"><del>{{number_format($product->product_price_old).'đ'}}</del></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="cafena-pagination mt-60">
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
        </div>
    </div>
</div>
<!-- blog area end -->
@endsection


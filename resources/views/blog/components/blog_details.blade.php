<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Bài viết</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}')}}">

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
                    <div class="col-xl-8 col-lg-8 wow fadeInUp" data-wow-delay=".1s">
                        <div class="blog__wrapper blog__wrapper--single">
                            <article class="blog__post blog__post--single format format-image">
                                <div class="thumb">
                                    <img src="{{asset($post->image)}}" alt="">
                                </div>
                                <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                    <i class="fal fa-file"></i>
                                    @foreach($post->categories as $category)
                                    <li><a href="{{URL::to('/blog/category/'.$category->slug)}}">{{$category->name}}</a></li>
                                    @endforeach
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i>{{$post->created_at}}</a></li>
                                </ul>
                                <h2>{{$post->title}}</h2>
                                <div class="content mt-10">
                                    {!!htmlspecialchars_decode($post->content)!!}
                                </div>
                                <div class="tag-social-wrapper mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Tags</h4>
                                            <div class="tagcloud">
                                                @foreach($post->tags as $tag)
                                                <a href="{{URL::to('/blog/tag/'.$tag->slug)}}">{{$tag->name}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                        <div class="blog__sidebar mt-none-30">
                            <div class="widget mt-30">
                                <h2 class="title">Tìm kiếm</h2>
                                <form action="{{URL::to('/blog')}}" class="search-widget">
                                    <input type="search" name="search" id="search" placeholder="Tìm kiếm bài viết">
                                    <button type="submit" class="btn"><i class="fal fa-search"> Tìm kiếm</i></button>
                                </form>
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Danh mục bài viết</h2>
                                @foreach($categories as $category)
                                <a class="cat-item" href="{{URL::to('/blog/category/'.$category->slug)}}">
                                    {{$category->name}}
                                    <span>{{sprintf("%02d", $category->all_posts->count())}}</span>
                                </a>
                                @endforeach
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Bài viết mới</h2>
                                <div class="recent-posts">
                                    @foreach($lastest_posts as $post)
                                    <div class="item d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{asset($post->image)}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="rp-title border-effect">
                                                <a href="{{URL::to('/blog/'.$post->slug)}}">
                                                    {{$post->title}}
                                                </a>
                                            </h5>
                                            <a href="#0" class="date"> <i class="fal fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Tag phổ biến</h2>
                                <div class="tagcloud">
                                    @foreach($tags as $tag)
                                    <a href="{{URL::to('/blog/tag/'.$tag->slug)}}">{{$tag->name}}</a>
                                    @endforeach
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
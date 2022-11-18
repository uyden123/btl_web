<!-- breadcrumb_section - start
        ================================================== -->
        <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
            <div class="container">
                <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Tin tức</h1>
                <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>

                    <!-- blog_breadcrumb_start  -->
                    @if(!isset($category) && !isset($tag) && !isset($post) && !isset($search))
                    <li>Tin tức</li>
                    @elseif(isset($category))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li>{{$category->name}}</li>
                    @elseif(isset($tag))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li>{{$tag->name}}</li>
                    @elseif(isset($post))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li><a href="{{URL::to('/blog/category/'.$post->categories->first()->slug)}}">{{$post->categories->first()->name}}</a></li>
                    <li>{{$post->title}}</li>
                    @elseif(isset($search))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li>{{'Search: "'.$search.'"'}}</li>
                    @endif
                    <!-- blog_breadcrumb_end  -->
                    
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
        ================================================== -->

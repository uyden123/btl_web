@extends('admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            <a href="{{URL::to('/admin/blog_tag')}}" class="btn btn-warning">
                <i class="fa fa-arrow-left"> Trở về</i>
            </a>
            Cập nhật TAG bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_tag/'.$tag->id.'/update') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="tag_name">Tên TAG</label>
                            <input type="text" name="tag_name" class="form-control" id="tag_name" value="{{$tag->name}}">
                        </div>
                        <div class="form-group">
                            <label for="tag_slug">Slug</label>
                            <input type="text" name="tag_slug" class="form-control" id="blog_description" value="{{$tag->slug}}">
                        </div>

                        <button type="submit" class="btn btn-info">Thêm TAG</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
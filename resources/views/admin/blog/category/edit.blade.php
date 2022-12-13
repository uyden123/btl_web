@extends('admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            <a href="{{URL::to('/admin/blog_category')}}" class="btn">
                <i class="fa fa-arrow-left"> Trở về</i>
            </a>
            Cập nhật danh mục bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_category/'.$category->id.'/update') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Tên danh mục bài viết</label>
                            <input type="text" name="category_name" class="form-control" id="category_name" value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                            <label for="category_slug">Slug</label>
                            <input type="text" name="category_slug" class="form-control" id="blog_description" value="{{$category->slug}}">
                        </div>

                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
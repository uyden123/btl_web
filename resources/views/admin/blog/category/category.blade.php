@extends('admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            <a href="{{URL::to('/admin/blog_category')}}" class="btn btn-warning">
                <i class="fa fa-arrow-left"> Trở về</i>
            </a>
            Danh mục bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_category/add_blog_category') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Tên danh mục bài viết</label>
                            <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="category_slug">Slug</label>
                            <input type="text" name="category_slug" class="form-control" id="category_slug" placeholder="Nhập slug">
                        </div>

                        <button type="submit" name="add_blog_category" class="btn btn-info">Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
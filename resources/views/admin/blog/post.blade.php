@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/select2.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            <a href="{{URL::to('/admin/blog_post')}}" class="btn btn-warning">
                <i class="fa fa-arrow-left"> Trở về</i>
            </a>
            Thêm bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_post/add_post') }}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="blog_title">Tiêu đề bài viết</label>
                            <input type="text" name="blog_title" class="form-control" id="blog_title" placeholder="Nhập tiêu đề">
                        </div>
                        <div class="form-group">
                            <label for="blog_description">Mô tả</label>
                            <input type="text" name="blog_description" class="form-control" id="blog_description" placeholder="Nhập mô tả">
                        </div>
                        <div class="form-group">
                            <label for="blog_slug">Slug</label>
                            <input type="text" name="blog_slug" class="form-control" id="blog_slug" placeholder="Nhập slug">
                        </div>
                        <div class="form-group">
                            <label for="thumbnails">Ảnh Thumbnails</label>
                            <input type="file" name="blog_thumbnails" id="thumbnails">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Nội dung bài viết</label>
                            <textarea id="editor1" class="textarea" name="blog_content" placeholder="Nhập nội dung bài viết" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Tags</label>
                            <select class="form-control select2 select2-hidden-accessible" name="tags[]" data-placeholder="Chọn Tag" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control select2 select2-hidden-accessible" name="categories[]" data-placeholder="Chọn danh mục" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                <input type="checkbox" name='status' class="pull-left" value="1">
                                Công khai
                            </label>
                        </div>
                        <button type="submit" name="add_blog" class="btn btn-info">Thêm bài viết</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('footerSection')
<script src="{{ asset('public/backend/js/select2.full.min.js') }}"></script>
<script>
    $(".select2").select2();
</script>
<script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>

@endsection
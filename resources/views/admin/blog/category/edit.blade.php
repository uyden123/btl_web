@extends('admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            Thêm TAG bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    <?php
                        $message = Session::get('message');
                        if ($message){
                            echo '<p class="alert alert-success justify-content-center text-center">'.$message.'</p>';
                            Session::put('message', null);
                        }

                        $m_error = Session::get('m_error');
                        if ($m_error){
                            echo '<p class="alert alert-danger justify-content-center text-center">'.$m_error.'</p>';
                            Session::put('message', null);
                        }

                        if(count($errors) > 0){
                            foreach($errors->all() as $error){
                                echo '<p class="alert alert-danger">'.$error.'</p>';
                            }
                        }
                    ?>
                    <form action="{{ URL::to('/blog_category/'.$category->id.'/update') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Tên danh mục bài viết</label>
                            <input type="text" name="category_name" class="form-control" id="category_name"
                                value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                            <label for="category_slug">Slug</label>
                            <input type="text" name="category_slug" class="form-control" id="blog_description"
                                value="{{$category->slug}}">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                        <a href="{{URL::to('/blog_category')}}" class="btn btn-warning">Trở về</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
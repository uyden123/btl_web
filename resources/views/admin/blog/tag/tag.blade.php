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
                    <form action="{{ URL::to('/blog_tag/add_blog_tag') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="tag_name">Tên TAG</label>
                            <input type="text" name="tag_name" class="form-control" id="tag_name"
                                placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="tag_slug">Slug</label>
                            <input type="text" name="tag_slug" class="form-control" id="blog_description"
                                placeholder="Nhập slug">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Thêm TAG</button>
                        <a href="{{URL::to('/blog_tag')}}" class="btn btn-warning">Trở về</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
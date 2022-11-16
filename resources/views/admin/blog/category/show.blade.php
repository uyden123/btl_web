@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/dataTables.bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('public/backend/css/jquery.dataTables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="panel">
    <header class="panel-heading">Danh mục bài viết</header>

    <div class="row panel-body">
      <div class="col-md-12">
        <div class="box-header" style="margin: 1rem .5rem 1rem 0; text-align:center;">
          <a class=" btn btn-success d-flex" href="{{ URL::to('/blog_category/add_blog_category')}}">Thêm danh mục</a>
        </div>
        <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Tên danh mục</th>
                  <th>Slug</th>
                  <th>Sửa</th>
                  <th>Xoá</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>{{$loop->index + 1}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->slug}}</td>
                  <td>
                    <a href="{{URL::to('/blog_category/'.$category->id.'/edit')}}">
                      <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                  </td>
                  <td>
                    <a  onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/blog_category/'.$category->id.'/delete')}}">
                      <i style="font-size: 20px;" class="fa fa-trash" aria-hidden="false"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('footerSection')
<script src="{{ asset('public/backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/backend/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $("#example1").DataTable();
</script>

@endsection
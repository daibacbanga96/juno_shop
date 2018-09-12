@extends('backend/master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh mục sản phẩm
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Boxed</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Danh mục</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="yUii696BeNDQEZPPtZO2n7xfMyi6Q657EgKH2pbf">                    <div class="box-body">
            <div class="form-group ">
              <label for="exampleInputEmail1">Tên danh mục:</label>
              <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Category">
              <label for="exampleInputEmail1">Thêm ảnh thứ nhất:</label>
              <input type="file" name="cotegory_thu1">
              <label for="exampleInputEmail1">Thêm ảnh thứ hai:</label>
              <input type="file" name="cotegory_thu2">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
          </div>
        </form>
      </div>
      <!-- /.box-body -->



    </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
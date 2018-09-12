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
      
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh mục</h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th style="width: 10px">#</th>
              <th style="width: 25%">Danh mục</th>
              <th>Ảnh đại diện</th>
              <th>Hành động</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Giày xăng đan</td>
              <td>1</td>
              <td style="width: 30%">
              <a class="btn btn-success" href="{{asset('admin/listcatechild')}}"><i class="fa fa-edit"></i>Danh mục con</a>
                <a class="btn btn-warning" href="#"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Giày búp bê</td>
              <td>1</td>
              <td style="width:30%">
              <a class="btn btn-success" href="{{asset('admin/listcatechild')}}"><i class="fa fa-edit"></i>Danh mục con</a>
                <a class="btn btn-warning" href="#"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Giày cao gót</td>
              <td>1</td>
              <td style="width: 30%">
              <a class="btn btn-success" href="{{asset('admin/listcatechild')}}"><i class="fa fa-edit"></i>Danh mục con</a>
                <a class="btn btn-warning" href="#"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
              </td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
            <a class="btn btn-primary" href="{{asset('admin/addcate')}}">Thêm</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop
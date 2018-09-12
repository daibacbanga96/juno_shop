@extends('backend.master')
@section('css')
      <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý Sản phẩm 
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Sản phẩm</li>
      </ol>
    </section>

    <hr>
    <!-- Main content -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 form-group">
            <label for="search_category" class="col-2" style="float: left;">Danh mục</label>
            <select id="search_category" class="form-control">
                    <option value="0">Chọn Danh mục</option>
                    
                    <option value = "1" >Giày cao gót </option>
                    <option value = "2" >Túi sách </option>
                    <option value = "3" >Dép guốc </option>
                    <option value = "4" >Giày snecker </option>
                  
            </select>
        </div>
         
          
      </div>
    </div>
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Sản phẩm</h3>
               
              <a class="btn btn-success pull-right" href="{{asset('admin/addproduct')}}">Thêm</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th style="width:121px">Tên</th>
                  <th>Mã SP</th>
                  <th>Giá</th>
                  <th>Hình ảnh</th>
                  <th>Trạng thái</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <?php $stt = 1; ?>
                
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>Bitis Hunter</td>
                  <td>CD123</td>
                  <td>800,000đ</td>

                  <td><img src="images/banchay1.jpg" alt="" width="75px" height="75px"/></td>
                  <td>Còn hàng</td>
                  <td style="width: 25%">
                    <a class="btn btn-primary" href="{{asset('admin/detail')}}"><i class="fa fa-eye"></i> Chi tiết</a>
                    <a class="btn btn-warning" href="#"><i class="fa fa-edit"></i> Sửa</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                  </td>
                </tr>
               
              </table>
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
    </section>
    </div>
@stop
@extends('backend/master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý bình luận
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
              <h3 class="box-title">Bình luận</h3>
               
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Sản phẩm</th>
                  <th>Nội dung</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <?php $stt=1 ?>
                @foreach($comment as $comments)
                <tr>
                  <td>{{$stt++}}</td>
                  <td style="width: 15%">{{$comments->comment_name}}</td>
                  <td style="width: 20%">Giày cao gót...</td>
                  <td style="width: 50%">{{$comments->comment_content}}</td>
                  <td>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                  </td>
                </tr>
                @endforeach()
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
          </div>
      </div>
      <!-- /.box-footer -->



    </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

  </div>
@stop
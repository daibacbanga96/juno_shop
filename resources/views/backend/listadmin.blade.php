
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
        Admin
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Admin</li>
      </ol>
      @if (Session::has('addStatus'))
  <div style="width: 850px" class="alert alert-success">
    {{Session::get('addStatus')}}
  </div>
  @endif
  @if (Session::has('deleteStatus'))
  <div style="width: 850px" class="alert alert-success">
    {{Session::get('deleteStatus')}}
  </div>
  @endif
    </section>

    <!-- Main content -->
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Admin</h3>
             
              <a class="btn btn-success pull-right" href="{{asset('admin/addlist')}}">Thêm</a>
         
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Chức Vụ</th>
                  
                    <th>Hành động</th>
                 
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($user as $users)
                <tr>
                  <td>{{$stt++}}</td>
                  <td>{{$users->user_name}}</td>
                  <td>{{$users->user_email}}</td>
                  <td>{{$users->user_phone}}</td>
                  <td>@if($users->user_level==1){{"Admin"}}
                      @elseif($users->user_level==2){{"Quản kho"}}
                      @elseif($users->user_level==3){{"Nhân viên"}}
                      @endif
                  
                  </td>
                  <td style="width: 25%">
                   
                      <a class="btn btn-warning" href="{{asset('admin/editlist')}}/{{$users->id}}"><i class="fa fa-edit"></i> Sửa</a>
                      <a class="btn btn-danger" href="{{asset('admin/delete')}}/{{$users->id}}"><i class="fa fa-trash"></i> Xoá</a>
            
                  </td>
                </tr>
              @endforeach
              </table>
            </div>
            <!-- /.box-body -->
         <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              {{ $user->links() }}
              </ul>
            </div> 
          </div>
    </section>
    </div>
@endsection


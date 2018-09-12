
@extends('backend.master')
@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tạo mới
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
          <li class="active">Admin</li>
          <li class="active">Tạo mới</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Admin</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{asset('admin/addlist')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="box-body">
                      {{-- form-in-here --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Admin Name</label>
                            <input type="text" name="user_name" class="form-control" id="name" placeholder="Admin Name" value="">
                           
                              <span class="help-block">
                                <strong></strong>
                              </span>
                           
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" name="user_email" class="form-control" id="email" placeholder="Email" value="">
                            
                              <span class="help-block">
                                <strong></strong>
                              </span>
                           
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group ">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="">
                            
                              <span class="help-block">
                                <strong></strong>
                              </span>
                           
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password_confirm">Nhập lại lại mật khẩu</label>
                            <input type="password" name="passwordagain" class="form-control" id="password_confirm" placeholder="Password Confirm" value="">
                           
                              <span class="help-block">
                                <strong></strong>
                              </span>
                            
                          </div>
                        </div>
                      </div>  

                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" name="user_phone" class="form-control" id="phone" placeholder="Phone Confirm" value="">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" name="user_avatar" class="form-control" id="avatar" >
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="level">Chức vụ</label>
                            <select name="user_level" id="level" class="form-control select2">
                            
                              <option value="1">Admin</option>
                              <option value="2">Quản kho </option>
                              <option value="3">Nhân viên </option>
                             
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Tạo mới</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              
            </div>
      </section>
    </div>
@endsection
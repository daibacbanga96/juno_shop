@extends('backend/master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Chi tiết đơn hàng
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Chi tiết Đơn hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Đơn hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-active">
                            <tr>
                                <th>Tên khách hàng:</th>
                                <td field-key=''>Đức Anh</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td field-key=''>ngoduyducanh@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại:</th>
                                <td field-key=''>0123456789</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ:</th>
                                <td field-key=''>abcxyz</td>
                            </tr>
                            <tr>
                                <th>Thời gian:</th>
                                <td field-key=''>23-11-2018</td>
                            </tr>
                           
                        </table>
                      
                    </div>

                    <div class="col-md-6">
                   

                    <div class="table-responsive">
                      <table class="table table-bordered table-active">
                        <tr>
                          <th style="width:50%">Tổng tiền chưa chiết khấu:</th>
                          <td>10000000 vnđ</td>
                        </tr>
                        <tr>
                          <th>Thuế (10%):</th>
                          <td>10</td>
                        </tr>
                        <tr>
                          <th>Shipping:</th>
                          <td>20000đ</td>
                        </tr>
                        <tr>
                          <th>Code giảm giá :</th>
                          <td>Không có</td>
                        </tr>
                        <tr>
                          <th>Tổng tiền đã thanh toán:</th>
                          <td>10000000 vnđ</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Chi tiết đơn hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <table id="example" class="table table-striped">
                        <thead>
                        <tr>
                          <th>Số lượng</th>
                          <th>Hình ảnh</th>
                          <th>Sản Phẩm</th>
                          <th>Giảm giá (%)</th>
                          <th>Đơn giá</th>
                        </tr>
                        </thead>
                        
                        <tr>
                          <td>2</td>
                          <td><img src="images/banchay1.jpg" alt="" width="40px" height="40px"></td>
                          <td><a href="#">Giày cao gót abc</a></td>
                          <td>10%</td>
                          <td>5000000</td>
                        </tr>
                        
                      </table>
                </div>
            </div>
           
          </div>
    </section>
    </div>

@stop
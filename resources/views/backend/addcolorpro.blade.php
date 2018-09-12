@extends('backend/master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Thêm màu sắc và ảnh
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Boxed</li>
      </ol>
    </section>
    <section class="content">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="product_name">Chọn màu:</label>
                        <input type="text" name="chonmau" placeholder="Thêm màu" />
                    </div>
                </div>
                <form enctype="multipart/form-data" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="product_name">Chọn ảnh:</label>
                        <input type="file" name="chonmau"  />
                    </div>
                    <input type="submit" name="subanh" value="Thêm ảnh" />
                </div>
                </form>
            
                <div class="col-md-8">
                <br/>
                <img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="119px" height="145px" alt="Đen"/>
                </div>
            </div>
            <br/><br/><br/>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@stop
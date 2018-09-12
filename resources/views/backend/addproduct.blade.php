@extends('backend/master')
  @section('content')
  <style>
#ul{
list-style:none;
display:flex;
flex-direction:row;

}
#ul li{
    display:flex;
	border: 1px solid grey;
    margin-left:4px;
	width:70px;

}

#ul li a{
    color:red
}

</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Thêm sản phẩm
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
      <div class="row">
        <div class="col-md-8">
          <div class="box-header with-border">
            <h3 class="box-title">Sản phẩm</h3>
          </div>
        </div>
       
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="product_name">Sản phẩm</label>
                  <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product" value="">
                </div>
                <div class="form-group">
                  <label for="price">Mã sản phẩm</label>
                  <input type="number" name="price" class="form-control" id="price" placeholder="Mã sản phẩm" value="">
                </div>
                <div class="form-group">
                  <label for="category_id">Danh mục</label>
                  <select class="form-control select2" name="category_id" style="width: 100%;">
                    <option value="">Giày xăng đan</option>
                    <option value="">Giày búp bê</option>
                    <option value="">Giày cao gót</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="glass">Giá sản phẩm</label>
                  <input type="text" name="glass" class="form-control" id="glass" placeholder="Giá sản phẩm" value=""> 
                </div>
                <div class="form-group">
                  <label for="trade_mark_id">Trạng thái</label>
                  <select class="form-control select2" name="trade_mark_id" style="width: 100%;"> 
                    <option value="">Còn hàng</option>
                    <option value="">Hết hàng</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="guarantee">Khuyến mãi</label>
                  <input type="number" name="guarantee" class="form-control" id="guarantee" placeholder="Khuyến mãi" value="">
                </div>
              </div>
              
            </div> 
            

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Chi tiết</label>
                  <textarea class="textarea" placeholder="Mô tả sản phẩm..."
                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"  value=""></textarea>
                </div>
              </div>
            </div>  
            <div class="row">
              <div class="col-md-4">
                <label for="image1" class="control-label">Ảnh đại diện</label>
                <div class="img-preview">
                  <input type="file" class="image image-upload" name="image1" value="">
                  <a class="example-image-link" href="" data-lightbox="example-6" data-title="">
                    <img src="" class="img-preview img-fluid", alt="" width="100%" height="100%">
                  </a>
                </div>
              </div>
            </div>
            
            <br/>
            <div class="row">
              <div class="col-md-12" style="border:2px dotted black;padding:10px 10px;position:relative">
                <label for="image1" class="control-label"  style="position:absolute;top:-15px;background:white;font-size:15px">Thêm các thuộc tính</label>
                
                  <a class="example-image-link" href="{{asset('admin/addcolor')}}" data-lightbox="example-6" data-title="" style="font-size:15px;color:green;">
                   <br/>   Thêm màu sắc và các hình ảnh tượng trưng
                   <ul id="ul">
	                                        <li class="anh"  ><a href="#"><img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="30px" height="30px" alt="Đen"/>Đen</a></li>
	                                        <li class="anh"  ><a  href="#"><img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="30px" height="30px" alt="Đỏ"/>Đỏ</a></li>
	                                        <li class="anh"  ><a href="#"><img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="30px" height="30px" alt="Xanh"/>Xanh</a></li>
                                       </ul>

                  </a>
                
                <label for="size" class="control-label">Size:</label>
                <div class="size">
                  <input type="text" name="size" value="">
                  
                </div>

                <label for="attrd" class="control-label">Thuộc tính khác:</label>
                <div class="size">
                <textarea class="textarea" placeholder="Thêm thuộc tính khác..."
                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="attrk"  value=""></textarea>
                  
                </div>
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="Content">Content</label>
                  <textarea class="textarea" placeholder="Content"
                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"  value=""></textarea>
                </div>
              </div>
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
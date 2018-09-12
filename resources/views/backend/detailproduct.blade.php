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
.active1{
border:2px solid red!important;}
</style>

	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
         <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       CHI TIẾT SẢN PHẨM
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Boxed</li>
      </ol>
    </section>

      <!-- Main content -->
      <section class="content">
      		<div >
                
              <!-- /.box-header -->
                <div style="background:white" >
                    <div class="container">
                        <div class="row" id="pro_main">
                            <div class="col-md-4">
                            <img class="anhchinh" style="width: 330px;padding-left:40px;padding-top: 30px" src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg">
                            </div>
                            <div class="col-md-7">
                                <h2 class="text-center" style="color:black; font-weight:800;font-size:30px;" > Bitis Hunter</h2>
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="color:black">Mã:</th>
                                        <td field-key=''>CD123</td>
                                    </tr>
                                    
                                    <tr>
                                        <th style="color:black">Giá:</th>
                                        <td field-key=''>800,000 VNĐ</td>
                                    </tr>
                                    <tr>
                                        <th style="color:black">Size:</th>
                                        <td field-key=''>
                                        <span>31</span>,<span>32</span>,<span>33</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="color:black">Màu sắc:</th>
                                        <td field-key=''>
                                        <ul id="ul">
	                                        <li class="anh" data-img="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" ><a href=""><img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="30px" height="30px" alt="Đen"/>Đen</a></li>
	                                        <li class="anh" data-img="https://product.hstatic.net/1000003969/product/xanh-duong_sd03018_3.jpg" ><a  href=""><img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="30px" height="30px" alt="Đen"/>Đỏ</a></li>
	                                        <li class="anh" data-img="https://product.hstatic.net/1000003969/product/xanh-reu_sd03018_3.jpg" ><a href=""><img src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" width="30px" height="30px" alt="Đen"/>Xanh</a></li>
                                       </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <th style="color:black">Mô tả:</th>
                                        <td field-key=''>Mẫu mã đẹp,kiểu dáng sáng chảnh </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
              <!-- /.box-body -->
            </div>
                <br/><br/>
            <div style="border-top: 8px solid grey ;background:white">
                <div>
                    <h3 style="color:black">Chi tiết</h3>
                </div>
                <div>
                    <div class="panel-body table-responsive">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-bordered table-hover">
                                        <tr>
                                            <th style="color:black">Loại sản phẩm:</th>
                                            <td field-key=''>Giày cao gót </td>
                                        </tr>
                                         <tr >
                                            <th style="color:black" >Tình trạng:</th>
                                            <td field-key=''>Còn hàng </td>
                                        </tr>
                                        <tr>
                                            <th style="color:black">Sản phẩm nổi bật:</th>
                                            <td field-key=''>Có </td>
                                        </tr>
                                        <tr>
                                            <th style="color:black">Khuyến mãi:</th>
                                            <td field-key=''>15%</td>
                                        </tr>
                                       
                                       
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
      </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
//thêm class active khi click vào và đổi hình
$(document).ready(function(){
                  var selection = $('#ul');
					var select = selection.find('li');
					selection.each(function() {
						$(this).find('li').first().addClass('active1');
					})
					select.click(function(event) {
						event.preventDefault();
						$(this).parent().find('li').removeClass('active1');
						$(this).addClass('active1');
						var img_change = $(this).data('img');
						$(this).parents('#pro_main').find('.anhchinh').attr('data-src',img_change);
						$(this).parents('#pro_main').find('.anhchinh').attr('src',img_change);
						
					});
						});
</script>

@stop


@extends('frontend/master')
@section('content')
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <link rel="stylesheet" href="css/styles.css">

<section id="product" data-template="product" data-milisecond="">
	<div class="container wow fadeIn">
		<style>
	.breadcrumb > li + li::before
	{
	//content: " › ";
    border-left: 0px solid transparent;  
    }
    #tabpro{
        border-bottom: 1px solid #D5D5D5;
        margin-top: 50px;
    }
    .tab__list {
        width:300px;
        font-size:20px;
        text-transform :uppercase;
        border-bottom: 2px solid orange;
        margin: 0;
        padding: 0;
		}
		.main_key button {
    	font-size: 18px;
    	font-family: arial,verdana,sans-serif;
   		border-bottom: 1px solid #e0e0e0;
   		padding-left: 0px;
   		text-transform: uppercase;
		overflow: hidden;
    }
   .hasPhone a{
   	text-transform: uppercase;
   	color: #e94d47;
   	padding-top: 10px;
   	font-size: 18px;
   }
   .hasPhone p{
   	font-family: arial,verdana,sans-serif;
   	color: #848484;
   	border-bottom: 1px solid #e0e0e0;
   	padding-bottom: 10px;
   	font-size: 11px;
    }
   .hasPhone{
   	padding-top: 10px;
   }
   .viewStore p i{
   	color: #2196f3;
   	font-size: 18px;
   }

</style>

<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>
						

						<li class="space"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
						<li class="collections">
							
							
							<a href="/collections/giay-xang-dan"> 
								Giày xăng đan</a>
						</li>
						
						<li class="space"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
						<li class="product active">

							<a href="/products/giay-xang-dan-quai-ngang-ban-to-sd01057">Giày xăng đan quai ngang bản to SD01057</a>
						<li>
					</ol>
				</div>
			</div>

		</div>
	</div>
</div>
	</div>

	<div class="container hidden" data-control="/collections/giay-xang-dan">
		<div class="row">
			<div class="col-xs-10">
				<div class="position_products">		
				
					<a class="previous_product pull-left" href="/collections/all/products/tui-crossbody-dang-vuong-phoi-mau-txn185" title="Xem sản phẩm trước đó">
						<i class="fa fa-backward "></i>
					</a>
					
					
					<a class="next_product pull-right" href="/collections/all/products/tui-crossbody-thiet-ke-nho-gon-txn182" title="Xem sản phẩm tiếp theo">
						<i class="fa fa-forward "></i>
					</a>
					
				</div>	
			</div>
		</div>
	</div>


	<div id="top-detail" class="normal top-detail wow fadeIn">
		<div class="container">
			<div class="row hidden" data-generation="image">
				<div class="images hidden">
					<img src="images/icons/depden.jpg"/>
							</div>
				
			</div>
			<div class="row content" id="detail-product">
				<div class="col-sm-7" data-section="image" id="needProduct">
				<div class="blue">
  <div class="slider slider-for">
    <div class="video"><h3><img src="images/icons/depden.jpg" height="500px"/></h3></div>
    <div class="video"><h3><img src="images/icons/depden.jpg" height="500px"/></h3></div>
    <div class="video"><h3><img src="images/icons/depden.jpg" height="500px"/></h3></div>
    <div class="screenshot"><h3><img src="images/icons/depden.jpg" height="500px"/></h3></div>
    <div class="concept"><h3><img src="images/icons/depden.jpg" height="500px"/></h3></div>
    <div class="concept"><h3><img src="images/icons/depden.jpg" height="500px"/></h3></div>
  </div>
  <div class="slider slider-nav">
    <div class="video"><h3><img src="images/icons/depden.jpg" height="108px"/></h3></div>
    <div class="video"><h3><img src="images/icons/depden.jpg" height="108px"/></h3></div>
    <div class="video"><h3><img src="images/icons/depden.jpg" height="108px"/></h3></div>
    <div class="screenshot"><h3><img src="images/icons/depden.jpg" height="108px"/></h3></div>
    <div class="concept"><h3><img src="images/icons/depden.jpg" height="108px"/></h3></div>
    <div class="concept"><h3><img src="images/icons/depden.jpg" height="108px"/></h3></div>
  </div>
  
</div>
				</div>
				<div class="col-sm-3" data-section="information">
					<div class="product " id="needAfix">
						<div class="thongtingia clearfix social_fb_plugin_wrap">
							<div class="plugin-box col-sm-10 no-padding">
								<div class="fb-like" data-href="https://juno.vn/products/giay-xang-dan-quai-ngang-ban-to-sd01057" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
								
							</div>
							
						</div>
						<div class="thongtingia">
							<h1 class="col-sm-7 no-padding">Giày xăng đan quai ngang bản to SD01057</h1>
							<div class="changeLabel col-sm-3 no-padding">
				
								<div class="instock instock-4592-false">còn hàng</div>
							
							</div>

							<div class="rowPrice col-xs-10 no-padding">
								<label class="variant-price red">350,000<sup>đ</sup></label> 
								
							</div>                
						</div>
		
						<form action="/cart" menthod="post" class="product-form col-xs-10 no-padding" id="product-form">
							
							
							<h3 class="label-option">Chọn màu</h3>
							<ul class="option option2">
							<li>
                                <label class="color">
                                    <input data-productid="1026725193" type="radio" value="Xanh xám" name="colorkm" checked="checked">
                                    <span><img src="https://product.hstatic.net/1000003969/product/xanh-xam_sd01057_2_icon.jpg">Xanh xám</span>
                                    </label>
                            </li>
                            <li>
                                <label class="color">
                                    <input data-productid="1026725187" type="radio" value="Đen" name="colorkm">
                                    <span><img src="https://product.hstatic.net/1000003969/product/den_sd01057_2_icon.jpg">Đen</span>
                                    </label>
                            </li>
                            <li>
                                <label class="color"><input data-productid="1026725181" type="radio" value="Đỏ đô" name="colorkm">
                                    <span><img src="https://product.hstatic.net/1000003969/product/do-do_sd01057_2_icon.jpg">Đỏ đô</span>
                                    </label>
                            </li>
                            </ul>

							<div class="clearfix"></div>                    
							<h3 class="label-option size-pick">Chọn size <a data-toggle="modal" data-target="#myModal" href="javascript:;" class="remember">Xem hướng dẫn tính size giày</a></h3>
							<ul class="option option1 option1km">
                            <li class="size xanh-xam displayshow"><label><input data-productid="1026725193" value="34" type="radio" name="sizekm" checked="checked"><span>34</span></label></li>
                            <li class="size den displaynone"><label><input data-productid="1026725187" value="34" type="radio" name="sizekm"><span>34</span></label></li>
                            <li class="size do-do displaynone"><label><input data-productid="1026725181" value="34" type="radio" name="sizekm"><span>34</span></label></li>
                            <li class="size xanh-xam displayshow"><label><input data-productid="1026725194" value="35" type="radio" name="sizekm"><span>35</span></label></li>
                            <li class="size den displaynone"><label><input data-productid="1026725188" value="35" type="radio" name="sizekm"><span>35</span></label></li>
                            <li class="size do-do displaynone"><label><input data-productid="1026725182" value="35" type="radio" name="sizekm"><span>35</span></label></li>
                            <li class="size xanh-xam displayshow"><label><input data-productid="1026725195" value="36" type="radio" name="sizekm"><span>36</span></label></li>
                            <li class="size den displaynone"><label><input data-productid="1026725189" value="36" type="radio" name="sizekm"><span>36</span></label></li>
                            <li class="size do-do displaynone"><label><input data-productid="1026725183" value="36" type="radio" name="sizekm"><span>36</span></label></li>
                            </ul>

							<div class="clearfix"></div>                    

							
							

							<div class="clearfix"></div>     

							<select id="product-select" name="id" class="varian-select hidden"></select>
							

							<div class="wrappbtn col-xs-10 no-padding">  
								

								
								<div class="product-btn-buy">
									<a href="javascript:void(0)" title="Đặt mua" 
										 class="add addnow" style="font-size:1.2em"
										 data-price="350000"
										 data-cart="0" 
										 data-popupcart = "false"
										 data-max="2">
										<div class="active">
											<p>ĐẶT MUA</p>
											<div class="content">Giao tận nhà - Đổi trả dễ dàng</div>	
											<div class="content hidden">
												
												
												Đổi trả 90 ngày 
												
												cho giày và 30 ngày cho túi
												
											</div>
										</div>
										<div class="unactive">
											Hết Hàng
										</div>
									</a>
								</div>
	
							</div>

							<a class="viewStore col-xs-10 no-padding" href="javascript:;"> 
								
								<p> Hiện sản phẩm đang có ở 8 cửa hàng</p>	
							</a>
							
							<div class="modal fade" id="myModalStock" tabindex="-1" role="dialog" aria-labelledby="myModalStock" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Hiện đang có <span class="numbOfstock"></span> cửa hàng còn sản phẩm này</h4>
										</div>
										<div class="modal-body">
											<div class="chontinhthanh">
												<select id="tinhthanh" style="width: 100%;height:40px;font-weight: bold;color: #333;border-color: #dcdbdb;margin-top:10px">
												</select>
											</div>
											<div id="stock-box" style="margin-top:10px"></div>
										</div>

									</div>
								</div>
							</div>

						</form> 
						<div class="col-lg-10 col-md-10 col-xs-10 no-padding deliver-module">
							<div class="main_subtitle">
								<div class="faq">
									<div class="main_key">
										<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-left-align">Mô tả sản phẩm </button>
									</div>
									 <div id="Demo1" class="w3-hide w3-container" >    			
										<ul >
											<li>
											<b>Mã sản phẩm:</b>SD01057
											</li>
											<li>
											<b>Kiểu dáng:</b> Giày xăng đan
											</li>
											<li>
											<b>Chất liệu:</b> Da lộn
											</li>
											
											<li>
											<b>Độ cao:</b> 1cm
											</li>
											
											<li>
											<b>Màu sắc:</b> Đỏ đô-Đen-Xanh xám
											</li>
											<li>
											<b>Kích cỡ:</b> 34-35-36-37-38-39
											</li>
										</ul>

										<div class="description newline_to_br_paragraphs">

											<p>Chất liệu da mềm mịn, êm ái</p>

											<p>Kiểu dáng năng động, trẻ trung</p>
											
											<p>Quai hậu ôm gót chân, thoải mái khi di chuyển</p>

										</div>

									</div>  

								</div>
							</div>

							<div class="main_subtitle">
								<div class="faq">
									<div class="main_key">
									<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-left-align">chính sách giao hàng & đổi trả</button> 
										
									</div>
									<div id="Demo2" class="w3-hide w3-container">    
										<div class="item deliver-top-on">
											<p class="">
												<a class="call_freeshipping" href="javascript:;" title="Miễn phí giao hàng toàn quốc">
													Miễn phí giao hàng toàn quốc
												</a> (Sản phẩm trên 300,000đ)
											</p>
										</div>
										<div class="item deliver-top-payment">
											<p>
												<a class="call_easypayment" href="javascript:;" title="Thanh toán tiện lợi">
													Thanh toán tiện lợi
												</a> (nhiều hình thức thanh toán)
											</p>
										</div>
										<div class="item deliver-top-policy">
											<p>
												<a class="call_easyremind" href="javascript:;" title="Đổi trả dễ dàng">
													Đổi trả dễ dàng
												</a> 
												
												Đổi trả 90 ngày cho giày và 30 ngày cho túi
											</p>
										</div>
									</div>        
								</div>
							</div>

							<div class="main_subtitle">
								<div class="faq ">
									<div class="main_key" >
									<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-left-align">
										hướng dẫn bảo quản
									 </button> 
										
									</div>
									<div id="Demo3" class="w3-hide w3-container">    
										
										
<p><strong>- Khử mùi bên trong giày</strong></p>
<br/>
<p>Mang giày suốt cả ngày dài đôi khi sẽ bị mồ hôi chân gây ẩm ướt, mùi hôi. Bạn hãy đặt túi đựng viên chống ẩm vào bên trong giày để hút ẩm và rắc phấn rôm (có thể thay bằng cách đặt vào bên trong giày gói trà túi lọc chưa qua sử dụng) để khử mùi, giúp giày luôn khô thoáng. </p>

<p>Để hạn chế mùi hôi và sự ẩm ướt cho giày, hãy chọn vớ chân loại tốt, có khả năng thấm hút cao. Ngoài ra, dùng các loại lót giày khử mùi cũng là một phương pháp tốt. </p>
<br/>
<p><strong>- Làm mềm giày da</strong></p>
<br/>
<p>Giày da để quá lâu không được sử dụng, đôi khi sẽ bị co cứng lại, dễ gây cảm giác đau chân khi dùng. Để làm mềm giày, đối với giày da, si, bạn có thể thoa một lớp vaseline lên giày, để một vài tiếng, giày sẽ mềm trở lại. Đối với các loại giày da lộn, bạn có thể dùng vải mềm ẩm lau qua toàn bộ giày, để qua đêm, da giày sẽ mềm hơn hẳn. </p>

<p>Để da giày được bền lâu, bạn nhớ hạn chế làm ướt giày. Khi giày bị ướt, không nên hơ bằng lửa, phơi nắng hoặc dùng máy sấy nóng, sẽ làm giày bị cứng, co lại hoặc hỏng bề mặt da. Hãy dùng giấy khô vò lại đặt vào trong giày để hút ẩm, phơi giày ở nơi râm mát. Sau khi khô, với giày da thì nên thoa vaseline, đánh si để da mềm và bóng đẹp trở lại. </p>
<br/>
<p><strong>- Bảo quản giày khi không sử dụng</strong></p>
<br/>
<p>Khi bạn mua giày tại Juno, giày sẽ được đặt trong một hộp giày kèm với túi chống ẩm. Khi sử dụng giày, bạn đừng vội vứt hộp đi mà hãy cất lại để dành. Khi không sử dụng, hãy nhét một ít giấy vụn vào bên trong giày để giữ cho dáng giày luôn chuẩn, đẹp. Sau đó đặt giày vào hộp bảo quản cùng túi hút ẩm. </p>

<p>Khi cần mang ra sử dụng, hãy áp dụng những cách làm mềm giày da bên trên, như vậy đôi giày của bạn sẽ luôn bền đẹp như mới. </p>
	
										
									</div>        
								</div>
							</div>

							<div class="main_subtitle hasPhone">
								<div class="faq">
									<a class="call_easyshopping" href="javascript:;" title="Dễ dàng mua sắm">
										tổng đài bán hàng 1800 1162</a> 
									<p>Miễn phí từ (8:30 - 21:30) mỗi ngày</p>
									<div id="easy_payment" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
										<div class="modal-dialog modal-dialog-size" style="padding-top:2%;width:700px !important">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<div class="modal-title"></div>
												</div>
												<div class="modal-body no-padding">
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

							<script>
	function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
							$(document).ready(function(){
								var $content = $('.strip_newlines p');
								$content.removeAttr('style');
								$('.strip_newlines').find('img').remove();

							})

							$('.main_key').click(function() {
								if ($(this).parent().is('.open')){
									$(this).closest('.faq').find('.main_details').slideUp();
									$(this).closest('.faq').removeClass('open');

								}else{			
									$(this).closest('.faq').find('.main_details').slideDown();
									$(this).closest('.faq').addClass('open');

								}
							});
							</script>
						</div>

					</div>
				</div>
				<div class="descriptionproduct col-sm-7">
					
					<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 no-padding">
						
					<div id="product__comment">
				<div class="row">
					<div class="col-12">
						<div class="blog-comment">
							<ul class="tab__list nav nav_tabs">
								<li class="active">Bình luận</li>
							</ul>
							<hr/>
							<ul class="comments">
								<li class="clearfix">
									<img src="images/icons/no.png" class="avatar" alt="">
									<div class="post-comments">
										
										<p class="meta">26/8/2018  13:24:45	<a href="">Đức Anh đại ca</a>  đã bình luận : </p>
										<p>
											Sản phẩm tuyệt con mẹ nó vời
										</p>
									</div>
								</li>

							</ul>
							<ul class="pagination">

							</ul>

						</div>
					</div>


					<div class="col-12">
						<form action="" method="post" class="form-horizontal" id="commentForm" role="form"> 
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label" style="margin-left:-40px">Tên của bạn:</label>
								<div class="col-sm-10">                    
									<div class="input-group">
										<input class="form-control" type="text" name="name" class="form-control"  id="uploadMedia">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="comment" class="col-sm-4 control-label" style="margin-left:-170px">Nội dung bình luận:</label>
								<div class="col-sm-10">
									<textarea name="content" class="form-control"  id="addComment" rows="5"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10" style="margin-left:720px">                    
									<button name="addcomment" class="btn btn-success btn-circle text-uppercase btn-c4" type="submit" id="submitComment"> Gửi bình luận</button>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
					</div>
				</div>


		<div id="tabpro" class="col-sm-10 col-xs-10">
        <ul class="tab__list nav nav_tabs">
					<li class="active">Sản phẩm tương tự</li>	
                </ul>
                
                <div class="col-xs-6 col-sm-3 product-wrapper image1xx height-index clickImageUrl" style="" data-position="">
	<div class="product-information" position-check="1">
		<div class="product-detail height-index-1">
			<a href="/products/giay-xang-dan-mui-vuong-quai-ngang-sd03018" title="Giày xăng đan mũi vuông quai ngang SD03018">
				<div class="product-image">
					<img class="main-image image-default  img-responsive lazy lazyload" src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" alt="Giày xăng đan mũi vuông quai ngang SD03018" >
					<img class="image-hover hidden-xs img-responsive lazy" src="https://product.hstatic.net/1000003969/product/den_sd03018_1.jpg" alt="Giày xăng đan mũi vuông quai ngang SD03018">
				</div>
			</a>
			<div class="product-info">
				<ul class="color-swatches" data-size="3">
						<li class="color-item active" 
							data-img="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg" 
							data-img-hover="https://product.hstatic.net/1000003969/product/den_sd03018_1.jpg">
						<a href="javascript:;" title=" Đen" >
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/den_sd03018_3.jpg">
						</a>
					</li>
					
					<li class="color-item " 
							data-img="https://product.hstatic.net/1000003969/product/xanh-duong_sd03018_3.jpg" 
							data-img-hover="https://product.hstatic.net/1000003969/product/xanh-duong_sd03018_1.jpg">
						<a href="javascript:;" title=" Xanh dương" >
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/xanh-duong_sd03018_3.jpg">
						</a>
					</li>
					
					<li class="color-item " 
							data-img="https://product.hstatic.net/1000003969/product/xanh-reu_sd03018_3.jpg" 
							data-img-hover="https://product.hstatic.net/1000003969/product/xanh-reu_sd03018_1.jpg">
						<a href="javascript:;" title=" Xanh rêu" >
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/xanh-reu_sd03018_3.jpg">
						</a>
					</li>
					
				</ul>
				<div class="text-center box-tags">
					
					<span class=" tags bg-bl-cl-wh">Bán chạy</span>
					
					<span class="tags sku-tags">SD03018</span>
				</div>
				<div class="price-info clearfix">
					<div class="price-new-old box-pro-price text-center">
						
						
						<span class="pro-price" style="color:#000;">390,000₫</span>
						
					

					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
 <!-- Kết thúc một khối -->


<div class="col-xs-6 col-sm-3 product-wrapper image1xx height-index clickImageUrl" style="" data-position="">
	<div class="product-information" position-check="4">
		<div class="product-detail height-index-1">
			<a href="/products/giay-sandal-sd03015" title="Giày Sandal 3cm quai to bản cách điệu SD03015">
				<div class="product-image">
					
					
					<img class="main-image image-default  img-responsive lazy lazyload" data-src="https://product.hstatic.net/1000003969/product/nau_sd03015_3_8f68cf9698b84e47aa88a44b727db8b3.jpg" src="https://product.hstatic.net/1000003969/product/nau_sd03015_3_8f68cf9698b84e47aa88a44b727db8b3.jpg" alt="Giày Sandal 3cm quai to bản cách điệu SD03015" >
					<img class="image-hover hidden-xs img-responsive lazy" data-src="https://product.hstatic.net/1000003969/product/nau_sd03015_1_10575f69f87a4a1fa74c951aed48681f.jpg" src="https://product.hstatic.net/1000003969/product/nau_sd03015_1_10575f69f87a4a1fa74c951aed48681f.jpg" alt="Giày Sandal 3cm quai to bản cách điệu SD03015">
				</div>
			</a>
			<div class="product-info">
				<ul class="color-swatches" data-size="3">
					
					<li class="color-item active" 
							data-img="https://product.hstatic.net/1000003969/product/nau_sd03015_3_8f68cf9698b84e47aa88a44b727db8b3.jpg" 
							data-img-hover="https://product.hstatic.net/1000003969/product/nau_sd03015_1_10575f69f87a4a1fa74c951aed48681f.jpg">
						<a href="javascript:;" title=" Nâu" >
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/nau_sd03015_3_8f68cf9698b84e47aa88a44b727db8b3.jpg">
						</a>
					</li>
					
					<li class="color-item " 
							data-img="https://product.hstatic.net/1000003969/product/xanh-reu_sd03015_3_23dc96c853094f7e859f532fc1db6db9.jpg" 
							data-img-hover="https://product.hstatic.net/1000003969/product/xanh-reu_sd03015_1_2d0e8486680342628feb3d95520a113e.jpg">
						<a href="javascript:;" title=" Xanh rêu" >
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/xanh-reu_sd03015_3_23dc96c853094f7e859f532fc1db6db9.jpg">
						</a>
					</li>
					
					<li class="color-item " 
							data-img="https://product.hstatic.net/1000003969/product/den_sd03015_3.jpg" 
							data-img-hover="https://product.hstatic.net/1000003969/product/den_sd03015_1.jpg">
						<a href="javascript:;" title=" Đen" >
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/den_sd03015_3.jpg">
						</a>
					</li>
					
				</ul>
				<div class="text-center box-tags">
					
					<span class="tags sku-tags">SD03015</span>
				</div>
				<div class="price-info clearfix">
					<div class="price-new-old box-pro-price text-center">
						
						<span class="pro-price" style="color:#000;">390,000₫</span>
						
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

			</div>
		</div>
	</div>
</section>
<!--popup content--> 

<div id="myModal" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
	<div class="modal-dialog modal-dialog-size">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Cách tính size giày</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-10 col-lg-10">
						<div class="content-huongdan">
							<div class="title-huongdan">
								Hướng dẫn cách đo chân
							</div>
							
						</div>
						<div style="width:100%;color:#333;text-align:center">
							<img src="//file.hstatic.net/1000003969/file/sizegiay.png"/>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>
<div id="myModalmultistock" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
	<div class="modal-dialog modal-dialog-size-2" >
		<!-- Modal content-->
		<div class="modal-content" style="height:670px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Các cửa hàng còn sản phẩm này</h4>
			</div>
			<div class="modal-body">
				<div class="detail-product">
					<div class="thongtin product">
					</div>
					
					<div class="titlemt">Chọn Màu/Size để xem cửa hàng còn sản phẩm này</div>
					<div class="col-lg-10 col-md-10 col-sm-10 product-form-multi" style="margin-top:10px;">
						<div class="col-lg-5 col-md-5 col-sm-5" style="padding:0px">
							<span class="col-lg-1 col-md-1 col-sm-1 titlemt" style="margin-top:7px">Màu  </span>
							<span class="col-lg-9 col-md-9 col-sm-9 chonmau"  style="display:inline-block;padding-right:0px">
								<ul class="option option2 option2multi">
								</ul>
							</span>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5">
							<span class="col-lg-1 col-md-1 col-sm-1 titlemt"   style="margin-top:7px">Size  </span>
							<span class="col-lg-9 col-md-9 col-sm-9 chonsize"  style="display:inline-block">
								<ul class="option option1 option1multi">
								</ul>
							</span>
						</div>
					</div>
					
				</div>
				<div class="chontinhthanh">
					<select id="tinhthanh" style="width: 100%;height:40px;font-weight: bold;color: #333;border-color: #dcdbdb;margin-top:10px">
					</select>
				</div>
				<div id="stock-box" style="margin-top:10px">

				</div>
				<hr>
				<div style="display:none;margin-top: 15px;">		
					<div style="text-align:center;font-family:'Roboto-Light';font-size:13px;color:#000;padding-top:10px;padding-bottom:10px;text-transform:uppercase">
						<span>Mời bạn đến cửa hàng để mua hoặc<span style="color:#337ab7;font-weight:800;"> "Bấm nút" </span>dưới đây để được giao hàng tại nhà</span>
					</div>
					<div class="product-btn-buy-3">
						<a href="" title="Đặt mua" class="add addnowmulti">Đặt hàng giao tại nhà</a>
					</div>
					<div style="text-align:center;font-family:'Roboto-Light';font-size:12px;color:#000;padding-top:10px">
						<span>Gọi mua hàng<span style="font-size:16px;color:#cc0000;font-weight:800;"> 1800 1162 </span> Từ <span style="font-weight:700;">8:30 - 21:30 </span>mỗi ngày</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="myModalvideo" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Video sản phẩm</h4>
			</div>
			<div class="modal-body">
				<div class="out-video">
					
					<div>
						Chưa có video về sản phẩm này
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div id="myModalbaoquan" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Hướng dẫn bảo quản</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-10 col-md-10 popup-baoquan">
						
						
<p><strong>- Khử mùi bên trong giày</strong></p>
<br/>
<p>Mang giày suốt cả ngày dài đôi khi sẽ bị mồ hôi chân gây ẩm ướt, mùi hôi. Bạn hãy đặt túi đựng viên chống ẩm vào bên trong giày để hút ẩm và rắc phấn rôm (có thể thay bằng cách đặt vào bên trong giày gói trà túi lọc chưa qua sử dụng) để khử mùi, giúp giày luôn khô thoáng. </p>

<p>Để hạn chế mùi hôi và sự ẩm ướt cho giày, hãy chọn vớ chân loại tốt, có khả năng thấm hút cao. Ngoài ra, dùng các loại lót giày khử mùi cũng là một phương pháp tốt. </p>
<br/>
<p><strong>- Làm mềm giày da</strong></p>
<br/>
<p>Giày da để quá lâu không được sử dụng, đôi khi sẽ bị co cứng lại, dễ gây cảm giác đau chân khi dùng. Để làm mềm giày, đối với giày da, si, bạn có thể thoa một lớp vaseline lên giày, để một vài tiếng, giày sẽ mềm trở lại. Đối với các loại giày da lộn, bạn có thể dùng vải mềm ẩm lau qua toàn bộ giày, để qua đêm, da giày sẽ mềm hơn hẳn. </p>

<p>Để da giày được bền lâu, bạn nhớ hạn chế làm ướt giày. Khi giày bị ướt, không nên hơ bằng lửa, phơi nắng hoặc dùng máy sấy nóng, sẽ làm giày bị cứng, co lại hoặc hỏng bề mặt da. Hãy dùng giấy khô vò lại đặt vào trong giày để hút ẩm, phơi giày ở nơi râm mát. Sau khi khô, với giày da thì nên thoa vaseline, đánh si để da mềm và bóng đẹp trở lại. </p>
<br/>
<p><strong>- Bảo quản giày khi không sử dụng</strong></p>
<br/>
<p>Khi bạn mua giày tại Juno, giày sẽ được đặt trong một hộp giày kèm với túi chống ẩm. Khi sử dụng giày, bạn đừng vội vứt hộp đi mà hãy cất lại để dành. Khi không sử dụng, hãy nhét một ít giấy vụn vào bên trong giày để giữ cho dáng giày luôn chuẩn, đẹp. Sau đó đặt giày vào hộp bảo quản cùng túi hút ẩm. </p>

<p>Khi cần mang ra sử dụng, hãy áp dụng những cách làm mềm giày da bên trên, như vậy đôi giày của bạn sẽ luôn bền đẹp như mới. </p>
	
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="myModalcanvas" class="modal fade" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
	<div class="modal-dialog  modal-dialog-size">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Chi tiết chương trình tặng túi canvas</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-10 col-md-10 popup-baoquan">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="BuySuccess" class="modal fade" data-keyboard="false" data-backdrop="static" role="dialog" style="background: rgba(0, 0, 0, 0.5);z-index: 999999;">
	<div class="modal-dialog cart-desktop__bg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="button cart-desktop__close" data-dismiss="modal" aria-label="Close">X</button>
				<p class="cart-desktop__status text-center">
					<i class="fa fa-check" aria-hidden="true"></i> Bạn vừa chọn mua <a href="/products/giay-xang-dan-quai-ngang-ban-to-sd01057" class="cart-desktop__status_item">Giày xăng đan quai ngang bản to SD01057</a>
				</p>
			</div>
			<div class="modal-body">
				<div class="cart-desktop__tfooter">
					<div class="cart-desktop__tfooter-action clearfix">
						<a class="cart-desktop__tfooter-checkout" title="Xem giỏ hàng và thanh toán" href="/cart">Xem giỏ hàng và thanh toán</a>
						<a class="cart-desktop__tfooter-continue" title="Mua thêm sản phẩm khác" href="https://juno.vn">Mua thêm sản phẩm khác</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	/////////////////////////////click chọn màu////////////////////////////////////////////////
$('input[name="colorkm"]').click(function(){
	$('input[name="colorkm"]').each(function() {
		$(this).removeAttr('checked'); 
	});
	$(this).attr('checked', 'checked');
	getcolor();
	colorsellect=$(this).attr('data-productid');
	$('#product-select').html('<option selected="selected" value="'+colorsellect+'">'+colorsellect+'</option>');
	debugger
	if(productjson.options.length>1) {
		checksizeforcolor(slug(colorcheck));
		var urlimage;
		for(var k=0;k<productjson.variants.length;k++){
			if(productjson.variants[k].inventory_quantity> inventory_quantity_numb){
				if(productjson.variants[k].option2 == colorcheck){
					urlimage=productjson.variants[k].featured_image.src.split('.')
					urlimage=urlimage[0]+'.'+urlimage[1]+'_medium.'+urlimage[2];
					urlimage=urlimage.split('http:');
					urlimage=urlimage[1];
				}

			}
		}
		checkedsize();
		switchSlide(slug($('ul.option2 li input[checked=checked]').val()));

	} 
	else {
		var checked2 = '';
		var checkedbool2 = false;
		var urlimage;
		for(var k=0;k<productjson.variants.length;k++){
			if(productjson.variants[k].inventory_quantity> inventory_quantity_numb){
				if(productjson.variants[k].option1 == colorcheck){
					urlimage=productjson.variants[k].featured_image.src.split('.')
					urlimage=urlimage[0]+'.'+urlimage[1]+'_medium.'+urlimage[2];
					urlimage=urlimage.split('http:');
					urlimage=urlimage[1];
				}

			}
		}
		switchSlide(slug($('ul.option1 li input[checked=checked]').val()));
	}
	$("a[rel^='lightbox']").picbox({}, null, function(el) {
		/*console.log(el);*/
		return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
	});
	postselect();
	stockLoad();
});
</script>
<script>
				$(document).ready(function(){
					var selection = $('.color-swatches');
					var select = selection.find('li');
					selection.each(function() {
						$(this).find('li').first().addClass('active');
					})
					select.click(function(event) {
						event.preventDefault();
						$(this).parent().find('li').removeClass('active');
						$(this).addClass('active');
						var img_change = $(this).data('img');
						var img_change_hover = $(this).data('img-hover');
						$(this).parents('.product-detail').find('.main-image').attr('data-src',img_change);
						$(this).parents('.product-detail').find('.main-image').attr('src',img_change);
						$(this).parents('.product-detail').find('.image-hover').attr('data-src',img_change_hover);
						$(this).parents('.product-detail').find('.image-hover').attr('src',img_change_hover);
					});
					$(".productsrecommend_item").addClass('owl-theme').owlCarousel({
						items:4,
						loop:false,
						autoPlay:false,
						navigation:true,
						pagination:false,
						navigationText:["",""],
						itemsDesktop:[1199,3],
						itemsDesktopSmall:[992,3],
						itemsTablet:[768,2],
						itemsTabletSmall:false,
						itemsMobile:[0,2]
					});
				});
				</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script  src="js/slide.js"></script>
@stop

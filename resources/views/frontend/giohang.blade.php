@extends('frontend/master')
@section('content')
<section id="content" class="cart-content ">
	<div class="container">
		<div class="row">
			
			<div class="text-left col-xs-10"> 
				<div class="plusInfo_cart col-xs-10">
					<i class="fa fa-bell"></i> Miễn Phí Vận Chuyển toàn quốc cho đơn hàng có giá trị từ 300.000đ trở lên
				</div>
			</div>

		</div>
		<div class="row">
			<div class="grptitlecart col-sm-10">
				Giỏ hàng của bạn <b>(2 sản phẩm)</b>
			</div>
		</div>
		
		<div class="row">
			<div class="clearfix" id="cart">
				<div class="col-sm-10 col-md-10 col-sm-wrapcart">
					
					<form method="post" id="cartform" style="display: block;">
						<div class="col-sm-7 col-xs-10 details-cart">
							<div id="table-cart" class="col-xs-10 no-padding">

								<div data-price="550000" data-sku="TT03007-550000" class="item-cart col-sm-10" data-id="1028592874">
	
									<div class="main-img col-sm-2 1028592874" data-check="906" data-id="TT03007">
										
										<a href="/products/juno-sneaker-soft-model-tt03007-mix-mesh">
											<img src="//product.hstatic.net/1000003969/product/den_tt03007_2_28ca4ec56cff422d91e71b95dadf6050_small.jpg">
										</a>
									</div>
									<div class="main-details col-sm-4 col-xs-10">
										<div class="item-title col-sm-10">
											<a href="/products/juno-sneaker-soft-model-tt03007-mix-mesh#den">
												<strong>Juno Sneaker Active Model TT03007 - Mix Mesh</strong>
											</a>
										</div>
										<div class="item-option col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<div class="col-sm-10 no-padding">
												
												
												<p>Màu: Đen</p>

												<p>Size: 35</p>
												
											</div>
											<div class="price hidden">550,000</div>
										</div>
									</div>
									
									<div class="quantity-grp col-sm-2">
										

										
										<div class="qty quantity-selector detail-info-entry">
											Số lượng: 
											<a title="Giảm xuống 0" href="/cart/change?line=1&amp;quantity=0" class="entry number-minus hidden">&nbsp;</a>
											<input type="number" data-check-gift="false" data-gift="no_gift" disabled="disabled" item-price="55000000" size="2" name="updates[]" min="1" max="2" id="updates_1028592874" value="1" onfocus="this.select();" class="entry number tc item-quantity quantity-1028592874" data-check="906">
											
											<a title="Tăng lên  2" href="/cart/change?line=1&amp;quantity=2" class="entry number-plus hidden">&nbsp;</a>
											
										</div>
										
										
									</div>
									
									<div class="item-price col-sm-1 col-xs-10">
										<p class="price middle">550,000<sup>đ</sup></p>
										
									</div>
									
									
									
									
									<div class="no_open_shipping_add remove-item remove col-lg-1 col-md-1 col-sm-1 col-xs-1">
										<a href="/cart/change?line=1&amp;quantity=0" class="cart ClickRemoveCartItem">Xóa</a>
									</div>
									
									
								</div>

								
								<div data-price="390000" data-sku="SD05018-390000" class="item-cart col-sm-10" data-id="1026274604">

									<div class="main-img col-sm-2 1026274604" data-check="149" data-id="SD05018">
										
										<a href="/products/giay-xang-dan-got-vuong-5cm-quai-om-co-chan-sd05018">
											<img src="//product.hstatic.net/1000003969/product/xanh-xam_sd05018_2_small.jpg">
										</a>
									</div>
									<div class="main-details col-sm-4 col-xs-10">
										<div class="item-title col-sm-10">
											<a href="/products/giay-xang-dan-got-vuong-5cm-quai-om-co-chan-sd05018#xanh-xam">
												<strong>Giày xăng đan gót vuông 5cm quai ôm cổ chân SD05018</strong>
											</a>
										</div>
										<div class="item-option col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<div class="col-sm-10 no-padding">
												
												
												<p>Màu: Xanh xám</p>
												
												

												
												<p>Size: 34</p>
												
											</div>
											<div class="price hidden">390,000</div>
										</div>
									</div>
									
									<div class="quantity-grp col-sm-2">
										

										
										<div class="qty quantity-selector detail-info-entry">
											Số lượng: 
											<a title="Giảm xuống 0" href="/cart/change?line=2&amp;quantity=0" class="entry number-minus hidden">&nbsp;</a>
											<input type="number" data-check-gift="false" data-gift="no_gift" disabled="disabled" item-price="39000000" size="2" name="updates[]" min="1" max="2" id="updates_1026274604" value="1" onfocus="this.select();" class="entry number tc item-quantity quantity-1026274604" data-check="149">
											
											<a title="Tăng lên  2" href="/cart/change?line=2&amp;quantity=2" class="entry number-plus hidden">&nbsp;</a>
											
										</div>
										
										
									</div>
									
									<div class="item-price col-sm-1 col-xs-10">
										<p class="price middle">390,000<sup>đ</sup></p>
										
									</div>
									
									
									
									
									<div class="no_open_shipping_add remove-item remove col-lg-1 col-md-1 col-sm-1 col-xs-1">
										<a href="/cart/change?line=2&amp;quantity=0" class="cart ClickRemoveCartItem">Xóa</a>
									</div>
									
									
								</div>
								
							</div>
							<div class="hidden grpbtnFunc col-sm-5 col-xs-10 no-padding">
								<p class="cart-attribute__field">
									<label for="note">Ghi chú đơn hàng:</label><br>

									<textarea class="col-xs-10" name="note" id="note" rows="5" cols="60"></textarea>
								</p>
							</div>

							
						</div>
						<div class="col-sm-3 col-xs-10 info-table-cart">
							<div class="grpTotal col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<span class="lbltongtien">Tổng tiền: </span>
								<span class="tongtien" data-total="940000">940,000<sup>đ</sup></span>
							</div>
							
							<div class="grpbtnFunc col-sm-10 col-xs-10 no-padding">
								<a class="continue-shopping thanhtoan btn btn-default" title="Tiến hành đặt hàng" href="javascript:void(0)">
									Tiến hành đặt hàng
								</a>
							</div>

							<div class="grpbtnClear col-sm-10 no-padding" data-clear="clear-cart">
								<a href="javascript:;" class="cartClear">Xóa giỏ hàng</a>
							</div>

							<div class="grpbtnFunc col-sm-10 col-xs-10 no-padding">
								<a class="back-to-homepage" href="/">
									Mua thêm sản phẩm khác <i class="fa fa-caret-right" aria-hidden="true"></i><i class="fa fa-caret-right" aria-hidden="true"></i>
								</a>
								<div class="col-xs-10 no-padding cart-deliver-support">
									<p>Tổng đài hỗ trợ mua hàng online</p>
									<p> <a href="tel:18001162">1800 1162</a> (<b>8:30 - 21:30 <span>mỗi ngày</span></b>)</p>
									<p data-event="true" class="img_event hidden"> 
										<img class="responsive lazy" src="//file.hstatic.net/1000003969/file/uu-diem-mua-online-juno.jpg">
									</p>
								</div>
							</div>
						</div>



					</form>
					
				</div>
			</div>
		</div>
	</div>
	
    </section>
@stop
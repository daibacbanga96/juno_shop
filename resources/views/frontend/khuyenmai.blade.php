@extends('frontend/master')
@section('content')
<link href='css/khuyenmai.css' rel='stylesheet' type='text/css'  media='all'  />
<section class="banner container-fluid no-padding">
	<div class="row">
        <div class="col-xs-10 text-center"><img src="images/khuyenmai.png"/></div>
    </div>
</section>
    <div class="row">
		<div class="set_bg col-xs-10 text-center">
			<div class="dot">
				<div class="ping"></div>
			</div>
			<p class="mnkt">Mua ngay, chậm tay hết size, hết màu!</p>
		</div>
    </div>
    
    <div class="row two-data-control" data-length="2">
		

		<div class="menu_loop_bottom active" style="width:calc(100% /2)">
			
			
			<a href="{{asset('khuyenmai')}}">
				<p>Giày Khuyến Mãi </p>
			</a>
		</div>
		

		<div class="menu_loop_bottom " style="width:calc(100% /2)">
			
			
			<a href="{{asset('khuyenmai2')}}">
				<p>Túi/ Ví Khuyến Mãi </p>
			</a>
		</div>
		
    </div>
    <div class="row">
		<div class="col-sm-10 col-xs-10">
			<div id="sort-by" class="text-left">
				<ul class="">
					<li class="title">Sắp xếp theo:</li>
			
					<li class="">
						<a href="/collections/khuyen-mai?view=khuyenmai&sort_by=price-ascending">
							Giá tăng dần
						</a>
						 | 
					</li>

					<li class="">
						<a href="/collections/khuyen-mai?view=khuyenmai&sort_by=price-descending">
							Giá giảm dần
						</a>
						
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>

<section id="content-collection">
	<div class="container">
		<div class="row" id="product-lists">
        <div class="col-xs-6 col-sm-3 product-wrapper image1xx height-index clickImageUrl wow fadeInUp" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;" data-position="" data-wow-delay="0s">
	<div class="product-information" position-check="1">
		<div class="product-detail height-index-1">
			<a href="/products/juno-sneaker-fashion-model-tt03018-flatform-basic" title="Juno Sneaker Fashion Model  TT03018 - Flatform Basic">
				<div class="product-image">
					
					

					
					
					<div class="field-sale-right field-sale-count">
						<span class="percent-sale bg-red-cl-wh">-15<sup>%</sup></span>
					</div>
					
					
					
					
					<img class="main-image image-default  img-responsive lazy lazyloaded" data-src="https://product.hstatic.net/1000003969/product/kem_tt03018_3.jpg" alt="Juno Sneaker Fashion Model  TT03018 - Flatform Basic" src="https://product.hstatic.net/1000003969/product/kem_tt03018_3.jpg">
					<img class="image-hover hidden-xs img-responsive lazy" alt="Juno Sneaker Fashion Model  TT03018 - Flatform Basic" src="https://product.hstatic.net/1000003969/product/kem_tt03018_1.jpg" style="display: block;">
				</div>
			</a>
			<div class="product-info">
				<ul class="color-swatches">
					
					

					<li class="color-item active" data-img="https://product.hstatic.net/1000003969/product/kem_tt03018_3.jpg" data-img-hover="https://product.hstatic.net/1000003969/product/kem_tt03018_1.jpg">
						<a href="javascript:;" title=" Kem">
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/kem_tt03018_3.jpg">
						</a>
					</li>
					
					

					<li class="color-item " data-img="https://product.hstatic.net/1000003969/product/trang_tt03018_3_afd1266864444e0cbb2a62c6564f393c.jpg" data-img-hover="https://product.hstatic.net/1000003969/product/trang_tt03018_1.jpg">
						<a href="javascript:;" title=" Trắng">
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/trang_tt03018_3_afd1266864444e0cbb2a62c6564f393c.jpg">
						</a>
					</li>
					
					

					<li class="color-item " data-img="https://product.hstatic.net/1000003969/product/den_tt03018_3.jpg" data-img-hover="https://product.hstatic.net/1000003969/product/den_tt03018_1.jpg">
						<a href="javascript:;" title=" Đen">
							<img class="lazy" src="https://product.hstatic.net/1000003969/product/den_tt03018_3.jpg">
						</a>
					</li>
					
				</ul>
				<div class="text-center box-tags">
					
					<span class="tags sku-tags">TT03018</span>
				</div>
				<div class="price-info clearfix">
					<div class="price-new-old box-pro-price text-center">
						
						<span class="pro-price">350,000₫</span>
						<del class="pro-price-sale">410,000₫</del>
						

					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@stop
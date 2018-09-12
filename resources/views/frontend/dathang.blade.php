<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giày Nữ Thời Trang - Giày Công Sở, Giày Đi Chơi, Giày Dự Tiệc - JUNO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" href="css/checkout.css">
    <link href='css/font-awesome.css' rel='stylesheet' type='text/css'  media='all'  />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>Trang Chủ</title>
</head>
<body>
	<div id="main">
		<div id="checkout">
			<div class="left">
				<div class="container">
					<div id="head" class="row">
						<div class="col-12">
							<img src="images/icons/logo.png" alt="" class="">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Library</a></li>
								<li class="breadcrumb-item active">Data</li>
							</ol>
						</div>
					</div>
					<div id="form-check" class="row">
						<div class="col-12">
							<h3 class="title">Thông tin giao hàng</h3>
						</div>
						<div class="col-12">
							<form action="" class="row">
								<div class="col-12">
									<input type="text" required id="name" class="form-control">
									<label for="name">Họ và tên</label>
								</div>
								<div class="col-8">
									<input id="email" required type="text" class="form-control">
									<label for="name">Email</label>
								</div>
								<div class="col-4">
									<input type="number" required class="form-control">
									<label for="name">Số điện thoại</label>
								</div>
								<div class="col-12">
									<input type="text" required class="form-control">
									<label for="name">Địa chỉ</label>
								</div>
								<div class="col-4">
									<input type="text" required class="form-control">
									<label for="name">Tỉnh/thành</label>
								</div>
								<div class="col-4">
									<input type="text" required class="form-control">
									<label for="name">Quận/huyện</label>
								</div>
								<div class="col-4">
									<input type="text" required class="form-control">
									<label for="name">Xã/phường</label>
								</div>
								<div class="col-4">
									<a href="#" class="back-cart"><i class="fa fa-chevron-left" ></i> Giỏ hàng</a>
								</div>
								<div class="col-4 offset-4">
									<button class="btn btn-danger btn-block btn-md">Hoàn tất đơn hàng</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="right">
				<div class="container">
					<div id="cart-checkout" class="row">
						<div class="col-12">
                            <form method="post" id="formkm">
                                {{csrf_field()}}
                            <input class="magiamgia" type="text" name="magiamgia" placeholder="Mã giảm giá" />
                             <input class="sudung" type="submit" name="subgiamgia" value="Sử dụng">
                               
                            </form>
							<table class="table">
								<tr>
									<td>
										<img src="images/banchay2.jpg" class="img-product" alt="">
									</td>
									<td>
										<p class="name">Hài Siêu nữ tính</p>
										<p class="attr"> 36 / Hồng </p>
									</td>
									<td><p class="price">450,000 <sup>đ</sup></p></td>
								</tr>
								<tr>
									<td>
										<img src="images/banchay1.jpg" class="img-product" alt="">
									</td>
									<td>
										<p class="name">Giày thiệt phong cách</p>
										<p class="attr"> 36 / Đen </p>
									</td>
									<td><p class="price">450,000 <sup>đ</sup></p></td>
                                </tr>
                              
								<tfoot>
									<th colspan="2">Tổng cộng</th>
									<th ><p class="price float-right">900,000 <sup>đ</sup></p></th>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
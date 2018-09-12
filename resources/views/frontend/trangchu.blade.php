@extends('frontend/master')
@section('content')
<link href='css/style.css' rel='stylesheet' type='text/css'  media='all'/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/slide1.png" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/slide2.gif" alt="" style="width:100%;">
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
    <div class="banchay">
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <img class="img-banchay img-responsive" src="images/banchay1.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay1-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag bc">Bán chạy</span><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <img class="img-banchay img-responsive" src="images/banchay2.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay2-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag bc">Bán chạy</span><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <img class="img-banchay img-responsive" src="images/banchay3.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay3-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag bc">Bán chạy</span><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <img class="img-banchay img-responsive" src="images/banchay4.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay4-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag bc">Bán chạy</span><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <img class="img-banchay img-responsive" src="images/banchay5.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay5-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag bc">Bán chạy</span><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
    </div>

   <div class="moi">
      <div class="title">
        <h3>Top sản phẩm mới nhất</h3>
        <h6>Những xu hướng thời trang mới giúp nàng luôn đẹp nhất</h6>
      </div>
      <div class="banchay">
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <div class="field-sale-left new"><span>Mẫu Mới</span></div>
            <img class="img-banchay img-responsive" src="images/banchay1.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay1-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <div class="field-sale-left new"><span>Mẫu Mới</span></div>
            <img class="img-banchay img-responsive" src="images/banchay2.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay2-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <div class="field-sale-left new"><span>Mẫu Mới</span></div>
            <img class="img-banchay img-responsive" src="images/banchay3.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay3-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <div class="field-sale-left new"><span>Mẫu Mới</span></div>
            <img class="img-banchay img-responsive" src="images/banchay4.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay4-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      <div class="product--item">
        <div class="product--item--top">
          <a href="">
            <div class="field-sale-left new"><span>Mẫu Mới</span></div>
            <img class="img-banchay img-responsive" src="images/banchay5.jpg" width="240">
            <img class="img-banchay img-responsive" src="images/banchay5-hover.jpg" width="240">
          </a>
        </div>
        <div class="product--item--bot">
          <div class="code"><span class="tag ma">TT03007</span></div>
          <div class="price">450,000đ</div>
        </div>
      </div>
      </div>
    </div>
  </div>
@stop
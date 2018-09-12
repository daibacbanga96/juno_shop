<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hệ thống đăng nhập</title>

   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- NProgress -->
  <link href="bower_components/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="bower_components/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="bower_components/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div  class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
         @if(isset($errors))
         @foreach($errors->all() as $err)

         <div class="alert alert-danger">{{$err}}</div>

         @endforeach
         @endif
         @if(isset($fail))
         <div class="alert alert-danger">{{$fail}}</div>
         @endif
        
        
         <form method="post">
          <h1>Đăng nhập hệ thống</h1>
          <div>
            <input type="text" name="user" class="form-control" placeholder="Email..." />
          </div>
          <div>
            <input type="password" name="pass" class="form-control" placeholder="Password..." />
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
            <a class="reset_pass" href="#">Quên mật khẩu</a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><span class="glyphicon glyphicon-education"></span> Trang Quản trị</h1>
              <p></p>
            </div>
          </div>
          {{csrf_field()}}
        </form>
      </section>
    </div>
  </div>
</div>
</body>
</html>
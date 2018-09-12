<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/avatar/{{Auth::user()->user_avatar}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->user_name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Trang quản trị</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          </li>
        
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Danh sách Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{asset('admin/list')}}"><i class="fa fa-circle-o"></i>Danh sách User</a></li>
            <li><a href="{{asset('admin/addlist')}}"><i class="fa fa-circle-o"></i> Thêm User </a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Danh mục sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{asset('admin/listcate')}}"><i class="fa fa-circle-o"></i>Danh sách danh mục</a></li>
            <li><a href="{{asset('admin/addcate')}}"><i class="fa fa-circle-o"></i>Thêm danh mục </a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{asset('admin/listproduct')}}"><i class="fa fa-circle-o"></i>Danh sách sản phẩm </a></li>
           
            <li><a href="{{asset('admin/addproduct')}}"><i class="fa fa-circle-o"></i>Thêm sản phẩm </a></li>
          </ul>
        </li>
        <li class="">
          <a href="{{asset('admin/order')}}">
            <i class="fa fa-edit"></i> Đơn hàng
            <span class="pull-right-container">
            
            </span>
          </a>
        </li>

        <li class="">
          <a href="{{asset('admin/comment')}}">
            <i class="fa fa-comment"></i> <span>Phản hồi của khách hàng</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Sự kiện</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>
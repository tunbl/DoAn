  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Xem trang Website</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">

            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">

            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">

            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <form action="" method="POST">
                @csrf
        <li class="nav-item">
        <a href="{{route('logout')}}" class="btn btn-block btn-warning btn-flat"><i
              class="fas fa-sign-out-alt"></i></a>
        </li>
      </form>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin - Miker</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @can('admin')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dash-board.index')}}" class="nav-link {{ Request::is('quan-tri/dash-board') ? 'active' :null}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DashBoard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('search-index')}}" class="nav-link {{ Request::is('quan-tri/search') ? 'active' :null}} {{ Request::is('quan-tri/search/product') ? 'active' :null}}">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Tìm kiếm
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview
          {{ Request::is('quan-tri/danh-muc-cap-1') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/danh-muc-cap-1/create') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/danh-muc-cap-2') ? 'menu-open' :null}}">
            <a href="{{route('danh-muc-cap-1.index')}}" class="nav-link 
            {{ Request::is('quan-tri/danh-muc-cap-1') ? 'active' :null}}
            {{ Request::is('quan-tri/danh-muc-cap-1/create') ? 'active' :null}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh Mục
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('san-pham.index')}}" class="nav-link {{ Request::is('quan-tri/san-pham') ? 'active' :null}}">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Sản Phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('quan-ly-don-hang.index')}}" class="nav-link {{ Request::is('quan-tri/quan-ly-don-hang') ? 'active' :null}}">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Quản Lý Đơn Hàng
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview
          {{ Request::is('quan-tri/dai-ly') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/khach-hang') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/admin') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/khach-hang/create') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/search-user') ? 'menu-open' :null}}
          {{ Request::is('quan-tri/search/user') ? 'menu-open' :null}}"
          >

            <a href="#" class="nav-link 
            {{ Request::is('quan-tri/dai-ly') ? 'active' :null}}
            {{ Request::is('quan-tri/khach-hang') ? 'active' :null}}
            {{ Request::is('quan-tri/admin') ? 'active' :null}}
             {{ Request::is('quan-tri/khach-hang/create') ? 'active' :null}}
             {{ Request::is('quan-tri/search-user') ? 'active' :null}}
          {{ Request::is('quan-tri/search/user') ? 'active' :null}}">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dai-ly.index')}}" class="nav-link {{ Request::is('quan-tri/dai-ly') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đại Lý</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('khach-hang.index')}}" class="nav-link {{ Request::is('quan-tri/khach-hang') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Khách Hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin-list')}}" class="nav-link {{ Request::is('quan-tri/admin') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('khach-hang.create')}}" class="nav-link {{ Request::is('quan-tri/khach-hang/create') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm người dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('search-user-index')}}" class="nav-link {{ Request::is('quan-tri/search-user') ? 'active' :null}} {{ Request::is('quan-tri/search/user') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tìm kiếm người dùng</p>
                </a>
              </li>
            </ul>
          </li>
         <!--  <li class="nav-item has-treeview
          {{ Request::is('admin/quan-ly-bai-viet/tin-tuc') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-bai-viet/phong-thuy') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-bai-viet/gioi-thieu') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-bai-viet/dich-vu') ? 'menu-open' :null}}
          ">
            <a href="#" class="nav-link
            {{ Request::is('admin/quan-ly-bai-viet/tin-tuc') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-bai-viet/phong-thuy') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-bai-viet/gioi-thieu') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-bai-viet/dich-vu') ? 'active' :null}}
            ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Chính Sách
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-bai-viet/gioi-thieu') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Giới Thiệu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-bai-viet/tin-tuc') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tin Tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-bai-viet/phong-thuy') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phong Thủy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-bai-viet/dich-vu') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dịch Vụ</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview
          {{ Request::is('admin/quan-ly-hinh-anh/slide') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-hinh-anh/doi-tac') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-hinh-anh/favicon') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-hinh-anh/logo') ? 'menu-open' :null}}">
            <a href="#" class="nav-link
            {{ Request::is('admin/quan-ly-hinh-anh/slide') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-hinh-anh/doi-tac') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-hinh-anh/favicon') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-hinh-anh/logo') ? 'active' :null}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Quản Lý Hình Ảnh
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('slide.index')}}" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/slide') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slide</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/doi-tac') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đối Tác</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('logo')}}" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/logo') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('favicon')}}" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/favicon') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Favicon</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Support
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-danger"><i class="far fa-bell"></i></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sub')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng Ký Nhận Tin</p>
                  <span class="badge badge-info right">6</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sup')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hỗ Trợ</p>
                  <span class="badge badge-info right">6</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link {{ Request::is('admin/thiet-lap-thong-tin') ? 'active' :null}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Thiết Lập Thông Tin
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @elsecan('agency')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dash-board.index')}}" class="nav-link {{ Request::is('quan-tri/dash-board') ? 'active' :null}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DashBoard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('search-index')}}" class="nav-link {{ Request::is('quan-tri/search') ? 'active' :null}} {{ Request::is('quan-tri/search/product') ? 'active' :null}}">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Tìm kiếm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('san-pham.index')}}" class="nav-link {{ Request::is('quan-tri/san-pham') ? 'active' :null}} {{ Request::is('quan-tri/san-pham/create') ? 'active' :null}}">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Sản Phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('quan-ly-don-hang.index')}}" class="nav-link {{ Request::is('quan-tri/quan-ly-don-hang') ? 'active' :null}}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Quản Lý Đơn Hàng
              </p>
            </a>
          </li>
          <!-- <li class="nav-item has-treeview
          {{ Request::is('admin/quan-ly-hinh-anh/slide') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-hinh-anh/doi-tac') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-hinh-anh/favicon') ? 'menu-open' :null}}
          {{ Request::is('admin/quan-ly-hinh-anh/logo') ? 'menu-open' :null}}">
            <a href="#" class="nav-link
            {{ Request::is('admin/quan-ly-hinh-anh/slide') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-hinh-anh/doi-tac') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-hinh-anh/favicon') ? 'active' :null}}
            {{ Request::is('admin/quan-ly-hinh-anh/logo') ? 'active' :null}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Quản Lý Hình Ảnh
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/slide') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slide</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/doi-tac') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đối Tác</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/logo') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('admin/quan-ly-hinh-anh/favicon') ? 'active' :null}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Favicon</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Support
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-danger"><i class="far fa-bell"></i></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng Ký Nhận Tin</p>
                  <span class="badge badge-info right">6</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hỗ Trợ</p>
                  <span class="badge badge-info right">6</span>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="" class="nav-link {{ Request::is('admin/thiet-lap-thong-tin') ? 'active' :null}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Thiết Lập Thông Tin
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endcan
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<aside class="main-sidebar">
    {{-- sidebar: style can be found in sidebar.less --}}
    <section class="sidebar">

      {{-- Sidebar user panel --}}
       {{-- if(Auth::check()) $userCurrent = Auth::user(); --}}

      {{-- <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('files/images/'.$userCurrent->avatar) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $userCurrent->lastname.' '.$userCurrent->firstname }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> --}}


      {{-- sidebar menu: : style can be found in sidebar.less --}}
      <ul class="sidebar-menu">
        {{-- title sidebar --}}
        <li class="header">DASHBOARD</li>

        <li class="at">
          <a href="{{ route('admin::home') }}">
            <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
          </a>
        </li>

        {{-- <li class="at treeview">
          <a href="#">
            <i class="fa fa-area-chart" aria-hidden="true"></i> <span>Thống kê</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="at"><a href="{{ route('admin::thongke::user') }}"><i class="fa fa-caret-right"></i>Thống kê người dùng</a></li>
            <li class="at">
              <a href="{{ route('admin::thongke::order') }}">
                <i class="fa fa-caret-right"></i>
                  Thống kê đơn hàng
              </a>
            </li>
            <li class="at"><a href="#"><i class="fa fa-caret-right"></i>Thống kê chung</a></li>
          </ul>
        </li> --}}

        <li class="header">QUẢN TRỊ ADMIN</li>

        <li class="at treeview">
          <a href="#">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Quản lý đơn hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="at"><a href="{{ route('admin::invoice::all') }}"><i class="fa fa-caret-right"></i>Danh sách tất cả đơn hàng</a></li>
            <li class="at"><a href="{{ route('admin::invoice::lists') }}"><i class="fa fa-caret-right"></i>Đơn hàng thành công</a></li>
            <li class="at">
              <a href="{{ route('admin::invoice::yet') }}">
                <i class="fa fa-caret-right"></i>
                Đơn hàng chờ xử lý
                {{-- kiểm tra số lượng đơn hàng đã được xử lý hay chưa --}}
                {{-- <small class="label pull-right bg-yellow">1</small> --}}
              </a>
            </li>
            <li class="at">
              <a href="{{ route('admin::invoice::cancel') }}">
                <i class="fa fa-caret-right"></i>
                Đơn hàng đã hủy
              </a>
            </li>
            <li class="at"><a href="{{ route('admin::invoice::add') }}"><i class="fa fa-caret-right"></i>Tạo đơn hàng</a></li>
          </ul>
        </li>


        <li class="at treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="at"><a href="{{ route('admin::product::lists') }}"><i class="fa fa-caret-right"></i>Danh sách sản phẩm</a></li>
            <li class="at"><a href="{{ route('admin::product::add') }}"><i class="fa fa-caret-right"></i>Đăng sản phẩm</a></li>
            <li class="at"><a href="{{ route('admin::product::category') }}"><i class="fa fa-caret-right"></i>Danh mục sản phẩm</a></li>
            <li class="at"><a href="#"><i class="fa fa-caret-right"></i>Thuộc tính sản phẩm</a></li>
          </ul>
        </li>

        <li class="at treeview">
          <a href="#">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Blog tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="at"><a href="{{ route('admin::blog::lists') }}"><i class="fa fa-caret-right"></i>Danh sách bài viết</a></li>
            <li class="at"><a href="{{ route('admin::blog::add') }}"><i class="fa fa-caret-right"></i>Đăng bài viết</a></li>
            <li class="at"><a href="{{ route('admin::blog::category') }}"><i class="fa fa-caret-right"></i>Danh mục bài viết</a></li>
            
          </ul>
        </li>

        <li class="at treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Quản lý người dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="at"><a href="{{ route('admin::user::lists') }}"><i class="fa fa-caret-right"></i>Danh sách người dùng</a></li>
            {{-- <li class="at"><a href="{{ route('admin::user::lists::ncc') }}"><i class="fa fa-circle-o"></i>Danh sách nhà cung cấp</a></li> --}}
            <li class="at"><a href="{{ route('admin::user::lists::admin') }}"><i class="fa fa-caret-right"></i>Danh sách quản trị viên</a></li>
            <li class="at"><a href="{{ route('admin::user::logs') }}"><i class="fa fa-caret-right"></i>Hoạt động người dùng</a></li>
          </ul>
        </li>


        <li class="header"><i class="fa fa-envelope-o" aria-hidden="true"></i> QUẢN LÝ KHIẾU NẠI</li>
          <li class="at">
            <a href="#">
               <i class="fa fa-list-ul" aria-hidden="true"></i> <span>Danh sách khiếu nại (ticket)</span>
            </a>
          </li>
          <li class="at">
            <a href="#">
               <i class="fa fa-plus" aria-hidden="true"></i> <span>Tạo nhóm khiếu nại (ticket)</span>
            </a>
          </li>
          <li class="at">
            <a href="#">
               <i class="fa fa-plus" aria-hidden="true"></i> <span>Tạo loại khiếu nại (ticket)</span>
            </a>
          </li>

        <li class="header">NHÀ CUNG CẤP</li>

          <li class="at">
            <a href="{{ route('admin::shop::lists') }}">
              <i class="fa fa-sitemap" aria-hidden="true"></i> <span>Danh sách nhà cung cấp</span>
            </a>
          </li>
          <li class="at">
            <a href="{{ route('admin::user::lists::ncc') }}">
              <i class="fa fa-user-o" aria-hidden="true"></i> <span>Danh sách quản trị NCC</span>
            </a>
          </li>
          <li class="at">
            <a href="#">
              <i class="fa fa-clock-o" aria-hidden="true"></i> <span>Hoạt động của NCC</span>
            </a>
          </li>

          <li class="header"><i class="fa fa-question-circle" aria-hidden="true"></i> HELP CENTER - FRONTEND</li>

          <li class="at">
            <a href="#">
              <i class="fa fa-list-ul" aria-hidden="true"></i> <span>Danh mục câu hỏi</span>
            </a>
          </li>

          <li class="at">
            <a href="#">
              <i class="fa fa-list-ol" aria-hidden="true"></i> <span>Danh sách câu hỏi</span>
            </a>
          </li>

          <li class="header">GIAO DIỆN ADMIN</li>

          <li class="at">
            <a href="{{ route('admin::settingadmin::theme') }}">
              <i class="fa fa-cogs" aria-hidden="true"></i> <span>Quản lý giao diện admin</span>
            </a>
          </li>

        <li class="header">GIAO DIỆN NGƯỜI DÙNG</li>

        <li class="at">
          <a href="{{ route('admin::language::lists') }}">
            <i class="fa fa-language"></i> <span>Quản lý đa ngôn ngữ</span>
          </a>
        </li>

        <li class="at treeview">
          <a href="#">
            <i class="fa fa-cogs" aria-hidden="true"></i> <span>Quản lý giao diện user</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="at"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Quản lý widget</a></li>
            <li class="at"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Quản lý menu</a></li>
          </ul>
        </li>

        <li class="at">
          <a href="#">
            <i class="fa fa-windows" aria-hidden="true"></i> <span>Quản lý landing page</span>
          </a>
        </li>

        <li class="header">Quản lý file</li>
        <li class="at treeview">
          <a href="#">
            <i class="fa fa-file-image-o" aria-hidden="true"></i> <span>Quản lý media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="at"><a href="{{ route('admin::filemanager::images') }}"><i class="fa fa-caret-right"></i>Quản lý hình ảnh</a></li>
            <li class="at"><a href="#"><i class="fa fa-caret-right"></i>Quản lý file</a></li>
          </ul>
        </li>

        <li class="header">UPDATE</li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

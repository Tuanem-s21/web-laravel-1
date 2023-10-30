  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('style-all')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('style-all')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            {{-- dashboard --}}
          <li class="nav-item has-treeview {{ (Request::is('dashboard') ? 'menu-open' : '')}}">
            <a href="/dashboard" class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>


          {{-- User --}}
          <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link 
            {{ (Request::is('admin/user/index') ? 'active' : '') }}
            {{ (Request::is('admin/user/create') ? 'active' : '') }}
            {{ (Request::is('admin/user/edit') ? 'active' : '') }}">
              <i class="ri-file-user-fill nav-icon"></i>
              <p>User</p>
            </a>
          </li>

          {{-- booking --}}
          <li class="nav-item">
            <a href="{{route('admin.booking.index')}}" class="nav-link 
            {{ (Request::is('admin/booking/index') ? 'active' : '') }}
            {{ (Request::is('admin/booking/create') ? 'active' : '') }}
            {{ (Request::is('admin/booking/edite') ? 'active' : '') }}">
              <i class="ri-newspaper-fill nav-icon"></i>
              <p>Booking</p>
            </a>
          </li>

          {{-- client --}}
          <li class="nav-item">
            <a href="{{route('admin.client.index')}}" class="nav-link 
            {{ (Request::is('admin/client/index') ? 'active' : '') }}
            {{ (Request::is('admin/client/create') ? 'active' : '') }}
            {{ (Request::is('admin/client/edit') ? 'active' : '') }}">
            <i class="ri-user-3-fill nav-icon"></i>
              <p>Client</p>
            </a>
          </li>

          {{-- category --}}
          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link 
            {{ (Request::is('admin/category/index') ? 'active' : '') }}
            {{ (Request::is('admin/category/create') ? 'active' : '') }}
            {{ (Request::is('admin/category/edit') ? 'active' : '') }}">
            <i class="ri-file-copy-fill nav-icon"></i>
              <p>Category</p>
            </a>
          </li>

          {{-- history --}}
          <!-- <li class="nav-item">
            <a href="{{route('admin.history.index')}}" class="nav-link 
            {{ (Request::is('admin/history/index') ? 'active' : '') }}
            {{ (Request::is('admin/history/create') ? 'active' : '') }}
            {{ (Request::is('admin/history/edit') ? 'active' : '') }}">
            <i class="ri-chat-history-fill nav-icon"></i>
              <p>History</p>
            </a>
          </li> -->

          {{-- service --}}
          <li class="nav-item">
            <a href="{{route('admin.service.index')}}" class="nav-link 
            {{ (Request::is('admin/service/index') ? 'active' : '') }}
            {{ (Request::is('admin/service/create') ? 'active' : '') }}
            {{ (Request::is('admin/service/edit') ? 'active' : '') }}">
            <i class="ri-customer-service-2-fill nav-icon"></i>
              <p>Service</p>
            </a>
          </li>

          {{-- staff --}}
          <li class="nav-item">
            <a href="{{route('admin.staff.index')}}" class="nav-link 
            {{ (Request::is('admin/staff/index') ? 'active' : '') }}
            {{ (Request::is('admin/staff/create') ? 'active' : '') }}
            {{ (Request::is('admin/staff/edit') ? 'active' : '') }}">
            <i class="ri-user-6-fill nav-icon"></i>
              <p>Staff</p>
            </a>
          </li>

          {{-- voucher --}}
          {{-- <li class="nav-item">
            <a href="{{route('admin.voucher.index')}}" class="nav-link 
            {{ (Request::is('admin/voucher/index') ? 'active' : '') }}
            {{ (Request::is('admin/voucher/create') ? 'active' : '') }}
            {{ (Request::is('admin/voucher/edit') ? 'active' : '') }}">
            <i class="ri-gift-2-fill nav-icon"></i>
              <p>Voucher</p>
            </a>
          </li> --}}

          {{-- connect --}}
          {{-- <li class="nav-item">
            <a href="{{route('admin.connect.index')}}" class="nav-link 
            {{ (Request::is('admin/connect/index') ? 'active' : '') }}
            {{ (Request::is('admin/connect/create') ? 'active' : '') }}
            {{ (Request::is('admin/connect/edit') ? 'active' : '') }}">
            <i class="ri-file-copy-fill nav-icon"></i>
              <p>Connect</p>
            </a>
          </li> --}}

          {{-- logn out --}}
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="ri-logout-box-line nav-icon"></i>
              <p>Sign Out<span class="right badge badge-danger">Active</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
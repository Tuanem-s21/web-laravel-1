  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard1" class="brand-link">
      <img src="style-all/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="style-all/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            {{-- dashboard --}}
          <li class="nav-item has-treeview  
          {{ (Request::is('dashboard1') ? 'menu-open' : '')}}
          {{ (Request::is('dashboard2') ? 'menu-open' : '')}}
          {{ (Request::is('dashboard3') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link 
            {{ (Request::is('dashboard1') ? 'active' : '') }}
            {{ (Request::is('dashboard2') ? 'active' : '') }}
            {{ (Request::is('dashboard3') ? 'active' : '') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard1" class="nav-link {{ (Request::is('dashboard1') ? 'active' : '') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard2" class="nav-link {{ (Request::is('dashboard2') ? 'active' : '') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard3" class="nav-link {{ (Request::is('dashboard3') ? 'active' : '') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Widgets --}}
          <li class="nav-item">
            <a href="/widgets" class="nav-link {{ (Request::is('widgets') ? 'active' : '') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          {{-- charts --}}
          <li class="nav-item has-treeview 
          {{ (Request::is('chartjs') ? 'menu-open' : '') }}
          {{ (Request::is('flot') ? 'menu-open' : '') }}
          {{ (Request::is('inline') ? 'menu-open' : '') }}">
            <a href="#" class="nav-link 
            {{ (Request::is('chartjs') ? 'active' : '') }}
            {{ (Request::is('flot') ? 'active' : '') }}
            {{ (Request::is('inline') ? 'active' : '') }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/chartjs" class="nav-link {{ (Request::is('chartjs') ? 'active' : '') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/flot" class="nav-link {{ (Request::is('flot') ? 'active' : '') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inline" class="nav-link {{ (Request::is('inline') ? 'active' : '') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- form --}}
          <li class="nav-item has-treeview 
          {{ (Request::is('general') ? 'menu-open' : '')}}
          {{ (Request::is('validation') ? 'menu-open' : '')}}
          {{ (Request::is('advanced') ? 'menu-open' : '')}}
          {{ (Request::is('editors') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link 
            {{ (Request::is('general') ? 'active' : '')}}
            {{ (Request::is('validation') ? 'active' : '')}}
            {{ (Request::is('advanced') ? 'active' : '')}}
            {{ (Request::is('editors') ? 'active' : '')}}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/general" class="nav-link {{ (Request::is('general') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/advanced" class="nav-link {{ (Request::is('advanced') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editors" class="nav-link {{ (Request::is('editors') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/validation" class="nav-link {{ (Request::is('validation') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- tables --}}
          <li class="nav-item has-treeview 
          {{ (Request::is('simple') ? 'menu-open' : '')}}
          {{ (Request::is('data') ? 'menu-open' : '')}}
          {{ (Request::is('jsgrid') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link 
            {{ (Request::is('simple') ? 'active' : '')}}
            {{ (Request::is('data') ? 'active' : '')}}
            {{ (Request::is('jsgrid') ? 'active' : '')}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/simple" class="nav-link {{ (Request::is('simple') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/data" class="nav-link {{ (Request::is('data') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jsgrid" class="nav-link {{ (Request::is('jsgrid') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">EXAMPLES</li>

          {{-- calendar --}}
          <li class="nav-item">
            <a href="/calendar" class="nav-link {{ (Request::is('calendar') ? 'active' : '')}}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          {{-- Gallery --}}
          <li class="nav-item">
            <a href="/gallery" class="nav-link {{ (Request::is('gallery') ? 'active' : '')}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>

          {{-- Mailbox --}}
          <li class="nav-item has-treeview 
          {{ (Request::is('mailbox') ? 'menu-open' : '')}}
          {{ (Request::is('compose') ? 'menu-open' : '')}}
          {{ (Request::is('read-mail') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link 
            {{ (Request::is('mailbox') ? 'active' : '')}}
            {{ (Request::is('compose') ? 'active' : '')}}
            {{ (Request::is('read-mail') ? 'active' : '')}}">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mailbox" class="nav-link {{ (Request::is('mailbox') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/compose" class="nav-link {{ (Request::is('compose') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/read-mail" class="nav-link {{ (Request::is('read-mail') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Pages --}}
          <li class="nav-item has-treeview 
          {{ (Request::is('invoice') ? 'menu-open' : '')}}
          {{ (Request::is('profile') ? 'menu-open' : '')}}
          {{ (Request::is('e-commerce') ? 'menu-open' : '')}}
          {{ (Request::is('projects') ? 'menu-open' : '')}}
          {{ (Request::is('project-app') ? 'menu-open' : '')}}
          {{ (Request::is('project-edit') ? 'menu-open' : '')}}
          {{ (Request::is('project-detail') ? 'menu-open' : '')}}
          {{ (Request::is('contacts') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link 
            {{ (Request::is('invoice') ? 'active' : '')}}
            {{ (Request::is('profile') ? 'active' : '')}}
            {{ (Request::is('e-commerce') ? 'active' : '')}}
            {{ (Request::is('projects') ? 'active' : '')}}
            {{ (Request::is('project-app') ? 'active' : '')}}
            {{ (Request::is('project-edit') ? 'active' : '')}}
            {{ (Request::is('project-detail') ? 'active' : '')}}
            {{ (Request::is('contacts') ? 'active' : '')}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/invoice" class="nav-link {{ (Request::is('invoice') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/profile" class="nav-link {{ (Request::is('profile') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/e-commerce" class="nav-link {{ (Request::is('e-commerce') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/projects" class="nav-link {{ (Request::is('projects') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/project-add" class="nav-link {{ (Request::is('project-app') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/project-edit" class="nav-link {{ (Request::is('project-edit') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/project-detail" class="nav-link {{ (Request::is('project-detail') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/contacts" class="nav-link {{ (Request::is('contacts') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Extras --}}
          <li class="nav-item has-treeview 
          {{ (Request::is('login') ? 'menu-open' : '')}}
          {{ (Request::is('register') ? 'menu-open' : '')}}
          {{ (Request::is('forgot-password') ? 'menu-open' : '')}}
          {{ (Request::is('recover-password') ? 'menu-open' : '')}}
          {{ (Request::is('lockscreen') ? 'menu-open' : '')}}
          {{ (Request::is('legacy-user-menu') ? 'menu-open' : '')}}
          {{ (Request::is('language-menu') ? 'menu-open' : '')}}
          {{ (Request::is('404') ? 'menu-open' : '')}}
          {{ (Request::is('500') ? 'menu-open' : '')}}
          {{ (Request::is('pace') ? 'menu-open' : '')}}
          {{ (Request::is('blank') ? 'menu-open' : '')}}
          {{ (Request::is('starter') ? 'menu-open' : '')}}">
            <a href="#" class="nav-link 
            {{ (Request::is('login') ? 'active' : '')}}
            {{ (Request::is('register') ? 'active' : '')}}
            {{ (Request::is('forgot-password') ? 'active' : '')}}
            {{ (Request::is('recover-password') ? 'active' : '')}}
            {{ (Request::is('lockscreen') ? 'active' : '')}}
            {{ (Request::is('legacy-user-menu') ? 'active' : '')}}
            {{ (Request::is('language-menu') ? 'active' : '')}}
            {{ (Request::is('404') ? 'active' : '')}}
            {{ (Request::is('500') ? 'active' : '')}}
            {{ (Request::is('pace') ? 'active' : '')}}
            {{ (Request::is('blank') ? 'active' : '')}}
            {{ (Request::is('starter') ? 'active' : '')}}">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/login" class="nav-link {{ (Request::is('login') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link {{ (Request::is('register') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/forgot-password" class="nav-link {{ (Request::is('forgot-password') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/recover-password" class="nav-link {{ (Request::is('recover-password') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/lockscreen" class="nav-link {{ (Request::is('lockscreen') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/legacy-user-menu" class="nav-link {{ (Request::is('legacy-user-menu') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/language-menu" class="nav-link {{ (Request::is('language-menu') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/404" class="nav-link {{ (Request::is('404') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/500" class="nav-link {{ (Request::is('500') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pace" class="nav-link {{ (Request::is('pace') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/blank" class="nav-link {{ (Request::is('blank') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/starter" class="nav-link {{ (Request::is('starter') ? 'active' : '')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- logn out --}}
          <li class="nav-item">
            <a href="/login" class="nav-link active">
              <i class="far fa-plus-square nav-icon"></i>
              <p>
                Sign Out
                <span class="right badge badge-danger">Active</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-dashboard fa-lg"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('employees.index') }}"><i class="fa fa-user fa-lg"></i> <span>Employees </span></a></li>
{{--        <li class="treeview">--}}
{{--          <a href="#"><i class="fa fa-gear fa-lg"></i> <span> General Management </span>--}}
{{--            <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-left pull-right"></i>--}}
{{--            </span>--}}
{{--          </a>--}}
{{--          <ul class="treeview-menu">--}}
{{--            <li><a href="#">Department</a></li>--}}
{{--            <li><a href="#">Division</a></li>--}}
{{--            <li><a href="#">Country</a></li>--}}
{{--            <li><a href="#">State</a></li>--}}
{{--            <li><a href="#">City</a></li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        <li><a href="#"><i class="fa fa-user fa-lg"></i> <span> Add User </span></a></li>--}}
{{--        <li><a href="#"><i class="fa fa-book fa-lg"></i> <span> Generate Reports </span></a></li>--}}

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

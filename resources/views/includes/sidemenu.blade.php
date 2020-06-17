 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{session('USERDATA')->user['image']['url']}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{session('USERDATA')->user['name']['givenName']}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="/virtuallab">
            <i class="fa fa-dashboard"></i> <span>Student Portal</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="/virtuallab/Admin">
            <i class="fa fa-dashboard"></i> <span>Admin Portal</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
		 <li class="treeview">
          <a href="/virtuallab">
            <i class="fa fa-dashboard"></i> <span>Faculty Portal</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

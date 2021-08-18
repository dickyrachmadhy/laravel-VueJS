<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
              Dicky Rachmadi 
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
            <li class="nav-item has-treeview menu-open">
                <router-link to="" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i> Starter Pages <i class="right fas fa-angle-left"></i> 
                </router-link>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="users" class="nav-link">
                            <i class="fas fa-users nav-icon blue"></i>
                            <p>Users</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                    <router-link to="level" class="nav-link">
                        <i class="fas fa-layer-group red"></i>
                        <p>Level</p>
                    </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <router-link to="#" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </router-link>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
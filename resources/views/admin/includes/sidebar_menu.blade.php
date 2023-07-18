<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link {{setActive('admin')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Main Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link {{setActive('admin')}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/my-profile" class="nav-link {{setActiveSub('admin','my-profile')}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>My Account</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

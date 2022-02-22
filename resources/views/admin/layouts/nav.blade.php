<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ url('admin/categories') }}"
                class="nav-link {{ request()->is('*/categories*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-desktop"></i>
                <p>Category</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/admin/products') }}" class="nav-link {{ request()->is('*/product*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-desktop"></i>
                <p>Product</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>

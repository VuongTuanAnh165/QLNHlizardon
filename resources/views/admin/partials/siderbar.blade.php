<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('homes.index')}}" class="brand-link">
        <img src="{{asset($company->logo)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LIZARDON</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/admin6.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('homes.index')}}" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
                <li class="nav-header">Quản lý danh mục</li>
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link {{Request::is('admin/categories/*') ? 'active' : ''}}">
                        <i class="nav-icon far fas fa-quran"></i>
                        <p>
                            Danh mục
                            <span class="badge badge-info right">{{$category_count}}</span>
                        </p>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
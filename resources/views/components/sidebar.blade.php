<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light">Admin Fitnessign</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/default_photo_profile.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name ?? 'Administrator' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <x-nav-link href="/" :active="request()->is('/')">
                        <x-slot name="icon">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                        </x-slot>
                        Dashboard
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/instructors" :active="request()->is('instructors')">
                        <x-slot name="icon">
                            <i class="nav-icon fas fa-users"></i>
                        </x-slot>
                        Instructors
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/clients" :active="request()->is('clients')">
                        <x-slot name="icon">
                            <i class="nav-icon fas fa-user"></i>
                        </x-slot>
                        Clients
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/services" :active="request()->is('services')">
                        <x-slot name="icon">
                            <i class="nav-icon fas fa-weight-hanging"></i>
                        </x-slot>
                        Services
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/orders" :active="request()->is('orders')">
                        <x-slot name="icon">
                            <i class="nav-icon fas fa-calendar-minus"></i>
                        </x-slot>
                        Orders
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-door-open"></i>
                        <p>
                            Sign Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

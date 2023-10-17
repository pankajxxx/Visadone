<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link" style="background-color: white;color:black;">
        <img src="https://visadone.com/laravel_demo/testing/laravel8/public/images/visadone_logo.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light">VisaDone</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search"
                    style="background-color: white;color:black;">
                <div class="input-group-append">
                    <button class="btn btn-sidebar" style="background-color: white;color:black;">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" style="background-color: white;">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    {{-- @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'Track list')
                            ->exists();
                    @endphp

                    @if (auth()->check() && $hasPermission) --}}
                        <a href="/visa/create" class="nav-link">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            <p>
                                &nbsp; Apply Visa

                            </p>
                        </a>
                    {{-- @endif --}}
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('users*') || request()->is('agency*') || request()->is('agents*') || request()->is('branch*')   ? 'active' : '' }}">

                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            Authority
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            @php
                                $hasPermission = DB::table('role_has_permissions')
                                    ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                    ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                                    ->where('roles.id', auth()->user()->role)
                                    ->where('permissions.name', 'Users list')
                                    ->exists();
                            @endphp

                            @if (auth()->check() && $hasPermission)
                                <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <p>&nbsp;&nbsp;User Management</p>
                                </a>
                            @endif
                        </li>

                        <li class="nav-item">
                            @php
                                $hasPermission = DB::table('role_has_permissions')
                                    ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                    ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                                    ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                                    ->where('permissions.name', 'Branch list')
                                    ->exists();
                            @endphp

                            @if (auth()->check() && $hasPermission)
                                <a href="/branch" class="nav-link">
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                    <p>&nbsp;&nbsp;Branch Management</p>
                                </a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @php
                                $hasPermission = DB::table('role_has_permissions')
                                    ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                    ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                                    ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                                    ->where('permissions.name', 'Agency list')
                                    ->exists();
                            @endphp
                            @if (auth()->check() && $hasPermission)
                                <a href="/agency" class="nav-link">
                                    <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                    <p>&nbsp;&nbsp;Agency Management</p>
                                </a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @php
                                $hasPermission = DB::table('role_has_permissions')
                                    ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                    ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                                    ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                                    ->where('permissions.name', 'Agent list')
                                    ->exists();
                            @endphp
                            @if (auth()->check() && $hasPermission)
                                <a href="/agents" class="nav-link">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                    <p>&nbsp;&nbsp;Agent Management</p>
                                </a>
                            @endif
                        </li>
                        {{-- <li class="nav-item">
                            @php
                                $hasPermission = DB::table('role_has_permissions')
                                    ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                                    ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                                    ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                                    ->where('permissions.name', 'Users Roles')
                                    ->exists();
                            @endphp

                            @if (auth()->check() && $hasPermission)
                                <a href="/permission" class="nav-link">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    <p>&nbsp;&nbsp;User Roles</p>
                                </a>
                            @endif
                        </li> --}}

                    </ul>
                </li>
                <li class="nav-item" >
                    @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'Track list')
                            ->exists();
                    @endphp
                    @if (auth()->check() && $hasPermission)
                        <a href="/track" class="nav-link {{ request()->is('track*') ? 'active' : '' }}">
                            <i class="fa fa-retweet" aria-hidden="true"></i>
                            <p>
                                Track Applications

                            </p>
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'Offers list')
                            ->exists();
                    @endphp
                    @if (auth()->check() && $hasPermission)
                    <a href="/visa/offers" class="nav-link {{ request()->is('visa/offers*') ? 'active' : '' }}">

                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <p>
                                &nbsp;Visa Offers Config

                            </p>
                        </a>
                    @endif

                </li>
                <li class="nav-item">
                    @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'Documents list')
                            ->exists();
                    @endphp
                    @if (auth()->check() && $hasPermission)
                        <a href="/offer/rule/get" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>
                                Visa Documents Config

                            </p>
                        </a>
                    @endif

                </li>

                <li class="nav-item">
                    @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'Currency list')
                            ->exists();
                    @endphp
                    @if (auth()->check() && $hasPermission)
                        <a href="/currency" class="nav-link {{ request()->is('currency*') ? 'active' : '' }}">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <p>
                                Currency Config

                            </p>
                        </a>
                    @endif

                </li>

                <li class="nav-item">
                    @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'Track list')
                            ->exists();
                    @endphp

                    @if (auth()->check() && $hasPermission)
                        <a href="/tax" class="nav-link {{ request()->is('tax*') ? 'active' : '' }}">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <p>
                                Tax Config

                            </p>
                        </a>
                    @endif

                </li>

                <li class="nav-item">
                    @php
                        $hasPermission = DB::table('role_has_permissions')
                            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                            ->where('roles.id', auth()->user()->role) // Assuming you have a 'role' field in the users table
                            ->where('permissions.name', 'User Access List')
                            ->exists();
                    @endphp

                    @if (auth()->check() && $hasPermission)
                        <a href="/permission" class="nav-link {{ request()->is('permission*') ? 'active' : '' }}">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <p>
                                User Access Management

                            </p>
                        </a>
                    @endif

                </li>



            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


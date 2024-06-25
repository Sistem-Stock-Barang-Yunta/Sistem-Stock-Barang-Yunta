<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/">Manajemen Stock</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">MS</a>
    </div>
    <ul class="sidebar-menu">
        @if (Auth::check() && Auth::user()->role == 'admin')
            <li class="menu-header">Starter</li>
            <li class="{{ Str::startsWith(Request::path(), 'admin') ? 'active' : '' }}"><a class="nav-link"
                    href="/dashboard"><i class="fas fa-home"></i>
                    <span>Dashboard Admin</span></a></li>
            <li class="{{ Request::path() == 'manajemen-staff' ? 'active' : '' }}"><a class="nav-link"
                    href="/manajemen-staff"><i class="fas fa-user"></i>
                    <span>Manajemen Staff</span></a></li>
            <li class="nav-item dropdown {{ Str::startsWith(Request::path(), 'stock') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-box"></i>
                    <span>Stock</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::path() == 'stockin' ? 'active' : '' }}"><a class="nav-link"
                            href="/stockin">Stock In</a></li>
                    <li class="{{ Request::path() == 'stockout' ? 'active' : '' }}"><a class="nav-link"
                            href="/stockout">Stock Out</a></li>
                </ul>
            </li>
            <!-- Dropdown menu for Items and Categories -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-list"></i>
                    <span>Manajemen Item</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::path() == 'tampil_item' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.tampil_item') }}"><i class="fas fa-cube"></i>
                            <span>Manajemen Item</span></a></li>
                    <li class="{{ Request::path() == 'tampilkategori' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.tampilkategori') }}"><i class="fas fa-thumbtack"></i>
                            <span>Manajemen kategori</span></a></li>
                </ul>
            </li>
            <!-- End of Dropdown menu -->
            <li class="{{ Request::path() == 'tampil_supplier' ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.tampil_supplier') }}"><i class="far fa-user"></i>
                    <span>Manajemen Supplier</span></a></li>
        @endif

        @if (Auth::check() && Auth::user()->role == 'staf')
            <!-- Sidebar menu items for staff -->
            <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a class="nav-link" href="/dashboard"><i
                        class="fas fa-home"></i>
                    <span>Dashboard Staff</span></a></li>
            <li class="nav-item dropdown {{ Str::startsWith(Request::path(), 'stock') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-box"></i>
                    <span>Stock</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::path() == 'stockin' ? 'active' : '' }}"><a class="nav-link"
                            href="/stockin">Stock In</a></li>
                    <li class="{{ Request::path() == 'stockout' ? 'active' : '' }}"><a class="nav-link"
                            href="/stockout">Stock Out</a></li>
                </ul>
            </li>
        @endif
    </ul>
</aside>

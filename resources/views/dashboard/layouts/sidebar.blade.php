<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item mb-3">
                <a class="nav-link {{ Request::is('/profile') ? 'active' : '' }}" aria-current="page" href="/profile">
                    <span data-feather="user" class="align-text-bottom"></span>
                    Hello, {{ auth()->user()->name }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/input') ? 'active' : '' }} " href="/dashboard/input">
                    <span data-feather="plus-square" class="align-text-bottom"></span>
                    Input Orders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  {{ Request::is('dashboard/daftar') ? 'active' : '' }}" href="/dashboard/daftar">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    List Orders
                </a>
            </li>
        </ul>
    </div>
</nav>

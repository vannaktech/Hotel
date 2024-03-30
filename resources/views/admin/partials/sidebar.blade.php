<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#customers" role="button" aria-expanded="false"
                    aria-controls="customers">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Customers</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="customers">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('customertypes.index') }}" class="nav-link">Customer Type</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('customers.index') }}" class="nav-link">Customer List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#rooms" role="button" aria-expanded="false"
                    aria-controls="rooms">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Rooms</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="rooms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/rooms/inbox.html" class="nav-link">Room Type</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/rooms/read.html" class="nav-link">Room List</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

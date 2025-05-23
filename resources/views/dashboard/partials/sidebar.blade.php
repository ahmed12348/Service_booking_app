
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/PDC Logo En-Hor.jfif') }}" class="logo-icon" alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
    </div>

    <!-- Navigation -->
    <ul class="metismenu" id="menu">
        <li>

            <li class="{{ request()->routeIs('/') ? 'mm-active' : '' }}">
                <a href="/">
                    <div class="parent-icon"><i class="bi-box"></i></div>
                    <div class="menu-title">Home</div>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.services.*') ? 'mm-active' : '' }}">
                <a href="{{route('admin.services.index')}}">
                    <div class="parent-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="menu-title">Services</div>
                </a>
            </li>
 
            <li class="{{ request()->routeIs('admin.bookings.*') ? 'mm-active' : '' }}">
                <a href="{{route('admin.bookings.index')}}">
                    <div class="parent-icon"><i class="bi bi-bookmark-fill"></i></div>
                    <div class="menu-title">Bookings</div>
                </a>
            </li>
    </ul>
</aside>

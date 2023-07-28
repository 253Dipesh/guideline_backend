<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" />
                    <span class="logo-name">Guide Line</span>
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Main</li>
                <li class="dropdown active">
                    <a href="{{ route('dashboard') }}" class="nav-link"><i
                            data-feather="monitor"></i><span>Dashboard</span></a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('company.index') }}" class="nav-link"><i data-feather="home"></i><span>Company
                            Setup</span></a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('slide.index') }}" class="nav-link"><i data-feather="image"></i><span>Slide
                            Setup</span></a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('about.index') }}" class="nav-link"><i data-feather="info"></i><span>About
                            us</span></a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('activity.index') }}" class="nav-link"><i
                            data-feather="activity"></i><span>Activities
                            Setup</span></a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('guide.index') }}" class="nav-link"><i data-feather="users"></i><span>Guide
                            Setup</span></a>
                </li>

                {{-- <li class="dropdown">
                    <a href="index.html" class="nav-link"><i data-feather="calendar"></i><span>Events</span></a>
                </li> --}}

                <li class="dropdown">
                    <a href="{{ route('guide/booking.index') }}" class="nav-link"><i
                            data-feather="check-circle"></i><span>Booking Details
                        </span></a>
                </li>

            </ul>
        </aside>
    </div>
</div>

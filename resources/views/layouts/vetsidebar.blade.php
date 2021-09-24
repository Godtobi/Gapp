<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Vet Menu</li>

                <li>
                    <a href="/dashboard">
                        <i class="metismenu-icon  pe-7s-rocket">
                        </i>Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{route("companies.index")}}">
                        <i class="metismenu-icon  pe-7s-box2">
                        </i>Companies
                    </a>
                </li>

                <li class="">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                        Users
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>

                    <ul class="">
                        <li>
                            <a href="{{route("users.create")}}">
                                <i class="metismenu-icon">
                                </i>Create User
                            </a>
                        </li>
                    </ul>

                    <ul class="">
                        <li>
                            <a href="{{route("users.index")}}">
                                <i class="metismenu-icon">
                                </i>Admins
                            </a>
                        </li>
                    </ul>

                    <ul class="">
                        <li>
                            <a href="{{route("employees.index")}}">
                                <i class="metismenu-icon">
                                </i>Employees
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="widgets-chart-boxes.html" ref="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="metismenu-icon pe-7s-power">
                        </i>Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>

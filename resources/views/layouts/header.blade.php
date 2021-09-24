<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div style="background-repeat: no-repeat; background-size: contain; height: 70px" class="logo-src"></div>
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
    <div class="app-header__content">
        <div class="app-header-left">
{{--            <div class="search-wrapper">--}}
{{--                <div class="input-holder">--}}
{{--                    <input type="text" class="search-input" placeholder="Type to search">--}}
{{--                    <button class="search-icon"><span></span></button>--}}
{{--                </div>--}}
{{--                <button class="close"></button>--}}
{{--            </div>--}}
       </div>
        <div class="app-header-right">

            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    @if(auth()->user()->hasAnyRole(['user','petmeadmin']))
                                        <img width="42" class="rounded-circle" src="{{asset("user.jpg")}}" alt="">
                                    @else
                                        @if(auth()->user()->vet)
                                            <img width="42" class="rounded-circle" src="{{auth()->user()->vet->logo ?? asset("user.jpg")}}" alt="">
                                        @else
                                            <img width="42" class="rounded-circle" src="{{asset("user.jpg")}}" alt="">
                                        @endif

                                    @endif

                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2" style="background-image: url('dAssets/assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            @if(auth()->user()->hasAnyRole(['user','petmeadmin']))
                                                                <img width="42" class="rounded-circle" src="{{asset("user.jpg")}}" alt="">
                                                            @else
                                                                @if(auth()->user()->vet)
                                                                    <img width="42" class="rounded-circle" src="{{auth()->user()->vet->logo ?? asset("user.jpg")}}" alt="">
                                                                @else
                                                                    <img width="42" class="rounded-circle" src="{{asset("user.jpg")}}" alt="">
                                                                @endif
                                                            @endif
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">{{auth()->user()->name}}</div>
                                                        </div>
                                                        <div class="widget-content-right mr-2">
                                                            <button onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                            </button>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 70px;">
                                        <div class="scrollbar-container ps">
                                            <ul class="nav flex-column">

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

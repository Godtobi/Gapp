<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/dashboards-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 21:00:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PetMe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="Petme.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('dAssets/assets/css/tahead.css')}}" rel="stylesheet">
<link href="{{asset("dAssets/assets/css/main.87c0748b313a1dda75f5.css")}}" rel="stylesheet"></head>
<link href="{{asset('dAssets/assets/css/pe7.css')}}" rel="stylesheet">
<link href="{{asset('dAssets/assets/css/sweetalert2.css')}}" rel="stylesheet">
<link href="{{asset('dAssets/assets/css/font-awesome.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@yield('page_css')
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    @include("layouts.header")

    <div class="app-main">
        @if(auth()->user()->hasAnyRole(['petmeadmin']))
            @include("dash.layouts.adminSidebar")
        @elseif(auth()->user()->hasAnyRole(['user']))
            @include("dash.layouts.userSidebar")
        @else
            @include("layouts.vetsidebar")
        @endif
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                @yield("page__icon")

                            </div>
                            <div>
                                @yield("page__title")
                                <div class="page-title-subheading">
                                    @yield("page__sub")
                                </div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            @yield("buttons")
                                <a href="{{url()->previous()}}" style="margin-bottom: 20px; color: white" type="button" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    Back
                                </a>
                        </div>
                    </div>
                </div>
                @include("layouts.flash")
                @yield("main")
            </div>

        </div>
    </div>
</div>


{{--<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>--}}
<script type="text/javascript" src="{{asset("dAssets/assets/scripts/jquerry.js")}}"></script>
<script type="text/javascript" src="{{asset("dAssets/assets/scripts/main.87c0748b313a1dda75f5.js")}}"></script>
<script type="text/javascript" src="{{asset('dAssets/assets/scripts/sweetalertscripts.bundle.js')}}"></script>
@yield('page_js')
</body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/dashboards-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 21:00:47 GMT -->
</html>
@yield("modals")



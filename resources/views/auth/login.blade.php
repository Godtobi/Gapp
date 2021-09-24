<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 21:00:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('dAssets/assets/css/main.87c0748b313a1dda75f5.css')}}" rel="stylesheet">
    <link href="{{asset('dAssets/assets/css/pe7.css')}}" rel="stylesheet">
    <style>
        .field-icon {
            float: right;
            margin-left: 430px;
            margin-top: -30px;
            position: absolute;
            z-index: 2;
            color: #0b0c0d;
            font-weight: bold;
            font-size: 20px;

        }

    </style>
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                    @include('layouts.flash')
                                    <form action="/login" method="post" class="">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                                                    <i toggle="#password-field" class="pe-7s-look field-icon toggle-password"> </i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <div class="float-left"><a href="/forgotPassword" class="btn-lg btn btn-link">Recover Password</a></div>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="{{asset('dAssets/assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
<script>
    $(".toggle-password").click(function() {
        var inputType = $("#examplePassword").attr("type")
        if (inputType === "password") {
            $("#examplePassword").attr("type","text");
            $(".field-icon").removeClass("pe-7s-look");
            $(".field-icon").addClass("pe-7s-lock");
        } else {
            $("#examplePassword").attr("type","password");
            $(".field-icon").addClass("pe-7s-look");
            $(".field-icon").removeClass("pe-7s-lock");
        }
    });
</script>
</body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 21:00:51 GMT -->
</html>

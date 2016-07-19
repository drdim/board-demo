<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>{{ trans('main.title') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
</head>
<body class="page-container-bg-solid page-md">
<div class="page-wrapper">
    @section('sidebar')
        <div class="page-wrapper-row">
            <div class="page-wrapper-top">
                <!-- BEGIN HEADER -->
                <div class="page-header">
                    <!-- BEGIN HEADER TOP -->
                    <div class="page-header-top">
                        <div class="container">
                            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                            <a href="javascript:;" class="menu-toggler"></a>
                            <!-- END RESPONSIVE MENU TOGGLER -->
                            <!-- BEGIN TOP NAVIGATION MENU -->
                            <div class="top-menu">
                                <ul class="nav navbar-nav pull-right">
                                @if (Auth::check())
                                    <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">

                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                               data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle"
                                                     src="/assets/layouts/layout3/img/avatar9.jpg">
                                                <span class="username username-hide-mobile">{{ Auth::user()->email }}</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="/myProfile">
                                                        <i class="icon-user"></i> {{trans('user.profileText')}} </a>
                                                </li>
                                                <li>
                                                    <a href="/myBoard">
                                                        <i class="icon-envelope-open"></i> {{trans('user.myBoard')}}
                                                        <span class="badge badge-danger"> 3 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/bulletin/create">
                                                        <i class="icon-rocket"></i> {{trans('user.newBulletin')}}
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href='/auth/logout'>
                                                        <i class="icon-key"></i>{{trans('user.logout')}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only"></span>
                                            <i class="icon-logout" title="{{trans('user.logout')}}"
                                               onclick="window.location.href='/auth/logout'; return false;"></i>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    @endif
                                </ul>
                            </div>
                            <!-- END TOP NAVIGATION MENU -->
                        </div>
                    </div>
                    <!-- END HEADER TOP -->
                    <!-- BEGIN HEADER MENU -->
                    <div class="page-header-menu">
                        <div class="container">
                            <!-- BEGIN MEGA MENU -->
                            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                            <div class="hor-menu  ">
                                <ul class="nav navbar-nav">
                                    <li class="menu-dropdown classic-menu-dropdown ">
                                        <a href="/"> {{trans('user.board')}}
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <li class="menu-dropdown classic-menu-dropdown">
                                        <a href="/myBoard"> {{trans('user.myBoard')}}
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MEGA MENU -->
                        </div>
                    </div>
                    <!-- END HEADER MENU -->
                </div>
                <!-- END HEADER -->
            </div>
        </div>
    @show
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <div class="page-prefooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>{{ trans('main.about') }}</h2>
                            <p>{{ trans('main.about_text') }}</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>{{ trans('main.follow') }}</h2>
                            <ul class="social-icons">
                                <li>
                                    <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>{{ trans('main.contacts') }}</h2>
                            <address class="margin-bottom-40"> {{ trans('main.phone') }}
                                : {{ trans('main.contacts_phone') }}
                                <br> {{ trans('auth.email') }}:
                                <a href="mailto:info@board.com">info@board.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN CORE PLUGINS -->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
</body>
</html>
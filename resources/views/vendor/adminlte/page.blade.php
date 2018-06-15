@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet"
          href="/css/accueilcss.css ">
    <link rel="stylesheet"
          href="/css/search.css ">

    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">


    @stack('css')
    @yield('css')
@stop
<style>
    @font-face {
        font-family: "Garamond";
        src:url({{ asset('css/eb-garamond/EBGaramond12-regular.ttf') }})
    }
    .iconeremove{
        color:red;
    }
</style>
</style>
@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header family">
            @if(config('adminlte.layout') == 'top-nav')
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                                {!! config('adminlte.logo', '<b>hi</b>LTE') !!}
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    @else
                        <!-- Logo -->
                            <a href="#" class="logo">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <span class="logo-mini">xcsm</span>
                                <!-- logo for regular state and mobile devices -->
                                <span class="logo-lg">XCSM Module</span>
                            </a>

                            <!-- Header Navbar -->
                            <nav class="navbar navbar-static-top" role="navigation">
                                <!-- Sidebar toggle button
                                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                                </a>-->
                                <ul class="nav navbar-nav mysize">
                                    <li class="active"><a href="/">Accueil <span class="sr-only">(current)</span></a>
                                    </li>
                                    {{--<li><a href="/cours">Cours</a></li>--}}
                                    <li><a href="http://localhost/moodle/index.php">Aller à Moodle</a></li>
                                    <li><a href="/nots">Notification</a></li>
                                </ul>
                            @endif
                            <!-- Navbar Right Menu -->
                            <div class="navbar-custom-menu">
                                <button type="button"  class=" text btn btn-sm bg-blue-active">
                                <span class="family " ><a class="family text mybutton" href="/logout" >
                                        Se Deconnecter</a></span></button>

                            {{--<form class="navbar-form navbar-left"  role="search">--}}
                            {{--<div class="form-group" >--}}
                            {{--<input type="text" style="width: 350px;"class="form-control" id="navbar-search-input" placeholder="Search">--}}
                            {{--</div>--}}
                            {{--</form>--}}

                            </div>
                            @if(config('adminlte.layout') == 'top-nav')
                    </div>
                    @endif
                </nav>
        </header>

    @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar text family" id="myaside">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <section class="sidebar">
                            <div class="container search-bar">
                                <div class="row">
                                    <div class="col">
                                        <form action="" class="search-form">
                                            <div class="form-group has-feedback">
                                                <label for="search" class="sr-only">Search</label>
                                                <input type="text" class="form-control" name="search" id="search" placeholder="recherche">
                                                {{--<span class="glyphicon glyphicon-search form-control-feedback"></span>--}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Menu -->
                            <ul class="sidebar-menu">
                                <li class="header " style="color: white;">LISTE DES COURS DISPONIBLES</li>
                                <div class="listeCours sidebar-menu">
                                    @foreach(Session::get('listecours') as $cours)

                                        <li class="mysize1 row" >
                                            <a href="/cours?folder={{$cours}}" class="col-md-7">
                                                <i class="fa fa-fw fa-file "></i>
                                                <span> {{explode("_",$cours)[1]}}</span>
                                               
                                            </a>
                                            <a href="/suppression?folder={{$cours}}" class="col-md-offset-3 col-md-2"> <i class="fa fa-fw fa-remove iconeremove"> </i> </a>
                                            
                                        </li>
                                    @endforeach
                                </div>


                            </ul>
                            <!-- /.sidebar-menu -->
                        </section>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>

            </aside>
    @endif

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper fond family" style="background-color: #fff2e6;">
            @if(config('adminlte.layout') == 'top-nav')
                <div class="container fond">
                @endif

                <!-- Content Header (Page header) -->
                    <section class="content-header fond">
                        @yield('content_header')
                    </section>

                    <!-- Main content -->
                    <section class="content fond">

                        @yield('content')

                    </section>
                    <!-- /.content -->
                    @if(config('adminlte.layout') == 'top-nav')
                </div>
                <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
    <!-- Menu Footer-->

@stop

    <footer id="footer" class=" navbar navbar-default navbar-fixed-bottom family">
        <div class="row">
            <div class=" col-md-9 ">
                <div class="row">
                    <h5 class="text" style="margin-left: 4%" > COPYRIGHT© 2017 - Developed By PROMOTION 2018
                    </h5>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<ul class="text ">--}}
                            {{--<li >--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Joêl DJIZANNE</span>--}}
                            {{--</li>--}}
                            {{--<li >--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Nadia DJONGOUE</span>--}}
                            {{--</li>--}}
                            {{--<li >--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Stella N'DONGA</span>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Michael NGUEMEN</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<ul class="text ">--}}
                            {{--<li >--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Buffet TEGUIA</span>--}}
                            {{--</li>--}}
                            {{--<li >--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Thierry TCHOFFO</span>--}}
                            {{--</li>--}}
                            {{--<li >--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Michel TCHOUATCHA</span>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<i class="fa fa-fw fa-user " ></i>--}}
                                {{--<span>Doreen TCHOUPE</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>

            <div class=" col-md-3 ">

                <div class="row">
                    <h5 class="text" style="margin-left: 5%" > CONTACT US
                    </h5>
                </div>
                {{--<div class="row">--}}
                    {{--<ul class="text ">--}}
                        {{--<li >--}}
                            {{--<i class="fa fa-fw fa-phone " ></i>--}}
                            {{--<span>694-17-43-80</span>--}}
                        {{--</li>--}}
                        {{--<li >--}}
                            {{--<i class="fa fa-fw fa-phone " ></i>--}}
                            {{--<span>698-92-00-64</span>--}}
                        {{--</li>--}}
                        {{--<li >--}}
                            {{--<i class="fa fa-fw fa-phone " ></i>--}}
                            {{--<span>698-92-00-64</span>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                            {{--<i class="fa fa-fw fa-phone " ></i>--}}
                            {{--<span>698-92-00-64</span>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}


            </div>
        </div>
    </footer>


@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/instantSearch.js') }}"></script>


    @stack('js')
    @yield('js')
@stop

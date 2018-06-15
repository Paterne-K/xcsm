@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
<link rel="stylesheet"
      href="/css/connectioncss.css ">
@yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
<div class="connectbody">
    <div class="register-box afterbody">
        <div class="register-logo">
<!--            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>-->
            <a href="#" >
                <!-- logo for regular state and mobile devices -->
                <span class="mylogo">XCSM Module</span>
            </a>
        </div>

        <div class="register-box-body box-login">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <input type="number" name="phone" class="form-control" value="{{ old('phone') }}"
                           placeholder="{{ trans('adminlte::adminlte.phone') }}">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    @if ($errors->has('phone'))
                    <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('department') ? 'has-error' : '' }}">
                    <input type="text" name="department" class="form-control" value="{{ old('department') }}"
                           placeholder="{{ trans('adminlte::adminlte.department') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('department'))
                    <span class="help-block">
                            <strong>{{ $errors->first('department') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('class') ? 'has-error' : '' }}">
                    <input type="text" name="class" class="form-control" value="{{ old('class') }}"
                           placeholder="{{ trans('adminlte::adminlte.class') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('class'))
                    <span class="help-block">
                            <strong>{{ $errors->first('class') }}</strong>
                        </span>
                    @endif
                </div><div class="form-group has-feedback {{ $errors->has('level') ? 'has-error' : '' }}">
                    <input type="text" name="level" class="form-control" value="{{ old('level') }}"
                           placeholder="{{ trans('adminlte::adminlte.level') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('level'))
                    <span class="help-block">
                            <strong>{{ $errors->first('level') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit"
                        class="btn  bg-navy btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class=" register text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
    </div>
@stop

@section('adminlte_js')
    @yield('js')
@stop

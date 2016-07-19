@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <div class="page-content">
        <div class="portlet light">
            <h1>{{  trans('main.title') }}</h1>
            <h2>{{  trans('auth.register_text') }}</h2>
            <form class="form-horizontal margin-bottom-40" role="form" method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <div class="form-group form-md-line-input">
                    <label for="inputName" class="col-md-2 control-label">{{trans('auth.name')}}</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="name" placeholder="{{trans('auth.name')}}" value="{{ old('name') }}">
                        <div class="form-control-focus"> </div>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label for="inputEmail1" class="col-md-2 control-label">{{trans('auth.email')}}</label>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="email" placeholder="{{trans('auth.email')}}" value="{{ old('email') }}">
                        <div class="form-control-focus"> </div>
                        <span class="help-block">{{trans('auth.help_email')}}</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label for="inputPassword12" class="col-md-2 control-label">{{trans('auth.password')}}</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password" placeholder="{{trans('auth.password')}}">
                        <div class="form-control-focus"> </div>
                        <span class="help-block">{{trans('auth.help_password')}}</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label for="inputPassword12" class="col-md-2 control-label">{{trans('auth.password')}}</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="{{trans('auth.password_confirmation')}}">
                        <div class="form-control-focus"> </div>
                        {{--<span class="help-block">{{trans('auth.help_repeat_password')}}</span>--}}
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn blue">{{trans('auth.register_submit')}}</button>
                    <button type="button" onclick="window.location.href='/'; return false;" class="btn default">{{trans('auth.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
@stop
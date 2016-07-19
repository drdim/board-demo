@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <div class="page-content">
        <div class="portlet light">
            <h1>{{  trans('main.title') }}</h1>
            <h2>{{  trans('main.login_text') }}</h2>
            <form class="form-horizontal margin-bottom-40" role="form" method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="form-group form-md-line-input">
                    <label for="inputEmail1" class="col-md-2 control-label">{{trans('auth.email')}}</label>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="email" placeholder="{{trans('auth.email')}}" value="{{ old('email') }}">
                        <div class="form-control-focus"> </div>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label for="inputPassword12" class="col-md-2 control-label">{{trans('auth.password')}}</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password" placeholder="{{trans('auth.password')}}">
                        <div class="form-control-focus"> </div>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <div class="col-md-offset-2 col-md-4">
                        <div class="md-checkbox-list">
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox1111" class="md-check">
                                <label for="checkbox1111">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> {{trans('auth.remember')}} </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn blue">{{trans('auth.submit')}}</button>
                        <button type="button" onclick="window.location.href='/auth/register'; return false;" class="btn default">{{trans('auth.register')}}</button>
                    </div>
                    <div class="col-md-offset-2 col-md-10">

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
            </form>
        </div>

    </div>
@stop


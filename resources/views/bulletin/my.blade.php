@extends('layouts.master')
@section('content')
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>{{ trans('main.myBoardTitle')  }}
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMBS -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="/">{{trans('user.home')}}</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>{{ trans('main.myBoardTitle')  }}</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMBS -->
            @include('bulletin/partial/element')
        </div>

    </div>
@endsection
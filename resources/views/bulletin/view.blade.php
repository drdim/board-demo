@extends('layouts.master')
@section('content')
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>{{$bulletin->title}}
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            @include('bulletin/partial/elementView')
        </div>
    </div>
@endsection
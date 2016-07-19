@extends('layouts.master')
@section('content')
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>{{ $user->name }}
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>
    @include('profile/userContent')
@endsection
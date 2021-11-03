@extends('layouts.adminapp')
@section('title','Admin-Daashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if(Session::has('status'))
                    <p class="alert alert-info">{{ Session::get('status') }}</p>
                    @endif


                    {{ __('You are logged in Admin Panel !') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
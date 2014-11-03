@extends('layouts.default')

@section('topscript')
@stop

@section('content')
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Larabook!</h1>
        <p>Welcome to the premier place to find and connect with PHP + Laravel developers</p>
        {{ link_to_route('register_path', 'Sign Up!', ['class' => 'btn btn-lg btn-primary']) }}
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Sign Up! »</a></p>
      </div>
    </div>

@stop

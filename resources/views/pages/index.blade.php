@extends('layouts.app')

@section('content')  
<div class="jumbotron"> 
<h1> {{$title}} </h1>
<p>This is index Page</p>
<p><a class="btn btn-primary" href="/login">Login</a> <a class="btn btn-success" href="/register">Register</a></p>
</div>
@endsection
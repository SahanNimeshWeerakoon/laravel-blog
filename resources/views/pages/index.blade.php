@extends('layouts.app')
    @section('content')
        <div class="jumbotron text-center">
            <h1>Welcome to laravel</h1>
            <p>This is the laravel practicing application</p>
            <p>
                <a href="/login" class="btn btn-primary">LOGIN</a>
                <a href="/register" class="btn btn-success">REGISTER</a>
            </p>
        </div>
    @endsection
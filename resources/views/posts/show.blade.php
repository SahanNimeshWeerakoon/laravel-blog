@extends('layouts.app')
    @section('content')
        <a href="/posts" class="btn btn-outline-dark">GO BACK</a>
        <h1>{{$post->title}}</h1>
        <div>
            <p>{!!$post->body!!}</p>
        </div>
        <hr>
        <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if (Auth::user())
            @if (Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">EDIT</a>
                &nbsp;&nbsp;
                <form action="/posts/{{$post->id}}" method="POST" class="float-right">
                    {{csrf_field()}}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                </form>
            @endif
        @endif
        

    @endsection
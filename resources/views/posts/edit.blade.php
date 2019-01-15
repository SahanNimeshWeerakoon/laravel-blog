@extends('layouts.app')
    @section('content')
        <h1>Edit Post</h1>
        {{-- {!!Form::open(['action'=>"posts", 'method' => 'POST'])!!} --}}
        <form action="/posts/{{$post->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            <div class="form-group">
                {{Form::submit('EDIT', ['class'=>'btn btn-primary'])}}
            </div>
        {!!Form::close()!!}
    @endsection
@extends('layouts.app')
    @section('content')
        <h1>Create a Post</h1>
        {{-- {!!Form::open(['action'=>"posts", 'method' => 'POST'])!!} --}}
        <form action="/posts" method="post">
            {{csrf_field()}}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::submit('POST', ['class'=>'btn btn-primary'])}}
            </div>
        {!!Form::close()!!}
        
    @endsection
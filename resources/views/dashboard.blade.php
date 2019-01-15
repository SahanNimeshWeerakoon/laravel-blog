@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">CREATE POST</a>
                    <hr><br>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/posts/{{$post->id}}" method="POST" class="float-right">
                                            {{csrf_field()}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="/post/create">
                        <button class="btn-danger" type="submit">Create New Post</button>
                    </form>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Post</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>@if($post->cover_image!="")
                                <img src="/storage/cover_image/{{$post->cover_image}}" style="width:10%">
                                @else
                                <img src="/storage/cover_image/no_image.png" style="width:10%">
                                @endif
                            </td>
                            <td>
                                <form action="/post/{{$post->id}}/edit" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="/post/{{$post->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this post?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('common.common')
@section('content')
<main class="container">
    <div class="bg-light p-5 rounded">

        <div class="wall">
            @if($post->cover_image!="")
            <img src="/storage/cover_image/{{$post->cover_image}}" style="width:50%">
            @else
            <img src="/storage/cover_image/no_image.png" style="width:50%">
            @endif
            <br>
            <br>
            <h3>{{$post->title}}</a></h3>
            <p>{{$post->body}}</p><br>
            <small>Written on {{$post->created_at}}<br></small>
            <hr>
        </div>
        <div>
            <div style="float: left;">
                <form action="/post/{{$post->id}}/edit" method="get">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Edit</button>
                </form>
            </div>
            <div style="float: right;">
                <form action="/post/{{$post->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this post?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
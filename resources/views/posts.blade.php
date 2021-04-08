@extends('common.common')
@section('content')
<div class="container">
    <div class="jumbotron-fluid">
        <h1>Posts</h1>
        <p>You will see posts here.</p>
    </div>
</div>
<main class="container">
    <div class="bg-light p-5 rounded">
        @foreach($posts as $post)
        <div class="wall">
            <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}<br></small>
        </div>
        <hr>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
    </div>
</main>
@endsection
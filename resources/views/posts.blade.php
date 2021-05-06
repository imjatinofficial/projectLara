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
        @if ($message = Session::get('deleted'))
        <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
        </div>
        @endif
        @if ($message = Session::get('updated'))
        <div class="alert alert-success" role="alert">
            <strong>{{$message}}</strong>
        </div>
        @endif
        @foreach($posts as $post)
        <div class="shadow-sm p-4 mb-4 bg-white">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    @if($post->cover_image!="")
                    <img src="/storage/cover_image/{{$post->cover_image}}" style="width:100%">
                    @else
                    <img src="/storage/cover_image/no_image.png" style="width:100%">
                    @endif
                </div>
                <div class="col-md-10 col-sm-10">
                    <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                    <hr>
                    <small>Written on {{$post->created_at}} by {{$post->name}}<br></small>
                </div>
            </div>
        </div>

        <hr>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
    </div>
</main>
@endsection
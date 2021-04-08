@extends('common.common')
@section('content')
<main class="container">
    <div class="bg-light p-5 rounded">
        <div class="wall">
            <h3>{{$post->title}}</a></h3>
            <p>{{$post->body}}</p>
            <small>Written on {{$post->created_at}}<br></small>
            @if($post->cover_image!="")
            <img src="/storage/cover_image/{{$post->cover_image}}" style="width:30%">
            @else
            <img src="/storage/cover_image/no_image.png" style="width:30%">
            @endif
        </div>
    </div>
</main>
@endsection
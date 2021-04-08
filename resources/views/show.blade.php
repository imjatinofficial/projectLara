@extends('common.common')
@section('content')
<main class="container">
    <div class="bg-light p-5 rounded">
        <div class="wall">
            <h3>{{$post->title}}</a></h3>
            <p>{{$post->body}}</p>
            <small>Written on {{$post->created_at}}<br></small>
        </div>
    </div>
</main>
@endsection
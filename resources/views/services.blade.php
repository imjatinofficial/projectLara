@extends('common.common')

@section('head')
<title>{{$title}}</title>
@endsection

@section('content')
<div class='container'>
    <div class='jumbotron'>
        <h1>Services</h1>
        <ul>
            @foreach($services as $service)
            <li class=list-group-item>{{$service}}</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
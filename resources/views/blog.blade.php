@extends('common.common')
@section('content')
<h1>blog</h1>
<main class="container">
    <div class="bg-light p-5 rounded">
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$user}}</td>
                    <td>{{$password}}</td>
                    <td><img src="/storage/cover_image/{{$image}}"</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
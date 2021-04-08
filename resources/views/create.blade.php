@extends('common.common')
@section('content')
<h1>login</h1>
@if($errors->any())
<ul>
    @foreach($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
</ul>
@endif
<main class="container">
    <div class="bg-light p-5 rounded">
        <form class="well form-horizontal" action="/post" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>Create Post</b></h2>
                    </center>
                </legend><br>

                <div class="form-group">
                    <label for="exampleInputEmail">Post Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail">
                    <span style="color:red">@error('title'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputDetails">Post Description</label>
                    <input type="text" name="body" class="form-control" id="exampleInputDetails">
                    <span style="color:red">@error('body'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" name="cover_image" class="form-control" id="exampleInputImage">
                    <span style="color:red">@error('cover_image'){{$message}}@enderror</span>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button type="submit" class="btn btn-warning">SUBMIT</button>
                    </div>
                </div>

            </fieldset>

        </form>
    </div>
</main>
@endsection
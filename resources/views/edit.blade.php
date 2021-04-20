@extends('common.common')
@section('content')
<main class="container">
    <div class="bg-light p-5 rounded">
        <form class="well form-horizontal" action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>Edit Post</b></h2>
                    </center>
                </legend><br>

                <div class="form-group">
                    <label for="exampleInputEmail">Post Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail" value={{$post->title}}>
                    <span style="color:red">@error('title'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputDetails">Post Description</label>
                    <input type="text" name="body" class="form-control" id="exampleInputDetails" value={{$post->body}}>
                    <span style="color:red">@error('body'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" name="cover_image" class="form-control" id="exampleInputImage">
                    <span style="color:red">@error('cover_image'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    <img src="/storage/cover_image/{{$post->cover_image}}" style="width:20%" alt='selected image'>
                </div>    
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button type="submit" class="btn btn-secondary">Update</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</main>
@endsection
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
<form class="well form-horizontal" action="/post" method="post" enctype="multipart/form-data">
    @csrf
    <fieldset>

        <!-- Form Name -->
        <legend>
            <center>
                <h2><b>Login Form</b></h2>
            </center>
        </legend><br>

        <!-- E-Mail -->
        <div class="form-group">
            <label class="col-md-4 control-label">Post Title</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input name="title" placeholder="Post Title" class="form-control" type="text">
                </div>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label">Post Description</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <textarea name="body" placeholder="Description" class="form-control"></textarea>
                </div>
            </div>
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
@endsection
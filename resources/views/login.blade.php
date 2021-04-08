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
<form class="well form-horizontal" action="/blogShow" method="post" enctype="multipart/form-data">
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
          <label class="col-md-4 control-label">E-Mail</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="username" placeholder="E-Mail Address" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Password -->

        <div class="form-group">
          <label class="col-md-4 control-label">Password</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="password" placeholder="Password" class="form-control" type="password">
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label">Image</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="cover_image" placeholder="Image" class="form-control" type="file">
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
@extends('common.common')
@section('content')
<div class="container center_div">
  <div class="jumbotron">
  {{$errors->all()}}

    <form class="well form-horizontal" action="/registration" method="post" id="contact_form">
      @csrf
      <fieldset>

        <!-- Form Name -->
        <legend>
          <center>
            <h2><b>Registration Form</b></h2>
          </center>
        </legend><br>

        <!-- First Name -->
        <div class="form-group">
          <label class="col-md-4 control-label">First Name</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="first_name" placeholder="First Name" class="form-control" type="text" >
            </div>
          </div>
          <span style="color:red"> @error('fname'){{$message}} @enderror</span>
        </div>

        <!-- Last Name -->

        <div class="form-group">
          <label class="col-md-4 control-label">Last Name</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="last_name" placeholder="Last Name" class="form-control" type="text" >
            </div>
          </div>
          <span style="color:red"> @error('lname'){{$message}} @enderror</span>
        </div>

        <!-- E-Mail -->
        <div class="form-group">
          <label class="col-md-4 control-label">E-Mail</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="email" placeholder="E-Mail Address" class="form-control" type="text" >
            </div>
          </div>
          <span style="color:red"> @error('email'){{$message}} @enderror</span>
        </div>

        <!-- Password -->

        <div class="form-group">
          <label class="col-md-4 control-label">Password</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="user_password" placeholder="Password" class="form-control" type="password" >
            </div>
          </div>
          <span style="color:red"> @error('password'){{$message}} @enderror</span>
        </div>
        <!-- Gender -->

        <div class="form-group">
          <label class="col-md-4 control-label">Gender</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="form-check">
              <label><input type="radio" class="form-check-input" name="gender" value="Male" >Male</label>
            </div>
            <div class="form-check">
              <label><input type="radio" class="form-check-input" name="gender" value="Female">Female</label>
            </div>
            <span style="color:red"> @error('gender'){{$message}} @enderror</span>
          </div>
        </div>

        <!-- Date of Birth-->

        <div class="form-group">
          <label for="dob" class="col-md-4 control-label">Date of Birth</label>
          <div class="col-md-4 inputGroupContainer">
            <input class="form-control" type="date" name="dob">
          </div>
          <span style="color:red"> @error('DOB'){{$message}} @enderror</span>
        </div>

        <!-- Contact Number -->

        <div class="form-group">
          <label class="col-md-4 control-label">Contact No.</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <input name="contactno" placeholder="+91" class="form-control" type="number">
            </div>
          </div>
          <span style="color:red"> @error('contact'){{$message}} @enderror</span>
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
</div>
@endsection
@extends('layout')

@section('content')
<div class="container" id="container">
    <div class="form-container log-in-container">
        

            <form name="frm-login"   method="post" action="{{ url('/main/checklogin') }}">
                @csrf
               
                <fieldset class="wrap-title">
                    
                    <h3 class="form-title">Login</h3>	
                </br>									
                </fieldset>

                <fieldset class="wrap-input">
                  
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"> <i class="fa fa-user"></i></span>
                    <input type="text" id="frm-login-uname" name="name" placeholder="Type your name"  >
                    </div>
              
                    @error('name')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </br>
                </fieldset>

                <fieldset class="wrap-input">
                    <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"> <i class="fa fa-key"></i></span>
                    <input type="password" id="frm-login-pass" name="password" placeholder="Type your password"  >
                    </div>
                    @error('password')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror

                </fieldset>
                <div class="form-group">
                    <input type="submit" name="login" id="button" class="btn btn-primary" value="Login"  />
                </div>
            </form>
      		
    </div>




    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <img style="border-radius: 80%;height: 200px;width: 200px;" src="{{ asset('images/logo.jpg') }}" alt="tag">
              
            </div>
        </div>
    </div>
</div>




@endsection

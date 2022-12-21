@extends('layout')

@section('content')

<main id="main" class="main-site left-sidebar">

    <div class="container">

        
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">						
                        <div class="login-form form-item form-stl">
                            <form name="frm-login"   method="post" action="{{ url('/main/checklogin') }}">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Log in to your account</h3>										
                                </fieldset>

                                <fieldset class="wrap-input">
                                    
                                    <div class="input-group margin-bottom-sm">
                                    <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                                    <input type="text" id="frm-login-uname" name="name" placeholder="Type your name"  >
                                    </div>
                                    @error('name')
                                    <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </fieldset>

                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">Password:</label>
                                    <input type="password" id="frm-login-pass" name="password" placeholder="************"  >
                                    @error('password')
                                    <div class="alert-danger">{{$message}}</div>
                                    @enderror

                                </fieldset>
                                <div class="form-group">
                                    <input type="submit" name="login" class="btn btn-primary" value="Login"  />
                                </div>
                            </form>
                        </div>												
                    </div>
                </div>
            </div>
        </div>

    </div>

</main> 





@endsection

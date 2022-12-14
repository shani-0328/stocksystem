@extends('layout')

@section('content')
</br>
<div class="container box">
  </br>

   @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
     <strong>Welcome {{ Auth::user()->name }}</strong>
     <br />
     <a href="{{ url('/main/logout') }}">Logout</a>
    </div>
   @else
    <script>window.location = "/main";</script>
   @endif
   
   <br />
  </div>
  @endsection
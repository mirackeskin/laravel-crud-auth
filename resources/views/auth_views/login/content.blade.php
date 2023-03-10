@extends('auth_views.login.layout')

@section('login-panel')
    <div class="login-panel">
        <h2 class="text-primary">Login Form</h2>

        <form action="{{url("/login")}}" method="post" class="login-form">
            {!! csrf_field() !!}
        <label class="text-primary" for="">User Name:</label>
        <input class="border border-primary rounded" required type="text" name="username" id="username" placeholder="mirac_keskin">
        <label class="text-primary" for="">Password</label>
        <input class="border border-primary rounded" required type="text" name="password" placeholder="123456">
        <div class="login-buttons-wrapper">
            <input type="submit" value="Login" class="btn btn-primary">
            <a href="{{url("/register")}}" class="btn btn-secondary">Sign In!</a>
        </div>
        </form>
    </div>
@endsection
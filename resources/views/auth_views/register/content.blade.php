@extends('auth_views.register.layout')

@section('register-panel')
    <div class="login-panel">
        <h2 class="text-primary">SignIn Form</h2>

        <form action="{{url("/sign")}}" method="post" class="login-form">
            {!! csrf_field() !!}
        <label class="text-primary" for="">User Name:</label>
        <input class="border border-primary rounded" required type="text" name="username" id="username" placeholder="mirac_keskin">
        <label class="text-primary" for="">Password</label>
        <input class="border border-primary rounded" required type="text" name="password" placeholder="123456">
        <div class="login-buttons-wrapper">
            <input type="submit" value="Sign In" class="btn btn-primary">
            <a href="{{url("/")}}" class="btn btn-danger">Cancel!</a>
        </div>
        </form>
    </div>
@endsection
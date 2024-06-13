@extends('layout.main')

@section('content')
<div class="login-box">
    <div class="form-input">
        <button type="submit" onclick="window.location.href='/login'">Login</button>
    </div>
    <p> Or </p>
    <div class="form-input">
        <button type="submit" onclick="window.location.href='/register'">Register</button>
    </div>
</div>
@endsection

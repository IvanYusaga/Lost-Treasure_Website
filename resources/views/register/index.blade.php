@extends('layout.main')

@section('content')
<div class="login-box">
    <h1>Register</h1>
    <form action="/register" method="post">
        @csrf
        <div class="form-input">
            <input type="text" name="username" id="username" placeholder="Username" class="@error('username') is-invalid @enderror" value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input">
            <input type="email" name="email" id="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input">
            <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input">
            <button type="submit">Create Account</button>
        </div>
        <p id="login">Already Registered? <a href="/login" style="color: blue">Login</a></p>
    </form>
</div>
@endsection
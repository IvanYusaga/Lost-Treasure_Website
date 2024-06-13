@extends('layout.main')

@section('content')
<div class="login-box">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    <h1>Login</h1>
    <form action="/login" method="post">
        @csrf
        <div class="form-input">
            <input type="text" name="username" id="username" placeholder="Username" autofocus class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-input">
            <button type="submit">Login</button>
        </div>
        <p id="login">Don't have an account? <a href="/register" style="color: blue">Register</a></p>
    </form>
</div>
@endsection
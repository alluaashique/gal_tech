@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="form-container">
                <p class="title">Log In</p>
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="name" name="name" value="{{old('name')}}" required class="input"  placeholder="Name">
                    @error('name')
                    {{$message}}
                    @enderror
                    <input type="email" name="email" value="{{old('email')}}" required class="input"  placeholder="Email">
                    @error('email')
                    {{$message}}
                    @enderror
                    <input type="password" class="input" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    {{$message}}
                    @enderror
                    <input type="password" class="input" id="password_confirmation" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password">
                    @error('password_confirmation')
                    {{$message}}
                    @enderror

                    
                    <p class="page-link">
                        <span class="page-link-label">Forgot Password?</span>
                    </p>
                    <button class="form-btn">Log in</button>
                </form>
                <p class="sign-up-label">
                    Already registered?
                    <a href="{{route('login')}}" class="sign-up-link">Sign In</a>
                    
                    {{-- <span class="sign-up-link">Sign up</span> --}}
                </p>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
@endsection




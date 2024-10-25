@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="form-container">
                <p class="title">Log In</p>
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" name="email" value="{{old('email')}}" required class="input"  placeholder="Email">
                    @error('email')
                    {{$message}}
                    @enderror
                    <input type="password" class="input" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    {{$message}}
                    @enderror
                    <p class="page-link">
                        <span class="page-link-label">Forgot Password?</span>
                    </p>
                    <button class="form-btn">Log in</button>
                </form>
                <p class="sign-up-label">
                    Don't have an account?
                    <a href="{{route('register')}}" class="sign-up-link">Sign up</a>
                    
                    {{-- <span class="sign-up-link">Sign up</span> --}}
                </p>
             
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
@endsection


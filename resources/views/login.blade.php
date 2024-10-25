@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="form-container">
                <p class="title">Log In</p>
                <form class="form">
                    <input type="email" class="input" placeholder="Email">
                    <input type="password" class="input" placeholder="Password">
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

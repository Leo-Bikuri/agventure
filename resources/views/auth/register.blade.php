@extends('layouts.master')
@section('title', 'Sign up')

@section('content')
    <div class="card mb-3 position-absolute top-50 start-50 translate-middle shadow-lg mb-5 bg-body" style="width: 768px; max-width: 100%; height: 100%; max-height: 480px; border-radius: 25px;">
        <div class="row g-0 h-100">
            <div class="col-md-6 h-100">
                <div class="card-body overlay h-100" style="border-radius: 25px 0 0 25px;">
                    <div class="d-flex flex-column align-self-center h-100">
                        <div class="my-auto">
                            <h1 class="card-title text-center fs-2">Welcome back</h1>
                            <p class="card-text text-center">Sign in to your account</p>
                            <div class="text-center">
                                <button class="btn btn-outline-light rounded-pill" style="padding: 12px 45px; font-size: 12px; font-weight: bold;" onclick="window.location.href = '{{route('login')}}'">SIGN IN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('register') }}" method="POST" style="display: contents;">
                @csrf
                <div class="col-md-6 h-100">
                    <div class="card-body h-100">
                        <div class="d-flex flex-column align-self-center h-100">
                            <div class="my-auto">
                                <h1 class="card-title text-center fs-2">SIGN UP</h1>

                                <input type="text" class="form-control w-75 mx-auto mb-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus name="name" placeholder="Full name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="email" class="form-control w-75 mx-auto mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="tel" class="form-control w-75 mx-auto mb-3" name="phone_number" placeholder="Phone number">

                                <input type="password" class="form-control w-75 mx-auto mb-3 @error('password') is-invalid @enderror" required autocomplete="new-password" name="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="password" class="form-control w-75 mx-auto mb-3" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                                <div class="text-center">
                                    <button type="submit" class="btn rounded-pill" style="padding: 12px 45px; border: 1px solid #FF4B2B; background-color: #FF4B2B; font-size: 12px; font-weight: bold;">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection

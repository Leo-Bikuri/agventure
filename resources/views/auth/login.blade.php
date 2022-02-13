@extends('layouts.master')
@section('title', 'Sign in')

@section('content')
        <div class="card mb-3 position-absolute top-50 start-50 translate-middle shadow-lg mb-5 bg-body" style="width: 768px; max-width: 100%; height: 100%; max-height: 480px; border-radius: 25px;">
            <div class="row g-0 h-100">
                <form action="{{ route('login') }}" method="POST" style="display: contents;">
                    @csrf
                    <div class="col-md-6 h-100">
                        <div class="card-body h-100">
                            <div class="d-flex flex-column align-self-center h-100">
                                <div class="my-auto">
                                    <h1 class="card-title text-center fs-2">SIGN IN</h1>
                                    <input type="email" class="form-control w-75 mx-auto mb-3 @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                    @enderror

                                    <input type="password" class="form-control w-75 mx-auto mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="text-center">
                                        <input class="form-check-input" id="remember" type="checkbox" name="remember" {{ old('remember')?'checked':''}}>
                                        <label class="form-check-label" for="remember" style="font-size: 15px;">Remember me</label>
                                    </div>
                                    @if(Route::has('password.request'))
                                    <p class="text-center"><a href="#" class="text-decoration-none" style="color: black; font-size: 0.9em">Forgot your password?</a></p>
                                    @endif
                                    <div class="text-center">
                                        <button type="submit" class="btn w-50 rounded-pill" style="padding: 12px 45px; border: 1px solid #FF4B2B; background-color: #FF4B2B; font-size: 12px; font-weight: bold;">SIGN IN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="col-md-6 h-100">
                    <div class="card-body overlay h-100" style="border-radius: 0 25px 25px 0;">
                        <div class="d-flex flex-column align-self-center h-100">
                            <div class="my-auto">
                                <h1 class="card-title text-center fs-2">Hello, friend</h1>
                                <p class="card-text text-center">Sign Up to get started</p>
                                <div class="text-center">
                                    <button class="btn btn-outline-light rounded-pill" style="padding: 12px 45px; font-size: 12px; font-weight: bold;" onclick="window.location.href = '{{ route('register') }}'">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

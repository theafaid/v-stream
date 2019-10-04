@extends('layouts.app')

@section('content')

    <div class="container mt-lg-9">
        <div class="row">
            <div class="col col-login mx-auto">
                <form class="card" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title">Login to your account</div>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                Password
                                @if (Route::has('password.request'))
                                    <a href="{{route('password.request')}}" class="float-right small">I forgot password</a>
                                @endif
                            </label>
                            <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" placeholder="Password">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" />
                                <span class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted">
                    Don't have account yet? <a href="./register.html">Sign up</a>
                </div>
            </div>
        </div>
    </div>
@endsection

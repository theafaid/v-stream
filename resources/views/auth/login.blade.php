@extends('layouts.app')

@section('content')

    <div id="content-pro">
        <div id="pricing-plans-background-image">
            <div class="container">
                <div class="registration-steps-page-container">
                    <div class="registration-step-final-padding welcome-page-styles">
                        <div class="registration-social-login-container">
                            <form method="POST" action="{{ route('login') }}">
                               <h1>
                                   {{ __('Login') }}
                               </h1>
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-green-pro btn-display-block">Sign In</button>
                                </div>
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember" {{ old('remember') ? 'checked' : '' }}><label for="checkbox-remember" class="col-form-label">Remember me</label></div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div><!-- close .container-fluid -->

                            </form>
                        </div><!-- close .registration-social-login-container -->
                        <div class="registration-social-login-options">
                            <h6>Sign in with your social account</h6>
                            <div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
                            <div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
                            <div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
                        </div><!-- close .registration-social-login-options -->
                        <div class="clearfix"></div>
                    </div><!-- close .registration-step-final-padding -->
                </div><!-- close .registration-steps-page-container -->
            </div><!-- close .container -->
        </div><!-- close #pricing-plans-background-image -->

    </div>
@endsection

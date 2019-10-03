<!doctype html>
<html lang="en">
    @include('layouts.partials.head')
    <body>
        @include('layouts.partials.navigation')
        @yield('content')
        @include('layouts.partials.footer')
        <a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>
        @include('layouts.partials.scripts')

        @guest
            <!-- Modal -->
            <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
                <button type="button" class="close float-close-pro" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header-pro">
                            <h2>Welcome Back</h2>
                            <h6>Sign in to your account to continue using SKRN</h6>
                        </div>
                        <div class="modal-body-pro social-login-modal-body-pro">

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
                                <div class="registration-social-login-or">or</div>

                            </div><!-- close .registration-social-login-container -->

                            <div class="registration-social-login-options">
                                <h6>Sign in with your social account</h6>
                                <div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
                                <div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
                                <div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
                            </div><!-- close .registration-social-login-options -->

                            <div class="clearfix"></div>


                        </div><!-- close .modal-body -->

                        <a class="not-a-member-pro" href="signup-step2.html">Not a member? <span>Join Today!</span></a>
                    </div><!-- close .modal-content -->
                </div><!-- close .modal-dialog -->
            </div>
            <!-- close .modal -->
        @endguest
    </body>
</html>

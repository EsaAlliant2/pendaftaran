<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sign In</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetz/modules/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    {{-- <link rel="stylesheet" href="{{ asset('assetz/modules/fontawesome/css/all.min.css')}}"> --}}

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assetz/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assetz/css/components.css')}}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="https://image.winudf.com/v2/image/Y29tLmJhbGVmb290Lk1vbmtleURMdWZmeVdhbGxwYXBlcl9zY3JlZW5fNF8xNTI0NTE5MTEyXzA0MQ/screen-4.jpg?fakeurl=1&type=.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h4>Login</h4>
                            </div> -->

                            <div class="card-body">
                                <form method="POST" action="/postlogin">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <!-- <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div> -->
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col"><a href="#" class="btn w-100">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                                </svg>
                                               
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="{{route('register')}}">Create One</a>
                        </div>
                        @include('template.footer')
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assetz/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('assetz/modules/popper.js') }}"></script>
    <script src="{{ asset('assetz/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assetz/modules/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetz/modules/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assetz/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assetz/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset ('assetz/js/scripts.js')}}"></script>
    <script src="{{asset ('assetz/js/custom.js')}}"></script>
</body>

</html>

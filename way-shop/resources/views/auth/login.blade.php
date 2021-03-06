@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color: #f2f3fa;
        }

        .login-content {
            max-width: 900px;
            margin: 100px auto 50px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }

        .auth-head-icon {
            position: relative;
            height: 60px;
            width: 60px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            background-color: #fff;
            color: #5c6bc0;
            box-shadow: 0 5px 20px #d6dee4;
            border-radius: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }
    </style>
@endsection

@section('content')

    <div class="row login-content">
        <div class="col-6 bg-white">
            <div class="text-center">
                <span class="auth-head-icon"><i class="la la-user"></i></span>
            </div>
            <div class="ibox m-0" style="box-shadow: none;">
                <form class="ibox-body" id="login-form" action="{{route('login')}}" method="POST">
                    @csrf
                    <h4 class="font-strong text-center mb-5">LOG IN</h4>
                    <div class="form-group mb-4 ">
                        <input class="form-control form-control-air @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback help-block small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4 ">
                        <input class="form-control form-control-air @error('password') is-invalid @enderror" type="password" placeholder="******"  name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback help-block small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="flexbox mb-5">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" checked name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="input-span"></span> Remember</label>
                        @if (Route::has('password.request'))
                            <a class="text-primary" href="{{ route('password.request') }}">Forgot password?</a>
                        @endif

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-rounded btn-block btn-air">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6 d-inline-flex align-items-center text-white py-4 px-5" style="background-color: #4a5ab9;">
            <div>
                <div class="h2 mb-5">Not a member?</div>
                <p>Register and get the following benefits.<br>Minim dolor in amet nulla laboris enim dolore.</p>
                <div class="flexbox-b mb-3"><i class="ti-check mr-3 text-success"></i>Lorem Ipsum dolar set.</div>
                <div class="flexbox-b mb-3"><i class="ti-check mr-3 text-success"></i>Lorem Ipsum dolar set.</div>
                <div class="flexbox-b mb-5"><i class="ti-check mr-3 text-success"></i>Lorem Ipsum dolar set.</div>
                <a class="btn btn-outline btn-rounded btn-fix" href="{{route('register')}}">Register</a>
            </div>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>

@endsection

@section('script')
    <script>
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
@endsection

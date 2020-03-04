@extends('layouts.app')

@section('content')

    <div class="col-md-6 offset-3" style="margin-top: 50px;">
        <div class="ibox ibox-fullheight">
            <div class="ibox-head">
                <div class="ibox-title">Register</div>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="ibox-body">
                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="Email address">
                            @error('email')
                            <span class="invalid-feedback help-block small has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Phone Number" name="phone" value="{{old('phone')}}" required autocomplete="phone" autofocus placeholder="Your phone">
                            @error('phone')
                            <span class="invalid-feedback help-block small has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label @error('name') is-invalid @enderror">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback help-block small has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="password" >{{ __('Password') }}</label>
                        <div class="col-sm-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="***********" value="{{ old('password') }}" required autocomplete="password" autofocus>
                            @error('password')
                            <span class="invalid-feedback help-block small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <div class="col-sm-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus>
                        </div>

                    </div>


                </div>
                <div class="ibox-footer row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button type="submit" class="btn btn-primary mr-2" type="button">Submit</button>
                        <a class="btn btn-secondary"  href="{{route('login')}}">Login</a>
                    </div>
                </div>
            </>
        </div>
    </div>

@endsection

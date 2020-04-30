@extends('admin.layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/login"><b>Covid</b>Foundation</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ url('/login') }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group has-feedback">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input  id="email" type="email" name="email"class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }} "  required autocomplete="email" autofocus>
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password" name="password" required autocomplete="current-password">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"> {{ __('Login') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <br>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a><br>
@endif
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection

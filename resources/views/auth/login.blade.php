@extends('layouts.login')

@section('content')

<div class="card ">
    <div class="card-header text-center"><a href="../index.html"><img class="logo-img"
                src="{{ asset('system/assets/images/logo.png')}}" alt="logo"></a><span class="splash-description">Please
            enter
            your user information.</span></div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" type="email"
                    placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg @error('password') is-invalid @enderror" id="password"
                    type="password" placeholder="Password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember
                        Me</span>
                </label>
            </div> --}}
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </form>
    </div>
    {{-- <div class="card-footer bg-white p-0  ">
        <div class="card-footer-item card-footer-item-bordered">
            <a href="#" class="footer-link">Create An Account</a></div>
        <div class="card-footer-item card-footer-item-bordered">
            <a href="#" class="footer-link">Forgot Password</a>
        </div>
    </div> --}}
</div>

@endsection

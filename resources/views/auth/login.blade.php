@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
         <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
          @csrf
          <div class="form-group">
            <div class="form-label-group">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection

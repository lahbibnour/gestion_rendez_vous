@extends('layouts.app')

@section('content')
<style>
.img{
    border-radius: 50%;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="">
                <div class="text-center">
                <img src="image/logo2.jpg" width="200 px" height="200 px" alt="" class="img" border-radius="50 px" >
                
                </div>
                <h2 class="text-center"> <strong> Se connecter pour continuer</strong></h3>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                @csrf
  <div class="form-group">
    <label for="" class="h2">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group">
    <label class="h2">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  
  <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
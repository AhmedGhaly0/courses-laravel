@extends('layouts.app')
@section('css')
    <link href="{{asset("promo/css/style_form.css")}}" rel="stylesheet">

@endsection

@section('title_page')
{{__('auth.login')}}
    @endsection
@section('login')



  <div class="form3">
    <h1>{{__('auth.login')}}</h1>
      <form method="POST" action="{{ route('login') }}">
        @csrf

          <div class="username">
             <label>{{ __('auth.email') }}</label>
             <input required type="email"name="email" placeholder="{{ __('auth.email') }}" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email">
             @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
          </div>

          <div class="password">
             <label>{{ __('auth.password') }}</label>
             <input required type="password" placeholder="{{ __('auth.password') }}"  @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
             @error('password')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
          </div>
          <div class="form-group row">
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('auth.RememberMe') }}
                    </label>
                </div>
            </div>
        </div>
          <div class="">
            <button type="submit" class="btn btn-success hvr-sweep-to-right">
                {{__('auth.login')}}
            </button>
          </div>
          <div class="text-right">
          @if (Route::has('password.request'))
          <a class="text-success  " style="text-decoration: none; " href="{{ route('password.request') }}">
              {{ __('auth.ForgotPassword') }}
          </a>
      @endif
    </div>
      </form>
  </div>


@endsection

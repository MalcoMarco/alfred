<x-page-with-map>
    <h2 class="text-center">{{__("Enter Mobile Phone and Password")}} </h2>
    <form method="POST" class="form" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Mobile Phone') }}</label>

            <div class="form-shadow">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="+0 000 000 0000" required autocomplete="email" autofocus>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <div class="form-shadow">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="************" required autocomplete="current-password">
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex justify-content-center flex-column">
            @if (Route::has('password.request'))
                    <p class="text-center mb-3">
                        {{__('Forgot my password.')}}
                        <a class="btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </p>
                @endif
            <div class="text-center mb-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>                
            </div>
            <p class="text-center">{{__("I don't have an account")}}, <a href="#">{{__("Create account")}} </a> </p>
        </div>
    </form>
</x-page-with-map>

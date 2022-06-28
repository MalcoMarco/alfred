<x-page-with-map>
    <h2 class="text-center">{{__("Enter Mobile Phone Number")}} </h2>
    <form method="POST" class="form" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Mobile Phone') }}</label>

            <div class="form-shadow">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="+0 000 000 0000" required autocomplete="email" autofocus>
            </div>
        </div>
        <div class="mb-3">
            <p class="text-center text-muted">{{__("Note: Have a photo of your ID or passport available to complete the registration successfully.")}} </p>
        </div>
        <div class="mb-4 text-center">
                <button type="btn" class="btn btn-primary">
                    {{ __('Next') }}
                </button>
        </div>

        <div class="mb-3">
            <p class="text-center mb-4">{{__("ENTER SECURITY CODE")}} </p>
            <div class="form-code">
                <input type="text" class="form-contro">
                <input type="text" class="form-contro">
                <input type="text" class="form-contro">
                <input type="text" class="form-contro">
            </div>
            <p class="text-center">{{__("To request a new code please wait")}}: <b> 01:59</b> </p>
        </div>

        .

        <div class="d-none">
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
        

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </div>
    </form>

</x-page-with-map>

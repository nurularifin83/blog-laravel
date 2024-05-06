<x-guest-layout>

    <h4 class="text-muted text-center font-size-18"><b>Login</b></h4>

    <div class="p-3">
        <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Username -->
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" 
                    required autofocus autocomplete="username" placeholder="Username"/>
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>
            </div>

            <!-- Password -->
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
    
            <!-- Remember Me -->
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <label class="form-label ms-1" for="customCheck1">{{ __('Remember me') }}</label>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3 text-center row mt-3 pt-1">
                <div class="col-12">
                    <x-primary-button>{{ __('Log in') }}</x-primary-button>
                </div>
            </div>

            <div class="form-group mb-0 row mt-2">
                <div class="col-sm-7 mt-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> {{ __('Forgot your password?') }}</a>
                    @endif
                </div>
                <div class="col-sm-5 mt-3">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> {{ _('Create an account') }}</a>
                    @endif
                </div>
            </div>

        </form>
    </div>

</x-guest-layout>

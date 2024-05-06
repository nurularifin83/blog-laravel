<x-guest-layout>

    <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

    <div class="p-3">
        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
            <div>
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Username -->
            <div class="mt-4">
                <x-text-input id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" placeholder="Username"/>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="form-group text-center row mt-3 pt-1">
                <div class="col-12">
                    <x-primary-button>
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
    
            <div class="form-group mt-2 mb-0 row">
                <div class="col-12 mt-3 text-center">
                    <a href="{{ route('login') }}" class="text-muted">{{ _('Already have account?') }}</a>
                </div>
            </div>
        </form>
    </div>
    
</x-guest-layout>
        
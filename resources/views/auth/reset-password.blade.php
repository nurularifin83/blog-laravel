<x-guest-layout>
    <h4 class="text-muted text-center font-size-18"><b>Reset Your Password</b></h4>
    
    <div class="p-3">
        <form class="form-horizontal mt-3" method="POST" action="{{ route('password.store') }}">
            @csrf
    
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
    
            <!-- Email Address -->
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" 
                        required autofocus autocomplete="email" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>
    
            <!-- Password -->
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required 
                    autocomplete="new-password" placeholder="New Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
    
            <!-- Confirm Password -->
            <div class="form-group mb-3 row">
                <div class="col-12">
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
    
            <div class="form-group text-center row mt-3 pt-1">
                <div class="col-12">
                    <x-primary-button>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>

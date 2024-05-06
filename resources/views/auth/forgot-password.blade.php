<x-guest-layout>
    <h4 class="text-muted text-center font-size-18"><b>{{ _('Reset Password') }}</b></h4>
    
    <div class="p-3">
        <form class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
            @csrf

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a 
                password reset link that will allow you to choose a new one.') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- Email Address -->
            <div class="form-group mb-3">
                <div class="col-xs-12">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <div class="form-group pb-2 text-center row mt-3">
                <div class="col-12">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>

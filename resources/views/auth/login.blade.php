<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end my-6 mb-8">
            <!-- Remember Me -->
                <label for="remember_me" class="inline-flex items-center pr-8">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-phantomRed shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-phantomRed hover:opacity-80 rounded-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-phantomRed" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <x-primary-button class="w-full text-center items-center justify-center py-4 text-xl">
            {{ __('Log in') }}
        </x-primary-button>

        <div class="mt-6 flex justify-center items-center">
            <h2 class="text-center text-gray-800 font-bold text-md mr-4">Dont have a account?</h2>
            <a href="{{ route('register') }}" class="underline text-sm text-phantomRed hover:opacity-80 rounded-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-phantomRed">
                {{ __('Register here') }}
            </a>
        </div>
    </form>
</x-guest-layout>

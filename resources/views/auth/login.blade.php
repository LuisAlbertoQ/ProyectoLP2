<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="fs-1 text-center">Login</h1>
            <div>
                <h2 class="text-white">Email</h2>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="w-full border-none outline-none bg-transparent rounded-40 fs-6 text-black" style="border: 5px solid rgba(255, 255, 255, 0.2);" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <h2 class="text-muted">Password</h2>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="w-full border-none outline-none bg-transparent rounded-40 fs-6 text-black" style="border: 5px solid rgba(255, 255, 255, 0.2);" type="password" name="password" required autocomplete="current-password" />
            <div class="block mt-4 ">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-dark">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button type='submit' class="ms-4" outline>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

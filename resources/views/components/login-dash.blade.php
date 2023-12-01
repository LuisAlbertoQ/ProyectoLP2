<section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="container h-full p-10">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <!-- Left column container-->
                        <div class="px-4 md:px-0 lg:w-6/12">
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <img class="mx-auto w-48"
                                        src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                        alt="logo" />
                                    <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                        We are The Lotus Team
                                    </h4>
                                </div>

                                <form>
                                    <p class="mb-4">Please login to your account</p>
                                    <!--Username input-->
                                    <div>
                                        <x-label for="email" value="{{ __('Email') }}" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    </div>

                                    <!--Password input-->
                                    <div class="mt-4">
                                        <x-label for="password" value="{{ __('Password') }}" />
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    </div>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <!--Submit button-->
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                        <x-button type='submit' class="ms-4">
                                            {{ __('Log in') }}
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right column container with background and description-->
                        <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                            style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
                            <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                <h4 class="mb-6 text-xl font-semibold">
                                    We are more than just a company
                                </h4>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

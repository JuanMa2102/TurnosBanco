<x-guest-layout>
    
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-label class="mb-4 text-center text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl ..." value="{{ __('INICIAR SESION') }}" />

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="items-center mt-4">
                

                <button class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mb-4">
                    {{ __('Login') }}
                </button>
                
                <div>
                @if (Route::has('register'))
                            <p class="text-gray-600 text-sm text-center">¿no tienes cuenta?
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}" >
                                    Registrate
                            </a>
                @endif

               
                </div>

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

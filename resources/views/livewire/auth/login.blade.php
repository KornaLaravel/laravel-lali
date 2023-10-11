<div>
    <x-auth-card>
        <x-slot name="logo">
            <a wire:navigate href="{{ route('home') }}" class="font-bold text-md">
                {{ config('app.name', 'Laravel') }}
            </a>
        </x-slot>

        <x-slot name="title">
            {{ __('Log in') }}
        </x-slot>

        <form wire:submit="login">
            {{-- Email --}}
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error for="email" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password"
                    name="password" required autocomplete="current-password" />
            </div>

            {{-- Remember me --}}
            <div class="mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" wire:model="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        wire:navigate href="{{ route('register') }}">
                        {{ __('Not register yet?') }}
                    </a>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            wire:navigate href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <x-button wire:loading.attr="disabled">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</div>

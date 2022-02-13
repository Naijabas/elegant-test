<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        @if (session('status') == 'customer-created')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A customer has been successfully created.') }}
            </div>
        @endif

        <form method="POST" action="{{ route('save_customer') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Phone Number -->
            <div>
                <x-label for="phone_number" :value="__('Phone Number')" />

                <x-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" :value="old('phone_number')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Desired Budget -->
            <div>
                <x-label for="budget" :value="__('Desired Budget')" />

                <x-input id="budget" class="block mt-1 w-full" type="number" name="budget" :value="old('budget')" required />
            </div>

            <div>
                <x-label for="message" :value="__('Message')" />

                <x-textarea id="message" class="block mt-1 w-full" type="number" name="message" :value="old('message')" required ></x-textarea>
            </div>

            <div class="flex items-center justify-end mt-4 sm:justify-center">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

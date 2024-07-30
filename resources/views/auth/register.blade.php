<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <div class="mb-4">
                <x-input-label for="name" :value="__('Role')" />
                <div class="flex items-center mb-4">
                    <input id="admin" type="radio" name="role" value="admin" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    <x-input-label class="ml-2" for="name" :value="__('Admin')" />
                </div>
                <div class="flex items-center mb-4">
                    <input id="admin" type="radio" name="role" value="teacher" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    <x-input-label class="ml-2" for="name" :value="__('Teacher')" />
                </div>
                <div class="flex items-center mb-4">
                    <input id="admin" type="radio" name="role" value="student" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    <x-input-label class="ml-2" for="name" :value="__('Student')" />
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>


    <script>
        document.addEventListener('click', function(event) {
            const dropdown = document.querySelector('[aria-haspopup="true"]');
            const menu = dropdown.nextElementSibling;

            if (dropdown.contains(event.target)) {
                menu.classList.toggle('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</x-guest-layout>

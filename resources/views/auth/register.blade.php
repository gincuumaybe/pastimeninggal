<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" id="register-form">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Nomor Telepon -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Nomor Telepon')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Pilih Lokasi Kost -->
        <div class="mt-4">
            <x-input-label for="lokasi_kost" :value="__('Pilih Lokasi Kost')" />

            <select id="lokasi_kost" name="lokasi_kost" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Pilih Lokasi --</option>
                <option value="Berbek">Berbek</option>
                <option value="Gunung_Anyar">Gunung Anyar</option>
                <option value="Rungkut">Rungkut</option>
            </select>

            <x-input-error :messages="$errors->get('lokasi_kost')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            {{-- <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button> --}}

            <x-primary-button type="button" id="submit-btn" class="ms-4">
                {{ __('Register') }}
            </x-primary-button>

        </div>
    </form>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault(); // cegah submit langsung
            const form = document.getElementById('register-form');

            // cek validitas HTML5
            if (!form.checkValidity()) {
                form.reportValidity(); // munculin error default browser
                return;
            }

            // kalau valid, tampilkan konfirmasi
            Swal.fire({
                title: 'Yakin data sudah benar?',
                text: "Pastikan semua informasi sudah sesuai.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, daftar!',
                cancelButtonText: 'Periksa lagi'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>


</x-guest-layout>

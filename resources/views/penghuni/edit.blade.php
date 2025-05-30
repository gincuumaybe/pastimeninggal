{{--


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Penghuni') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('penghuni.update', $penghuni->id) }}" method="POST" id="editForm">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Penghuni</label>
                        <input type="text" name="name" value="{{ old('name', $penghuni->name) }}" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email Penghuni</label>
                        <input type="email" name="email" value="{{ old('email', $penghuni->email) }}" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">No Telepon Penghuni</label>
                        <input type="text" name="no_telp" value="{{ old('no_telp', $penghuni->phone) }}" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Lokasi Penghuni</label>
                        <select name="lokasi_kost" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="Gunung Anyar" {{ old('lokasi_kost', $penghuni->lokasi_kost) === 'Gunung Anyar' ? 'selected' : '' }}>Gunung Anyar</option>
                            <option value="Berbek" {{ old('lokasi_kost', $penghuni->lokasi_kost) === 'Berbek' ? 'selected' : '' }}>Berbek</option>
                            <option value="Rungkut" {{ old('lokasi_kost', $penghuni->lokasi_kost) === 'Rungkut' ? 'selected' : '' }}>Rungkut</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById('editForm');
        form.addEventListener('submit', function(e) {
            const confirmed = confirm('Yakin ingin menyimpan perubahan data penghuni ini?');
            if (!confirmed) {
                e.preventDefault(); // Prevent form submission if user cancels
            }
        });
    </script>
</x-app-layout> --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Penghuni') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('penghuni.update', $penghuni->id) }}" method="POST" id="editForm">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Penghuni</label>
                        <input type="text" name="name" value="{{ old('name', $penghuni->name) }}" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email Penghuni</label>
                        <input type="email" name="email" value="{{ old('email', $penghuni->email) }}" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">No Telepon Penghuni</label>
                        <input type="text" name="no_telp" value="{{ old('no_telp', $penghuni->phone) }}" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Lokasi Penghuni</label>
                        <select name="lokasi_kost" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="Gunung Anyar" {{ old('lokasi_kost', $penghuni->lokasi_kost) === 'Gunung Anyar' ? 'selected' : '' }}>Gunung Anyar</option>
                            <option value="Berbek" {{ old('lokasi_kost', $penghuni->lokasi_kost) === 'Berbek' ? 'selected' : '' }}>Berbek</option>
                            <option value="Rungkut" {{ old('lokasi_kost', $penghuni->lokasi_kost) === 'Rungkut' ? 'selected' : '' }}>Rungkut</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const form = document.getElementById('editForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form submission

            Swal.fire({
                title: 'Yakin ingin menyimpan perubahan?',
                text: 'Perubahan yang dilakukan tidak dapat dibatalkan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if confirmed
                }
            });
        });
    </script>
</x-app-layout>

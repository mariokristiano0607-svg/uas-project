@extends('layouts.app')

@section('content')
<div class="p-8 max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-white mb-8">Profile</h1>

    <div class="space-y-8">
        <!-- Update Profile -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 p-8">
            <h2 class="text-xl font-semibold text-white mb-6">Informasi Profile</h2>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-300 mb-2">Nama</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-purple-500">
                        @error('name') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-purple-500">
                        @error('email') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                            class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-3 px-8 rounded-lg transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>

        <!-- Change Password -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 p-8">
            <h2 class="text-xl font-semibold text-white mb-6">Ganti Password</h2>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="space-y-5">
                    <div>
                        <label class="block text-gray-300 mb-2">Password Lama</label>
                        <input type="password" name="current_password"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Password Baru</label>
                        <input type="password" name="password"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                            class="bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold py-3 px-8 rounded-lg transition">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
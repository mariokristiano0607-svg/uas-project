@extends('layouts.app')

@section('content')
<div class="p-6 lg:p-10">
    <!-- Header -->
    <div class="mb-10">
        <h1 class="text-4xl font-bold text-white mb-2">
            Selamat datang kembali, <span class="text-purple-400">{{ Auth::user()->name }}</span>!
        </h1>
        <p class="text-gray-400 text-lg">Ini ringkasan aktivitas kamu hari ini</p>
    </div>

    <!-- User Info -->
    <div class="bg-gray-800 border border-gray-700 rounded-2xl p-8 mb-10 shadow-2xl">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center text-3xl font-bold text-white shadow-xl">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <div class="flex-1 text-center md:text-left">
                <p class="text-2xl font-bold text-white">{{ Auth::user()->name }}</p>
                <p class="text-gray-400">{{ Auth::user()->email }}</p>
                <span class="inline-block mt-3 px-6 py-2 rounded-full text-sm font-bold
                    @if(Auth::user()->role == 'admin') bg-red-900/70 text-red-200
                    @elseif(Auth::user()->role == 'staff') bg-amber-900/70 text-amber-200
                    @else bg-emerald-900/70 text-emerald-200 @endif">
                    {{ ucfirst(Auth::user()->role) }}
                </span>
            </div>
        </div>
    </div>

    <!-- Stats – Super Premium Version -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-12">
    <!-- Total Transaksi -->
    <div class="relative group">
        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl blur-xl opacity-60 group-hover:opacity-90 transition duration-700"></div>
        <div class="relative bg-gray-900/80 backdrop-blur-xl border border-gray-700 rounded-2xl p-7 shadow-2xl overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-300 text-sm font-medium uppercase tracking-widest">Total Transaksi</p>
                    <p class="text-4xl font-extrabold text-white mt-3 count-up" data-target="{{ $totalTransaksi ?? 0 }}">
                        0
                    </p>
                    <p class="text-blue-400 text-sm mt-2">Semua waktu</p>
                </div>
                <div class="p-4 bg-blue-500/20 rounded-2xl">
                    <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 8c-4 4m16 0-4-4m4 4H8m13 8-4 4m-4-4-4 4m8-8H3"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 h-2 bg-gray-800 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full animate-pulse w-4/5"></div>
            </div>
        </div>
    </div>

    <!-- Total User -->
    <div class="relative group">
        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-500 rounded-2xl blur-xl opacity-60 group-hover:opacity-90 transition duration-700"></div>
        <div class="relative bg-gray-900/80 backdrop-blur-xl border border-gray-700 rounded-2xl p-7 shadow-2xl overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-emerald-300 text-sm font-medium uppercase tracking-widest">Total User</p>
                    <p class="text-4xl font-extrabold text-white mt-3 count-up" data-target="{{ $totalUser ?? 0 }}">
                        0
                    </p>
                    <p class="text-emerald-400 text-sm mt-2">Aktif saat ini</p>
                </div>
                <div class="p-4 bg-emerald-500/20 rounded-2xl">
                    <svg class="w-12 h-12 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 h-2 bg-gray-800 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full animate-pulse w-3/4"></div>
            </div>
        </div>
    </div>

    <!-- Level Akses -->
    <div class="relative group">
        <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur-xl opacity-60 group-hover:opacity-90 transition duration-700"></div>
        <div class="relative bg-gray-900/80 backdrop-blur-xl border border-gray-700 rounded-2xl p-7 shadow-2xl overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-300 text-sm font-medium uppercase tracking-widest">Level Akses</p>
                    <p class="text-3xl font-extrabold text-white mt-3">
                        {{ ucfirst(Auth::user()->role) }}
                    </p>
                    <p class="text-purple-400 text-sm mt-2">Role aktif</p>
                </div>
                <div class="p-4 
                    @if(Auth::user()->role == 'admin') bg-red-500/20 
                    @elseif(Auth::user()->role == 'staff') bg-amber-500/20 
                    @else bg-emerald-500/20 @endif 
                    rounded-2xl">
                    <svg class="w-12 h-12 
                        @if(Auth::user()->role == 'admin') text-red-400 
                        @elseif(Auth::user()->role == 'staff') text-amber-400 
                        @else text-emerald-400 @endif" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 11c0-3.204 2.237-5.826 5-5.997m-5 5.997c0 3.204 2.237 5.826 5 5.997m-10-5.997c0-3.204-2.237-5.826-5-5.997m5 5.997c0 3.204-2.237 5.826-5 5.997m5-11.994A9.957 9.957 0 0112 3c5.523 0 10 4.477 10 10a9.957 9.957 0 01-5 8.66m-10-8.66c0-5.523-4.477-10-10-10S2 7.477 2 13s4.477 10 10 10"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 h-2 bg-gray-800 rounded-full overflow-hidden">
                <div class="h-full w-full 
                    @if(Auth::user()->role == 'admin') bg-gradient-to-r from-red-500 to-pink-500
                    @elseif(Auth::user()->role == 'staff') bg-gradient-to-r from-amber-500 to-yellow-500
                    @else bg-gradient-to-r from-emerald-500 to-cyan-500 @endif 
                    rounded-full animate-pulse"></div>
            </div>
        </div>
    </div>
</div>    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('transaksi.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-6 rounded-xl text-center shadow-lg transition transform hover:scale-105 flex items-center justify-center gap-3 text-lg">
                    Document Kelola Transaksi
                </a>
                <a href="{{ route('user.index') }}" class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-6 rounded-xl text-center shadow-lg transition transform hover:scale-105 flex items-center justify-center gap-3 text-lg">
                    Users Kelola User
                </a>
            @elseif(Auth::user()->role == 'staff')
                <a href="{{ route('transaksi.index') }}" class="col-span-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-6 rounded-xl text-center shadow-lg transition transform hover:scale-105 flex items-center justify-center gap-3 text-lg">
                    Pen Input Transaksi
                </a>
            @else
                <a href="{{ route('transaksi.create') }}" class="col-span-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-6 rounded-xl text-center shadow-lg transition transform hover:scale-105 flex items-center justify-center gap-3 text-lg">
                    Plus Transaksi Baru
                </a>
            @endif

            <!-- Logout -->
            <div class="lg:col-start-2">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-6 rounded-xl shadow-lg transition transform hover:scale-105 flex items-center justify-center gap-3 text-lg">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
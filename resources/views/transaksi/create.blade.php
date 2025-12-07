@extends('layouts.app')

@section('content')
<div class="p-8 max-w-4xl mx-auto">
    <div class="bg-gray-800 rounded-2xl shadow-xl border border-gray-700 p-8">
        <h1 class="text-3xl font-bold text-white mb-2">Transaksi Baru</h1>
        <p class="text-gray-400 mb-8">Silakan isi data transaksi di bawah ini.</p>

        <!-- Form sementara (nanti diganti dengan form beneran) -->
        <form class="space-y-6">
            <div>
                <label class="block text-gray-300 mb-2">Judul Transaksi</label>
                <input type="text" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-purple-500" placeholder="Contoh: Bayar Listrik">
            </div>
            <div>
                <label class="block text-gray-300 mb-2">Nominal</label>
                <input type="number" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-purple-500" placeholder="50000">
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-700 hover:to-green-700 text-white font-bold py-3 px-8 rounded-lg transition">
                    Simpan Transaksi
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-medium py-3 px-8 rounded-lg transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
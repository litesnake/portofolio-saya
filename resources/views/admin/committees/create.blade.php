@extends('admin.layout')

@section('title', 'Tambah Committee')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Tambah Committee Baru</h1>
        <p class="text-gray-600 mt-2">Isi form di bawah untuk menambahkan riwayat kepanitiaan</p>
    </div>

    <form action="{{ route('admin.committees.store') }}" method="POST" class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        @csrf

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tahun *</label>
            <input
                type="text"
                name="year"
                required
                value="{{ old('year') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: 2024"
            >
            @error('year')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Posisi/Role *</label>
            <input
                type="text"
                name="role"
                required
                value="{{ old('role') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Ketua Pelaksana"
            >
            @error('role')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Event *</label>
            <input
                type="text"
                name="event"
                required
                value="{{ old('event') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Inagurasi FILKOM 2024"
            >
            @error('event')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Order <span class="text-gray-500 text-xs">(urutan tampilan)</span></label>
            <input
                type="number"
                name="order"
                value="{{ old('order', 0) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="0"
            >
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="flex-1 bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition"
            >
                Simpan Committee
            </button>
            <a
                href="{{ route('admin.committees.index') }}"
                class="px-6 py-3 border border-gray-300 rounded-lg font-medium hover:bg-gray-50 transition text-center"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

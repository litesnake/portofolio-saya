@extends('admin.layout')

@section('title', 'Tambah Organization')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Tambah Organization Baru</h1>
        <p class="text-gray-600 mt-2">Isi form di bawah untuk menambahkan pengalaman organisasi</p>
    </div>

    <form action="{{ route('admin.organizations.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        @csrf

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Rentang Tahun *</label>
            <input
                type="text"
                name="year_range"
                required
                value="{{ old('year_range') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: 2025 - 2026"
            >
            @error('year_range')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Posisi *</label>
            <input
                type="text"
                name="position"
                required
                value="{{ old('position') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Dewan DPM FILKOM UB & Ketua Badan Aspirasi"
            >
            @error('position')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Institusi *</label>
            <input
                type="text"
                name="institution"
                required
                value="{{ old('institution') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Universitas Brawijaya"
            >
            @error('institution')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea
                name="description"
                rows="4"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Jelaskan pengalaman Anda..."
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Card Label <span class="text-gray-500 text-xs">(untuk tampilan kartu)</span></label>
            <input
                type="text"
                name="card_label"
                value="{{ old('card_label') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: DPM FILKOM"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar <span class="text-gray-500 text-xs">(max 2MB)</span></label>
            <input
                type="file"
                name="image"
                accept="image/*"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Link Instagram</label>
            <input
                type="url"
                name="instagram_link"
                value="{{ old('instagram_link') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="https://instagram.com/..."
            >
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
                Simpan Organization
            </button>
            <a
                href="{{ route('admin.organizations.index') }}"
                class="px-6 py-3 border border-gray-300 rounded-lg font-medium hover:bg-gray-50 transition text-center"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

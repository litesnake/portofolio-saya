@extends('admin.layout')

@section('title', 'Tambah Organization')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Tambah Organization Baru</h1>
        <p class="text-gray-600 text-sm mt-1">Isi form di bawah untuk menambahkan pengalaman organisasi</p>
    </div>

    <form action="{{ route('admin.organizations.store') }}" method="POST" enctype="multipart/form-data" class="glass-card p-8">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Rentang Tahun *</label>
                <input
                    type="text"
                    name="year_range"
                    required
                    value="{{ old('year_range') }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    placeholder="Contoh: 2025 - 2026"
                >
                @error('year_range')
                    <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Order</label>
                <input
                    type="number"
                    name="order"
                    value="{{ old('order', 0) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    placeholder="0"
                >
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Posisi *</label>
            <input
                type="text"
                name="position"
                required
                value="{{ old('position') }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                placeholder="Contoh: Ketua Badan Aspirasi"
            >
            @error('position')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Institusi *</label>
            <input
                type="text"
                name="institution"
                required
                value="{{ old('institution') }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                placeholder="Contoh: Universitas Brawijaya"
            >
            @error('institution')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Deskripsi *</label>
            <textarea
                name="description"
                rows="4"
                required
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                placeholder="Jelaskan pengalaman Anda..."
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Card Label</label>
                <input
                    type="text"
                    name="card_label"
                    value="{{ old('card_label') }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    placeholder="Contoh: DPM FILKOM"
                >
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Link Instagram</label>
                <input
                    type="url"
                    name="instagram_link"
                    value="{{ old('instagram_link') }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    placeholder="https://instagram.com/..."
                >
            </div>
        </div>

        <div class="mb-8">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Upload Gambar <span class="text-gray-500 lowercase font-normal">(max 2MB)</span></label>
            <input
                type="file"
                name="image"
                accept="image/*"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-black/10 file:text-gray-700 hover:file:bg-black/20"
            >
            @error('image')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="glass-button-primary flex-1 px-6 py-4 text-sm font-semibold rounded-2xl"
            >
                Simpan Organization
            </button>
            <a
                href="{{ route('admin.organizations.index') }}"
                class="glass-button px-6 py-4 text-sm font-semibold rounded-2xl text-center min-w-[120px]"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

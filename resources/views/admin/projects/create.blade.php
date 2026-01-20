@extends('admin.layout')

@section('title', 'Tambah Project')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Tambah Project Baru</h1>
        <p class="text-gray-600 text-sm mt-1">Isi form di bawah untuk menambahkan project</p>
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="glass-card p-8">
        @csrf

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Judul Project *</label>
            <input
                type="text"
                name="title"
                required
                value="{{ old('title') }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800"
                placeholder="Contoh: Sistem Manajemen IoT"
            >
            @error('title')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Deskripsi *</label>
            <textarea
                name="description"
                rows="4"
                required
                class="glass-input w-full px-4 py-3 text-sm text-gray-800"
                placeholder="Jelaskan project Anda..."
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Tags * <span class="text-gray-500 normal-case text-xs">(pisahkan dengan koma)</span></label>
            <input
                type="text"
                name="tags"
                required
                value="{{ old('tags') }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800"
                placeholder="Laravel, Vue.js, MQTT"
            >
            @error('tags')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Link Code</label>
                <input
                    type="url"
                    name="code_link"
                    value="{{ old('code_link') }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800"
                    placeholder="https://github.com/..."
                >
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Link Demo</label>
                <input
                    type="url"
                    name="demo_link"
                    value="{{ old('demo_link') }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800"
                    placeholder="https://demo.example.com"
                >
            </div>
        </div>

        <div class="mb-8">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Order <span class="text-gray-500 normal-case text-xs">(urutan tampilan)</span></label>
            <input
                type="number"
                name="order"
                value="{{ old('order', 0) }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800"
                placeholder="0"
            >
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="glass-button-primary flex-1 py-4 text-sm font-semibold"
            >
                Simpan Project
            </button>
            <a
                href="{{ route('admin.projects.index') }}"
                class="glass-button px-8 py-4 text-sm font-semibold text-center"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

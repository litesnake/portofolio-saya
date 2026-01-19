@extends('admin.layout')

@section('title', 'Tambah Project')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Tambah Project Baru</h1>
        <p class="text-gray-600 mt-2">Isi form di bawah untuk menambahkan project</p>
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md">
        @csrf

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Judul Project *</label>
            <input
                type="text"
                name="title"
                required
                value="{{ old('title') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Sistem Manajemen IoT"
            >
            @error('title')
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
                placeholder="Jelaskan project Anda..."
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tags * <span class="text-gray-500 text-xs">(pisahkan dengan koma)</span></label>
            <input
                type="text"
                name="tags"
                required
                value="{{ old('tags') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Laravel, Vue.js, MQTT"
            >
            @error('tags')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Link Code</label>
                <input
                    type="url"
                    name="code_link"
                    value="{{ old('code_link') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                    placeholder="https://github.com/..."
                >
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Link Demo</label>
                <input
                    type="url"
                    name="demo_link"
                    value="{{ old('demo_link') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                    placeholder="https://demo.example.com"
                >
            </div>
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
                Simpan Project
            </button>
            <a
                href="{{ route('admin.projects.index') }}"
                class="px-6 py-3 border border-gray-300 rounded-lg font-medium hover:bg-gray-50 transition"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

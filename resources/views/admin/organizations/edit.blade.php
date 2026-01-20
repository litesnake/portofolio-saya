@extends('admin.layout')

@section('title', 'Edit Organization')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Edit Organization</h1>
        <p class="text-gray-600 text-sm mt-1">Update informasi organisasi</p>
    </div>

    <form action="{{ route('admin.organizations.update', $organization) }}" method="POST" enctype="multipart/form-data" class="glass-card p-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Rentang Tahun *</label>
                <input
                    type="text"
                    name="year_range"
                    required
                    value="{{ old('year_range', $organization->year_range) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
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
                    value="{{ old('order', $organization->order) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Posisi *</label>
            <input
                type="text"
                name="position"
                required
                value="{{ old('position', $organization->position) }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
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
                value="{{ old('institution', $organization->institution) }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
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
            >{{ old('description', $organization->description) }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Card Label</label>
                <input
                    type="text"
                    name="card_label"
                    value="{{ old('card_label', $organization->card_label) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Link Instagram</label>
                <input
                    type="url"
                    name="instagram_link"
                    value="{{ old('instagram_link', $organization->instagram_link) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
            </div>
        </div>

        @if($organization->image)
        <div class="mb-4">
            <label class="block text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wider">Gambar Saat Ini</label>
            <div class="glass-card p-2 inline-block rounded-xl">
                <img src="{{ Storage::url($organization->image) }}" alt="Current" class="w-32 h-32 object-cover rounded-lg">
            </div>
        </div>
        @endif

        <div class="mb-8">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Upload Gambar Baru <span class="text-gray-500 lowercase font-normal">(kosongkan jika tidak ingin ganti)</span></label>
            <input
                type="file"
                name="image"
                accept="image/*"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-black/10 file:text-gray-700 hover:file:bg-black/20"
            >
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="glass-button-primary flex-1 px-6 py-4 text-sm font-semibold rounded-2xl"
            >
                Update Organization
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

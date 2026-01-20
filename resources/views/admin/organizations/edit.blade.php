@extends('admin.layout')

@section('title', 'Edit Organization')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Edit Organization</h1>
        <p class="text-gray-600 mt-2">Update informasi organisasi</p>
    </div>

    <form action="{{ route('admin.organizations.update', $organization) }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Rentang Tahun *</label>
            <input
                type="text"
                name="year_range"
                required
                value="{{ old('year_range', $organization->year_range) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Posisi *</label>
            <input
                type="text"
                name="position"
                required
                value="{{ old('position', $organization->position) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Institusi *</label>
            <input
                type="text"
                name="institution"
                required
                value="{{ old('institution', $organization->institution) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea
                name="description"
                rows="4"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >{{ old('description', $organization->description) }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Card Label</label>
            <input
                type="text"
                name="card_label"
                value="{{ old('card_label', $organization->card_label) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        @if($organization->image)
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
            <img src="{{ Storage::url($organization->image) }}" alt="Current" class="w-32 h-32 object-cover rounded-lg border">
        </div>
        @endif

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar Baru <span class="text-gray-500 text-xs">(kosongkan jika tidak ingin mengganti)</span></label>
            <input
                type="file"
                name="image"
                accept="image/*"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Link Instagram</label>
            <input
                type="url"
                name="instagram_link"
                value="{{ old('instagram_link', $organization->instagram_link) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Order</label>
            <input
                type="number"
                name="order"
                value="{{ old('order', $organization->order) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="flex-1 bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition"
            >
                Update Organization
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

@extends('admin.layout')

@section('title', 'Edit Profile')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Edit Profile</h1>
        <p class="text-gray-600 mt-2">Update informasi profile website Anda</p>
    </div>

    <form action="{{ route('admin.profile.update') }}" method="POST" class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
            <input
                type="text"
                name="name"
                required
                value="{{ old('name', $profile->name) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Yohanes Damar S."
            >
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Title/Tagline *</label>
            <input
                type="text"
                name="title"
                required
                value="{{ old('title', $profile->title) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Contoh: Web Developer & Tech Enthusiast"
            >
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Bio/Deskripsi *</label>
            <textarea
                name="bio"
                rows="5"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="Ceritakan tentang diri Anda..."
            >{{ old('bio', $profile->bio) }}</textarea>
            @error('bio')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
            <input
                type="email"
                name="email"
                required
                value="{{ old('email', $profile->email) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                placeholder="email@contoh.com"
            >
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="border-t border-gray-200 my-6 pt-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Social Media Links</h3>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">LinkedIn</label>
                <input
                    type="url"
                    name="linkedin"
                    value="{{ old('linkedin', $profile->linkedin) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                    placeholder="https://linkedin.com/in/..."
                >
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">GitHub</label>
                <input
                    type="url"
                    name="github"
                    value="{{ old('github', $profile->github) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                    placeholder="https://github.com/..."
                >
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Instagram</label>
                <input
                    type="url"
                    name="instagram"
                    value="{{ old('instagram', $profile->instagram) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                    placeholder="https://instagram.com/..."
                >
            </div>
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="flex-1 bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition"
            >
                Update Profile
            </button>
            <a
                href="{{ route('admin.dashboard') }}"
                class="px-6 py-3 border border-gray-300 rounded-lg font-medium hover:bg-gray-50 transition text-center"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

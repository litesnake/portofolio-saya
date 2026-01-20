@extends('admin.layout')

@section('title', 'Edit Profile')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Edit Profile</h1>
            <p class="text-gray-600 text-sm mt-1">Update informasi profile website Anda</p>
        </div>
        <div class="w-12 h-12 glass-card flex items-center justify-center rounded-xl text-2xl">
            👤
        </div>
    </div>

    <form action="{{ route('admin.profile.update') }}" method="POST" class="glass-card p-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Nama Lengkap *</label>
                <input
                    type="text"
                    name="name"
                    required
                    value="{{ old('name', $profile->name) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
                @error('name')
                    <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Title/Tagline *</label>
                <input
                    type="text"
                    name="title"
                    required
                    value="{{ old('title', $profile->title) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Bio/Deskripsi *</label>
            <textarea
                name="bio"
                rows="5"
                required
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
            >{{ old('bio', $profile->bio) }}</textarea>
            @error('bio')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Email *</label>
            <input
                type="email"
                name="email"
                required
                value="{{ old('email', $profile->email) }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
            >
            @error('email')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="border-t border-white/40 my-8 pt-8">
            <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span>🌐</span> Social Media Links
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">LinkedIn</label>
                    <input
                        type="url"
                        name="linkedin"
                        value="{{ old('linkedin', $profile->linkedin) }}"
                        class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    >
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">GitHub</label>
                    <input
                        type="url"
                        name="github"
                        value="{{ old('github', $profile->github) }}"
                        class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    >
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Instagram</label>
                    <input
                        type="url"
                        name="instagram"
                        value="{{ old('instagram', $profile->instagram) }}"
                        class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                    >
                </div>
            </div>
        </div>

        <div class="flex gap-4 pt-4">
            <button
                type="submit"
                class="glass-button-primary flex-1 px-6 py-4 text-sm font-semibold rounded-2xl"
            >
                Update Profile
            </button>
            <a
                href="{{ route('admin.dashboard') }}"
                class="glass-button px-6 py-4 text-sm font-semibold rounded-2xl text-center min-w-[120px]"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

@extends('admin.layout')

@section('title', 'Edit Committee')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Edit Committee</h1>
        <p class="text-gray-600 text-sm mt-1">Update informasi kepanitiaan</p>
    </div>

    <form action="{{ route('admin.committees.update', $committee) }}" method="POST" class="glass-card p-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Tahun *</label>
                <input
                    type="text"
                    name="year"
                    required
                    value="{{ old('year', $committee->year) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
                @error('year')
                    <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Order</label>
                <input
                    type="number"
                    name="order"
                    value="{{ old('order', $committee->order) }}"
                    class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
                >
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Posisi/Role *</label>
            <input
                type="text"
                name="role"
                required
                value="{{ old('role', $committee->role) }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
            >
            @error('role')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <label class="block text-xs font-semibold text-gray-700 mb-3 uppercase tracking-wider">Nama Event *</label>
            <input
                type="text"
                name="event"
                required
                value="{{ old('event', $committee->event) }}"
                class="glass-input w-full px-4 py-3 text-sm text-gray-800 placeholder-gray-400"
            >
            @error('event')
                <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="glass-button-primary flex-1 px-6 py-4 text-sm font-semibold rounded-2xl"
            >
                Update Committee
            </button>
            <a
                href="{{ route('admin.committees.index') }}"
                class="glass-button px-6 py-4 text-sm font-semibold rounded-2xl text-center min-w-[120px]"
            >
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

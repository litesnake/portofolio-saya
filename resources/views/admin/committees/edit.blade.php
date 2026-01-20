@extends('admin.layout')

@section('title', 'Edit Committee')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Edit Committee</h1>
        <p class="text-gray-600 mt-2">Update informasi kepanitiaan</p>
    </div>

    <form action="{{ route('admin.committees.update', $committee) }}" method="POST" class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tahun *</label>
            <input
                type="text"
                name="year"
                required
                value="{{ old('year', $committee->year) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Posisi/Role *</label>
            <input
                type="text"
                name="role"
                required
                value="{{ old('role', $committee->role) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Event *</label>
            <input
                type="text"
                name="event"
                required
                value="{{ old('event', $committee->event) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Order</label>
            <input
                type="number"
                name="order"
                value="{{ old('order', $committee->order) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="flex-1 bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition"
            >
                Update Committee
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

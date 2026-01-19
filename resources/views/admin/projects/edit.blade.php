@extends('admin.layout')

@section('title', 'Edit Project')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Edit Project</h1>
        <p class="text-gray-600 mt-2">Update informasi project</p>
    </div>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="bg-white p-8 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Judul Project *</label>
            <input
                type="text"
                name="title"
                required
                value="{{ old('title', $project->title) }}"
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
            >{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tags * <span class="text-gray-500 text-xs">(pisahkan dengan koma)</span></label>
            <input
                type="text"
                name="tags"
                required
                value="{{ old('tags', implode(', ', $project->tags)) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Link Code</label>
                <input
                    type="url"
                    name="code_link"
                    value="{{ old('code_link', $project->code_link) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                >
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Link Demo</label>
                <input
                    type="url"
                    name="demo_link"
                    value="{{ old('demo_link', $project->demo_link) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                >
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Order</label>
            <input
                type="number"
                name="order"
                value="{{ old('order', $project->order) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
            >
        </div>

        <div class="flex gap-4">
            <button
                type="submit"
                class="flex-1 bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition"
            >
                Update Project
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

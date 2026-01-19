@extends('admin.layout')

@section('title', 'Kelola Projects')

@section('content')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-bold text-gray-900">Kelola Projects</h1>
        <p class="text-gray-600 mt-2">Tambah, edit, atau hapus project portfolio Anda</p>
    </div>
    <a href="{{ route('admin.projects.create') }}" class="bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800">
        + Tambah Project
    </a>
</div>

@if($projects->count() > 0)
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tags</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Links</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @foreach($projects as $project)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <span class="text-gray-900 font-medium">{{ $project->order }}</span>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-900 font-medium">{{ $project->title }}</div>
                    <div class="text-sm text-gray-500 mt-1">{{ Str::limit($project->description, 60) }}</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex flex-wrap gap-1">
                        @foreach($project->tags as $tag)
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">{{ $tag }}</span>
                        @endforeach
                    </div>
                </td>
                <td class="px-6 py-4 text-sm">
                    @if($project->code_link)
                        <a href="{{ $project->code_link }}" target="_blank" class="text-blue-600 hover:underline block">Code</a>
                    @endif
                    @if($project->demo_link)
                        <a href="{{ $project->demo_link }}" target="_blank" class="text-blue-600 hover:underline block">Demo</a>
                    @endif
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600 hover:text-blue-800">
                            Edit
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="bg-white p-12 rounded-lg shadow-md text-center">
    <div class="text-6xl mb-4">📦</div>
    <h3 class="text-xl font-bold text-gray-900 mb-2">Belum ada project</h3>
    <p class="text-gray-600 mb-6">Mulai tambahkan project portfolio Anda</p>
    <a href="{{ route('admin.projects.create') }}" class="inline-block bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800">
        + Tambah Project Pertama
    </a>
</div>
@endif
@endsection

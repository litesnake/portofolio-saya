@extends('admin.layout')

@section('title', 'Kelola Projects')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Kelola Projects</h1>
            <p class="text-gray-600 text-sm mt-1">Tambah, edit, atau hapus project portfolio Anda</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="glass-button-primary px-6 py-3 inline-flex items-center gap-2">
            <span class="text-lg">+</span>
            <span class="text-sm">Tambah Project</span>
        </a>
    </div>

    @if($projects->count() > 0)
    <div class="glass-card overflow-hidden">
        <table class="w-full">
            <thead class="bg-white/30 backdrop-blur-lg border-b border-white/30">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Order</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Tags</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Links</th>
                    <th class="px-6 py-4 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/20">
                @foreach($projects as $project)
                <tr class="hover:bg-white/20 transition-colors">
                    <td class="px-6 py-4">
                        <span class="text-sm font-semibold text-gray-800">{{ $project->order }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-semibold text-gray-800">{{ $project->title }}</div>
                        <div class="text-xs text-gray-600 mt-1">{{ Str::limit($project->description, 60) }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-wrap gap-1">
                            @foreach($project->tags as $tag)
                                <span class="px-2 py-1 bg-white/40 text-gray-700 text-xs rounded-lg">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </td>
                    <td class="px-6 py-4 text-xs">
                        @if($project->code_link)
                            <a href="{{ $project->code_link }}" target="_blank" class="text-gray-700 hover:text-black block">Code</a>
                        @endif
                        @if($project->demo_link)
                            <a href="{{ $project->demo_link }}" target="_blank" class="text-gray-700 hover:text-black block">Demo</a>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-3">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-gray-700 hover:text-black font-medium text-xs">
                                Edit
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 font-medium text-xs">
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
    <div class="glass-card p-12 text-center">
        <div class="text-6xl mb-4">📦</div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Belum ada project</h3>
        <p class="text-gray-600 text-sm mb-6">Mulai tambahkan project portfolio Anda</p>
        <a href="{{ route('admin.projects.create') }}"
           class="glass-button-primary inline-block px-8 py-4">
            + Tambah Project Pertama
        </a>
    </div>
    @endif
</div>
@endsection

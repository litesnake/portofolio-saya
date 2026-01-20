@extends('admin.layout')

@section('title', 'Kelola Committees')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Kelola Committees</h1>
            <p class="text-gray-600 text-sm mt-1">Tambah, edit, atau hapus riwayat kepanitiaan</p>
        </div>
        <a href="{{ route('admin.committees.create') }}"
           class="glass-button-primary px-6 py-3 rounded-2xl inline-flex items-center gap-2 transition-all">
            <span class="text-lg">+</span>
            <span class="text-sm font-semibold">Tambah Committee</span>
        </a>
    </div>

    @if($committees->count() > 0)
    <div class="glass-card overflow-hidden">
        <table class="w-full">
            <thead class="bg-white/30 backdrop-blur-lg border-b border-white/30">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Order</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Year</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Event</th>
                    <th class="px-6 py-4 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/20">
                @foreach($committees as $committee)
                <tr class="hover:bg-white/20 transition-colors">
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white/40 text-sm font-bold text-gray-800">
                            {{ $committee->order }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm font-bold text-gray-800">{{ $committee->year }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-white/40 rounded-lg text-sm font-medium text-gray-800 border border-white/30">
                            {{ $committee->role }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm text-gray-600 font-medium">{{ $committee->event }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-3">
                            <a href="{{ route('admin.committees.edit', $committee) }}"
                               class="glass-button px-3 py-2 text-xs font-semibold rounded-lg hover:text-black">
                                Edit
                            </a>
                            <form action="{{ route('admin.committees.destroy', $committee) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus?')"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-semibold text-xs px-3 py-2 hover:bg-red-50/50 rounded-lg transition-colors">
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
        <div class="text-6xl mb-4">🎯</div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Belum ada committee</h3>
        <p class="text-gray-600 text-sm mb-6">Mulai tambahkan riwayat kepanitiaan Anda</p>
        <a href="{{ route('admin.committees.create') }}"
           class="glass-button-primary inline-block px-8 py-4 rounded-2xl text-sm font-semibold">
            + Tambah Committee Pertama
        </a>
    </div>
    @endif
</div>
@endsection

@extends('admin.layout')

@section('title', 'Kelola Organizations')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Kelola Organizations</h1>
            <p class="text-gray-600 text-sm mt-1">Tambah, edit, atau hapus pengalaman organisasi</p>
        </div>
        <a href="{{ route('admin.organizations.create') }}"
           class="glass-button-primary px-6 py-3 rounded-2xl inline-flex items-center gap-2 transition-all">
            <span class="text-lg">+</span>
            <span class="text-sm font-semibold">Tambah Organization</span>
        </a>
    </div>

    @if($organizations->count() > 0)
    <div class="grid grid-cols-1 gap-6">
        @foreach($organizations as $org)
        <div class="glass-card p-6 relative group hover:bg-white/30 transition-all">
            <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-black/5 text-gray-800 text-xs font-bold uppercase tracking-wider rounded-lg border border-black/5">
                            {{ $org->year_range }}
                        </span>
                        @if($org->card_label)
                        <span class="px-3 py-1 bg-white/40 text-gray-700 text-xs font-bold uppercase tracking-wider rounded-lg border border-white/40">
                            {{ $org->card_label }}
                        </span>
                        @endif
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $org->position }}</h3>
                    <p class="text-gray-600 font-medium mb-4 text-sm">{{ $org->institution }}</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 bg-white/20 p-4 rounded-xl border border-white/20">
                        {{ $org->description }}
                    </p>

                    <div class="flex gap-4 text-xs font-semibold">
                        @if($org->image)
                        <a href="{{ Storage::url($org->image) }}" target="_blank" class="text-gray-700 hover:text-black flex items-center gap-1">
                            📷 Lihat Gambar
                        </a>
                        @endif
                        @if($org->instagram_link)
                        <a href="{{ $org->instagram_link }}" target="_blank" class="text-gray-700 hover:text-black flex items-center gap-1">
                            📱 Instagram
                        </a>
                        @endif
                    </div>
                </div>

                <div class="flex items-center gap-3 md:flex-col">
                    <a href="{{ route('admin.organizations.edit', $org) }}"
                       class="glass-button w-full text-center px-4 py-2 text-xs font-semibold rounded-xl">
                        Edit
                    </a>
                    <form action="{{ route('admin.organizations.destroy', $org) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus?')"
                          class="w-full">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full text-red-500 hover:text-red-700 font-semibold text-xs px-4 py-2 hover:bg-red-50/50 rounded-xl transition-colors">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="glass-card p-12 text-center">
        <div class="text-6xl mb-4">🏛️</div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Belum ada organization</h3>
        <p class="text-gray-600 text-sm mb-6">Mulai tambahkan pengalaman organisasi Anda</p>
        <a href="{{ route('admin.organizations.create') }}"
           class="glass-button-primary inline-block px-8 py-4 rounded-2xl text-sm font-semibold">
            + Tambah Organization Pertama
        </a>
    </div>
    @endif
</div>
@endsection

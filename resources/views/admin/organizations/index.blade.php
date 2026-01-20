@extends('admin.layout')

@section('title', 'Kelola Organizations')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Kelola Organizations</h1>
            <p class="text-gray-600 mt-2">Tambah, edit, atau hapus pengalaman organisasi</p>
        </div>
        <a href="{{ route('admin.organizations.create') }}"
           class="bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition inline-flex items-center gap-2">
            <span class="text-xl">+</span>
            <span>Tambah Organization</span>
        </a>
    </div>

    @if($organizations->count() > 0)
    <div class="grid gap-6">
        @foreach($organizations as $org)
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition">
            <div class="flex justify-between items-start">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-semibold rounded">
                            {{ $org->year_range }}
                        </span>
                        @if($org->card_label)
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-semibold rounded">
                            {{ $org->card_label }}
                        </span>
                        @endif
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $org->position }}</h3>
                    <p class="text-gray-600 font-medium mb-3">{{ $org->institution }}</p>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $org->description }}</p>

                    <div class="flex gap-4 mt-4 text-sm">
                        @if($org->image)
                        <a href="{{ Storage::url($org->image) }}" target="_blank" class="text-blue-600 hover:underline">
                            📷 Lihat Gambar
                        </a>
                        @endif
                        @if($org->instagram_link)
                        <a href="{{ $org->instagram_link }}" target="_blank" class="text-blue-600 hover:underline">
                            📱 Instagram
                        </a>
                        @endif
                    </div>
                </div>

                <div class="flex gap-3 ml-6">
                    <a href="{{ route('admin.organizations.edit', $org) }}"
                       class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                        Edit
                    </a>
                    <form action="{{ route('admin.organizations.destroy', $org) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus?')"
                          class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium text-sm">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="bg-white p-12 rounded-xl shadow-sm text-center border border-gray-200">
        <div class="text-6xl mb-4">🏛️</div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Belum ada organization</h3>
        <p class="text-gray-600 mb-6">Mulai tambahkan pengalaman organisasi Anda</p>
        <a href="{{ route('admin.organizations.create') }}"
           class="inline-block bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition">
            + Tambah Organization Pertama
        </a>
    </div>
    @endif
</div>
@endsection

@extends('admin.layout')

@section('title', 'Kelola Committees')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Kelola Committees</h1>
            <p class="text-gray-600 mt-2">Tambah, edit, atau hapus riwayat kepanitiaan</p>
        </div>
        <a href="{{ route('admin.committees.create') }}"
           class="bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition inline-flex items-center gap-2">
            <span class="text-xl">+</span>
            <span>Tambah Committee</span>
        </a>
    </div>

    @if($committees->count() > 0)
    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Order</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Year</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Event</th>
                    <th class="px-6 py-4 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($committees as $committee)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <span class="text-sm font-medium text-gray-900">{{ $committee->order }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm font-semibold text-gray-900">{{ $committee->year }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm text-gray-900">{{ $committee->role }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm text-gray-600">{{ $committee->event }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-3">
                            <a href="{{ route('admin.committees.edit', $committee) }}"
                               class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                Edit
                            </a>
                            <form action="{{ route('admin.committees.destroy', $committee) }}"
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
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="bg-white p-12 rounded-xl shadow-sm text-center border border-gray-200">
        <div class="text-6xl mb-4">🎯</div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Belum ada committee</h3>
        <p class="text-gray-600 mb-6">Mulai tambahkan riwayat kepanitiaan Anda</p>
        <a href="{{ route('admin.committees.create') }}"
           class="inline-block bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition">
            + Tambah Committee Pertama
        </a>
    </div>
    @endif
</div>
@endsection

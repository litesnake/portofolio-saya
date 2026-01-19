@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
    <p class="text-gray-600 mt-2">Selamat datang di admin panel portfolio Anda</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm">Total Projects</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['projects'] }}</h3>
            </div>
            <div class="text-4xl">💼</div>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="text-blue-600 text-sm mt-4 inline-block hover:underline">
            Kelola Projects →
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm">Total Organizations</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['organizations'] }}</h3>
            </div>
            <div class="text-4xl">🏛️</div>
        </div>
        <a href="{{ route('admin.organizations.index') }}" class="text-blue-600 text-sm mt-4 inline-block hover:underline">
            Kelola Organizations →
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm">Total Committees</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['committees'] }}</h3>
            </div>
            <div class="text-4xl">🎯</div>
        </div>
        <a href="{{ route('admin.committees.index') }}" class="text-blue-600 text-sm mt-4 inline-block hover:underline">
            Kelola Committees →
        </a>
    </div>
</div>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-bold text-gray-900 mb-4">Quick Actions</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a href="{{ route('admin.projects.create') }}" class="p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 text-center">
            <div class="text-2xl mb-2">➕</div>
            <div class="text-sm font-medium">Tambah Project</div>
        </a>
        <a href="{{ route('admin.organizations.create') }}" class="p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 text-center">
            <div class="text-2xl mb-2">➕</div>
            <div class="text-sm font-medium">Tambah Organization</div>
        </a>
        <a href="{{ route('admin.committees.create') }}" class="p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 text-center">
            <div class="text-2xl mb-2">➕</div>
            <div class="text-sm font-medium">Tambah Committee</div>
        </a>
        <a href="{{ route('admin.profile.edit') }}" class="p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 text-center">
            <div class="text-2xl mb-2">✏️</div>
            <div class="text-sm font-medium">Edit Profile</div>
        </a>
    </div>
</div>
@endsection

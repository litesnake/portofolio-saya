@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="mb-8 glass-card p-8">
        <div class="flex justify-between items-start">
            <div>
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Dashboard</h1>
                <p class="text-gray-600 text-sm">Selamat datang di admin panel portfolio Anda</p>
            </div>
            <div class="text-right bg-black/5 px-4 py-2 rounded-xl">
                <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Logged in as</p>
                <p class="text-xs font-semibold text-gray-800 flex items-center gap-2">
                    <span>🔐</span>
                    <span>Administrator</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Projects Card -->
        <div class="glass-card p-6">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-gray-600 text-xs font-medium uppercase tracking-wider">Total Projects</p>
                    <h3 class="text-5xl font-bold text-gray-800 mt-2">{{ $stats['projects'] }}</h3>
                </div>
                <div class="w-16 h-16 bg-white/40 rounded-2xl flex items-center justify-center">
                    <span class="text-3xl">💼</span>
                </div>
            </div>
            <a href="{{ route('admin.projects.index') }}"
               class="text-gray-700 text-xs font-semibold hover:text-black inline-flex items-center gap-2 group">
                <span>Kelola Projects</span>
                <span class="group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>

        <!-- Organizations Card -->
        <div class="glass-card p-6">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-gray-600 text-xs font-medium uppercase tracking-wider">Total Organizations</p>
                    <h3 class="text-5xl font-bold text-gray-800 mt-2">{{ $stats['organizations'] }}</h3>
                </div>
                <div class="w-16 h-16 bg-white/40 rounded-2xl flex items-center justify-center">
                    <span class="text-3xl">🏛️</span>
                </div>
            </div>
            <a href="{{ route('admin.organizations.index') }}"
               class="text-gray-700 text-xs font-semibold hover:text-black inline-flex items-center gap-2 group">
                <span>Kelola Organizations</span>
                <span class="group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>

        <!-- Committees Card -->
        <div class="glass-card p-6">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-gray-600 text-xs font-medium uppercase tracking-wider">Total Committees</p>
                    <h3 class="text-5xl font-bold text-gray-800 mt-2">{{ $stats['committees'] }}</h3>
                </div>
                <div class="w-16 h-16 bg-white/40 rounded-2xl flex items-center justify-center">
                    <span class="text-3xl">🎯</span>
                </div>
            </div>
            <a href="{{ route('admin.committees.index') }}"
               class="text-gray-700 text-xs font-semibold hover:text-black inline-flex items-center gap-2 group">
                <span>Kelola Committees</span>
                <span class="group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="glass-card p-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6">Quick Actions</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="{{ route('admin.projects.create') }}"
               class="p-6 border-2 border-dashed border-gray-300/50 rounded-2xl hover:border-gray-400 hover:bg-white/30 transition-all text-center group">
                <div class="text-3xl mb-3 group-hover:scale-110 transition-transform">➕</div>
                <div class="text-xs font-semibold text-gray-700">Tambah Project</div>
            </a>

            <a href="{{ route('admin.organizations.create') }}"
               class="p-6 border-2 border-dashed border-gray-300/50 rounded-2xl hover:border-gray-400 hover:bg-white/30 transition-all text-center group">
                <div class="text-3xl mb-3 group-hover:scale-110 transition-transform">➕</div>
                <div class="text-xs font-semibold text-gray-700">Tambah Organization</div>
            </a>

            <a href="{{ route('admin.committees.create') }}"
               class="p-6 border-2 border-dashed border-gray-300/50 rounded-2xl hover:border-gray-400 hover:bg-white/30 transition-all text-center group">
                <div class="text-3xl mb-3 group-hover:scale-110 transition-transform">➕</div>
                <div class="text-xs font-semibold text-gray-700">Tambah Committee</div>
            </a>

            <a href="{{ route('admin.profile.edit') }}"
               class="p-6 border-2 border-dashed border-gray-300/50 rounded-2xl hover:border-gray-400 hover:bg-white/30 transition-all text-center group">
                <div class="text-3xl mb-3 group-hover:scale-110 transition-transform">✏️</div>
                <div class="text-xs font-semibold text-gray-700">Edit Profile</div>
            </a>
        </div>
    </div>
</div>
@endsection

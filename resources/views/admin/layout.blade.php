<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-bg">
    <!-- Background Bubbles -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
        <div class="bubble bubble-4"></div>
        <div class="bubble bubble-5"></div>
    </div>

    <div class="min-h-screen flex relative z-10">
        <!-- Sidebar -->
        <aside class="w-72 fixed h-screen overflow-y-auto glass-sidebar">
            <div class="p-6 border-b border-white/20">
                <h2 class="text-2xl font-bold text-gray-800">Admin Panel</h2>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Portfolio Management</p>
            </div>

            <nav class="py-4 px-3">
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all {{ request()->routeIs('admin.dashboard') ? 'nav-item-active' : 'hover:bg-white/20' }}">
                    <span class="text-xl">📊</span>
                    <span class="font-medium text-gray-700 text-sm">Dashboard</span>
                </a>

                <a href="{{ route('admin.profile.edit') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all {{ request()->routeIs('admin.profile.*') ? 'nav-item-active' : 'hover:bg-white/20' }}">
                    <span class="text-xl">👤</span>
                    <span class="font-medium text-gray-700 text-sm">Profile</span>
                </a>

                <a href="{{ route('admin.projects.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all {{ request()->routeIs('admin.projects.*') ? 'nav-item-active' : 'hover:bg-white/20' }}">
                    <span class="text-xl">💼</span>
                    <span class="font-medium text-gray-700 text-sm">Projects</span>
                </a>

                <a href="{{ route('admin.organizations.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all {{ request()->routeIs('admin.organizations.*') ? 'nav-item-active' : 'hover:bg-white/20' }}">
                    <span class="text-xl">🏛️</span>
                    <span class="font-medium text-gray-700 text-sm">Organizations</span>
                </a>

                <a href="{{ route('admin.committees.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all {{ request()->routeIs('admin.committees.*') ? 'nav-item-active' : 'hover:bg-white/20' }}">
                    <span class="text-xl">🎯</span>
                    <span class="font-medium text-gray-700 text-sm">Committees</span>
                </a>

                <div class="border-t border-white/20 my-4 mx-4"></div>

                <a href="{{ route('home') }}"
                   target="_blank"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all hover:bg-white/20">
                    <span class="text-xl">🌐</span>
                    <span class="font-medium text-gray-600 text-sm">Lihat Website</span>
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="flex items-center gap-3 px-4 py-3 rounded-xl mb-2 transition-all hover:bg-red-50/40 w-full text-left">
                        <span class="text-xl">🚪</span>
                        <span class="font-medium text-red-600 text-sm">Logout</span>
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="ml-72 flex-1 p-8 w-full min-h-screen">
            <!-- Alerts -->
            @if(session('success'))
                <div class="mb-6 p-4 glass-card text-green-700 rounded-2xl flex items-start gap-3">
                    <span class="text-xl">✅</span>
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 glass-card text-red-700 rounded-2xl flex items-start gap-3">
                    <span class="text-xl">❌</span>
                    <span class="text-sm font-medium">{{ session('error') }}</span>
                </div>
            @endif

            <!-- Page Content -->
            @yield('content')
        </main>
    </div>
</body>
</html>

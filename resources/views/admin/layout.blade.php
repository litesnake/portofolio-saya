<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white fixed h-full">
            <div class="p-6">
                <h2 class="text-2xl font-bold">Admin Panel</h2>
            </div>

            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800' : '' }}">
                    <span>📊 Dashboard</span>
                </a>
                <a href="{{ route('admin.profile.edit') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->routeIs('admin.profile.*') ? 'bg-gray-800' : '' }}">
                    <span>👤 Profile</span>
                </a>
                <a href="{{ route('admin.projects.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->routeIs('admin.projects.*') ? 'bg-gray-800' : '' }}">
                    <span>💼 Projects</span>
                </a>
                <a href="{{ route('admin.organizations.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->routeIs('admin.organizations.*') ? 'bg-gray-800' : '' }}">
                    <span>🏛️ Organizations</span>
                </a>
                <a href="{{ route('admin.committees.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->routeIs('admin.committees.*') ? 'bg-gray-800' : '' }}">
                    <span>🎯 Committees</span>
                </a>

                <div class="border-t border-gray-700 my-4"></div>

                <a href="{{ route('home') }}" target="_blank" class="flex items-center px-6 py-3 hover:bg-gray-800">
                    <span>🌐 Lihat Website</span>
                </a>

                <form action="{{ route('admin.logout') }}" method="POST" class="px-6 py-3">
                    @csrf
                    <button type="submit" class="text-left hover:text-gray-300 w-full">
                        🚪 Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="ml-64 flex-1 p-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>

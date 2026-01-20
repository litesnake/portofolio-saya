<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-bg min-h-screen flex items-center justify-center px-4">
    <!-- Background Bubbles -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
        <div class="bubble bubble-4"></div>
        <div class="bubble bubble-5"></div>
    </div>

    <div class="max-w-md w-full relative z-10">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 glass-card mb-4">
                <span class="text-4xl">🔐</span>
            </div>
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Admin Panel</h1>
            <p class="text-gray-600 text-sm">Masukkan password untuk melanjutkan</p>
        </div>

        <!-- Login Card -->
        <div class="glass-card p-8">
            @if(session('error'))
                <div class="mb-6 p-4 bg-red-50/50 backdrop-blur-lg border border-red-200/50 text-red-700 rounded-xl text-sm">
                    <strong>❌ Error:</strong> {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50/50 backdrop-blur-lg border border-green-200/50 text-green-700 rounded-xl text-sm">
                    <strong>✅ Success:</strong> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Password Admin</label>
                    <input
                        type="password"
                        name="password"
                        required
                        autofocus
                        class="glass-input w-full px-6 py-4 text-gray-800 placeholder-gray-400"
                        placeholder="••••••••"
                    >
                </div>

                <button
                    type="submit"
                    class="glass-button-primary w-full py-4 rounded-2xl font-semibold"
                >
                    Login ke Dashboard
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ route('home') }}" class="text-xs text-gray-600 hover:text-black transition-colors inline-flex items-center gap-2">
                    <span>←</span>
                    <span>Kembali ke Home</span>
                </a>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="text-center mt-6">
            <p class="text-xs text-gray-500">Portfolio Management System</p>
        </div>
    </div>
</body>
</html>

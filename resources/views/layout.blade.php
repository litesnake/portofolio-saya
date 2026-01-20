<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Saya')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="main-bg font-sans text-gray-900 antialiased leading-normal tracking-normal flex flex-col min-h-screen">

    <div class="bubble-container">
        <div class="main-bubble bubble-main-1"></div>
        <div class="main-bubble bubble-main-2"></div>
        <div class="main-bubble bubble-main-3"></div>
        <div class="main-bubble bubble-main-4"></div>
        <div class="main-bubble bubble-main-5"></div>
        <div class="main-bubble bubble-main-6"></div>
    </div>

    <a href="{{ route('admin.login') }}"
       class="fixed top-5 right-5 z-[9999] flex items-center gap-2 px-4 py-2 bg-black/50 backdrop-blur-md border border-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider hover:bg-black/70 hover:scale-105 transition-all shadow-lg no-underline"
       style="text-decoration: none;">
        <span>Admin</span>
        <span class="text-sm">🔐</span>
    </a>

    <header class="glass-header w-full z-50">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="logo">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-white tracking-tighter drop-shadow-md no-underline">
                    NamaAnda<span class="text-blue-200">.</span>
                </a>
            </div>
            <nav>
                <ul class="nav-links hidden md:flex gap-8 list-none m-0 p-0">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Proyek</a></li>
                    <li><a href="{{ route('organization') }}" class="{{ request()->routeIs('organization') ? 'active' : '' }}">Organisasi</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="w-full relative z-10 flex-grow">
        @yield('content')
    </main>

    <footer class="glass-footer w-full relative z-10 mt-auto">
        <div class="container mx-auto px-6 text-center">
            @php
                $profile = App\Models\Profile::first();
            @endphp

            <h3 class="text-xl font-bold text-white mb-4">Let's Connect</h3>
            <p class="text-white/90 mb-6">
                Mari Terhubung: <a href="mailto:{{ $profile->email ?? 'email@contoh.com' }}" class="text-blue-100 hover:text-white underline">{{ $profile->email ?? 'email@contoh.com' }}</a>
            </p>

            <div class="socials flex justify-center gap-4 mb-6">
                @if($profile && $profile->linkedin)
                    <a href="{{ $profile->linkedin }}" target="_blank" class="glass-social-link no-underline">LinkedIn</a>
                @endif
                @if($profile && $profile->github)
                    <a href="{{ $profile->github }}" target="_blank" class="glass-social-link no-underline">GitHub</a>
                @endif
                @if($profile && $profile->instagram)
                    <a href="{{ $profile->instagram }}" target="_blank" class="glass-social-link no-underline">Instagram</a>
                @endif
            </div>

            <p class="copyright text-white/80 text-sm">
                &copy; {{ date('Y') }} {{ $profile->name ?? 'Nama Anda' }}. Dibuat dengan <span style="color:#ff6b6b;">&hearts;</span>
            </p>
        </div>
    </footer>

</body>
</html>

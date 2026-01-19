<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Saya')</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="container">
            <div class="logo"><a href="{{ route('home') }}">NamaAnda.</a></div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Proyek</a></li>
                <li><a href="{{ route('organization') }}" class="{{ request()->routeIs('organization') ? 'active' : '' }}">Organisasi</a></li>
            </ul>
        </nav>
    </header>

    <!-- Konten utama dari halaman child -->
    @yield('content')

    <footer>
        <div class="container">
            <p>Mari Terhubung: <a href="mailto:email@contoh.com">email@contoh.com</a></p>
            <div class="socials">
                <a href="#">LinkedIn</a>
                <a href="#">GitHub</a>
                <a href="#">Instagram</a>
            </div>
            <p class="copyright">&copy; 2025 Nama Anda. Dibuat dengan <span style="color:#e25555;">&hearts;</span></p>
        </div>
    </footer>

    <!-- Vite sudah otomatis load JS, hapus script manual -->
</body>
</html>

@extends('layout')

@section('title', 'Portofolio Saya - Home')

@section('content')
<section id="hero" class="container">
    <div class="hero-content">
        <p class="greeting">Halo, saya {{ $profile->name ?? 'Nama Anda' }}.</p>
        <h1>{!! nl2br(e($profile->title ?? 'Web Developer &<br>Tech Enthusiast.')) !!}</h1>
        <p class="sub-text">{{ $profile->bio ?? 'Membangun solusi digital yang efisien, aman, dan minimalis. Selamat datang di portofolio digital saya.' }}</p>

        <div class="cta-group">
            <a href="{{ route('projects') }}" class="btn btn-primary">Lihat Proyek</a>
            <a href="{{ route('organization') }}" class="btn btn-secondary">Organisasi & Kepanitiaan</a>
        </div>

        <!-- Tombol Admin (Hidden, hanya muncul jika hover di area tertentu) -->
        <div class="mt-8">
            <a href="{{ route('admin.login') }}" class="text-xs text-gray-400 hover:text-black transition-colors">
                🔐 Admin Login
            </a>
        </div>
    </div>
</section>

<section class="container" style="padding-top: 0;">
    <h2 class="section-title">Sekilas Tentang Saya</h2>
    <p style="max-width: 700px; color: #666;">
        {{ $profile->bio ?? 'Saya adalah pengembang web yang berfokus pada performa dan keamanan. Berpengalaman menggunakan PHP/Laravel, JavaScript, dan Docker. Saya juga aktif dalam berbagai kegiatan organisasi untuk mengasah soft-skill kepemimpinan.' }}
    </p>
</section>
@endsection

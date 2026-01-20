@extends('layout')

@section('title', 'Portofolio Saya - Home')

@section('content')

<section id="hero" class="min-h-[85vh] flex items-center justify-center relative p-5">
    <div class="container mx-auto">
        <div class="hero-content text-center max-w-4xl mx-auto transform transition hover:scale-[1.01] duration-500">

            <div class="inline-block mb-6 px-6 py-2 rounded-full bg-white/20 backdrop-blur-md border border-white/40 shadow-lg">
                <p class="text-sm md:text-base font-bold text-white tracking-widest uppercase m-0">
                    👋 Halo, saya {{ $profile->name ?? 'Nama Anda' }}
                </p>
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg leading-tight">
                {!! $profile ? str_replace('&', '&<br>', $profile->title) : 'Web Developer &<br>Tech Enthusiast.' !!}
            </h1>

            <p class="sub-text text-lg md:text-xl text-blue-50 mb-10 mx-auto leading-relaxed max-w-2xl drop-shadow-md">
                {{ $profile->bio ?? 'Membangun solusi digital yang efisien, aman, dan minimalis. Selamat datang di portofolio digital saya.' }}
            </p>

            <div class="cta-group flex justify-center gap-6 flex-wrap">
                <a href="{{ route('projects') }}" class="glass-btn group no-underline">
                    <span class="relative z-10">Lihat Proyek 🚀</span>
                </a>
                <a href="{{ route('organization') }}" class="glass-btn group no-underline">
                    <span class="relative z-10">Organisasi 🏛️</span>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="pb-20 pt-10 relative z-10 px-5">
    <div class="container mx-auto">
        <div class="glass-project-card p-8 md:p-14 rounded-3xl">
            <div class="flex flex-col md:flex-row items-center gap-12">

                <div class="md:w-1/3 text-center md:text-left">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-white mb-4">Sekilas Tentang Saya</h2>
                    <div class="h-2 w-24 bg-white/50 rounded-full mx-auto md:mx-0"></div>
                </div>

                <div class="md:w-2/3">
                    <p class="text-lg text-white/90 leading-relaxed font-medium text-justify drop-shadow-sm">
                        {{ $profile->bio ?? 'Saya adalah pengembang web yang berfokus pada performa dan keamanan. Berpengalaman menggunakan PHP/Laravel, JavaScript, dan Docker. Saya juga aktif dalam berbagai kegiatan organisasi untuk mengasah soft-skill kepemimpinan.' }}
                    </p>

                    <div class="mt-8 flex flex-wrap justify-center md:justify-start gap-4">
                        <span class="px-4 py-2 bg-white/20 rounded-lg text-white font-semibold text-sm border border-white/30 backdrop-blur-sm">Web Development</span>
                        <span class="px-4 py-2 bg-white/20 rounded-lg text-white font-semibold text-sm border border-white/30 backdrop-blur-sm">System Analyst</span>
                        <span class="px-4 py-2 bg-white/20 rounded-lg text-white font-semibold text-sm border border-white/30 backdrop-blur-sm">Leadership</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

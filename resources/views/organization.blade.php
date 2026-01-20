@extends('layout')

@section('title', 'Organisasi - Portofolio Saya')

@section('content')

<section class="container mx-auto px-4 pt-24 pb-10 mb-32 relative z-10">
    <div class="glass-card p-10 md:p-14 text-center rounded-3xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-md">
            Organisasi & Kepanitiaan
        </h1>
        <p class="text-lg text-blue-50 max-w-2xl mx-auto drop-shadow-sm">
            Perjalanan kepemimpinan, kolaborasi tim, dan kontribusi sosial saya.
        </p>
    </div>
</section>

<!-- Promo Cards FIXED POSITION (Polaroid di samping kiri/kanan) -->
<div class="promo-section">
    <div class="promo-board">
        @foreach($organizations->take(4) as $index => $org)
        <a href="{{ $org->instagram_link ?? '#' }}" target="_blank" class="promo-card card-{{ $index + 1 }} group no-underline">
            <div class="card-image">
                @if($org->image)
                    <img src="{{ Storage::url($org->image) }}" alt="{{ $org->card_label }}"
                         class="group-hover:scale-110 transition-transform duration-500"
                         style="filter: brightness(1.1) contrast(1.05);">
                @else
                    <div class="w-full h-full flex items-center justify-center bg-blue-500/20 text-white font-bold text-2xl">
                        {{ $org->card_label ?? 'ORG' }}
                    </div>
                @endif
            </div>
            <span class="card-pin"></span>
            <span class="card-label">{{ $org->card_label ?? $org->position }}</span>
        </a>
        @endforeach
    </div>
</div>

<section class="container mx-auto px-4 pb-32 relative z-10">
    <div class="glass-card p-8 md:p-14 rounded-3xl">

        <h2 class="text-3xl font-bold text-white mb-16 border-b border-white/20 pb-4 inline-block drop-shadow-md">
            Pengalaman Organisasi
        </h2>

        <div class="org-list ml-2 md:ml-4" style="border-left-color: rgba(255, 255, 255, 0.3);">
            @foreach($organizations as $org)
            <div class="org-item mb-24 pl-8 relative">
                <div class="org-date inline-block px-4 py-1 bg-white/20 border border-white/30 rounded-md text-white text-xs font-bold mb-3 backdrop-blur-sm">
                    {{ $org->year_range }}
                </div>

                <div class="org-details">
                    <h3 class="text-2xl font-bold text-white mb-2 drop-shadow-md">{{ $org->position }}</h3>
                    <span class="block text-blue-100 font-semibold mb-4 text-lg">{{ $org->institution }}</span>
                    <p class="text-white/80 leading-relaxed max-w-3xl text-sm md:text-base">
                        {{ $org->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="committee-section mt-24 pt-10 border-t border-white/10">
            <h2 class="text-3xl font-bold text-white mb-12 border-l-4 border-white pl-4 drop-shadow-md">
                Riwayat Kepanitiaan
            </h2>

            <div class="flex flex-col gap-8">
                @foreach($committees as $committee)
                <div class="glass-committee-item flex flex-col md:flex-row items-start md:items-center p-6 rounded-xl border border-white/20 transition-all duration-300 hover:bg-white/20 hover:border-white/40 hover:translate-x-2">
                    <span class="c-year w-24 font-bold text-white text-lg">{{ $committee->year }}</span>

                    <div class="flex-1">
                        <span class="c-role font-bold text-white text-base mr-2">{{ $committee->role }}</span>
                        <span class="hidden md:inline text-white/50 mx-2">|</span>
                        <span class="c-event text-blue-100 block md:inline mt-1 md:mt-0">{{ $committee->event }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<style>
/* Organization Timeline Styling */
.org-item::before {
    background: white !important;
    border-color: rgba(255, 255, 255, 0.5) !important;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}

/* Committee Item Glass */
.glass-committee-item {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
</style>
@endsection

@extends('layout')

@section('title', 'Proyek - Portofolio Saya')

@section('content')

<style>
    /* Fix untuk project grid */
    .grid {
        gap: 30px !important;
    }

    .glass-project-card {
        display: flex !important;
        flex-direction: column !important;
        height: 100% !important;
        min-height: 380px !important;
        overflow: hidden !important;
    }

    .flex-grow {
        flex-grow: 1 !important;
    }

    .mt-auto {
        margin-top: auto !important;
    }

    /* Fix untuk responsif */
    @media (max-width: 768px) {
        .grid-cols-1,
        .grid-cols-2,
        .grid-cols-3 {
            grid-template-columns: 1fr !important;
        }

        .glass-project-card {
            min-height: 320px !important;
        }
    }
</style>

<section class="container mx-auto px-4 pt-24 pb-10 mb-10 relative z-10">
    <div class="glass-card p-10 md:p-14 text-center rounded-3xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-md">
            Proyek Terpilih
        </h1>
        <p class="text-lg text-blue-50 max-w-2xl mx-auto drop-shadow-sm">
            Kumpulan hasil karya, eksplorasi kode, dan studi kasus yang telah saya kerjakan.
        </p>
    </div>
</section>

<section class="container mx-auto px-4 pb-32 relative z-10">
    @if($projects->count() > 0)
        {{-- Menggunakan gap yang lebih besar dan konsisten --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 gap-y-12">
            @foreach($projects as $project)
            <div class="flex flex-col h-full">
                <div class="glass-project-card p-8 flex flex-col h-full transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.2)]">
                    <h3 class="text-2xl font-bold text-white mb-4 drop-shadow-md line-clamp-2 flex-grow-0">
                        {{ $project->title }}
                    </h3>

                    <p class="text-white/90 mb-8 leading-relaxed flex-grow text-sm md:text-base drop-shadow-sm line-clamp-4">
                        {{ $project->description }}
                    </p>

                    <div class="tags mb-8 flex flex-wrap gap-2 flex-grow-0">
                        @foreach($project->tags as $tag)
                            <span class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-semibold text-white backdrop-blur-sm">
                                #{{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                        @if($project->code_link)
                            <a href="{{ $project->code_link }}" target="_blank" class="flex-1 py-3 text-center bg-white/10 hover:bg-white/20 border border-white/30 rounded-xl text-white font-bold text-sm transition-all no-underline">
                                Code 💻
                            </a>
                        @endif
                        @if($project->demo_link)
                            <a href="{{ $project->demo_link }}" target="_blank" class="flex-1 py-3 text-center bg-white/20 hover:bg-white/30 border border-white/40 rounded-xl text-white font-bold text-sm transition-all no-underline">
                                Demo 🚀
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="glass-card p-16 text-center rounded-3xl">
            <div class="text-6xl mb-4">📂</div>
            <p class="text-white text-xl font-medium">Belum ada project yang ditambahkan.</p>
        </div>
    @endif
</section>
@endsection

@extends('layout')

@section('title', 'Proyek - Portofolio Saya')

@section('content')

<section class="container mx-auto px-4 pt-24 pb-10 mb-20 relative z-10">
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
            @foreach($projects as $project)
            <div class="flex flex-col h-full mb-12 md:mb-0">
                <div class="glass-project-card p-8 flex flex-col h-full transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.2)]">
                    <h3 class="text-2xl font-bold text-white mb-4 drop-shadow-md">
                        {{ $project->title }}
                    </h3>

                    <p class="text-white/90 mb-8 leading-relaxed flex-grow text-sm md:text-base drop-shadow-sm">
                        {{ $project->description }}
                    </p>

                    <div class="tags mb-8 flex flex-wrap gap-2">
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

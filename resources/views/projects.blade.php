@extends('layout')

@section('title', 'Proyek - Portofolio Saya')

@section('content')
<section class="container page-header">
    <h1>Proyek Terpilih</h1>
    <p class="sub-text">Kumpulan hasil karya, eksplorasi kode, dan studi kasus.</p>
</section>

<section class="container">
    @if($projects->count() > 0)
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <div class="tags">
                    @foreach($project->tags as $tag)
                        <span>{{ $tag }}</span>
                    @endforeach
                </div>
                <div class="project-links">
                    @if($project->code_link)
                        <a href="{{ $project->code_link }}" target="_blank">Lihat Code</a>
                    @endif
                    @if($project->demo_link)
                        <a href="{{ $project->demo_link }}" target="_blank">Demo</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div style="text-align: center; padding: 60px 20px;">
            <p style="color: #666;">Belum ada project yang ditambahkan.</p>
        </div>
    @endif
</section>
@endsection

@extends('layout')

@section('title', 'Organisasi - Yohanes Damar S.')

@section('content')
<section class="container page-header">
    <h1>Organisasi & Kepanitiaan</h1>
    <p class="sub-text">Perjalanan kepemimpinan dan kontribusi sosial di Universitas Brawijaya.</p>
</section>

<div class="promo-section">
    <div class="promo-board">
        @foreach($organizations->take(4) as $index => $org)
        <a href="{{ $org->instagram_link ?? '#' }}" target="_blank" class="promo-card card-{{ $index + 1 }}">
            <div class="card-image">
                @if($org->image)
                    <img src="{{ Storage::url($org->image) }}" alt="{{ $org->card_label }}">
                @else
                    <img src="https://via.placeholder.com/400/333/fff?text={{ urlencode($org->card_label ?? 'ORG') }}" alt="{{ $org->card_label }}">
                @endif
            </div>
            <span class="card-pin"></span>
            <span class="card-label">{{ $org->card_label ?? $org->position }}</span>
        </a>
        @endforeach
    </div>
</div>

<section class="container">
    <h2 class="subsection-title">Pengalaman Organisasi</h2>
    <div class="org-list">
        @foreach($organizations as $org)
        <div class="org-item">
            <div class="org-date">{{ $org->year_range }}</div>
            <div class="org-details">
                <h3>{{ $org->position }}</h3>
                <span class="org-place">{{ $org->institution }}</span>
                <p>{{ $org->description }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="committee-section">
        <h2 class="subsection-title">Riwayat Kepanitiaan</h2>
        <div class="committee-list">
            @foreach($committees as $committee)
            <div class="committee-item">
                <span class="c-year">{{ $committee->year }}</span>
                <span class="c-role">{{ $committee->role }}</span>
                <span class="c-event">{{ $committee->event }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@extends('layout')

@section('title', 'Organisasi - Yohanes Damar S.')

@section('content')
<section class="container page-header">
    <h1>Organisasi & Kepanitiaan</h1>
    <p class="sub-text">Perjalanan kepemimpinan dan kontribusi sosial di Universitas Brawijaya.</p>
</section>

<div class="promo-section">
    <div class="promo-board">

        <a href="https://instagram.com/" target="_blank" class="promo-card card-1">
            <div class="card-image">
                <img src="https://via.placeholder.com/400/333/fff?text=DPM" alt="DPM">
            </div>
            <span class="card-pin"></span>
            <span class="card-label">DPM FILKOM</span>
        </a>

        <a href="https://instagram.com/" target="_blank" class="promo-card card-2">
            <div class="card-image">
                <img src="https://via.placeholder.com/400/555/fff?text=INAGURASI" alt="Inagurasi">
            </div>
            <span class="card-pin"></span>
            <span class="card-label">Ketupel Inagurasi</span>
        </a>

        <a href="https://instagram.com/" target="_blank" class="promo-card card-3">
            <div class="card-image">
                <img src="https://via.placeholder.com/400/777/fff?text=HACKATHON" alt="Hackathon">
            </div>
            <span class="card-pin"></span>
            <span class="card-label">Staff Hackathon</span>
        </a>

        <a href="https://instagram.com/" target="_blank" class="promo-card card-4">
            <div class="card-image">
                <img src="https://via.placeholder.com/400/222/fff?text=KMK" alt="KMK">
            </div>
            <span class="card-pin"></span>
            <span class="card-label">KMK FILKOM</span>
        </a>

    </div>
</div>

<section class="container">
    <h2 class="subsection-title">Pengalaman Organisasi</h2>
    <div class="org-list">

        <div class="org-item">
            <div class="org-date">2025 - 2026</div>
            <div class="org-details">
                <h3>Dewan DPM FILKOM UB & Ketua Badan Aspirasi</h3>
                <span class="org-place">Universitas Brawijaya</span>
                <p>Bertanggung jawab memimpin 6 anggota, mengelola aspirasi, sekaligus menjadi satu dari sembilan orang yang terpilih menjadi dewan melalui proses demokrasi. Berhasil meningkatkan aspirasi mahasiswa sebesar 90%.</p>
            </div>
        </div>

        <div class="org-item">
            <div class="org-date">2024 - 2025</div>
            <div class="org-details">
                <h3>Staff Ahli Biro Komunikasi DPM FILKOM UB</h3>
                <span class="org-place">Universitas Brawijaya</span>
                <p>Mengatur dan menyebarluaskan program kerja dari DPM FILKOM UB, menjadi wajah lembaga, dan menjadi penanggung jawab pengajuan konten feeds ig serta video.</p>
            </div>
        </div>

        <div class="org-item">
            <div class="org-date">2024 - 2025</div>
            <div class="org-details">
                <h3>BPH Minat Bakat KMK FILKOM UB</h3>
                <span class="org-place">Universitas Brawijaya</span>
                <p>Menjadi penyalur minat dan bakat dari anggota KMK FILKOM UB, dan menjadi pelaksana event minat bakat untuk KMK FILKOM UB.</p>
            </div>
        </div>

    </div>

    <div class="committee-section">
        <h2 class="subsection-title">Riwayat Kepanitiaan</h2>
        <div class="committee-list">

            <div class="committee-item">
                <span class="c-year">2024</span>
                <span class="c-role">Ketua Pelaksana</span>
                <span class="c-event">Inagurasi FILKOM 2024</span>
            </div>

            <div class="committee-item">
                <span class="c-year">2023</span>
                <span class="c-role">Staff Divisi Acara</span>
                <span class="c-event">HACKATHON UB 5.0</span>
            </div>

            <div class="committee-item">
                <span class="c-year">2023</span>
                <span class="c-role">Koordinator Lapangan</span>
                <span class="c-event">Olimpiade TI Nasional</span>
            </div>

        </div>
    </div>
</section>
@endsection

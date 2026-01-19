@extends('layout')

@section('title', 'Proyek - Portofolio Saya')

@section('content')
<section class="container page-header">
    <h1>Proyek Terpilih</h1>
    <p class="sub-text">Kumpulan hasil karya, eksplorasi kode, dan studi kasus.</p>
</section>

<section class="container">
    <div class="projects-grid">
        <div class="project-card">
            <h3>Sistem Manajemen IoT</h3>
            <p>Platform monitoring perangkat IoT realtime menggunakan protokol MQTT dan dashboard analitik.</p>
            <div class="tags">
                <span>Laravel</span><span>Vue.js</span><span>MQTT</span>
            </div>
            <div class="project-links">
                <a href="#">Lihat Code</a>
                <a href="#">Demo</a>
            </div>
        </div>

        <div class="project-card">
            <h3>E-Commerce API</h3>
            <p>RESTful API untuk toko online dengan integrasi payment gateway dan keamanan OAuth2.</p>
            <div class="tags">
                <span>Node.js</span><span>Express</span><span>MongoDB</span>
            </div>
            <div class="project-links">
                <a href="#">Lihat Code</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Analisis Sentimen</h3>
            <p>Aplikasi Python untuk menganalisis sentimen media sosial menggunakan Machine Learning.</p>
            <div class="tags">
                <span>Python</span><span>Scikit-learn</span><span>Flask</span>
            </div>
            <div class="project-links">
                <a href="#">Lihat Code</a>
            </div>
        </div>
    </div>
</section>
@endsection

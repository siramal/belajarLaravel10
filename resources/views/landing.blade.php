@extends('layout.layout')
@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="hero bg-light p-5 text-center">
        <h1>Jelajahi Dunia Bersama Kami</h1>
        <p>Temukan petualangan berikutnya dengan paket perjalanan eksklusif kami!</p>
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg mt-3">Mulai Perjalanan Anda</a>
    </div>

    <!-- Popular Destinations Section -->
    <div class="popular-destinations mt-5">
        <h2 class="text-center mb-4">Destinasi Populer</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="asset/img/rajaAmpat.jpg" class="card-img-top" alt="Raja Ampat">
                    <div class="card-body">
                        <h5 class="card-title">Raja Ampat</h5>
                        <p class="card-text">Terletak di Papua Barat, Raja Ampat menawarkan keindahan alam yang memukau dengan ketenangan yang jauh dari hiruk-pikuk kota. Destinasi ini dikenal dengan keindahan bawah lautnya yang mengagumkan dan merupakan surga bagi para penyelam.</p>
                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="asset/img/LabuanBajo.jpg" class="card-img-top" alt="Labuan Bajo">
                    <div class="card-body">
                        <h5 class="card-title">Labuan Bajo</h5>
                        <p class="card-text">Gerbang menuju Taman Nasional Komodo, Labuan Bajo menawarkan keajaiban alam yang mempesona. Di sini, Anda dapat menemukan Komodo, pulau-pulau eksotis, serta keindahan bawah laut yang menakjubkan.</p>
                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="asset/img/Candi.jpg" class="card-img-top" alt="Candi Borobudur">
                    <div class="card-body">
                        <h5 class="card-title">Candi Borobudur</h5>
                        <p class="card-text">Candi Borobudur, salah satu keajaiban dunia, juga menawarkan berbagai objek wisata menarik di sekitarnya. Anda bisa mengunjungi Museum Borobudur, Museum Kapal Samudraraksa, dan Museum MURI untuk memperkaya pengalaman wisata Anda.</p>
                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section bg-primary text-white text-center p-5 mt-5">
        <h2>Siap untuk Memesan Petualangan Berikutnya?</h2>
        <p>Mulailah merencanakan perjalanan Anda bersama kami hari ini dan ciptakan kenangan yang tak terlupakan.</p>
        <a href="{{ route('home') }}" class="btn btn-light btn-lg">Rencanakan Perjalanan Anda</a>
    </div>
</div>
@endsection

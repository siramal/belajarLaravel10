@extends('layout.layout')

@section('content')
<div class="container mt-5">
    <!-- Welcome Section -->
    <div class="welcome-section bg-light p-5 text-center">
        <h1>Selamat Datang di Website Travel Kami</h1>
        <p>Kami menyediakan berbagai pilihan destinasi terbaik untuk petualangan impian Anda. Temukan keindahan dunia bersama kami.</p>
        <a href="{{ route('landing') }}" class="btn btn-primary btn-lg mt-3">Jelajahi Sekarang</a>
    </div>

    <!-- Why Choose Us Section -->
    <div class="why-choose-us mt-5">
        <h2 class="text-center mb-4">Mengapa Memilih Kami?</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="icon mb-3">
                    <img src="asset/img/pelayanan.jpg" alt="Pelayanan Terbaik" class="img-fluid" style="width: 160px;">
                </div>
                <h5>Pelayanan Terbaik</h5>
                <p>Kami berkomitmen memberikan pelayanan terbaik dan memuaskan untuk perjalanan Anda.</p>
            </div>
            <div class="col-md-4">
                <div class="icon mb-3">
                    <img src="asset/img/global.jpg" alt="Destinasi Global" class="img-fluid" style="width: 140px;">
                </div>
                <h5>Destinasi Global</h5>
                <p>Kami menyediakan paket perjalanan ke berbagai destinasi populer di seluruh dunia.</p>
            </div>
            <div class="col-md-4">
                <div class="icon mb-3">
                    <img src="asset/img/bestprice.jpg" alt="Harga Terjangkau" class="img-fluid" style="width: 80px;">
                </div>
                <h5>Harga Terjangkau</h5>
                <p>Jelajahi dunia tanpa khawatir dengan biaya, kami menawarkan harga yang kompetitif dan terjangkau.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials mt-5">
        <h2 class="text-center mb-4">Testimoni Pelanggan</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-3 mb-4">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"Perjalanan ke Bali bersama agen ini sungguh luar biasa! Semua diatur dengan sempurna dan saya sangat puas."</p>
                            <footer class="blockquote-footer">Didi, Jerman</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 mb-4">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"Liburan saya di Raja Ampat menjadi momen yang tak terlupakan, terima kasih atas pelayanan yang luar biasa!"</p>
                            <footer class="blockquote-footer">Febrian, Spanyol</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section bg-primary text-white text-center p-5 mt-5">
        <h2>Siap untuk Memulai Petualangan Anda?</h2>
        <p>Rencanakan liburan impian Anda sekarang dan temukan pengalaman yang tak terlupakan.</p>
        <a href="{{ route('landing') }}" class="btn btn-light btn-lg">Pesan Sekarang</a>
    </div>
</div>
@endsection

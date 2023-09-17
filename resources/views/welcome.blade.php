<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>
    <main>

        <section class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <img src="{{ asset('images/cartoon-date-picker.png') }}" class="img-fluid" loading="lazy">
                </div>
                <div class="col-12 col-sm-12 col-md-6 d-flex flex-column justify-content-center">
                    <h1 class="pb-2">Appsen <i class="bi bi-check-circle-fill text-primary" style="font-size: .7em"></i></h1>
                    <h3>Lacak Kehadiran Karyawan Anda dengan Mudah!</h3>
                    <p class="text-muted pb-2">Aplikasi absensi karyawan yang dapat membantu perusahaan Anda dalam melacak
                        dan mengelola absensi
                        karyawan dengan efisien.</p>
                    <div>
                        <a href="{{ route('register') }}" class="btn btn-primary">Getting Started</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary mb-5">
            <div class="container text-white text-center py-5">
                <h2>Hadirkan Keunggulan dengan <strong>Appsen</strong> untuk Bisnis Anda!</h2>
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <h3 class="text-center mb-5">Mengapa Memilih <strong>Appsen</strong>?</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3" >
                            <div class="row g-0">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('images/cartoon-annotation.png') }}" alt="Manajemen Absensi Karyawan"
                                        class="img-fluid" style="max-width: 70%">
                                </div>
                                <div class="col-md-8 card-body text-center text-lg-start">
                                    <h5 class="card-title">Manajemen Absensi Karyawan</h5>
                                    <p class="card-text">Memungkinkan perusahaan untuk melacak, merekam, dan mengelola kehadiran karyawan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="card mb-3" >
                            <div class="row g-0">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('images/cartoon-sign-in.png') }}" alt="Rekam Waktu Masuk dan Keluar"
                                        class="img-fluid" style="max-width: 70%">
                                </div>
                                <div class="col-md-8 card-body text-center text-lg-start">
                                    <h5 class="card-title">Rekam Waktu Masuk dan Keluar</h5>
                                    <p class="card-text">Memungkinkan perusahaan untuk melacak, merekam, dan mengelola kehadiran karyawan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3" >
                            <div class="row g-0">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('images/cartoon-growth.png') }}" alt="Laporan Absensi"
                                        class="img-fluid" style="max-width: 70%">
                                </div>
                                <div class="col-md-8 card-body text-center text-lg-start">
                                    <h5 class="card-title">Laporan Absensi</h5>
                                    <p class="card-text">Memungkinkan perusahaan untuk melacak, merekam, dan mengelola kehadiran karyawan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-secondary text-white">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Appsen</strong></p>
                        <p>Aplikasi absensi karyawan yang dapat membantu perusahaan Anda dalam melacak dan mengelola
                            absensi
                            karyawan dengan efisien.</p>
                        <p><strong>Hubungi kami:</strong></p>
                        <p>
                            <i class="bi bi-facebook me-2"></i>
                            <i class="bi bi-instagram me-2"></i>
                            <i class="bi bi-whatsapp"></i>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p><strong>Appsen</strong></p>
                        <ul>
                            <li><a href="#" class="text-white">Home</a></li>
                            <li><a href="#" class="text-white">Tentang Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p><strong>Produk</strong></p>
                        <ul>
                            <li>Manajemen Absensi Karyawan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>

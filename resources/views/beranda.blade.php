<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Beranda</title>
</head>
<body>
    <!-- Awal Header  -->
    <header class="p-3 mb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4 d-flex justify-content-start">
                <a href="/" class="">
                    <img src="/img/logo-intisoft.png" alt="" style="width: 50%;">
                </a>
            </div>
            <div class="col-8 d-flex justify-content-end">
                <ul class="nav mb-2 mb-md-0">
                    <li><a href="/" class="nav-link px-2 link-secondary fw-bold">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="portfolioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Portofolio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <li><a class="dropdown-item" href="/pengalamanprojek">Pengalaman Projek</a></li>
                            <li><a class="dropdown-item" href="/produk">Produk</a></li>
                        </ul>
                    </li>
                    <li><a href="/profil" class="nav-link px-2 link-dark fw-bold">Profil</a></li>
                    <li><a href="/kontak" class="nav-link px-2 link-dark fw-bold">Kontak</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
    <!-- Akhir Header -->

    <!-- Awal Konten -->
    <!-- Awal Section Banner -->
    <section class="banner-home" id="banner-home">
        <div class="banner-content">
            <img src="/img/banner-beranda.png" alt="..." width="100%">
            <div class="banner-text">
                <h1 style="color: #0231D0">Solusi Terdepan untuk</h1>
                <h1> Dunia Digital </h1>
                <p style="color: #2C9760">Mengembangkan software custom yang dirancang khusus untuk bisnis Anda</p>
            </div>
        </div>
    </section>
    <!-- Akhir Section Banner -->

    <!-- Awal Section Company -->
    <section class="company">
        <div class="company-content">
            <h3 class="company-title fw-bold">Perusahaan Kami</h3>
            <p>
                PT Intisoft Mitra Solusi (Intisoft) adalah perusahaan yang mengkhususkan bisnis dalam bidang implementasi dan pengembangan software aplikasi.
            </p>
        </div>
    </section>
    <!-- Akhir Section Company -->

    <!-- Awal Section Job -->
    <section class="job">
    <h3 class="job-title text-center fw-bold" style="margin-bottom: 40px;">Apa yang Kami Lakukan?</h3>
        <div class="job-content">
            <div class="job-card">
                <div class="card">
                    <img src="/img/card-1.png" alt="Logo 1">
                    <p>Membangun Program Aplikasi</p>
                </div>
                <div class="card">
                    <img src="/img/card-2.png" alt="Logo 2">
                    <p>Implementasi Program Aplikasi</p>
                </div>
                <div class="card">
                    <img src="/img/card-3.png" alt="Logo 3">
                    <p>Layanan Konsultan IT</p>
                </div>
                <div class="card">
                    <img src="/img/card-4.png" alt="Logo 4">
                    <p>Joint Development</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section Job -->

    <!-- Awal Section Kustomer -->
    <section class="customer">
        <h3 class="text-center fw-bold" style="margin-top: 40px;"> Pelanggan </h3>
        <div class="customer-card">
            <div class="card"><img src="/img/bank-riaukepri.svg" alt="Bank Riau Kepri"></div>
            <div class="card"><img src="/img/bank-btpn.svg" alt="Bank BTPN"></div>
            <div class="card"><img src="/img/mnc-bank.svg" alt="MNC Bank"></div>
            <div class="card"><img src="/img/bws.svg" alt="Bank Woori Saudara"></div>
            <div class="card"><img src="/img/bank-hik-parahyangan.svg" alt="BPR Syariah HIK Parahyangan"></div>
            <div class="card"><img src="/img/bank-hik-syariah.svg" alt="BPR Syariah HIK"></div>
            <div class="card"><img src="/img/bank-kalsel.svg" alt="Bank Kalsel"></div>
            <div class="card"><img src="/img/bank-dki.svg" alt="Bank DKI"></div>
            <div class="card"><img src="/img/bank-bumiputera.svg" alt="Bank Bumiputera"></div>
            <div class="card"><img src="/img/bank-bumiputera.svg" alt="Bank Bumiputera"></div>
            <!-- <div class="card"><img src="/img/askrindo.png" alt="Bank Riau Kepri"></div> -->
            <div class="card"><img src="/img/smf.svg" alt="Bank BTPN"></div>
            <div class="card"><img src="/img/bank-eksekutif-internasional.svg" alt="MNC Bank"></div>
            <div class="card"><img src="/img/bank-lampung.svg" alt="Bank Woori Saudara"></div>
        </div>
    </section>
    <!-- Akhir Section Kustomer -->


    <!-- Akhir Konten -->

    <!-- Awal Footer -->
    {{-- <footer class="container py-4">
        <div class="container">
            <div class="row justify-content-center border-bottom p-3">
                <div class="col-lg-4 text-start col-sm-12 col-md-4 mb-3">
                    <img src="/img/logo-intisoft.png" alt="Logo" width="110" height="60">
                    <p>Menara Rajawali Level 7-1 Kawasan Mega Kuningan Timur, Kecamatan Setiabudi Jakarta Selatan 12950</p>
                </div>

                <div class="col-lg-4 text-center col-sm-12 col-md-3 mb-2">
                    <h4>Kontak</h4>
                    <a href="https://wa.me/6287876876417" target="_blank" class="social-link">
                        <img src="/img/whatsapp.png" alt="" class="width: 50px; height: 20px;" >
                    </a>
                    <a href="https://www.twitter.com/akun_twitter" target="_blank" class="social-link">
                        <img src="/img/telpon.png" alt="">
                    </a>
                    <a href="mailto:info@intisoft-solusi.com" target="_blank" class="social-link">
                        <img src="/img/email.png" alt="">
                    </a>
                </div>
            </div> --}}

            {{-- <div class="row justify-content-center border-bottom p-3 mb-3 text-center p-3" style="background-color: #0231D0; width: 100;">
                <p class="fs-6 text-white">Copyright © 2024 by Intisoft Mitra Solusi</p>
            </div> --}}

            <footer>
                <div class="footer">
                    <p> Copyright © 2024 by Intisoft Mitra Solusi</p>
                </div>
            </footer>
        </div>
    </footer>
    <!-- Akhir Footer -->

</body>
</html>

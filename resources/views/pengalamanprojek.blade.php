<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const carouselContent = document.querySelector(".carousel-content");
        const cards = document.querySelectorAll(".card");
        const prevButton = document.querySelector(".carousel-control.prev");
        const nextButton = document.querySelector(".carousel-control.next");

        let currentIndex = 0;
        const cardsPerSlide = 4;
        const cardWidth = cards[0].offsetWidth + 20; // Card width + margin

        prevButton.addEventListener("click", function () {
            if (currentIndex > 0) {
                currentIndex = Math.max(currentIndex - cardsPerSlide, 0);
                updateCarousel();
            }
        });

        nextButton.addEventListener("click", function () {
            if (currentIndex < cards.length - cardsPerSlide) {
                currentIndex = Math.min(currentIndex + cardsPerSlide, cards.length - cardsPerSlide);
                updateCarousel();
            }
        });

        function updateCarousel() {
            const offset = -currentIndex * cardWidth;
            carouselContent.style.transform = `translateX(${offset}px)`;
        }
});

    </script>
    
    <title>Pengalaman Projek</title>
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
                            <li><a class="dropdown-item" href="/pengalamanProjek">Pengalaman Projek</a></li>
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
    
    <!-- Section Card Customer -->
    <section class="project-caraousel">
        <div class="carousel-project">
            <h3 class="fw-bold text-center" style="padding-top: 30px; color: black">Pengalaman Proyek</h3>
            <div class="carousel-content">
                <div class="card" style="width: 18rem;">
                    <img src="/img/bws.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2022</h5>
                            <p class="card-text">Pengembangan Aplikasi Manajemen Asuransi</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-dki.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2021</h5>
                            <p class="card-text">Pengembangan Aplikasi ELOS KPR untuk Program FLPP & DP 0 Rupiah</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/mnc-bank.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2019</h5>
                            <p class="card-text">Joint Financing Leasing System for Corporate</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-dki.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2018</h5>
                            <p class="card-text">Implementasi Aplikasi E-FORM KreditMultiguna dan Kredit KPR</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/smf.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2017</h5>
                            <p class="card-text">Implementasi Aplikasi System Administrasi Syariah</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/mnc-bank.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2016</h5>
                            <p class="card-text">Manage Service Aplikasi Joint Financing Mirroring System dan KPR</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-dki.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2015</h5>
                            <p class="card-text">Implementasi Aplikasi Loan Origination Kredit Multi Guna (KMG) dan Kredit Mikro</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/mnc-bank.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2014</h5>
                            <p class="card-text">Implementasi Aplikasi Joint Financing Mirroring System dan KPR</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-riaukepri.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2014</h5>
                            <p class="card-text">Implementasi Aplikasi Loan Origination System Konsumer Loan</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-hik-parahyangan.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2013</h5>
                            <p class="card-text">Implementasi Aplikasi Corebanking Syariah</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-dki.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2013</h5>
                            <p class="card-text">Upgrade Aplikasi Loan Origination</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-hik-parahyangan.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2012</h5>
                            <p class="card-text">Implementasi Aplikasi Loan Origination Syariah</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-hik-parahyangan.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2011</h5>
                            <p class="card-text">Implementasi Aplikasi Loan Origination Micro Finance Syariah</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-kalsel.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2012</h5>
                            <p class="card-text">Implementasi Aplikasi Internal Credit Risk Rating (ICRR)</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-dki.png" class="card-img-top" alt="..." > <!--askrindo -->
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2011</h5>
                            <p class="card-text">Sentralisasi database dan penyempurnaan Aplikasi Core Asuransi</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-kalsel.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2008</h5>
                            <p class="card-text">Implementasi Aplikasi Loan Origination, Collateral & Insurance, Collection, Loan Admin</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-dki.png" class="card-img-top" alt="..." > <!--dharmatama -->
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2002</h5>
                            <p class="card-text">Implementasi Aplikasi Multi Finance System</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-btpn.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">2003</h5>
                            <p class="card-text">Pengadaan Sewa Pesonal Computer IBM</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-eksekutif-internasional.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;"></h5>
                            <p class="card-text">Implementasi Aplikasi Corebanking</p>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/bank-bumiputera.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #0231D0;">200</h5>
                            <p class="card-text">Implementasi Aplikasi Pinjaman Konsumer</p>
                        </div>
                </div>
            </div>
            
            <div class="carousel-controls">
                <button class="carousel-control prev">&#10094;</button>
                <button class="carousel-control next">&#10095;</button>
            </div>
        </div>
    </section>

    <!-- Akhir Section Card Customer -->


    <!-- Section ATM & CRM Cardless -->
    <section class="atm-implement">
        <div class="container">
            <h3 class="title text-center fw-bold" style="padding-top: 30px;">Implementasi ATM & CRM Cardless</h3>
            <div class="atm-content">
                <div class="col-md-6 text-center">
                    <img src="implementasi-atm.png" alt="CRM Image" class="image">
                </div>
                <div class="atm-text">
                    <h5 class="sub-title">Klien Pengguna ATM dan CRM Cardless :</h4>
                    <ul class="client-list">
                        <li>BPRS HIK Parahyangan</li>
                        <li>Bank Jombang, Jombang</li>
                        <li>BPRS Bhakti Sumekar, Sumenep</li>
                        <li>BPR Delta Artha, Sidoarjo</li>
                        <li>Bank Jogja, Yogyakarta</li>
                        <li>BPRS Waykanan, Lampung</li>
                        <li>BPR Gunung Slamet, Cilacap</li>
                        <li>BPR Karang Malang, Sragen</li>
                        <li>BPR Majatama, Mojokerto</li>
                        <li>BPR Kota Kediri, Kediri</li>
                        <li>BPRS Bahari Berkesan, Ternate</li>
                        <li>BPR Kota Bogor, Bogor Jabar</li>
                        <li>BPR Werdhi Sedono Gianyar Bali</li>
                        <li>BPR Gunung Kidul, Yogyakarta</li>
                        <li>BPR Tulungagung, Tulungagung</li>
                        <li>BPR Kerta Raharja, Soreang Bandung</li>
                        <li>Bank BPR BAPAS 69, Magelang</li>
                        <li>BPR Azaz, Batulicin Banjarmasin</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section Implementasi ATM & CRM Cardless -->

    <!-- Section Konfigurasi ATM & CRM Cardless -->
    <section class="atm-configuration">
        <div class="container">
            <h3 class="title text-center fw-bold" style="padding-top: 30px;">Konfigurasi ATM & CRM Cardless</h3>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="features-title">Fitur tersedia:</h5>
                    <ul class="features-list fs-25">
                        <li>Cek Saldo</li>
                        <li>Transaksi Setor Tunai</li>
                        <li>Transaksi Tarik Tunai</li>
                        <li>Transaksi Tarik Cepat</li>
                        <li>Transaksi Pindah Buku</li>
                        <li>Ganti PIN</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="path-to-diagram-image.jpg" alt="Diagram Konfigurasi" class="diagram-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Section Implementasi ATM & CRM Cardless -->
     
    <!-- Akhir Konten -->
    
    <!-- Awal Footer -->
    <footer class="container py-4">
        <div class="container">
            <div class="row justify-content-center border-bottom p-3">
                <div class="col-lg-4 text-start col-sm-12 col-md-4 mb-3">
                    <img src="/img/logo-intisoft.png" alt="Logo" width="110" height="60">
                    <p>Menara Rajawali Level 7-1 Kawasan Mega Kuningan Timur, Kecamatan Setiabudi Jakarta Selatan 12950</p>
                </div>

                <div class="col-lg-4 text-center col-sm-12 col-md-3 mb-2">
                    <h4>Kontak</h4>
                    <a href="https://www.facebook.com/akun_facebook" target="_blank" class="social-link">
                        <img src="/img/whatsapp.png" alt="" class="width: 50px; height: 20px;" >
                    </a>
                    <a href="https://www.twitter.com/akun_twitter" target="_blank" class="social-link">
                        <img src="/img/telpon.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/akun_instagram" target="_blank" class="social-link">
                        <img src="/img/email.png" alt="">
                    </a>
                </div>

        
            </div>

            <div class="row justify-content-center border-bottom p-3 text-center p-3" style="background-color: #0231D0;">
                <p class="fs-6 text-white">Copyright © 2024 by Intisoft Mitra Solusi</p>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>
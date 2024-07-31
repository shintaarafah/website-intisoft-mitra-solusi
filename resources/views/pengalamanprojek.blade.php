<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/img/logo-intisoft.png" rel="icon" type="image/x-icon"/>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Pengalaman Projek</title>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const track = document.querySelector(".carousel-content");
        const cards = document.querySelectorAll(".card");
        const prevBtn = document.querySelector(".carousel-control.prev");
        const nextBtn = document.querySelector(".carousel-control.next");
      
        let index = 0;
        const cardWidth = cards[0].offsetWidth + 10; // Lebar card + margin-right
        const totalCards = cards.length;
      
        function updateCarousel() {
            const maxIndex = Math.ceil(track.scrollWidth / cardWidth) - 1;
            if (index > maxIndex) index = 0; // Kembali ke card pertama jika melewati card terakhir
            if (index < 0) index = maxIndex; // Kembali ke card terakhir jika sebelum card pertama
            track.style.transform = `translateX(-${index * cardWidth}px)`; 
        }
      
        prevBtn.addEventListener("click", function() {
          index = Math.max(index - 1, 0);
          updateCarousel();
        });
      
        nextBtn.addEventListener("click", function() {
          index = (index + 1) % totalCards; // Menggunakan modulo untuk kembali ke card pertama jika sudah di card terakhir
          updateCarousel();
        });
    });
    </script>
</head>
<body>
<!-- Awal Header  -->
<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid">
        <img src="/img/logo-intisoft.png" alt="PT Intisoft Mitra Solusi" style="width: 13%;">        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/" id="first-child">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Portofolio
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #fff;">
                <li><a class="dropdown-item" href="/pengalaman-projek">Pengalaman Projek</a></li>
                <li><a class="dropdown-item" href="/produk">Produk</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<!-- Akhir Header -->
    
<!-- Section Card Customer -->
<section class="project-caraousel">
    <div class="carousel-project">
        <h3 class="fw-bold text-center" style="padding-top: 50px; color: black">Pengalaman Proyek</h3>
        <div class="carousel-content">
            <div class="card" style="width: 18rem;">
                <img src="/img/bws.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2022</h5>
                        <p class="card-text">Pengembangan Aplikasi Manajemen Asuransi</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-dki.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2021</h5>
                        <p class="card-text">Pengembangan Aplikasi ELOS KPR untuk Program FLPP & DP 0 Rupiah</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/mnc-bank.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2019</h5>
                        <p class="card-text">Joint Financing Leasing System for Corporate</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-dki.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2018</h5>
                        <p class="card-text">Implementasi Aplikasi E-FORM Kredit Multiguna dan Kredit KPR</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/smf.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2017</h5>
                        <p class="card-text">Implementasi Aplikasi System Administrasi Syariah</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/mnc-bank.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2016</h5>
                        <p class="card-text">Manage Service Aplikasi Joint Financing Mirroring System dan KPR</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-dki.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2015</h5>
                        <p class="card-text">Implementasi Aplikasi Loan Origination Kredit Multi Guna (KMG) dan Kredit Mikro</p>
                       </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/mnc-bank.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2014</h5>
                        <p class="card-text">Implementasi Aplikasi Joint Financing Mirroring System dan KPR</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-riaukepri.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2014</h5>
                        <p class="card-text">Implementasi Aplikasi Loan Origination System Konsumer Loan</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-hik-parahyangan.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2013</h5>
                        <p class="card-text">Implementasi Aplikasi Corebanking Syariah</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-dki.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2013</h5>
                        <p class="card-text">Upgrade Aplikasi Loan Origination</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-hik-parahyangan.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2012</h5>
                        <p class="card-text">Implementasi Aplikasi Loan Origination Syariah</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-hik-syariah.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2011</h5>
                        <p class="card-text">Implementasi Aplikasi Loan Origination Micro Finance Syariah</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-kalsel.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2012</h5>
                        <p class="card-text">Implementasi Aplikasi Internal Credit Risk Rating (ICRR)</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-dki.svg" class="card-img-top" alt="..." > <!--askrindo -->
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2011</h5>
                        <p class="card-text">Sentralisasi database dan penyempurnaan Aplikasi Core Asuransi</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-kalsel.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2008</h5>
                        <p class="card-text">Implementasi Aplikasi Loan Origination, Collateral & Insurance, Collection, Loan Admin</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-dki.svg" class="card-img-top" alt="..." > <!--dharmatama -->
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2002</h5>
                        <p class="card-text">Implementasi Aplikasi Multi Finance System</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-btpn.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #0231D0;">2003</h5>
                         <p class="card-text">Pengadaan Sewa Pesonal Computer IBM</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-eksekutif-internasional.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <p class="card-text">Implementasi Aplikasi Corebanking</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/bank-bumiputera.svg" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <p class="card-text">Implementasi Aplikasi Pinjaman Konsumer</p>
                    </div>
            </div>
            </div>
            
            <div class="carousel-controls">
                <button class="carousel-control prev">&#10094;</button>
                <button class="carousel-control next">&#10095;</button>
            </div>
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
                <img src="/img/implementasi-atm.png" alt="CRM Image" class="image">
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

<!-- Section Konfigurasi ATM & CRM Cardless-->
<section class="atm-configuration">
    <div class="container">
        <h3 class="title text-center fw-bold" style="padding-top: 30px;">Konfigurasi ATM & CRM Cardless</h3>
        <div class="atm-content">
            <div class="atm-text">
                <h5 class="sub-title">Fitur tersedia: </h4>
                <ol class="fitur-list">
                    <li>Cek Saldo</li>
                    <li>Transaksi Setor Tunai</li>
                    <li>Transaksi Tarik Tunai</li>
                    <li>Transaksi Tarik Cepat</li>
                    <li>Transaksi Pindah Buku</li>
                    <li>Ganti PIN</li>
                </ol>
            </div>
            <div class="col-md-6 text-center">
                <img src="/img/konfigu-atm.png" alt="CRM Image" class="image">
            </div>
        </div>
    </div>
</section>
<!-- Akhir Section Implementasi ATM & CRM Cardless -->

    
<!-- Awal Footer -->
<footer>
    <div class="container text-center py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 text-start">
                <img src="/img/logo-intisoft.png" alt="Intisoft Logo" class="img-fluid mb-2" width="110px" height="100px">
                <p style="font-size: 14px">Menara Rajawali Level 7-1 Kawasan Mega Kuningan Timur, Kecamatan Setiabudi Jakarta Selatan 12950</p>
            </div>
            <div class="col-md-2">
                <h5>Kontak</h5>
                <div class="contact-icons">
                    <a href="https://wa.me/6287876876417"><img src="/img/whatsapp.png" alt="WhatsApp" class="width: 50px; height: 20px;"></a>
                    <a href="#"><img src="/img/telpon.png" alt="Phone" class="width: 50px; height: 20px;"></a>
                    <a href="mailto:info@intisoft-solusi.com"><img src="/img/email.png" alt="Email"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer text-center py-2">
        <p style="color: #FFFFFF;">Copyright © 2024 by Intisoft Mitra Solusi</p>
    </div>
</footer>
<!-- Akhir Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
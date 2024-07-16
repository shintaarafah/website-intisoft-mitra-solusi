<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- <style>
        .home{
            display: flex;
            align-items: center;
            min-height: 100vh;
        }
        .banner-content{
            position: relative;
            text-align: center;
            padding-top: -50px
            margin-top: 40px
        }
        .banner-content .img{
            height: 300px;
            display: block;
            object-fit: cover;
        }
    </style> -->

    <title>Beranda</title>
</head>
<body>
    <!-- Awal Header  -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="/img/logo-intisoft.png" alt="Logo" width="110" height="60">
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portofolio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#pengalamanprojek">Pengalaman Projek</a></li>
                        <li><a class="dropdown-item" href="#produk">Produk</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Profil</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Kontak</a></li>
            </ul>
        </header>
    </div>    
    <!-- Akhir Header -->
    
    <!-- Awal Konten -->
    <section class="home" id="home">
        <div class="banner-content">
            <img src="/img/banner-beranda.png" width="100%">
            <div class="banner-text">
                <h3>Solusi Terdepan untuk Dunia Digital</h3>
                <p>Mengembangkan software custom yang dirancang khusus untuk bisnis Anda</p>
            </div>
        </div>
    </section>

    <!-- Akhir Konten -->
    


























    <!-- Awal Footer -->
    <footer class="container py-4">
        <div class="container">
            <div class="row justify-content-center border-bottom p-3">
                <div class="col-lg-4 text-start col-sm-12 col-md-4 mb-3">
                    <img src="/img/logo-intisoft.png" alt="Logo" width="110" height="60">
                    <p>Menara Rajawali Level 7-1 Kawasan Mega Kuningan Timur, Kecamatan Setiabudi Jakarta Selatan 12950</p>
                </div>

                <div class="col-lg-4 text-center col-sm-12 col-md-4 mb-3">
                    <h3>Kontak Kami</h3>
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
                <p class="fs-6 text-white">Copyright © 2024 Kingston, Inc</p>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>
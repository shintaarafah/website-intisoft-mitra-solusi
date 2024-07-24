<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Produk</title>
</head>

<body>

     <!-- Awal Header  -->
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

<body>
    <!-- Awal Section Produk -->
    <section class="container-produk">
        <div class="produk-content">
            <div class="pc-tittle">
                <p>Produk List</p>
            </div>
            <div class="produk-card">
                <div class="card">
                    <img src="/img/dg-elos.jpg" alt="gambar elos digital">
                    <p>Elos-Digital Lending</p>
                </div>
                <div class="card">
                    <img src="/img/dg-eform.jpg" alt="gambar gital e-form">
                    <p class="text-center">E-form Digital</p>
                </div>
                <div class="card">
                    <img src="/img/mob-apps.jpg" alt="gambar gital e-form">
                    <p>Mobile Apps</p>
                </div>
                <div class="card">
                    <img src="/img/md-service.png" alt="gambar gital e-form">
                    <p>Middleware Service</p>
                </div>
                <div class="card">
                    <img src="/img/dc-koperasi.png" alt="gambar elos digital">
                    <p>Digital Core dan Koperasi</p>
                </div>
                <div class="card">
                    <img src="/img/atm-crm.png" alt="gambar elos digital">
                    <p>Digital Core dan Koperasi</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-bn">
        <div class="bn-produk">
            <img src="/img/bn-eform.png" alt="banner-eform">
        </div>
        <div class="bn-produk">
            <img src="/img/bn-elos.png" alt="banner-eform" style="padding: 5px">
        </div>
    </section>
    <!-- Akhir Section Produk -->

    {{--  Footer--}}
    {{-- <footer>


        <div class="footer">
            <p> Copyright © 2024 by Intisoft Mitra Solusi</p>
        </div>
    </footer> --}}


    <footer class="container">
        <div class="container">
            <div class="row justify-content-center border-bottom ">
                <div class="col-lg-4 text-start col-sm-12 col-md-4 mb-3">
                    <img src="/img/logo-intisoft.png" alt="Logo" width="110" height="60">
                    <p>Menara Rajawali Level 7-1 Kawasan Mega Kuningan Timur, Kecamatan Setiabudi Jakarta Selatan 12950</p>
                </div>

                <div class="col-lg-4 text-center col-sm-12 col-md-3 mb-2">
                    <h4>Kontak</h4>
                    <a href="https://www.facebook.com/akun_facebook" target="_blank" class="social-link" style="text-decoration: none;">
                        <img src="/img/whatsapp.png" alt="" class="width: 50px; height: 20px;" >
                    </a>
                    <a href="https://www.twitter.com/akun_twitter" target="_blank" class="social-link" style="text-decoration: none;">
                        <img src="/img/telpon.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/akun_instagram" target="_blank" class="social-link" style="text-decoration: none;">
                        <img src="/img/email.png" alt="">
                    </a>
                </div>
            </div>
            <div class="footer">
                <p> Copyright © 2024 by Intisoft Mitra Solusi</p>
            </div>
        </div>
    </footer>

</body>

</html>

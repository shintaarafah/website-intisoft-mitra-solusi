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

    <div class="container-produk">
        <h2> Produk List</h2>
        <hr>
    </div>

    <div class="card-produk">
        <div class="card">
            <img src="/img/dg-elos.jpg" >
            <div class="card-content">
                <p class="card-description">Elos - Digital Lending</p>
            </div>
        </div>
    </div>

    <div class="card-produk">
        <div class="card">
            <img src="/img/dg-eform.jpg" >
            <div class="card-content">
                <p class="card-description"> Elos – EFORM </p>
            </div>
        </div>
    </div>



</html>

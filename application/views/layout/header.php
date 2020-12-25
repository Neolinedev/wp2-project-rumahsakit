<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link nav-item" href="<?= base_url('dashboard'); ?>">Home</a>
                    <a class="nav-link nav-item" href="<?= base_url('pasien/index'); ?>">Daftar Pasien</a>
                    <a class="nav-link nav-item" href="<?= base_url('pasien/daftar_pasien'); ?>">Pendaftaran Pasien</a>
                    <a class="nav-link nav-item" href="#news-area">Berita & Acara</a>
                    <a class="nav-link nav-item" href="#">Jenis Penyakit</a>
                    <a class="btn btn-primary sign-in-button" href="<?= base_url('auth/logout'); ?>">Sign Out</a>
                </div>
            </div>
        </div>
    </nav>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Project UAS</title>
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
                    <a class="nav-link nav-item" href="#">Home</a>
                    <a class="nav-link nav-item" href="#">Cari Pasien</a>
                    <a class="nav-link nav-item" href="#">Pendaftaran Pasien</a>
                    <a class="nav-link nav-item" href="#news-area">News & Event</a>
                    <a class="nav-link nav-item" href="#main-services">Main Services</a>
                    <a class="btn btn-primary sign-in-button" href="<?= base_url('auth/logout'); ?>">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Image Slide -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Get work done <span>faster</span> <br> and <span>better</span> with us</h1>
        </div>
    </div>

    <!-- Search -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 search">
                <div class="row">
                    <div class="col-lg-12">
                        <span>Temukan Data Pasien</span>
                        <p>Cari data pasien untuk kemudahan dalam menjenguk.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group search_pasien">
                            <input type="text" class="form-control" id="inputnamapasien" placeholder="Masukkan Kode Pasien..">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <button class="tombol">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <div class="news-area" id="news-area">
        <div class="container">
            <div class="news-header">
                <span>News & Event</span>
                <h2>Latest News</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="news-post">
                        <div class="news-image">
                            <img src="img/2.jpg">
                        </div>
                        <div class="news-content">
                            <div class="news-date">
                                <ul>
                                    <li>01 Januari 2020</li>
                                </ul>
                            </div>
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, libero?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, perspiciatis nulla
                                distinctio quasi incidunt, corporis, totam culpa error repudiandae sint impedit
                                architecto
                                esse voluptatem dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-post">
                        <div class="news-image">
                            <img src="img/2.jpg">
                        </div>
                        <div class="news-content">
                            <div class="news-date">
                                <ul>
                                    <li>01 Januari 2020</li>
                                </ul>
                            </div>
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, libero?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Facilis, perspiciatis nulla
                                distinctio quasi incidunt, corporis, totam culpa error repudiandae sint impedit
                                architecto
                                esse voluptatem dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-post">
                        <div class="news-image">
                            <img src="img/3.jpg">
                        </div>
                        <div class="news-content">
                            <div class="news-date">
                                <ul>
                                    <li>01 Januari 2020</li>
                                </ul>
                            </div>
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, libero?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, perspiciatis nulla
                                distinctio quasi incidunt, corporis, totam culpa error repudiandae sint impedit
                                architecto
                                esse voluptatem dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="more-services m-auto">
                    <a href="#" class="more-services-button">More News & Events</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Service -->
    <div class="main-services" id="main-services">
        <div class="container">
            <div class="services-title">
                <span>Nama Penyakit</span>
                <h2>Daftar Penyakit</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icons">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3><a href="#">Serangan Jantung</a></h3>
                        <p>Serangan jantung adalah keadaan darurat medis. Serangan jantung biasanya terjadi ketika
                            gumpalan darah menghalangi aliran darah ke jantung. Tanpa darah, jaringan kehilangan oksigen
                            dan mati.
                            Gejala berupa rasa sesak atau nyeri di dada, leher, punggung, atau lengan, serta kelelahan,
                            limbung, detak jantung abnormal, dan kecemasan. Wanita lebih cenderung memiliki gejala
                            atipikal dibandingkan pria.</p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icons">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3><a href="#">Stroke</a></h3>
                        <p>
                            Kerusakan otak akibat gangguan suplai darah.
                            Stroke merupakan keadaan darurat medis.
                            Gejala stroke yaitu sulit berjalan, berbicara, dan memahami, serta kelumpuhan atau mati rasa
                            pada wajah, lengan, atau tungkai.
                            Penanganan dini dengan obat-obatan seperti tPA (penghancur gumpalan darah) dapat
                            meminimalkan kerusakan otak. Pengobatan lain berfokus dalam membatasi komplikasi dan
                            mencegah stroke lainnya.

                        </p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icons">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3><a href="#">Kanker Paru-Paru</a></h3>
                        <p>Kanker yang dimulai di paru-paru dan paling sering terjadi pada orang yang merokok.
                            Dua jenis utama kanker paru-paru adalah kanker paru-paru sel kecil dan kanker paru-paru
                            bukan sel kecil. Penyebab kanker paru-paru termasuk merokok, perokok pasif, paparan racun
                            tertentu, dan riwayat keluarga.
                            Gejala termasuk batuk (sering dengan darah), nyeri dada, napas berbunyi, dan penurunan berat
                            badan. Gejala ini sering tidak muncul sampai kanker sudah pada tahapan lanjut.
                            Penanganan bervariasi namun mungkin mencakup operasi, kemoterapi, terapi radiasi, terapi
                            obat yang ditargetkan, dan imunoterapi.</p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icons">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3><a href="#">Gagal Ginjal</a></h3>
                        <p>Penyakit ginjal yang telah berlangsung lama sehingga menyebabkan gagal ginjal.
                            Ginjal menyaring kotoran dan kelebihan cairan dari darah. Apabila ginjal tidak berfungsi,
                            kotoran menumpuk.
                            Gejala berkembang perlahan dan tidak spesifik untuk penyakit ini. Sebagian orang tidak
                            memiliki gejala sama sekali, dan didiagnosis lewat tes laboratorium.
                            Obat-obatan membantu mengelola gejalanya. Stadium lanjut dapat memerlukan penyaringan darah
                            dengan mesin (cuci darah) atau transplantasi.</p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icons">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3><a href="#">Covid-19</a></h3>
                        <p>Virus yang menyebabkan COVID-19 terutama ditransmisikan melalui droplet (percikan air liur)
                            yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau mengembuskan nafas. Droplet
                            ini terlalu berat dan tidak bisa bertahan di udara, sehingga dengan cepat jatuh dan menempel
                            pada lantai atau permukaan lainnya.
                            Anda dapat tertular saat menghirup udara yang mengandung virus jika Anda berada terlalu
                            dekat dengan orang yang sudah terinfeksi COVID-19. Anda juga dapat tertular jika menyentuh
                            permukaan benda yang terkontaminasi lalu menyentuh mata, hidung, atau mulut Anda.</p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icons">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3><a href="#">Tumor</a></h3>
                        <p>Tumor atau barah adalah sebutan untuk neoplasma atau lesi padat yang terbentuk akibat
                            pertumbuhan sel tubuh yang tidak semestinya, yang mirip dengan simtoma bengkak. Tumor
                            berasal dari kata tumere dalam bahasa latin yang berarti "bengkak". Pertumbuhannya dapat
                            digolongkan sebagai ganas atau jinak.</p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="more-services m-auto">
                        <a href="#" class="more-services-button">Lorem Ipsum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row footer-row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3>Lorem, ipsum</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus veritatis debitis
                            molestiae, perferendis architecto nulla pariatur beatae assumenda maiores amet, placeat hic
                            qui? Provident esse, ratione neque dolor perferendis eos?</p>
                        <ul class="social">
                            <li><a href="https://github.com/Neolinedev"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://www.facebook.com/Mrsaddam32"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/neolinedev/"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget pl-5">
                        <h3>Lorem, ipsum</h3>
                        <ul class="about-list">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit.</a>
                            </li>
                            <li>
                                <a href="#">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="#">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget pl-5">
                        <h3>Lorem, ipsum</h3>
                        <ul class="about-list">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit.</a>
                            </li>
                            <li>
                                <a href="#">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="#">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget pl-5">
                        <h3>Lorem, ipsum</h3>
                        <ul class="about-list">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit.</a>
                            </li>
                            <li>
                                <a href="#">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="#">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script> -->
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/616ee7f88f.js" crossorigin="anonymous"></script>

</body>

</html>
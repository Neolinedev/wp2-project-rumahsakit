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

    <title>Form Pendaftaran Pasien</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            display: block;
        }

        h1 {
            margin: 10px 20px;
            text-align: center;
            font-weight: 700;
            font-size: 2rem;
            color: #01677D;
        }

        .button-daftar {
            width: 120px;
            border: none !important;
            background-color: #01677D !important;
            color: white !important;
            padding: 0.5em 1em !important;
            transition: 0.2s ease !important;
        }
    </style>
</head>

<body>
    <h1>SILAHKAN MELAKUKAN PENDAFTARAN</h1>
    <div class="container">
        <?php
        $errors = $this->session->flashdata('errors');
        if (!empty($errors)) {
        ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach ($errors as $key => $error) {
                            echo "$error<br>";
                        } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="container container-daftar">
            <form method="POST" class="form-daftar-pasien" action="<?= base_url('pasien/proses_daftar'); ?>">
                <div class="form-group">
                    <label for="nm_pasien">Nama Pasien</label>
                    <input type="text" class="form-control" style="width: 50%;" id="nm_pasien" name="nm_pasien" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" style="width: 50%;" id="tgl_lahir" name="tgl_lahir" placeholder="">
                </div>
                <div class="form-group">
                    <label for="alm_pasien">Alamat Pasien</label>
                    <input type="text" class="form-control" style="width: 50%;" id="alm_pasien" name="alm_pasien" placeholder="">
                </div>
                <div class="form-group">
                    <label for="telp_pasien">Telepon Pasien</label>
                    <input type="text" class="form-control" style="width: 50%;" id="telp_pasien" name="telp_pasien" placeholder="">
                </div>
                <button class="btn btn-primary button-daftar" type="submit">Simpan</button>
                <a href="<?= base_url('dashboard'); ?>" class="btn btn-primary button-daftar">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
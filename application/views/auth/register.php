<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Register Page</title>
    <style>
        a {
            text-decoration: none;
        }

        .card {
            margin-top: 100px;
            border-radius: 20px;
            border: none;
            box-shadow: 4px 5px 12px 5px rgba(100, 100, 100, 0.30);
        }

        .register {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 200;
            font-size: 2rem;
        }

        .form-group input {
            height: 50px;
            margin: 4px;
            border-radius: 40px;
        }

        .tombol {
            background-color: #01677D;
            width: 80%;
            border-radius: 30px;
            transition: 0.2s ease;
        }

        .tombol:hover {
            background-color: transparent;
            text-transform: uppercase;
            color: #01677D;
            border: 1px solid #01677D;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <h4 class="text-center register">Silahkan Register</h4>
                                    <hr>
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
                                    <form method="POST" action="<?= base_url('auth/proses_register'); ?>" class="form-register">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Masukkan Konfirmasi Password">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary tombol">Register</button>
                                        </div>
                                        <a href="<?= base_url('auth/login'); ?>" class="d-flex justify-content-center mt-3">Sudah memiliki akun ? Silahkan login.</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
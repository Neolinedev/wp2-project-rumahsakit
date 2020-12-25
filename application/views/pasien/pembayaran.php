<style>
    input,
    select {
        width: 50% !important;
    }

    label {
        font-size: 1.2rem !important;
        font-weight: 500;
        display: inline-block !important;
    }

    .beli {
        width: 10% !important;
    }

    .button-bayar {
        margin-bottom: 40px;
        width: 120px;
        border: none !important;
        background-color: #01677D !important;
        color: white !important;
        padding: 0.5em 1em !important;
        transition: 0.2s ease !important;
    }
</style>
<div class="container">
    <form method="POST" action="<?= base_url('pasien/proses_bayar'); ?>">
        <div class="form-group">
            <label for="kd_pasien">Kode Pasien : <?= $pasien['kd_pasien']; ?></label>
        </div>
        <div class="form-group">
            <label for="nm_pasien">Nama Pasien : <?= $pasien['nm_pasien']; ?></label>
        </div>
        <div class="form-group">
            <label for="alm_pasien">Alamat Pasien : <?= $pasien['alm_pasien']; ?></label>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir : <?= $pasien['tgl_lahir']; ?></label>
        </div>
        <div class="form-group">
            <label for="telp_pasien">Nomor Telepon : <?= $pasien['telp_pasien']; ?></label>
        </div>
        <div class="form-group">
            <label for="tgl_daftar">Tanggal Daftar : <?= $pasien['tgl_daftar']; ?></label>
        </div>
        <div class="form-group">
            <label for="nm_obat">Nama Obat</label>
            <select class="form-control" name="nm_obat" id="nm_obat">
                <?php foreach ($obat as $obt) : ?>
                    <?php if ($obt == $obat['nm_obat']) : ?>
                        <option value="<?= $obt['nm_obat']; ?>" selected="<?= $obt['nm_obat']; ?>"></option>
                    <?php else : ?>
                        <option value="<?= $obt['nm_obat']; ?>"><?= $obt['nm_obat']; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $obt['harga']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jml_beli">Jumlah Beli</label>
            <input type="text" class="form-control beli" id="jml_beli" name="jml_beli">
        </div>
        <div class="form-group">
            <label for="tot_harga">Total Harga</label>
            <input type="text" class="form-control" onclick="total()" id="tot_harga" name="tot_harga" readonly style="cursor: pointer;">
        </div>
        <hr>
        <div class="form-group">
            <label for="jml_bayar">Jumlah Bayar</label>
            <input type="text" class="form-control" id="jml_bayar" name="jml_bayar" placeholder="Masukkan Jumlah Uang Anda...">
        </div>
        <button class="btn btn-primary button-bayar" type="submit">Bayar</button>
        <a href="<?= base_url('pasien/index'); ?>" class="btn btn-primary button-bayar">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" lang="javascript">
    function total() {
        var harga = document.getElementById('harga').value
        var jumBel = document.getElementById('jml_beli').value
        var totHarga = document.getElementById('tot_harga')
        var hitung = harga * jumBel
        totHarga.value = hitung
    }

    window.onload = total()
</script>
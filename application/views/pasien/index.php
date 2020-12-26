<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Pasien</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Telepon Pasien</th>
            <th scope="col">Alamat Pasien</th>
            <th scope="col">Tanggal Daftar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <?php foreach ($pasien as $psn) : ?>
        <tbody>
            <tr>
                <th scope="row"><?= ++$start; ?></th>
                <td><?= $psn['kd_pasien']; ?></td>
                <td><?= $psn['nm_pasien']; ?></td>
                <td><?= $psn['tgl_lahir']; ?></td>
                <td><?= $psn['telp_pasien']; ?></td>
                <td><?= $psn['alm_pasien']; ?></td>
                <td><?= $psn['tgl_daftar']; ?></td>
                <td>
                    <a href="<?= base_url(''); ?>pasien/pembayaran/<?= $psn['kd_pasien']; ?>" class="btn btn-info">Bayar</a>
                    <a href="<?= base_url(''); ?>pasien/hapus/<?= $psn['kd_pasien']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data pasien ini ?')">Hapus</a>
                </td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>
<?= $this->pagination->create_links(); ?>
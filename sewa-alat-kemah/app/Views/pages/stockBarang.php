<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 " style="margin-top:10rem"> Daftar Alat Kemah</h2>

<!-- tombol kembali ke halaman sebelumnya -->
<div class="container d-flex flex-column align-items-start">
    <a href="/Penyewaan/index" class="btn btn-primary my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

<!-- tabel berisi barangnya -->
<div class="container d-flex flex-column">
    <div class="table-responsive mt-5 ms-1 me-5">
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>

            </thead>

            <tbody>
                <?php

                $panggil = model('App\Models\MstBarangModel');

                $ambilData = $panggil->findAll();
                $nomerUrut = 1;
                ?>

                <!--baris tabel  -->
                <?php foreach ($ambilData as $data) : ?>
                    <tr>
                        <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                        <td><?= $nomerUrut++; ?></td>
                        <td><?= $data['kode_barang']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['harga']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>


<?= $this->endSection(); ?>
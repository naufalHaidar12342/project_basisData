<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 " style="margin-top:10rem">Sewa Alat Kemah</h2>

<!-- tombol kembali ke halaman sebelumnya -->
<div class="container d-flex flex-column align-items-start">
    <!-- menggunakan routes ketika user memasukkan slash -->
    <a href="/" class="btn btn-primary my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

<form action="" method="post">
    <?= csrf_field(); ?>
    <div class="container d-flex flex-column align-items-center">

        <div class="row justify-content-between ms-3 me-4 my-4 w-100">
            <!-- kolom kiri -->
            <div class="col-5">
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="nama-penyewa" class=" w-25 col-form-label">Nama Penyewa</label>
                    <input type="text" class="form-control ms-2" id="nama-penyewa" name="nama-penyewa" placeholder="Nama lengkap sobat">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="nomer-telpon" class="w-25 col-form-label">No. Telpon</label>
                    <input type="text" class="form-control ms-2" id="nomer-telpon" name="nomer-telpon" placeholder="Nomer dimulai dari 0. Contoh: 081222333">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="pilih-barang" class=" col-form-label w-25">Pilih Barang</label>
                    <select name="" id="pilih-barang" class="form-select ms-2">
                        <?php $panggil = model('App\Models\MstBarangModel');
                        $show = $panggil->findAll(); ?>
                        <option value="">Pilih barang...</option>
                        <?php foreach ($show as $data) : ?>
                            <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>

                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-12 d-flex flex-row mb-4">
                    <label for="jumlah" class=" col-form-label w-25">Jumlah</label>
                    <input type="text" class="form-control ms-2" id="jumlah" name="jumlah" placeholder="Jumlah barang yang ingin disewa">
                </div>

            </div>

            <!-- kolom kanan -->
            <div class="col-5">
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="alamat" class="w-25 col-form-label">Alamat</label>
                    <input type="text" class="form-control ms-2" id="alamat" name="alamat" placeholder="sertakan RT/RW jika ada">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="tanggal-pinjam" class="col-form-label w-25">Tanggal Pinjam</label>
                    <input type="date" class="form-control ms-2" id="tanggal-pinjam">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="tanggal-harus-kembali" class="col-form-label w-25">Tanggal Harus Kembali</label>
                    <input type="date" class="form-control ms-2" id="tanggal-harus-kembali" class="col-form-label w-25" disabled>
                </div>
            </div>
        </div>

        <!-- baris untuk tombol submit dan reset  -->
        <div class="row d-flex my-4">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mx-2" name="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Submit
                </button>

                <button type="reset" class="btn btn-warning mx-2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>
            </div>
        </div>

    </div>
</form>

<?= $this->endSection(); ?>
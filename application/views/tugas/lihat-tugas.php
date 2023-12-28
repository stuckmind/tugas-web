<div class="container pt-3">
    <h1><?= $tugas['judul']; ?></h1>
    <p><?= $tugas['deskripsi']; ?></p>
    <p>Batas Waktu: <?= $tugas['batas_waktu']; ?></p>
    <p>Kategori: <?= ucfirst($tugas['kategori']); ?></p>
    <p>Status: <?= ucfirst($tugas['status']); ?></p>

    <div class="mt-3">
        <a href="<?= base_url('daftar-tugas') ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
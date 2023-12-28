<div class="container pt-3">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="m-0">Daftar Tugas</h1>
        <a href="<?= base_url('tambah-tugas'); ?>" class="btn btn-success">Tambah Tugas</a>
    </div>
    <?php if ($this->session->flashdata('alert_type') && $this->session->flashdata('alert_message')) : ?>
        <div class="alert alert-<?= $this->session->flashdata('alert_type'); ?> alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('alert_message'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Tugas</th>
                <th>Deskripsi</th>
                <th>Batas Waktu</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tugas as $index => $data) : ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $data['judul']; ?></td>
                    <td><?= $data['deskripsi']; ?></td>
                    <td><?= date('d F Y', strtotime($data['batas_waktu'])); ?></td>
                    <td><?= str_replace('_', ' ', ucfirst($data['kategori'])); ?></td>
                    <td>
                        <span class="btn btn-<?php echo ($data['status'] == 'belum_selesai') ? 'danger' : (($data['status'] == 'sedang_dikerjakan') ? 'warning' : 'success'); ?>">
                            <?= str_replace('_', ' ', ucfirst($data['status'])); ?>
                        </span>
                    </td>
                    <td>
                        <a href="<?= base_url('lihat-tugas/' . $data['id']); ?>" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                        <a href="<?= base_url('edit-tugas/' . $data['id']); ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <a href="<?= base_url('hapus-tugas/' . $data['id']); ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="container pt-3">
    <h1>Edit Tugas</h1>
    <form class="mt-5" action="<?= base_url('TugasController/update/' . $tugas['id']); ?>" method="POST">
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul Tugas</label>
            <div class="col-sm-5">
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul Tugas" value="<?= $tugas['judul']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Tugas</label>
            <div class="col-sm-5">
                <textarea name="deskripsi" id="deskripsi" rows="2" class="form-control" placeholder="Masukkan Deskripsi"><?= $tugas['deskripsi']; ?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori Tugas</label>
            <div class="col-sm-5">
                <select name="kategori" id="kategori" class="form-control">
                    <option><?= str_replace('_', ' ', ucfirst($tugas['kategori'])); ?></option>
                    <option value="project">Project</option>
                    <option value="makalah">Makalah</option>
                    <option value="laporan">Laporan</option>
                    <option value="desain">Desain</option>
                    <option value="latihan_soal">Latihan Soal</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="batas_waktu" class="col-sm-2 col-form-label">Batas Waktu Tugas</label>
            <div class="col-sm-5">
                <input type="date" name="batas_waktu" class="form-control" id="batas_waktu" value="<?= $tugas['batas_waktu']; ?>">
            </div>
        </div>
        <div class="row mb-5">
            <label for="status" class="col-sm-2 col-form-label">Status Tugas</label>
            <div class="col-sm-5">
                <select name="status" id="status" class="form-control">
                    <option><?= str_replace('_', ' ', ucfirst($tugas['status'])); ?></option>
                    <option value="belum_selesai">Belum Selesai</option>
                    <option value="sedang_dikerjakan">Sedang Dikerjakan</option>
                    <option value="sudah_selesai">Sudah Selesai</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit Tugas</button>
        <button type="reset" class="btn btn-danger">Batal</button>
    </form>

</div>
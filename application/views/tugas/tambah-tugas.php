<div class="container pt-3">
    <h1>Tambah Tugas</h1>
    <form class="mt-5" action="<?= base_url('TugasController/store'); ?>" method="POST">
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul Tugas</label>
            <div class="col-sm-5">
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul Tugas">
            </div>
        </div>
        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Tugas</label>
            <div class="col-sm-5">
                <textarea name="deskripsi" id="deskripsi" rows="2" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori Tugas</label>
            <div class="col-sm-5">
                <select name="kategori" id="kategori" class="form-control">
                    <option>Pilih Kategori</option>
                    <option value="project">Project</option>
                    <option value="makalah">Makalah</option>
                    <option value="laporan">Laporan</option>
                    <option value="desain">Desain</option>
                    <option value="latihan_soal">Latihan Soal</option>
                </select>
            </div>
        </div>
        <div class="row mb-5">
            <label for="batas_waktu" class="col-sm-2 col-form-label">Batas Waktu Tugas</label>
            <div class="col-sm-5">
                <input type="date" name="batas_waktu" class="form-control" id="batas_waktu">
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Tambah Tugas</button>
        <button type="reset" class="btn btn-danger">Batal</button>
    </form>

</div>
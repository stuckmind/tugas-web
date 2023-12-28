<style>
    body {
        overflow: hidden;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <!-- Left half with full-width image -->
        <div class="col-md-6 p-0">
            <img src="<?= base_url('assets/image/background.jpg') ?>" alt="" srcset="" style="width: 100%; height:100%; object-fit:cover; opacity:60%; ">
        </div>

        <!-- Right half with centered text -->
        <div class="col-md-6 pt-5">
            <div class="pt-5">
                <div class="mt-5 pt-5">
                    <div class="text-center pt-5">
                        <h1 class="mb-4">Silahkan Cek Tugas <br> Anda Hari Ini</h1>
                        <a href="<?= base_url('daftar-tugas') ?>" class="btn btn-success pl-5 pr-5 pt-2 pb-2 radius">Lihat Tugas Anda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
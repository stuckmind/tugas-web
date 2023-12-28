<?php
include APPPATH . 'views/profil/profil.php';
?>
<nav class="navbar navbar-expand-lg bg-dark fixed" data-bs-theme="dark">
    <div class="container py-2">
        <a class="navbar-brand" href="<?= base_url() ?>">Manajemen Tugas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('daftar_tugas') ?>">Tugas</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle me-4" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bell"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">Tidak ada pemberitahuan</li>
                    </ul>
                </li>
                <li class="nav-item">
                    <button type="submit" class="nav-link" data-bs-toggle="modal" data-bs-target="#profilModal"><i class="fa-solid fa-user"></i></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
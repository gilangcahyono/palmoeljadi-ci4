<header class="bg-primary pt-2 pb-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <small>
          <i class="bi bi-geo-alt"></i> Jl. Brantas No. 3 Komplek TNI AL Juanda - Sidoarjo
        </small>
      </div>
      <div class="col-sm-6">
        <small class="float-end ms-2"><i class="bi bi-telephone"></i> 031-5944748</small>
        <small class="float-end"><i class="bi bi-envelope-at"></i> pansuh.laks.moeljadi@gmail.com</small>
      </div>

    </div>
  </div>
</header>

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary shadow-lg container px-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/img/logo.png') ?>" alt="Palmoeljadi" width="40" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fw-bold <?= $current_page == 'home' ? 'actived' : '' ?>" href="<?= base_url() ?>">BERANDA</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link fw-bold dropdown-toggle <?= $current_page == 'history' || $current_page == 'org-stucture' || $current_page == 'visi-misi' || $current_page == 'head-orphanage' || $current_page == 'job-function' || $current_page == 'facility' ? 'actived' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TENTANG KAMI
          </a>
          <ul class="dropdown-menu overflow-hidden">
            <li><a class="dropdown-item <?= $current_page == 'history' ? 'actived' : '' ?>" href="<?= base_url('history') ?>">SEJARAH</a></li>

            <li><a class="dropdown-item <?= $current_page == 'org-stucture' ? 'actived' : '' ?>" href="<?= base_url('organizational-structure') ?>">STRUKTUR ORGANISASI</a></li>

            <li><a class="dropdown-item <?= $current_page == 'visi-misi' ? 'actived' : '' ?>" href="<?= base_url('vision-and-mission') ?>">VISI & MISI</a></li>

            <li><a class="dropdown-item <?= $current_page == 'head-orphanage' ? 'actived' : '' ?>" href="<?= base_url('the-head-of-the-orphanage') ?>">PEJABAT KEPALA PANTI</a></li>

            <li><a class="dropdown-item head-of-the-orphanage <?= $current_page == 'job-function' ? 'actived' : '' ?>" href="<?= base_url('job-and-function') ?>">TUGAS & FUNGSI</a></li>

            <li><a class="dropdown-item <?= $current_page == 'facility' ? 'actived' : '' ?>" href="<?= base_url('facility') ?>">FASILITAS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold <?= str_contains(uri_string(), 'posts') ? 'actived' : '' ?>" href="<?= base_url('posts') ?>">BERITA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold <?= $current_page == 'contact' ? 'actived' : '' ?>" href="<?= base_url('contact') ?>">KONTAK KAMI</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="<?= base_url('donation') ?>" class="btn btn-warning donation">DONASI</a>
        </li>

      </ul>
    </div>
  </div>
</nav>